<?php

namespace App\Http\Requests\Auth;

use App\Services\DomainNormalizationService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;

class LoginRequest extends FormRequest
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
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'exists:users,email',
            ],
            'password' => ['nullable', 'string'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'email' => $this->input('email')
                ? Str::lower($this->input('email'))
                : null,
        ]);
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            if ($validator->errors()->has('email')) {
                return;
            }

            $email = $this->input('email');
            $domainService = app(DomainNormalizationService::class);

            // Check if it's a blocked public email provider
            if ($domainService->isBlockedProvider($email)) {
                $validator->errors()->add(
                    'email',
                    'This email address is not associated with a work account.'
                );
            }
        });
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.exists' => 'No account found with this email address. Please register first.',
        ];
    }
}
