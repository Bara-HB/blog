<?php

namespace App\Http\Controllers;

use Illuminate\Httpuse\Request;

// use App\Models\HomeController;

class HomeController extends Controller
{
  // public function show()
  // {
  //   return view('layouts.index');
  // }

  // public function home()
  // {
  //   return view('partials.home');
  // }
//   public function show()
// {
//     $homeContent = view('partials.home'); // Načtení obsah

//     return view('layouts.index', compact('homeContent')); // Předání proměnné
// }


  public function show()
  {
      return view('partials.home'); // Hlavní stránka
  }

  public function articles()
  {
      return view('partials.article'); // Stránka článků
  }

  public function contact()
  {
      return view('partials.contact'); // Kontaktní stránka
  }
}


// public function log()
// {
//   return view('layouts.index', ['homeContent' => view('partials.log')]);
// }




