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