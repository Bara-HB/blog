<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\blog;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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

//Uložení dat z registračním formuláři do databáze 
public function store(Request $request)
{
  $validated = $request->validate([
    'name' => 'required',
    'email' => 'required',
    'password' => 'required',
  ]);

  User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => $request->psassword,
  ]);

  return redirect('/');
}

public function register()
{
  return view('layouts.index', ['homeContent' => view('partials.register')]);
}
}
