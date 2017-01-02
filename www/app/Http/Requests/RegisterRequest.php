<?php

namespace App\Http\Requests;

use App\test_user;
use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'user_id' => 'required|max:16',
            'name' => 'required|max:10',
            'email' => 'required|email|unique:test_user',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'credit_card' => 'required',
        ];
    }
}
