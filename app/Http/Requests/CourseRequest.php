<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title'=>'required|max:255|min:5|alpha',
            'content'=>'required|max:255|min:5|alpha',
            'thumbnail'=>'required|max:255|min:5|alpha',
        ];
    }
    public function messages(){
        return [
                'title.required'=>'Trường title không được bỏ trống',
                'title.max'=>'Trường title tối đa 255 kí tự',
                'title.min'=>'Trường title tối thiểu 5 kí tự',
                'title.alpha'=>'Trường title bắt buộc là chữ',

                'content.required'=>'Trường content không được bỏ trống',
                'content.max'=>'Trường content tối đa 255 kí tự',
                'content.min'=>'Trường content tối thiểu 5 kí tự',
                'content.alpha'=>'Trường content bắt buộc là chữ',

                'thumbnail.required'=>'Trường thumbnail không được bỏ trống',
                'thumbnail.max'=>'Trường thumbnail tối đa 255 kí tự',
                'thumbnail.min'=>'Trường thumbnail tối thiểu 5 kí tự',
                'thumbnail.alpha'=>'Trường thumbnail bắt buộc là chữ',

        ];
    }
}
