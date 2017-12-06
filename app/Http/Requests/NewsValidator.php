<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check(); // TODO: Convert to admin permission check later on in the project.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // General data
            'publish_date'  => 'required|date|date_format:Y-m-d',
            'is_published'  => 'required|max:1',
            'article_image' => 'required',

            // Required text data
            'title.nl'      => 'required|max:255',
            'categories.nl' => 'required',
            'message.nl'    => 'required',

            // Additional fields.
            'title.fr'  => 'max:255',
            'title.en'  => 'max:255',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function messages()
    {
        return [
            // Required data
            'title.nl.required'         => 'De titel is verplicht in het Nederlands.',
            'title.nl.max'              => "De titel kan max maximum 255 karakters bevatten.",
            'message.nl.required'       => 'Het inhoud van de nieuws post is verplicht.',
            'categories.nl.required'    => 'Je heb geen categorie opgegeven.',

            // Additional fields
            'title.fr.max'  => 'De titel kan max maximum 255 karakters bevatten.',
            'title.en.max'  => 'De titel kan max maximum 255 karakters bevatten.',
        ];
    }
}
