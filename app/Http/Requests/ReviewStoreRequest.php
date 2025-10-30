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

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'reviewer_supplier_id' => ['required', 'integer', 'exists:suppliers,id'],
            'reviewed_supplier_id' => ['required', 'integer', 'exists:suppliers,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'deal_date' => ['required', 'date'],
            'country' => ['nullable', 'string', 'max:2'],
            'cost' => ['required', 'string'],
            'speed' => ['required', 'string'],
            'communication' => ['required', 'string'],
            'reliability' => ['required', 'string'],
            'quality' => ['required', 'string'],
            'support' => ['required', 'string'],
            'flexibility' => ['required', 'string'],
            'innovation' => ['required', 'string'],
            'value' => ['required', 'string'],
            'timeliness' => ['required', 'string'],
            'deal_again' => ['required'],
            'comment' => ['nullable', 'string', 'max:160'],
            'anonymous' => ['required'],
            'published' => ['required'],
        ];
    }
}
