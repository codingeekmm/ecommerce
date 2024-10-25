<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BaseApiController extends Controller
{
    /**
     * Send a successful response
     */
    public function sendResponse($result, $message): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ], 200);
    }

    /**
     * Send an error response
     */
    public function sendError($error, $errorMessages = [], $code = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $error,
            'errors'  => $errorMessages,
        ], $code);
    }    
}
