<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
        return [
            'nome' => 'required|string|max:255|unique:projects,project_name',
            'immagine' => 'nullable|image|max:4096',
            'descrizione' => 'string|max:1000|nullable',
            'data_di_creazione' => 'required|date',
            'completato' => 'required|boolean',
            'riscosso' => 'required|boolean'
        ];
    }
}
