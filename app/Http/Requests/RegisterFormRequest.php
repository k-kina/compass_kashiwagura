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

     public function getValidatorInstance()
    {
        $old_year=$this->input('old_year');
        //dd($old_year);

        $old_month=$this->input('old_month');
        //dd($old_month);

        $old_day=$this->input('old_day');
        //dd($old_day);

        // 日付を作成(ex. 2020-1-20)
       $birth_day = $old_year . '-' . $old_month . '-' . $old_day;
       //dd($birth_day);

        // rules()に渡す値を追加でセット
        //     これで、この場で作った変数にもバリデーションを設定できるようになる
        $this->merge([
            'birth_day' => $birth_day,
        ]);
        //dd($birth_day);

        return parent::getValidatorInstance();
    }

    // バリデーションルール
    public function rules()
    {
        //ddd('test');
        return [
                'over_name' => 'required|string|max:10',
                'under_name' => 'required|string|max:10',
                'over_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:30',
                'under_name_kana' => 'required|string|regex:/^[ァ-ヶー]+$/u|max:30',
                'mail_address' => 'required|email|max:100',
                'sex' => 'required|',
                'birth_day' => 'required|string|date',
                'role' => 'required|',
                'password' => 'required|string|confirmed|between:8,30|',
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
        'birth_day' => '生年月日',
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
        'birth_day.required' => ':attributeを入力してください。',
        'role.required' => ':attributeを入力してください。',
        'password.required' => ':attributeを入力してください。',
        'password.between' => ':attributeは8文字以上30文字以下で入力してください。',
        ];
    }

}
