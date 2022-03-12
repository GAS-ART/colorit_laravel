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
         'name' => 'required||min:2|max:80|regex:/^[^0-9]+$/',
         'service' => 'required',
         'email' => 'required|email',
         'filename' => 'max:25000',
         'phone' => 'required|regex:/^((\s*)?(\+)?)([- _():=+]?\d[- _():=+]?){10,12}(\s*)?$/'
        ];
    }

    public function messages(){
        return[
           'name.required' => "Не заполнено поле \"Имя\"",
           'name.min' => "Поле \"Имя\" должно содержать 2 или больше символов",
           'name.max' => "Поле \"Имя\" повинно мати не більше 80 символів",
           'name.regex' => "Поле \"Имя\" не должно содержать цифр",
           'service.required' => "Пожалуйста выберете тип услуги из списка",
           'email.required' => "Не заполнено поле \"email\"",
           'email.email' => "Указан не корректный email адрес",
           'filename.max' => "Максимально допустимый размер файла 25 мегабайт",
           'phone.regex' => "Не верный формат номера телефона",
           'phone.required' => "Не заполнено поле \"Номер телефона\""
        ];
     }
}
