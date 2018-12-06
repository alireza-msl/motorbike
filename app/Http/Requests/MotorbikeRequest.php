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

        ];
    }
}
