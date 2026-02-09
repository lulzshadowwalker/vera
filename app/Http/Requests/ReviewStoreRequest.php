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
            'anonymous' => $this->boolean('anonymous', false),
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
                'different:reviewed_supplier_id',
            ],
            'reviewed_supplier_id' => [
                'required',
                'integer',
                'exists:suppliers,id',
            ],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'deal_date' => ['required', 'date', 'before:now', 'after:-3 years'],
            'cost' => ['required', 'integer', 'min:1', 'max:10'],
            'accuracy' => ['required', 'integer', 'min:1', 'max:10'],
            'compliance' => ['required', 'integer', 'min:1', 'max:10'],
            'communication' => ['required', 'integer', 'min:1', 'max:10'],
            'quality' => ['required', 'integer', 'min:1', 'max:10'],
            'support' => ['required', 'integer', 'min:1', 'max:10'],
            'timeliness' => ['required', 'integer', 'min:1', 'max:10'],
            'deal_again' => ['boolean'],
            'anonymous' => ['boolean'],
            'comment' => [
                'nullable',
                'string',
                'max:160',
                function ($attribute, $value, $fail) {
                    if ($this->anonymous && ! empty($value)) {
                        $fail(
                            'Comments are not allowed for anonymous reviews.',
                        );
                    }
                },
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'deal_date.required' => 'Please provide the date of your last deal.',
            'deal_date.date' => 'Please provide a valid deal date.',
            'deal_date.before' => 'Invalid deal date. Please provide a date in the past.',
            'deal_date.after' => 'Deal date must be within the last 3 years.',
        ];
    }
}
