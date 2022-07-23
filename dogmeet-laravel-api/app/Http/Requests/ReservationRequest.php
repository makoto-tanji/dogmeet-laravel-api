<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// 以下追加
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() === 'api/auth/reservation';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'user_id' => 'required',
            'dog_id' => 'required',
            'reservation_date' => 'required|date_format:Y-m-d H:i|after:now + 1hours'
        ];
    }

    // 追加
    public function messages()
    {
        return [
            'user_id.required' => 'ユーザーIDがありません',
            'dog_id.required' => 'ドッグIDがありません',
            'reservation_date.required' => '日時を選択してください',
            'reservation_date.date_format' => '日時を選択してください',
            'reservation_date.after' => '現時刻から1時間後よりお選びください',
        ];
    }
}
