<?php

namespace App\Http\Requests;

use App\Models\About;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_edit');
    }

    public function rules()
    {
        return [
            'title_en' => [
                'string',
                'nullable',
            ],
            'title_ar' => [
                'string',
                'nullable',
            ],
            'images' => [
                'array',
            ],
        ];
    }
}
