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
            //
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:6|max:32',
            'password_confirmation' => 'required|same:password',
        ];
    }
    public function messages(){
          return [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng email',
            'email.unique' => 'Email đã tồn tại',

            'username.required' => 'Bạn chưa điền username',
            'username.min' => 'User name ít nhất là 3 kí tự',
            'username.max' => 'User name nhiều nhất 255 kí tự',

            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
            'password.max' => 'Mật khẩu nhiều nhất 32 kí tự',

            'password_confirmation.required' => 'Bạn chưa xác nhận lại password',
            'password_confirmation.same' => 'Mật khẩu nhập lại chưa đúng',
          ];
    }
}
