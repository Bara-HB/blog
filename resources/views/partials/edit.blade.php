@extends('layouts.dashboard')

@section('content')
<div class="bg-slate-800 my-10 p-4 rounded-md w-full max-w-lg">
    <h2 class="text-white mb-4">Upravit článek</h2>
    <form action="{{ route('dashboard.update', $blog->id) }}" method="POST" class="bg-slate-800 my-10 p-4 rounded-md">
      @csrf
      @method('PUT') <!-- Přidávejte PUT metodu pro aktualizaci -->
      <input type="hidden" value="{{$blog->id}}" name="id">

      
      <div class="flex items-start flex-col justify-start">
          <label for="title" class="my-4 text-white">Nadpis</label>
          <div class="w-full max-w-xs">
              <input type="text" id="title" name="title" placeholder="Nadpis" value="{{ $blog->title }}" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required />
          </div>
      </div>
      
      <div class="flex flex-col">
          <label for="content" class="my-4 text-white">Článek</label>
          <textarea name="content" id="content" rows="5" value="{{ $blog->content }}" class="flex w-full px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required </textarea>
      </div>
      
      <div class="">
          <button type="submit" value="Odeslat" class="my-4 px-5 py-2 text-textpink font-semibold text-xl hover:text-white hover:underline bg-black rounded-md">Odeslat</button>
      </div>
  </form>
</div>
@endsection