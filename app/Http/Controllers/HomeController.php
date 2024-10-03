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
  public function show()
{
    $homeContent = view('partials.home'); // Načtení obsah

    return view('layouts.index', compact('homeContent')); // Předání proměnné
}

public function articles()
{
  return view('layouts.index', ['homeContent' => view('partials.article')]);
}

public function contact()
{
  return view('layouts.index', ['homeContent' => view('partials.contact')]);
}

// public function log()
// {
//   return view('layouts.index', ['homeContent' => view('partials.log')]);
// }

}


