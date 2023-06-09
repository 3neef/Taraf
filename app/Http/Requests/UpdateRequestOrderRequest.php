<?php

namespace App\Http\Requests;

use App\Models\RequestOrder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRequestOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('request_order_edit');
    }

    public function rules()
    {
        return [
            'fullname' => [
                'string',
                'required',
            ],
            'product' => [
                'string',
                'required',
            ],
            'packaging_type' => [
                'string',
                'nullable',
            ],
            'quantity' => [
                'string',
                'required',
            ],
            'expected_price' => [
                'string',
                'required',
            ],
            'product_country' => [
                'string',
                'nullable',
            ],
            'payment_method' => [
                'string',
                'required',
            ],
            'place_of_delivery' => [
                'string',
                'required',
            ],
            'note' => [
                'string',
                'nullable',
            ],
        ];
    }
}
