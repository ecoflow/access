<?php

namespace Ecoflow\Access\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'sometimes|nullable|min:3|max:16',
            'email' => 'sometimes|nullable|email|unique:users,email',
            'role_id' => 'sometimes|nullable',
            'password' => 'sometimes|nullable|min:8|confirmed',
        ];
    }
}
