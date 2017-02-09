<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PasswordEditRequest extends Request
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
            'now_password' => 'required|min:8',
            'new_password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'now_password.required' => 'パスワードが入力されていません',
            'now_password.min' => 'パスワードは8文字以上で入力してください',
            'new_password.required' => '新しいパスワードが入力されていません',
            'new_password.min' => 'パスワードは8文字以上で入力してください',
            'new_password.confirmed' => '新しいパスワードと確認用パスワードが一致しません',
        ];
    }
}
