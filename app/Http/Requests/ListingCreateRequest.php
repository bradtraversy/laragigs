<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ListingCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'       => ['required'],
            'company'     => ['required', Rule::unique('listings', 'company')],
            'location'    => ['required'],
            'website'     => ['required'],
            'email'       => ['required', 'email'],
            'tags'        => ['required'],
            'description' => ['required'],
        ];
    }
}
