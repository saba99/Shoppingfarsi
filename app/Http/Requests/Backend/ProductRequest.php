<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'required|min:20',
            'slug' => 'unique:products',
            'sku' => 'required|alpha_num',
            'price' => 'required|numeric',
            'short_description' => 'required',
            //'discount' => 'required|numeric',
            
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان کالا را وارد کنید',
            'title.min' => 'عنوان کالا شما باید بیش از 10 کاراکتر باشد',
            'slug.unique' => 'این نام مستعار قبلا ثبت شده است',
            'sku.required'=>'وارد کردن شناسه ضروری است ',
            'sku.alpha_num'=>'مقدار شناسه باید عددی باشد',
            'short_description.required' => 'لطفا توضیحات کالا را وارد کنید',
            'price.required' => 'لطفا قیمت کالا را مشخص کنید',
            'price.numeric' => 'قیمت باید به صورت عددی باشد',
            

            'short_description.required' => 'لطفا توضیحات کالا را وارد کنید',
            'status.required'=>'لطفا وضعیت کالا را مشخص کنید '
        ];
    }
}
