<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() { return view('home.index'); }

    public function koemi() { return view('home.oc'); }
}
