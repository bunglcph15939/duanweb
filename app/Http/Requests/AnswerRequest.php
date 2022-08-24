<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
            'content'=>'required|max:255|min:5',
            'is_correct'=>'|max:4|min:1|integer',
        ];
    }
    public function messages(){
        return [

            'content.required'=>'Trường content bắt buộc nhập',
            'content.max'=>'Trường content tối đa 255 kí tự',
            'content.min'=>'Trường content tối thiêu 5 kí tự',

            
            'is_correct.max'=>'Trường is_correct tối đa 4 kí tự',
            'is_correct.min'=>'Trường is_correct tối thiêu 1 kí tự',
            'is_correct.integer'=>'Trường is_correct bắt buộc là số'

        ];

    }
}
