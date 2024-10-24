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
<body class="bg-[#110F0F]">

  <div class="overflow-x-hidden overflow-y-hidden w-full">
  
    <header class="relative w-full h-[20vh] md:h-[45vh]">
  
      <div class="bg-bgpink
                    w-[150vw] 
                    h-[145vw]
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
  
              <li class="mx-4 my-6 md:my-0 hidden">
                <a href="/contact" class="font-semibold text-xl hover:text-white hover:underline">Kontakty</a>
              </li>
  
              <li class="mx-4 my-6 md:my-0">
                <a href="/log" class="font-semibold text-xl hover:text-white hover:underline">Přihlášení</a>
              </li>
            </ul>
                  
          </nav>
        </div>
  
        <div class="hidden md:list-item fade-in-text relative text-white opacity-0 transition-opacity duration-[2000ms] text-xl uppercase text-center mt-12 xl:mt-16 mb-4 mx-4">
          "Zdravé hubnutí přirozenou cestou."
        </div>
    </header>
 
    
    {{ $slot }}
    
    <footer>

      <div class="bg-textpink h-16 mt-20 flex justify-center items-center">
        <p class="text-white text-xs">© 2024 Copyright Barbora Hatony Blahová.</p>
      </div>

    </footer>
</div>

{{-- <script src="{{ asset('js/script.js') }}"></script> --}}

<script>
//Navbar
function Menu(e){
  let list = document.querySelector('ul');
  e.name === 'menu' ? (e.name = "close",list.classList.add('top-[40px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
}
//End of Navbar


// Čeká na načtení celého DOM, než se začne vykonávat kód
document.addEventListener('DOMContentLoaded', () => {
  // Najdi všechny prvky s třídou 'fade-in-text'
  const elements = document.querySelectorAll('.fade-in-text');

  // Pro každý nalezený prvek
  elements.forEach((element, index) => {
    // Nastaví zpoždění pro každou animaci, aby se zobrazovaly postupně
    setTimeout(() => {
      // Přidá třídu 'opacity-100', čímž se prvek stane viditelným
      element.classList.add('opacity-100');
    }, 500 * (index + 1)); // Zpoždění se zvyšuje s indexem prvku
  });
});

// Další posluchač pro DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
  // Najdi prvek s ID 'animated-text'
  const textElement = document.getElementById('animated-text');

  // Počká 500 ms a pak spustí animaci
  setTimeout(() => {
      // Přidá třídy pro animaci: opacity-100 a resetuje pozici
      textElement.classList.add('opacity-100', 'translate-x-0');
      // Odebere třídu, která posunula prvek mimo obrazovku
      textElement.classList.remove('-translate-x-10');
  }, 500); // Zpoždění 500 ms
});

// Další posluchač pro DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
  // Najdi prvek s ID 'animated-content' a sekci 'section-3'
  const contentElement = document.getElementById('animated-content');
  const section = document.getElementById('section-3');

  // Funkce pro kontrolu, zda je sekce viditelná v okně prohlížeče
  function isElementInViewport(el) {
      const rect = el.getBoundingClientRect(); // Získá pozici prvku
      return (
          // Kontroluje, zda je prvek viditelný v okně prohlížeče
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
  }

  // Funkce pro spuštění animace při posouvání
  function handleScroll() {
      // Kontroluje, zda je sekce viditelná a zda má obsah třídu 'opacity-0'
      if (isElementInViewport(section) && contentElement.classList.contains('opacity-0')) {
          // Přidá třídy pro animaci
          contentElement.classList.add('opacity-100', 'translate-x-0');
          // Odebere třídu, která posunula obsah mimo obrazovku
          contentElement.classList.remove('translate-x-10');
          // Odstraní posluchač události, aby se animace spustila pouze jednou
          window.removeEventListener('scroll', handleScroll);
      }
  }

  // Přidá posluchač události pro posouvání
  window.addEventListener('scroll', handleScroll);
});
</script>
  </body>
</html>