<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseFormRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response([
            "error" => [
                "code" => 422,
                "message" => "validation error",
                "errors" =>
                    $validator->errors()
            ]
        ], 422
        ));
    }
}
