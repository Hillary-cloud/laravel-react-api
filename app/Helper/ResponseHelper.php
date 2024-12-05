<?php

namespace App\Helper;

class ResponseHelper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    // Function : common function to display success - Json response
    // @param string $status
    // @param string $message
    // @param string $statusCode
    // @param string $data
    // @return response

    public static function success($status = 'success', $message = null, $data = [], $statusCode = 200){
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

        // Function : common function to display success - Json response
    // @param string $status
    // @param string $message
    // @param string $statusCode
    // @return response

    public static function error($status = 'error', $message = null, $statusCode = 400){
        return response()->json([
            'status' => $status,
            'message' => $message,
        ], $statusCode);
    }
}