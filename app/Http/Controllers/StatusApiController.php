<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusApiController extends Controller
{
    public function index() {
        return response()->json([
            'status' => 'OK',
            'time' => now()
        ]);
    }
}
