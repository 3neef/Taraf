<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVisionRequest;
use App\Http\Requests\StoreVisionRequest;
use App\Http\Requests\UpdateVisionRequest;
use App\Models\Vision;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class VisionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('vision_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visions = Vision::all();

        return view('admin.visions.index', compact('visions'));
    }

    public function create()
    {
        abort_if(Gate::denies('vision_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.visions.create');
    }

    public function store(StoreVisionRequest $request)
    {
        $vision = Vision::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $vision->id]);
        }

        return redirect()->route('admin.visions.index');
    }

    public function edit(Vision $vision)
    {
        abort_if(Gate::denies('vision_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.visions.edit', compact('vision'));
    }

    public function update(UpdateVisionRequest $request, Vision $vision)
    {
        $vision->update($request->all());

        return redirect()->route('admin.visions.index');
    }

    public function show(Vision $vision)
    {
        abort_if(Gate::denies('vision_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.visions.show', compact('vision'));
    }

    public function destroy(Vision $vision)
    {
        abort_if(Gate::denies('vision_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vision->delete();

        return back();
    }

    public function massDestroy(MassDestroyVisionRequest $request)
    {
        Vision::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('vision_create') && Gate::denies('vision_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Vision();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
