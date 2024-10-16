<?php

namespace App\Http\Controllers;

use Illuminate\Httpuse\Request;
use App\Models\Blog;

class HomeController extends Controller
{
  
  public function show()
  {
      // return view('partials.home'); // Hlavní stránka

      // Načtení všech článků z tabulky 'blog'
    $blogs = \App\Models\Blog::all();

    // Předání proměnné $blogs do view 'partials.home'
    return view('partials.home', compact('blogs'));
  }

  public function articles()
  {

    $blogs = Blog::all();

      return view('partials.article', ["blogs"=>$blogs]); // Stránka článků

  }

  public function contact()
  {
      return view('partials.contact'); // Kontaktní stránka
  }


  // // Získání článků z blog
  // public function index()
  //   {
  //       $blogs = Blog::all(); // Načtení všech záznamů z tabulky 'blog'
  //       return view('partials.home', compact('blogs'));
  //   }

}





