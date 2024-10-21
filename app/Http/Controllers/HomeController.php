<?php

namespace App\Http\Controllers;

use Illuminate\Httpuse\Request;
use App\Models\Blog;

class HomeController extends Controller
{
  
  public function show()
  {
    // Načtení všech článků z tabulky 'blog'
    $blogs = \App\Models\Blog::all();

    // Předání proměnné $blogs do view 'partials.home'
    return view('partials.home', compact('blogs'));
  }

  public function articles()
  {
    // Načtení všech článků z tabulky 'blog'
    $blogs = Blog::all();

    // Předání proměnné $blogs do view 'partials.article'
    return view('partials.article', ["blogs"=>$blogs]);
  }

  public function contact()
  {
    // Přesměrování na kontaktní stránku
    return view('partials.contact');
  }

}





