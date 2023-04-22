<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentFormRequest extends FormRequest
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
            'comment' => 'min:4|max:2500',
            //
        ];
    }

    public function messages(){
        return [
            'comment.min' => '内容は4文字以上入力してください。',
            'comment.max' => '最大文字数は2500文字です。',
        ];
    }
}
