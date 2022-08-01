<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email' => 'required|email|max:255|min:6',
            'password' => 'required|min:6|max:20'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không đúng định dạng!',
            'email.max' => 'Email không được vượt quá 255 kí tự!',
            'email.min' => 'Email phải tối thiểu 6 kí tự!',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu phải tối thiểu 6 kí tự!',
            'password.max' => 'Mật khẩu không được vượt quá 20 kí tự!',
        ];
    }
}
