<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PointSystemStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'pole_position' => ['required'],
            'fastest_lap' => ['required'],
            'first' => ['required'],
            'second' => ['required'],
            'third' => ['required'],
            'fourth' => ['required'],
            'fifth' => ['required'],
            'sixth' => ['required'],
            'seventh' => ['required'],
            'eighth' => ['required'],
            'ninth' => ['required'],
            'tenth' => ['required'],
            'eleventh' => ['required'],
            'twelvth' => ['required'],
            'thirteenth' => ['required'],
            'fourteenth' => ['required'],
            'fifteenth' => ['required'],
            'leader_distance' => ['required'],
        ];
    }
}
