<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProfileRequest extends FormRequest
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
        $id = Auth::id();
        $locale = strtolower(request('locale'));
        $ruleKana = '|regex:/^[a-zA-Z ]+$/';
        if ($locale === 'ja' || $locale === 'jp') {
            $ruleKana = '|katakana_word';
        }

        return [
            'firstname_kanji' => 'required|kanji_word|max:50',
            'lastname_kanji' => 'required|kanji_word|max:50',
            'firstname_katakana' => 'required|max:50'.$ruleKana,
            'lastname_katakana' => 'required|max:50'.$ruleKana,
            'email' => 'required|string|email|max:100|unique:users,email,'.$id,
            'retypeEmail' => 'required|string|email|max:100|same:email',
            'sex' => 'required|in:0,1',
            'country_id' => 'required|integer|not_in:0',
            'province_id' => 'required|integer|not_in:0',
            'yearSelected' => 'required|integer|not_in:0',
            'monthSelected'=> 'required|integer|not_in:0',
            'daySelected' => 'required|integer|not_in:0',
        ];
    }
}
