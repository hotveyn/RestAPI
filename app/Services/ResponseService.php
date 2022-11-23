<?php

namespace App\Services;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class ResponseService
{
    public static function error(string $message, int $code, mixed $errors = []): Response|Application|ResponseFactory
    {
        $body = [
            'code' => $code,
            'message' => $message
        ];

        if (count($errors)) {
            $body = array_merge($body, [
                "errors" => $errors
            ]);
        }

        return response(["error" => $body], $code);
    }

    public static function success(mixed $data, int $code = 200): Response|Application|ResponseFactory
    {
        return response([
            'data' => $data,
        ], $code);
    }

    public static function created(): Response|Application|ResponseFactory
    {
        return response(null, 201);
    }

    public static function noContent(): Response|Application|ResponseFactory
    {
        return response(null, 204);
    }

}
