<?php

namespace App\Http\Requests;

use App\Enums\EmailTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class SendEmailRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email_type' => [new Enum(EmailTypeEnum::class)],
            'user' => ['integer','exists:users,id']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
