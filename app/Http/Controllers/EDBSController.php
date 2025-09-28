<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EDBSController extends Controller
{
    public function index()
    {
        return view('edbs');
    }
}
