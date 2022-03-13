<?php

namespace App\Http\Requests;

use App\Models\SocialMediaLink;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSocialMediaLinkRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('social_media_link_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'url' => [
                'required',
            ],
        ];
    }
}
