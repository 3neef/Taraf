@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.about.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.abouts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.about.fields.id') }}
                        </th>
                        <td>
                            {{ $about->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.about.fields.title_en') }}
                        </th>
                        <td>
                            {{ $about->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.about.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $about->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.about.fields.description_en') }}
                        </th>
                        <td>
                            {!! $about->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.about.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $about->description_ar !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.about.fields.images') }}
                        </th>
                        <td>
                            @foreach($about->images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.abouts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection