<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:256',
            'description' => 'required|max:1024',
            'thumb' => 'nullable|url|max:1024',
            'price' => 'required|max:32',
            'series' => 'required|max:256',
            'sale_date' => 'required|date',
            'type' => 'nullable|max:64',
            'artists' => 'required|max:512',
            'writers' => 'required|max:512',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Devi inserire il titolo',
            'title.max' => 'Il titolo è troppo lungo',
            'description.required' => 'Devi inserire la descrizione',
            'description.max' => 'La descrizione è troppo lunga',
            'thumb.url' => 'Devi inserire un URL',
            'thumb.max' => 'Questo URL è troppo lungo',
            'price.required' => 'Devi inserire il prezzo',
            'price.max' => 'Il prezzo è troppo grande',
            'series.required' => 'Devi inserire la serie',
            'series.max' => 'La serie è troppo lunga',
            'sale_date.required' => 'Devi inserire la data',
            'sale_date.date' => 'Il formato deve essere data',
            'type.max' => 'Il tipo è troppo lungo',
            'artists.required' => 'Devi inserire gli artisti',
            'artists.max' => 'Hai inserito troppi artisti',
            'writers.required' => 'Devi inserire gli scrittori',
            'writers.max' => 'Hai inserito troppi scrittori'
        ];
    }
}
