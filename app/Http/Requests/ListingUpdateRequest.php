<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'       => ['required'],
            'company'     => ['required'],
            'location'    => ['required'],
            'website'     => ['required'],
            'email'       => ['required', 'email'],
            'tags'        => ['required'],
            'description' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        $listing = $this->route->parameter('listing');

        return $listing->user_id !== auth()->id();
    }
}
