@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.mission.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.missions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.id') }}
                        </th>
                        <td>
                            {{ $mission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.name_en') }}
                        </th>
                        <td>
                            {{ $mission->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.name_ar') }}
                        </th>
                        <td>
                            {{ $mission->name_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.description_en') }}
                        </th>
                        <td>
                            {!! $mission->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mission.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $mission->description_ar !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.missions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection