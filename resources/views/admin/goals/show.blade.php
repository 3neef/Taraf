@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.goal.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.goals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.goal.fields.id') }}
                        </th>
                        <td>
                            {{ $goal->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.goal.fields.name_en') }}
                        </th>
                        <td>
                            {{ $goal->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.goal.fields.name_ar') }}
                        </th>
                        <td>
                            {{ $goal->name_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.goal.fields.description_en') }}
                        </th>
                        <td>
                            {!! $goal->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.goal.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $goal->description_ar !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.goals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection