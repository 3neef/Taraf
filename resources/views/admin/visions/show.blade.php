@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.vision.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.vision.fields.id') }}
                        </th>
                        <td>
                            {{ $vision->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vision.fields.name_en') }}
                        </th>
                        <td>
                            {{ $vision->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vision.fields.name_ar') }}
                        </th>
                        <td>
                            {{ $vision->name_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vision.fields.description_en') }}
                        </th>
                        <td>
                            {!! $vision->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vision.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $vision->description_ar !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.visions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection