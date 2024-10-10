<?php

namespace App\Http\Controllers;

use Illuminate\Httpuse\Request;

// use App\Models\HomeController;

class HomeController extends Controller
{
  
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





