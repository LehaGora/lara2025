<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Rules\Uppercase;

class StoreLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'email' => ['email', 'unique:users,email', new Uppercase],
            'email' => ['email'],
            // 'password' => ['required', 'unique:users,password', Password::min(8)],
            'password' => ['required', Password::min(8)],
            'checkbox' => 'accepted',
        ];
    }

    /**
     * URI, на который следует перенаправлять пользователей в случае сбоя проверки.
     *
     * @var string
     */
    // protected $redirect = '/dashboard';

    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array <string, string>
     */
    public function messages(): array
    {
        return [
            'email.email' => 'В поле :attribute необходимо ввести реальный :attribute адрес!',
            'email.unique' => 'Такой :attribute уже используется!',

            'password.required' => 'Поле :attribute должно быть заполнено!',
            'password.min' => 'Поле :attribute должно иметь минимум :min символов!',
            'password.unique' => 'Этот :attribute занят!',
            'password.letters' => ':attribute должен содержать хотя бы 1 символ!',

            'checkbox.accepted' => 'Вы должны принять условия!',
        ];
    }

    /**
     * Получить пользовательские имена атрибутов для формирования ошибок валидатора.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'email' => 'Адрес электронной почты',
            'password' => 'Пароль',
        ];
    }

}
