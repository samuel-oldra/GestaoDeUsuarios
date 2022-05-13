<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';

        $rules = [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                // Verifica email único se for de ID diferente
                "unique:users,email,{$id},id",
            ],
            'password' => [
                'required',
                'min:6',
                'max:15',
            ],
            'image' => [
                'nullable',
                'image',
                'max:2048' // 2Mb
            ]
        ];

        // Não validar senha na edição se não informada
        if ($this->method() == 'PUT') {
            $rules['password'] = [
                'nullable',
                'min:6',
                'max:15',
            ];
        }

        return $rules;
    }
}
