<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'massagge'=>'required|min:5|max:50',
            'name' => 'required|min:5|max:15',
            'lastname' => 'required|min:5|max:50',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome non è corretto',
            'lastname.required' => 'Cognome non è corretto',
            'massagge.required' => 'Messaggio non è corretto',
            'email.required' => 'E-mail non è corretto'

        ];
    }
}
