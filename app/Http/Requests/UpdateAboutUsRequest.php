<?php

namespace App\Http\Requests;

use App\Models\AboutUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_edit');
    }

    public function rules()
    {
        return [
            'title_en' => [
                'string',
                'required',
            ],
            'title_ar' => [
                'string',
                'required',
            ],
            'description_en' => [
                'required',
            ],
            'description_ar' => [
                'required',
            ],
            'image' => [
                'array',
            ],
        ];
    }
}
