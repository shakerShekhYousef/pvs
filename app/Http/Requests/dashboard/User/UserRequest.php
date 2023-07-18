<?php

namespace App\Http\Requests\dashboard\User;

use App\Rules\DuplicateEmailRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return match ($this->method()) {
            'POST' => $this->store(),
            'PUT', 'PATCH' => $this->update(),
            'DELETE' => $this->destroy(),
        };
    }

    public function store()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'role_id' => ['required', Rule::exists('roles', 'id')],
        ];
    }

    public function update()
    {
        return [
            'name' => ['nullable', 'string'],
            'email' => ['nullable', 'email', new DuplicateEmailRule()],
            'password' => ['nullable', 'string', 'min:4', 'confirmed'],
            'role_id' => ['nullable', Rule::exists('roles', 'id')],
        ];
    }
}
