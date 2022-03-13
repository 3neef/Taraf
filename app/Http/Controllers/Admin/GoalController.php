<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyGoalRequest;
use App\Http\Requests\StoreGoalRequest;
use App\Http\Requests\UpdateGoalRequest;
use App\Models\Goal;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class GoalController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('goal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $goals = Goal::all();

        return view('admin.goals.index', compact('goals'));
    }

    public function create()
    {
        abort_if(Gate::denies('goal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.goals.create');
    }

    public function store(StoreGoalRequest $request)
    {
        $goal = Goal::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $goal->id]);
        }

        return redirect()->route('admin.goals.index');
    }

    public function edit(Goal $goal)
    {
        abort_if(Gate::denies('goal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.goals.edit', compact('goal'));
    }

    public function update(UpdateGoalRequest $request, Goal $goal)
    {
        $goal->update($request->all());

        return redirect()->route('admin.goals.index');
    }

    public function show(Goal $goal)
    {
        abort_if(Gate::denies('goal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.goals.show', compact('goal'));
    }

    public function destroy(Goal $goal)
    {
        abort_if(Gate::denies('goal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $goal->delete();

        return back();
    }

    public function massDestroy(MassDestroyGoalRequest $request)
    {
        Goal::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('goal_create') && Gate::denies('goal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Goal();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
