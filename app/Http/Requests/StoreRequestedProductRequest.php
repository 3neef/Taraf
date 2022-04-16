<?php

namespace App\Http\Requests;

use App\Models\RequestedProduct;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRequestedProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('requested_product_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'country' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'product' => [
                'string',
                'required',
            ],
        ];
    }
}
