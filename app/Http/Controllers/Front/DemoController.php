<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(Request $request)
    {
        return view('demo', [
            'info' => 'this is information',
        ]);
    }
}
