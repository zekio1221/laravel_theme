<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|max:1000',
            'age' => 'required|integer|min:0|max:100',
            'gender' => 'required|integer|in:1,2,3',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前は必須項目です。',
            'name.max' => '名前は255文字以内で入力してください。',
            'email.required' => 'メールアドレスは必須項目です。',
            'email.email' => 'メールアドレスの形式で入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'content.required' => 'お問い合わせ内容は必須項目です。',
            'content.max' => 'お問い合わせ内容は1000文字以内で入力してください。',
            'age.required' => '年齢は必須項目です。',
            'age.integer' => '年齢は数字で入力してください。',
            'age.min' => '年齢は0以上で入力してください。',
            'age.max' => '年齢は100以下で入力してください。',
            'gender.required' => '性別は必須項目です。',
            'gender.integer' => '性別は数字で入力してください。',
            'gender.in' => '性別は1, 2, 3のいずれかで入力してください。',
        ];
    }
}
