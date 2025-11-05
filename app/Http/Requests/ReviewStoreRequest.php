<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'deal_again' => $this->boolean('deal_again', false),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'reviewer_supplier_id' => [
                'required',
                'integer',
                'exists:suppliers,id',
            ],
            'reviewed_supplier_id' => [
                'required',
                'integer',
                'exists:suppliers,id',
            ],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'deal_date' => ['required', 'date'],
            'country' => ['nullable', 'string', 'max:2'],
            'cost' => ['required', 'integer', 'min:1', 'max:10'],
            'speed' => ['required', 'integer', 'min:1', 'max:10'],
            'communication' => ['required', 'integer', 'min:1', 'max:10'],
            'reliability' => ['required', 'integer', 'min:1', 'max:10'],
            'quality' => ['required', 'integer', 'min:1', 'max:10'],
            'support' => ['required', 'integer', 'min:1', 'max:10'],
            'flexibility' => ['required', 'integer', 'min:1', 'max:10'],
            'innovation' => ['required', 'integer', 'min:1', 'max:10'],
            'value' => ['required', 'integer', 'min:1', 'max:10'],
            'timeliness' => ['required', 'integer', 'min:1', 'max:10'],
            'deal_again' => ['boolean'],
            'comment' => ['nullable', 'string', 'max:160'],
        ];
    }
}
