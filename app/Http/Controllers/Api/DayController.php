<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Day;

class DayController extends Controller
{
    public function index(Request $request)
    {
        $types = Day::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $types
        ], 200);
    }
}
