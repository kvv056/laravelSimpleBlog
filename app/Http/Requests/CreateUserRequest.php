<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
			'nickname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
			'surname' => ['required', 'string', 'max:255'],
			'avatar' => ['image','mimes:jpeg,bmp,png'],
			'phone'=> ['required', 'regex:/(01)[0-9]{9}/'],
			'sex' => ['required', 'in:male,female'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'allowMailing' => [],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
