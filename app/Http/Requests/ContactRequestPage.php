<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequestPage extends FormRequest
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
         'name' => 'required||min:2|max:80|regex:/^[^0-9]+$/',
         'email' => 'required|email',
         'phone' => 'required|regex:/^((\s*)?(\+)?)([- _():=+]?\d[- _():=+]?){10,12}(\s*)?$/'
        ];
    }

    public function messages(){
        return[
           'name.required' => "Не заполнено поле \"Имя\"",
           'name.min' => "Поле \"Имя\" должно содержать 2 или больше символов",
           'name.max' => "Поле \"Имя\" должно содержать не больше 80 символов",
           'name.regex' => "Поле \"Имя\" не должно содержать цифр",
           'email.required' => "Не заполнено поле \"email\"",
           'email.email' => "Указан не корректный email адрес",
           'phone.regex' => "Не верный формат номера телефона",
           'phone.required' => "Не заполнено поле \"Номер телефона\""
        ];
     }
}
