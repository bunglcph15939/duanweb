<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessionRequest extends FormRequest
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
            'content'=>'required|max:255|min:5|alpha',
            'video_path'=>'mimes:mp4,mov,ogg | max:20000',
            'video_type'=>'required|max:255|min:5|string',
            'attachment'=>'required|max:255|min:5|string',

        ];
    }
    public function messages(){
        return [
            'content.required'=>'Trường content không được bỏ trống',
            'content.max'=>'Trường content tối đa 255 kí tự',
            'content.min'=>'Trường content tối thiểu 5 kí tự',
            'content.alpha'=>'Trường content bắt buộc là chữ',

            'video_path.mimes'=>'Định dạng video phải thuộc mp4,mov,ogg',
            'video_path.max'=>'Video tối đa cho phép là 20mb',

            'video_type.required'=>'Trường video_type không được bỏ trống',
            'video_type.max'=>'Trường video_type tối đa 255 kí tự',
            'video_type.min'=>'Trường video_type tối thiểu 5 kí tự',
            'video_type.alpha'=>'Trường video_type bắt buộc là chữ',

        ];
    }
}
