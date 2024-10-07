<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\blog;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
  //Zobrazení stránek
  public function showLog()
    {
        return view('partials.log'); // Zobrazit login stránku
    }

  public function showRegister()
    {
        return view('partials.register'); // Zobrazit registrační stránku
    }


    public function login(Request $request)
{
  dd($request);
}

  //Uložení dat z registračním formuláři do databáze 
  public function store(Request $request)
  {
    // Validace vstupních dat
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|string|min:6|',
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password), // Zašifrování hesla
  ]);

  // Přesměrování po registraci na hlavní stranu a zobrazení kontrolní hlášky
  return redirect('/')->with('success', 'Registrace byla úspěšná!');
  }

}
