<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse; 

class ResponseController extends Controller
{
    public function createResponse(array $data, int $status = 200): JsonResponse
    {
        $response = [
            'data' => $data,
            'status' => $status
        ];

        return new JsonResponse($response);
    }
}
