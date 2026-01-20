<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('update', $this->route('review'));
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'deal_again' => $this->boolean('deal_again', false),
            'anonymous' => $this->boolean('anonymous', false),
        ]);
    }

    public function rules(): array
    {
        $review = $this->route('review');
        $minDate = $review->created_at->copy()->subYears(3)->format('Y-m-d');

        return [
            'deal_date' => [
                'required',
                'date',
                'before:now',
                'after_or_equal:'.$minDate,
            ],
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
}
