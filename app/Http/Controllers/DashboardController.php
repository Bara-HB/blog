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
        $imagePath= $request->file('image')->store('updats', 'public');
        // Vytvoření nového blogu v databázi
        $blog = Blog::create([
            // Uložení ID aktuálně přihlášeného uživatele
            'user_id' => Auth::id(),
            // Uložení názvu blogu z dat odeslaných uživatelským požadavkem
            'title' => $request->title,
            // Uložení obsahu blogu z dat odeslaných uživatelským požadavkem
            'content' => $request->content,

            'image_path' => $imagePath,
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
        // Vrátí pohled ('partials.edit') a předá mu data článku ('blog'), který chceme upravit.
        // Parametr $id je instancí modelu Blog, což umožňuje přímý přístup k datům článku pomocí jeho ID.
        return view('partials.edit', ['blog'=>$id]);
    }


    public function update(Request $request)
    {
        // Validace formuláře, zajišťuje, že pole 'title' a 'content' nejsou prázdná.
        $validate = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Vyhledá článek podle ID předaného ve formuláři.
        // Používá se metoda first(), aby se získal první záznam, který odpovídá danému ID.
        $blog = Blog::where('id', $request->id)->first();

        // Aktualizuje hodnoty 'title' a 'content' pro nalezený článek.
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Přesměruje uživatele na dashboard (řídicí panel) po úspěšném uložení změn článku.
        return redirect()->route('dashboard');
    }
}
