<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>RádaZhubnu.cz</title>
</head>
<body class="bg-[#110F0F]">

  <div class="overflow-x-hidden overflow-y-hidden w-full">
  
    <header class="relative w-full h-[20vh]">
  
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
  
        <div class="relative mt-5 ml-5 mr-5">
          <nav class="text-textpink md:flex md:items-center md:justify-between">
            <div class="flex justify-between items-center">
              <h1 class="text-white font-bold text-3xl">
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
                <a href="/index.html" class="font-semibold text-xl hover:text-white hover:underline">O nás</a>
              </li>
  
              <li class="mx-4 my-6 md:my-0">
                <a href="/breakfast.html" class="font-semibold text-xl hover:text-white hover:underline">Články</a>
              </li>
  
              <li class="mx-4 my-6 md:my-0">
                <a href="/contact.html" class="font-semibold text-xl hover:text-white hover:underline">Kontakty</a>
              </li>
  
              <li class="mx-4 my-6 md:my-0">
                <a href="/log.html" class="font-semibold text-xl hover:text-white hover:underline">Přihlášení</a>
              </li>
            </ul>
                  
          </nav>
        </div>
  
        <!-- <div class="w-full absolute hidden md:top-1/4 translate-y-[-50%]">
          <div class="relative flex justify-center">
            <p class="absolute text-white font-bold text-6 uppercase w-1/2 flex justify-center text-center">“Zdravé hubnutí přirozenou cestou.”</p>
            <p class="absolute text-white font-bold text-6 uppercase w-1/2 flex justify-center text-center">"Dosáhněte své vysněné váhy bez suplementů - pouze s pomocí vyvážené stravy a zdravého životního stylu."</p>
          </div>
        </div> -->
    </header>
      
  
    <main>
      <!-- Section 1 -->
  
        <section class="w-full md:flex">
          <p class="md:w-1/2 text-white text-center text-2xl/loose self-center p-10">"Vyzkoušejte naši cestu k hubnutí - žádné diety, žádné doplňky, jen opravdové jídlo."</p>
          <img class="md:w-1/2 p-50" src="image/fruit-salad.jpg" alt="">
        </section>
      <!-- End of Section 1 -->
      <!-- Section 2 -->
        <section class="dm:my-16">
          <h2 class="text-white text-2xl font-semibold mt-16 mx-8 md:my-16 text-center">Články</h2>
          <div class="sm:grid sm:grid-cols-2 md:grid-cols-4 md:mx-5">
            <div class="">
              <article class="p-10 m-10 md:p-3 w-full flex hover:border-solid hover:bg-slate-800 rounded-md">
                <a href="breakfast.html" class="text-white text-lg flex justify-center flex-wrap py-5">Pitný režim
                  <img class="rounded-md block mt-5 hover:brightness-50" src="image/glass_with_water.jpg" alt="">
                </a>
              </article>
            </div>
            <div class="">
              <article class="p-10 m-10 md:p-3 w-full flex hover:border-solid hover:bg-slate-800 rounded-md">
                <a href="#" class="text-white text-lg flex justify-center flex-wrap py-5">Metr je váš kamarád
                  <img class="rounded-md block mt-5 hover:brightness-50" src="image/tailor's_yardstick.jpg" alt="">
                </a>
              </article>
            </div>
            <div class="">
              <article class="p-10 m-10 md:p-3 w-full flex hover:border-solid hover:bg-slate-800 rounded-md">
                <a href="#" class="text-white text-lg flex justify-center flex-wrap py-5">Oběd
                  <img class="rounded-md block mt-5 hover:brightness-50" src="image/one-pot.jpg" alt="">
                </a>
              </article>
            </div>
            <div class="">
              <article class="p-10 m-10 md:p-3 w-full flex hover:border-solid hover:bg-slate-800 rounded-md">
                <a href="#" class="text-white text-lg flex justify-center flex-wrap py-5">Večeře
                  <img class="rounded-md block mt-5 hover:brightness-50" src="image/one-pot.jpg" alt="">
                </a>
              </article>
            </div>
          </div>
        </section>
      <!-- End of Section 2 -->
      <!-- Sestion 3 -->
        <section class="w-full md:flex items-center">
          <div class="md:w-1/2 order-2">
            <h2 class="text-white text-center text-2xl/loose pt-10 px-10">"Jak vám pomůžeme dosáhnout vaší cílové váhy?"</h2>
            <ul class="*/:text-white text-center text-lg/loose p-10">
              <li class="">1. Pochopíte, proč je voda důležitá a co vám přinese.</li>
              <li class="">2. Ujasníte si, které potraviny jsou vhodné k redukci váhy, a se kterými byste to neměli přehánět.</li>
              <li class="">3. Přijdete na to, proč je metr vaším kamarádem.</li>
              <li class="">3. Postupem času si vybudujete sebevědomí.</li>
            </ul>
          </div>
          <img class="md:w-1/2 order-1" src="image/various-vegetables.jpg" alt="">
        </section>
      <!-- End of Section 3 -->
  
    </main>
    
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