@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.requestedProduct.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.requested-products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.requestedProduct.fields.id') }}
                        </th>
                        <td>
                            {{ $requestedProduct->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestedProduct.fields.name') }}
                        </th>
                        <td>
                            {{ $requestedProduct->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestedProduct.fields.country') }}
                        </th>
                        <td>
                            {{ $requestedProduct->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestedProduct.fields.email') }}
                        </th>
                        <td>
                            {{ $requestedProduct->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestedProduct.fields.phone') }}
                        </th>
                        <td>
                            {{ $requestedProduct->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestedProduct.fields.product') }}
                        </th>
                        <td>
                            {{ $requestedProduct->product }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.requested-products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection