<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="bg-[#110F0F]">
  <header>
    @if(Auth::check())
      <form action="/logout" method="POST" class="inline">
          @csrf
          <button type="submit" class="text-white hover:underline">Odhlásit se</button>
      </form>
    @endif
  </header>
  <main>

  </main>
  <footer>

  </footer>
  
</body>
</html>

  
