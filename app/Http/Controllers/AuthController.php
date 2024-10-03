<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function log()
{
  return view('layouts.index', ['homeContent' => view('partials.log')]);
}

    public function login(Request $request)
{
  dd($request);
}

public function register()
{
  return view('layouts.index', ['homeContent' => view('partials.register')]);
}
}
