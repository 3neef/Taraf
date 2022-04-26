@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.requestOrder.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.request-orders.update", [$requestOrder->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="fullname">{{ trans('cruds.requestOrder.fields.fullname') }}</label>
                <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text" name="fullname" id="fullname" value="{{ old('fullname', $requestOrder->fullname) }}" required>
                @if($errors->has('fullname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.fullname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="product">{{ trans('cruds.requestOrder.fields.product') }}</label>
                <input class="form-control {{ $errors->has('product') ? 'is-invalid' : '' }}" type="text" name="product" id="product" value="{{ old('product', $requestOrder->product) }}" required>
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="packaging_type">{{ trans('cruds.requestOrder.fields.packaging_type') }}</label>
                <input class="form-control {{ $errors->has('packaging_type') ? 'is-invalid' : '' }}" type="text" name="packaging_type" id="packaging_type" value="{{ old('packaging_type', $requestOrder->packaging_type) }}">
                @if($errors->has('packaging_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('packaging_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.packaging_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.requestOrder.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="text" name="quantity" id="quantity" value="{{ old('quantity', $requestOrder->quantity) }}" required>
                @if($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="expected_price">{{ trans('cruds.requestOrder.fields.expected_price') }}</label>
                <input class="form-control {{ $errors->has('expected_price') ? 'is-invalid' : '' }}" type="text" name="expected_price" id="expected_price" value="{{ old('expected_price', $requestOrder->expected_price) }}" required>
                @if($errors->has('expected_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expected_price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.expected_price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_country">{{ trans('cruds.requestOrder.fields.product_country') }}</label>
                <input class="form-control {{ $errors->has('product_country') ? 'is-invalid' : '' }}" type="text" name="product_country" id="product_country" value="{{ old('product_country', $requestOrder->product_country) }}">
                @if($errors->has('product_country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.product_country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_method">{{ trans('cruds.requestOrder.fields.payment_method') }}</label>
                <input class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" type="text" name="payment_method" id="payment_method" value="{{ old('payment_method', $requestOrder->payment_method) }}" required>
                @if($errors->has('payment_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="place_of_delivery">{{ trans('cruds.requestOrder.fields.place_of_delivery') }}</label>
                <input class="form-control {{ $errors->has('place_of_delivery') ? 'is-invalid' : '' }}" type="text" name="place_of_delivery" id="place_of_delivery" value="{{ old('place_of_delivery', $requestOrder->place_of_delivery) }}" required>
                @if($errors->has('place_of_delivery'))
                    <div class="invalid-feedback">
                        {{ $errors->first('place_of_delivery') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.place_of_delivery_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.requestOrder.fields.note') }}</label>
                <input class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" type="text" name="note" id="note" value="{{ old('note', $requestOrder->note) }}">
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.requestOrder.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection