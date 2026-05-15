<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:60|unique:users,email',
            'password' => 'required|min:6|max:60|confirmed',
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'name.string' => 'O nome deve ser um texto válido',

            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email é inválido',
            'email.unique' => 'O email já está cadastrado',

            'password.required' => 'A senha é obrigatória',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres',
            'password.max' => 'A senha deve ter no máximo 60 caracteres',
            'password.confirmed' => 'As senhas não conferem',
        ];
    }

    public function attributes(): array {
        return [
            'name' => 'nome',
            'email' => 'email',
            'password' => 'senha',
        ];
    }
}
