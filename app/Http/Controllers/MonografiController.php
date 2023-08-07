<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonografiController extends Controller
{
    public function index()
    {
        return view('Monografi/index');
    }
}
