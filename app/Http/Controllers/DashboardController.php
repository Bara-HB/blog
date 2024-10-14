<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class DashboardController extends Controller
{
    public function show() 
    {
        // Použijte paginate() pro načtení článků
        $blog = blog::where('user_id', Auth::id())->paginate(8);

        // $blog = blog::where('user_id', Auth::id())->get();
        
        return view('components.layouts.dashboard',[
            "blog" => $blog
        ]);
        
    }

    public function store(Request $request)
    {
        $blog = blog::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy(Request $request)
    {
        $blog = blog::find($request->id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Článek nebyl nalezen.');
        } 

        $blog->delete();

        return redirect()->route('dashboard')->with('success', 'Článek byl úspěšně smazán.');
    }
}
