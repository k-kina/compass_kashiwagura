<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
    // バリデーションルール
    public function rules()
    {
        ddd('test');
        return [
                'over_name' => 'required|string|max:10',
                'under_name' => 'required|string|max:10',
                'over_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:30',
                'under_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:30',
                'mail_address' => 'required|email|max:100',
                'sex' => 'required|',
                // 'old_year' => new AllRequired('old_month','old_day'),
                'role' => 'required|',
                'password' => 'required|between:8,30|confirmed',
        ];
    }

    // バリデーション項目名定義
    public function attributes(){
        return[
        'over_name' => '姓',
        'under_name' => '名',
        'over_name_kana' => 'セイ',
        'under_name_kana' => 'メイ',
        'mail_address' => 'メールアドレス',
        'sex' => '性別',
        // 'old_year' => '生年月日',
        'role' => '役職',
        'password' => 'パスワード',
        ];
    }

    public function messages(){
        return[
        'over_name.required' => ':attributeを入力してください。',
        'over_name.max' => ':attributeは10文字以下で入力してください。',
        'under_name.required' => ':attributeを入力してください。',
        'under_name.max' => ':attributeは10文字以下で入力してください。',
        'over_name_kana.required' => ':attributeを入力してください。',
        'over_name_kana.max' => ':attributeは30文字以下で入力してください。',
        'over_name_kana.regex:/^[ァ-ヶー]+$' => ':attributeはカタカナで入力してください。',
        'under_name_kana.required' => ':attributeを入力してください。',
        'under_name_kana.max' => ':attributeは30文字以下で入力してください。',
        'under_name_kana.regex:/^[ァ-ヶー]+$' => ':attributeはカタカナで入力してください。',
        'mail_address.required' => ':attributeを入力してください。',
        'mail_address.max' => ':attributeは100文字以下で入力してください。',
        'sex.required' => ':attributeを入力してください。',
        // 'AllRequired::class' => ':attributeを入力してください。',
        'role.required' => ':attributeを入力してください。',
        'password.required' => ':attributeを入力してください。',
        'password.between' => ':attributeは8文字以上30文字以下で入力してください。',
        ];
    }

}
