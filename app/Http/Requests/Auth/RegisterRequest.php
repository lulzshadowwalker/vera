<?php

namespace App\Http\Requests\Auth;

use App\Services\DomainNormalizationService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class RegisterRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email',
            ],
            'backup_email' => [
                'nullable',
                'string',
                'email',
                'max:255',
                'different:email',
            ],
            'country_id' => ['required', 'exists:countries,id'],
        ];
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
                $validator
                    ->errors()
                    ->add(
                        'email',
                        'Please use a work email address. Public email providers are not allowed.',
                    );
            }

            // Validate backup email if provided
            if ($this->filled('backup_email')) {
                $backupEmail = $this->input('backup_email');

                if ($domainService->isBlockedProvider($backupEmail)) {
                    $validator
                        ->errors()
                        ->add(
                            'backup_email',
                            'Please use a work email address. Public email providers are not allowed.',
                        );
                }
            }
        });
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'first_name' => 'first name',
            'last_name' => 'last name',
            'backup_email' => 'backup email',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.unique' => 'This email address is already registered.',
            'backup_email.different' => 'The backup email must be different from your primary email.',
            'country_id.required' => 'Please select a country.',
            'country_id.exists' => 'The selected country is invalid.',
        ];
    }
}
