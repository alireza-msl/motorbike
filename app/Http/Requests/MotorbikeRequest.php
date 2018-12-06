<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorbikeRequest extends FormRequest
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
            'model' => 'required|max:250|min:3|unique:motorbikes,model,',
            'color' => 'required|max:250|min:2',
            'weight' => 'required|integer|min:2',
            'price' => 'required||integer|min:3',
            'image_path' => 'nullable|file|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'model.required' => 'لطفا مدل موتورسیکلت را وارد کنید',
            'model.max' => 'مدل نمی تواند بیشتر از 250 کاراکتر باشد',
            'model.min' => 'مدل نمی تواند کمتر از 3 کاراکتر باشد',
            'model.unique' => 'مدل تکراری! چنین مدلی در حال حاضر وجود دارد.',
            'color.required' => 'لطفا رنگ موتورسیکلت را وارد کنید',
            'color.max' => 'رنگ نمی تواند بیشتر از 250 کاراکتر باشد',
            'color.min' => 'رنگ نمی تواند کمتر از 3 کاراکتر باشد',
            'weight.unique' => 'لطفا وزن موتورسیکلت را وارد کنید.',
            'weight.integer' => 'وزن موتور باید عددی صحیح باشد',
            'weight.min' => 'وزن نمی تواند کمتر از 3 کاراکتر باشد',
            'price.unique' => 'لطفا قیمت موتورسیکلت را وارد کنید.',
            'price.integer' => 'قیمت موتور باید عددی صحیح باشد',
            'price.min' => 'قیمت نمی تواند کمتر از 3 کاراکتر باشد',
        ];
    }
}
