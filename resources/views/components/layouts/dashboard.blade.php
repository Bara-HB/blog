<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>@yield('title')</title>
</head>
<body class="">
  <header>
    @if(Auth::check())
      <form action="/logout" method="POST" class="inline">
          @csrf
          <button type="submit" class="text-white hover:underline">Odhlásit se</button>
      </form>
    @endif
  </header>
  <main>
    <h2>Články</h2>

    <form action="/dashboard" method="POST">
      @csrf
    
      <div class="flex flex-col">
          <label for="title" class="my-10">Nadpis</label>
          <div class="w-full max-w-xs mx-auto">
              <input type="text" id="title" name="title" placeholder="Nadpis" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required />
          </div>
      </div>
    
      <div class="flex flex-col">
          <label for="content" class="my-10">Článek</label>
          <textarea name="content" id="content" rows="5" class="flex w-full px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required></textarea>
      </div>
    
      <div class="text-center">
          <button type="submit" value="Odeslat" class="my-10 px-5 py-2 text-textpink font-semibold text-xl hover:text-white hover:underline bg-black rounded-md">Odeslat</button>
      </div>
    </form>

    @foreach ($blog as $item)
    <div class="space-y-4 ">
        <div class="flex items-center max-w-2xl overflow-hidden bg-white border rounded-lg shadow-sm border-neutral-200/60">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80" class="object-cover w-auto h-48 aspect-video" />
            <div class="p-8">
                <a href="#_" class="block mb-3">
                    <h5 class="text-xl font-bold leading-none tracking-tight text-neutral-900">{{ $item->title }}</h5> <!-- Tady můžeš zobrazit titulek -->
                </a>
                <p class="mb-4 text-sm text-neutral-500">{{ $item->content }}</p> <!-- Tady můžeš zobrazit obsah -->
                <button class="inline-flex items-center justify-between w-auto h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-neutral-950 hover:bg-neutral-950/90">
                    <span>Card Button</span>
                    <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endforeach

    
  </main>
  <footer>

  </footer>
  
</body>
</html>

  
