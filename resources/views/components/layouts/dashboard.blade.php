<!DOCTYPE html>
<html lang="en">
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
  <main class="p-4">
    <h2 class="text-white">Články</h2>

    <form action="/dashboard" method="POST" class="bg-slate-800 my-10 p-4 rounded-md">
      @csrf
    
      <div class="flex items-start flex-col justify-start">
          <label for="title" class="my-4 text-white">Nadpis</label>
          <div class="w-full max-w-xs">
              <input type="text" id="title" name="title" placeholder="Nadpis" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required />
          </div>
      </div>
    
      <div class="flex flex-col">
          <label for="content" class="my-4 text-white">Článek</label>
          <textarea name="content" id="content" rows="5" class="flex w-1/2 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required></textarea>
      </div>
    
      <div class="">
          <button type="submit" value="Odeslat" class="my-4 px-5 py-2 text-textpink font-semibold text-xl hover:text-white hover:underline bg-black rounded-md">Odeslat</button>
      </div>
    </form>

    <div class="flex flex-wrap mx-4">
      @foreach ($blog as $item)
      <div class="p-4 w-full sm:w-1/2 lg:w1/3">
          <div class="flex flex-col md:flex-row md:flex-wrap items-stretch max-w-full bg-white border rounded-lg shadow-sm border-neutral-200/60 h-full">
              <img src="{{ asset($item->image_path) }}" class="object-cover w-full md:w-48 h-48 md:h-auto md:aspect-video" />
              <div class="p-6 flex flex-col justify-between flex-grow w-full md:w-auto">
                  <a href="#_" class="block mb-3">
                      <h5 class="text-xl font-bold leading-none tracking-tight text-neutral-900 break-works">{{ $item->title }}</h5>
                  </a>
                  <p class="mb-4 text-sm text-neutral-500 break-works">
                    {{ \Illuminate\Support\Str::limit($item->content, 50) }}
                  </p>
                  <div class="flex flex-col sm:flex-row gap-2">
                    <button class="inline-flex items-center justify-center w-full sm:w-auto h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md bg-neutral-950 hover:bg-neutral-950/70">
                        <span>Upravit</span>
                    </button>
  
                    <form action="/dashboard_delete" method="POST" name="id">
                      @csrf
                      <input type="hidden" name="id" value="{{$item->id}}">
                      <button class="w-full sm:w-auto h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md bg-red-600 hover:bg-red-500">Smazat</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  @endforeach
    </div>

    <div class="mt-4">
      {{ $blog->links() }}
    </div>
    
  </main>
  <footer>

  </footer>
  
</body>
</html>

  
