<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:users|max:255',
            'password' => 'min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Заполните email',
            'email.unique' => 'Есть такой email в БД',
            'password.min'  => 'Минимальный пароль 6',
        ];
    }

}
