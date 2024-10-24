
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