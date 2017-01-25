<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class ApiEditRequest extends Request
{
    // リダイレクト先
    // protected $redirect = '/mypage/edit';
    // できなかった

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
            'user_id' => 'required|max:16|alpha_num',
            'user_name' => 'required|max:10',
            'email' => 'required|email',
            'credit_card_number' => 'required',
        ];
    }
}
