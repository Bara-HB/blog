<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
  //Zobrazení stránek
  public function showLog()
    {
      // Zobrazit login stránku
      return view('partials.log');
    }

  public function showRegister()
    {
      // Zobrazit registrační stránku
      return view('partials.register');
    }

  // Přihlášení uživatele
  public function login(Request $request)
    {
      // Validace přihlašovacích údajů
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
      ]);

     // Pokus o přihlášení uživatele
      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard')->with('success', 'Přihlášení bylo úspěšné!');
      }

      return back()->withErrors([
        'email' => 'Zadané přihlašovací údaje nejsou správné',
      ])->onlyInput('email');
    }


  //Uložení dat z registračním formuláři do databáze 
  public function store(Request $request)
  {
    // Validace vstupních dat
    $validated = $request->validate([
      'name' => 'required|string|min:3|max:255',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|string|min:8|',
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password), // Zašifrování hesla
    ]);

    // Přesměrování po registraci na hlavní stranu a zobrazení kontrolní hlášky
    return redirect('/')->with('success', 'Registrace byla úspěšná!');
  }


  // Odhlášení uživatele
  public function logout(Request $request): RedirectResponse
  {
    // Odhlásí uživatele
    Auth::logout(); 
    
    // Zneplatní aktuální uživatelskou relaci
    $request->session()->invalidate();
    
    // Regeneruje CSRF token pro bezpečnost
    $request->session()->regenerateToken(); 
    
    // Přesměruje uživatele na domovskou stránku
    return redirect('/')->with('success', 'Byli jste úspěšně odhlášeni!'); 
  }
}
