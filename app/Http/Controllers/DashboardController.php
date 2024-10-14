<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function show() 
    {
        
        $blog = Blog::where('user_id', Auth::id())->get();
        
        return view('components.layouts.dashboard',[
            "blog" => $blog
        ]);
        
    }

    public function store(Request $request)
    {
        $blog = Blog::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard');
    }
}
