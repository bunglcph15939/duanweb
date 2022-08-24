<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionsRequest extends FormRequest
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
            'attachment'=>'required|max:255|min:5',
            'tag'=>'required|max:255|min:5'
        ];
    }
    public function messages(){
            return [
                'title.required'=>'Trường title không được bỏ trống',
                'title.max'=>'Trường title tối đa 255 kí tự',
                'title.min'=>'Trường title tối thiểu 5 kí tự',
                'title.string'=>'Trường title bắt buộc là kiểu chuỗi',

                'attachment.required'=>'Trường attachment không được bỏ trống',
                'attachment.max'=>'Trường attachment tối đa 255 kí tự',
                'attachment.min'=>'Trường attachment tối thiểu 5 kí tự',
                'attachment.string'=>'Trường attachment bắt buộc là kiểu chuỗi',

                'tag.required'=>'Trường tag không được bỏ trống',
                'tag.max'=>'Trường tag tối đa 255 kí tự',
                'tag.min'=>'Trường tag tối thiểu 5 kí tự',
                'tag.string'=>'Trường tag bắt buộc là kiểu chuỗi',

            ];
    }
}
