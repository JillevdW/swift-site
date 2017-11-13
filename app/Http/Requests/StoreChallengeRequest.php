<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreChallengeRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
            ],
            'introduction' => [
                'required',
                'string',
            ],
            'body' => [
                'required',
                'string',
            ],
            'solution' => [
                'nullable',
                'string',
            ],
        ];
    }

    public function messages(){
        return [
            // 'images.array' => 'Each house must have a total of 5 images.'
            'title.required' => 'You need to add a title.',
            'introduction.required' => 'You need to add an introduction.',
            'body.required' => 'You need to add a body.',
            'title.string' => 'Please only enter text.',
            'introduction.string' => 'Please only enter text.',
            'body.string' => 'Please only enter text.',
            'solution.string' => 'Please only enter text.',
        ];
    }
}
