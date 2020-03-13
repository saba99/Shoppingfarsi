<?php

namespace App\Http\Requests\Frontend;

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
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique',
            'phone' => 'required|max:8',
            'national_code'=>'required|max:10',
            'password' => 'required|min:6',
            'address' => 'required',
            'post_code' => 'required|max:10|numeric',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'لطفا نام و نام خانوادگی را وارد کنید',
            'email.required' => 'لطفا ایمیل را وارد کنید',
            'email.email' => 'ایمیل شما معتبر نیست',
            'email.unique'=>'ایمیل وارد شده تکراری است',
            'phone.required' => 'لطفا شماره تلفن خود راوارد نمایید',
              'phone.max'=>'شماره تلفن باید حداکثر 8 کاراکتر باشد',
              'national_code.required'=>'لطفا کد ملی خود را وارد نمایید',
              'national_code.max'=>'کد ملی باید حداکثر 8 کاراکتر باشد ',
            'password.required' => 'لطفا رمز عبور را وارد کنید',
            'password.min' => 'رمز عبور شما باید بیش از ۶ کاراکتر باشد',
            'address.required' => 'لطفا آدرس را وارد نمایید',
            'post_code.required' => 'لطفا کد پستی را وارد نمایید',
            'post_code.max' => 'کد پستی حداکثر ده کاراکتر باید باشد',
            'post_code.numeric' => 'کد پستی باید عدد و خط تیره باشد ',

        ];
    }
}
