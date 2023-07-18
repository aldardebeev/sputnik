<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Orion\Http\Requests\Request;

class CreateUserRequest extends Request
{

    public function authorize(): bool
    {
        return true;
    }

    public function storeRules(): array
    {
        return [
            'username' => ['string', 'max:30'],
            'first_name' => ['string', 'max:30'],
            'last_name' => ['string', 'max:30'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:30'],
            'password' => ['required', 'confirmed', 'min:8', 'max:30'],
            'password_confirmation' =>  ['required', 'min:8', 'max:30'],
        ];
    }


}
