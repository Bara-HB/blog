<?php

namespace App\Http\Controllers;

use App\Models\Blog; // Ověř, zda jsi to importovala správně
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Zobrazí všechny blogy s paginací
    public function index()
    {
        // Načte všechny články s omezením na 8 na stránku.
        $blogs = Blog::paginate(8);
        return view('blog.index', compact('blogs'));
    }

    // Zobrazí jednotlivý článek na základě ID
    public function show($id)
        {
         // Najdi blog podle ID
        $blog = Blog::find($id);

        // Pokud článek neexistuje, vrátí 404 stránku
        if (!$blog) {
            return abort(404);
        }

        // Načti poslední články (např. 4 články)
        $blogs = Blog::latest()->take(4)->get();

        // Vrátí view s jednotlivým článkem
        return view('partials.show', compact('blog')); 
    }   
}
