<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-[#110F0F]">

  <div class="overflow-x-hidden overflow-y-hidden w-full">
  
    <header class="relative w-full h-[20vh] md:h-[45vh]">
  
      <div class="bg-bgpink
                    w-[150vw] 
                    h-[150vw]
                    opacity-50 
                    absolute 
                    top-[-130vw] 
                    left-[-25%] 
                    rounded-[45%] 
                    animate-[spin_40s_linear_infinite] 
                    before:rounded-[40%] 
                    before:content-[' '] 
                    before:animate-[spin_40s_linear_infinite] 
                    before:w-[100%] before:h-[100%] 
                    before:bg-[#FF78DD] 
                    before:opacity-50 
                    before:absolute 
                    before:top-0 
                    before:left-0">
      </div>
  
        <div class="relative max-w-7xl text-center mx-auto mt-5">
          <nav class="text-textpink md:flex md:items-center md:justify-between">
            <div class="flex justify-between items-center">
              <h1 class="text-white font-bold text-3xl ml-6">
                      <span class="mr-[-6px]">Ráda</span>
                      <span class="text-textpink mr-[-6px]">Zhubnu</span>
                      <span class="mr-[-6px]">.</span>
                      <span class="text-textpink">CZ</span>
              </h1>
  
              <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
              </span>
            </div>
          
            <ul class="md:flex 
                      md:items-center 
                      z-[1] 
                      md:z-auto 
                      md:static 
                      absolute 
                      md:bg-inherit 
                      w-full 
                      left-0 
                      md:w-auto 
                      md:py-0 
                      py-4 
                      md:pl-0 
                      pl-7 
                      md:opacity-100 
                      opacity-0 
                      top-[-400px] 
                      transition-all 
                      ease-in 
                      duration-500
                      bg-bgpink
                      rounded-md">
              <li class="mx-4 my-6 md:my-0">
                <a href="/" class="font-semibold text-xl hover:text-white hover:underline">O nás</a>
              </li>
  
              <li class="mx-4 my-6 md:my-0">
                <a href="/article" class="font-semibold text-xl hover:text-white hover:underline">Články</a>
              </li>
  
              <li class="mx-4 my-6 md:my-0">
                <a href="/contact" class="font-semibold text-xl hover:text-white hover:underline">Kontakty</a>
              </li>
  
              <li class="mx-4 my-6 md:my-0">
                <a href="/log" class="font-semibold text-xl hover:text-white hover:underline">Přihlášení</a>
              </li>
            </ul>
                  
          </nav>
        </div>
  
         <div class="xl:mt-28 lg:mt-12 hidden lg:block">
          <div class="relative flex justify-center">
            {{-- <p class="absolute text-white font-bold text-6 uppercase w-1/2 flex justify-center text-center">“Zdravé hubnutí přirozenou cestou.”</p> --}}
            <p class="absolute text-white text-6 text-xl uppercase w-1/2 flex justify-center text-center max-w-2xl">"Dosáhněte své vysněné váhy bez suplementů - pouze s pomocí vyvážené stravy a zdravého životního stylu."</p>
          </div>
        </div>
    </header>


    
    {{ $slot }}
    

    <footer>

      <div class="bg-textpink h-16 mt-20 flex justify-center items-center">
        <p class="text-white">© 2024 Copyright Barbora Hatony Blahová.</p>
      </div>

    </footer>
</div>

<script>
//Navbar
  function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[40px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
//End of Navbar
</script>
<script src="script.js"></script>

  </body>
</html>