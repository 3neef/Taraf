@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.requestOrder.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.id') }}
                        </th>
                        <td>
                            {{ $requestOrder->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.fullname') }}
                        </th>
                        <td>
                            {{ $requestOrder->fullname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.product') }}
                        </th>
                        <td>
                            {{ $requestOrder->product }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.packaging_type') }}
                        </th>
                        <td>
                            {{ $requestOrder->packaging_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.quantity') }}
                        </th>
                        <td>
                            {{ $requestOrder->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.expected_price') }}
                        </th>
                        <td>
                            {{ $requestOrder->expected_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.product_country') }}
                        </th>
                        <td>
                            {{ $requestOrder->product_country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.payment_method') }}
                        </th>
                        <td>
                            {{ $requestOrder->payment_method }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.place_of_delivery') }}
                        </th>
                        <td>
                            {{ $requestOrder->place_of_delivery }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.requestOrder.fields.note') }}
                        </th>
                        <td>
                            {{ $requestOrder->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.request-orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection