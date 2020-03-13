<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|min:10',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'لطفا عنوان دسته بندی را وارد کنید',
            'name.min' => 'عنوان دسته بندی شما باید بیش از 10 کاراکتر باشد',
            'meta_description.required' => 'لطفا توضیحات دسته بندی را وارد کنید',
            'meta_title.required'=>'وارد کردن عنوان دسته بندی ضروری است ',
            'meta_keywords.required'=>'وارد کردن کلمه کلیدی ضروری است '
        ];
            
    }
}
