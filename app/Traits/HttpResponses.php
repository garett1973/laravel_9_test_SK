<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait HttpResponses {
    protected function success($data, $message = null, $code = 200): JsonResponse
    {
        return response()->json([
            'status' => 'Request successful',
            'data' => $data,
            'message' => $message
        ], $code);
    }

    protected function error($code, $data, $message = null): JsonResponse
    {
        return response()->json([
            'status' => 'Request failed, please try again',
            'data' => $data,
            'message' => $message
        ], $code);
    }
}
