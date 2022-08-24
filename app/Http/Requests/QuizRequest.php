<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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
            'title'=>'required|max:255|min:5',
            'duration'=>'required|max:11|min:1|integer',
            'limit'=>'required|max:11|min:1|integer',
        ];
    }
    public function messages(){
        return [
            'title.required'=>'Trường title bắt buộc nhập',
            'title.max'=>'Trường title tối đa 255 kí tự',
            'title.min'=>'Trường title tối thiểu 5 kí tự',

            'duration.required'=>'Trường duration bắt buộc nhập',
            'duration.max'=>'Trường duration tối đa 255 kí tự',
            'duration.min'=>'Trường duration tối thiểu 5 kí tự',
            'duration.integer'=>'Trường duration phải là kiểu số',

            'limit.required'=>'Trường limit bắt buộc nhập',
            'limit.max'=>'Trường limit tối đa 255 kí tự',
            'limit.min'=>'Trường limit tối thiểu 5 kí tự',
            'limit.integer'=>'Trường limit phải là kiểu số'

        ];



    }
}
