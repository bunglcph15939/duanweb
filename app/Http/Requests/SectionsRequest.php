<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionsRequest extends FormRequest
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
            'title'=>'required|max:255|min:5'
        ];
    }
    public function messages(){
        return [
            'title.required'=>'Trường title không được để trống',
            'title.max'=>'Trường title tối đa là 255 kí tự',
            'title.min'=>'Trường title tối thiểu là 5 kí tự',
        ];
    }
}
