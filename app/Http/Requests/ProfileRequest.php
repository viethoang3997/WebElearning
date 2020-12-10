<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min: 5|max: 50',
            'email' => 'required|email|unique:users,email, '. auth()->user()->id . ',id',
            'birth_day' => 'date',
            'phone' => 'required|numeric|max:15',
            'address' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif'
        ];
    }
}
