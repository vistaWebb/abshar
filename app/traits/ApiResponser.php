<?php

namespace App\Traits;

trait ApiResponser
{
    protected function successResponse($date , $code , $message = null)
    {
        return response()->json([
            'status' => 'success',
            'message' => '',
            'date' => $date ,
        ] , $code);
    }

    protected function errorResponse( $message = null , $code )
    {
        return response()->json([
            'status' => 'error',
            'message' => $message ,
            'date' => ''
        ] , $code);
    }
}
