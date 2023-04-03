<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PruebasFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            // 'title' => 'required|max:255|unique:pruebas,title,' . $this->$id,
            // 'title' => 'required|max:255|unique:pruebas,title,' . $id,
            'title' => 'required|unique:pruebas|max:255',
            'expert' => 'required',
            'body' => 'required',
            'image' => ['mimes:jpg,jpeg,png', 'max:5048'],
            'min_to_read' => 'min:0|max:60'
        ];

        if (in_array($this->method(), ['POST'])) {
            $rules['image'] = ['required','mimes:jpg,jpeg,png', 'max:5048'];
        }

        // if(in_array($this->method(), ['PATCH'])) {
        //     $rules['title'] = ['required|max:255|unique:pruebas,title,' .$id];
        // }

        return $rules; 
    }
}
