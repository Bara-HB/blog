<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-[#110F0F] m-auto max-w-7xl">
  <header>
    @if(Auth::check())
      <form action="/logout" method="POST" class="flex justify-end m-4">
          @csrf
          <button type="submit" class="text-white hover:underline">Odhlásit se</button>
      </form>
    @endif
  </header>
  <main class="">
      <div class="bg-slate-800 m-auto p-4 rounded-md w-full max-w-lg">
          <h2 class="text-white mb-4">Upravit článek</h2>
          <form action="/edit_update" method="POST" class="bg-slate-800 my-10 p-4 rounded-md">
            @csrf
            <input type="hidden" value="{{$blog->id}}" name="id">
      
            
            <div class="flex items-start flex-col justify-start">
                <label for="title" class="my-4 text-white">Nadpis</label>
                <div class="w-full max-w-xs">
                    <input type="text" id="title" name="title" placeholder="Nadpis" value="{{$blog->title}}" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required />
                </div>
            </div>
            
            <div class="flex flex-col">
                <label for="content" class="my-4 text-white">Článek</label>
                <textarea name="content" id="content" rows="20" class="flex w-full px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">{{$blog->content}}</textarea>
            </div>
            
            <div class="">
                <button type="submit" value="Odeslat" class="my-4 px-5 py-2 text-white font-semibold text-xl hover:text-white hover:underline bg-black rounded-md">Odeslat</button>
            </div>
        </form>
      </div>
  </main>

<footer>

</footer>

</body>
</html>