<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class DashboardController extends Controller
{
    // Načtení článků z databáze
    public function show() 
    {
        // Použijte paginate() pro načtení článků
        $blog = Blog::where('user_id', Auth::id())->paginate(8);

        // Zobrazení dat článků z databáze
        return view('components.layouts.dashboard',[
            "blog" => $blog
        ]);
    }

    public function store(Request $request)
    {
        // Vytvoření nového blogu v databázi
        $blog = Blog::create([
            // Uložení ID aktuálně přihlášeného uživatele
            'user_id' => Auth::id(),
            // Uložení názvu blogu z dat odeslaných uživatelským požadavkem
            'title' => $request->title,
            // Uložení obsahu blogu z dat odeslaných uživatelským požadavkem
            'content' => $request->content,
        ]);

        // Přesměrování uživatele na stránku řídicího panelu po úspěšném uložení
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request)
    {
        // Hledání blogu podle ID z požadavku
        $blog = Blog::find($request->id);

        // Kontrola, zda blog existuje
        if (!$blog) {
            // Pokud blog nebyl nalezen, přesměrování zpět s chybovou zprávou
            return redirect()->back()->with('error', 'Článek nebyl nalezen.');
        } 

        // Smazání blogu, pokud byl nalezen
        $blog->delete();

        // Přesměrování na stránku řídicího panelu s úspěšnou zprávou
        return redirect()->route('dashboard')->with('success', 'Článek byl úspěšně smazán.');
    }




    public function edit(Blog $id)
    {
    
        return view('partials.edit', ['blog'=>$id]);


    }


    public function update(Request $request)
    {

        $validate = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::where('id', $request->id)->first();

        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Přesměrování uživatele na stránku řídicího panelu po úspěšném uložení
        return redirect()->route('dashboard');
    }
}
