<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class TestController extends Controller
{
    public function firstResponse()
    {
        return response()->json([
            'status' => ResponseAlias::HTTP_OK,
            'message' => ResponseAlias::$statusTexts[200],
        ]);
    }
}
