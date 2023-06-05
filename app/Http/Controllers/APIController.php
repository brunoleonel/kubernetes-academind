<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    function index(Request $request)
    {
        return response('Test');
    }
}
