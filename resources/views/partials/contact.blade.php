<x-layouts.index>
<main class="min-h-screen relative">
  
  <!-- Section 1 -->
    <section class="dm:my-10 bg-slate-800 mx-auto my-10 p-10 rounded-md max-w-lg">
      <h2 class="text-white text-2xl font-semibold text-center mb-8">Kontakt</h2>
      <form action="" method="POST">
          <div class="flex flex-col mb-4">
              <label for="fname" class="text-white mb-2">Jméno</label>
              <input type="text" id="fname" placeholder="Jméno" class="w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400" />
          </div>

          <div class="flex flex-col mb-4">
              <label for="lname" class="text-white mb-2">Příjmení</label>
              <input type="text" id="lname" placeholder="Příjmení" class="w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400" />
          </div>

          <div class="flex flex-col mb-4">
              <label for="text" class="text-white mb-2">Zpráva</label>
              <textarea id="text" placeholder="Vaše zpráva" class="w-full h-32 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400"></textarea>
          </div>

          <div class="text-center">
              <input type="submit" value="Odeslat" class="my-4 px-5 py-2 text-white font-semibold text-xl hover:bg-gray-600 bg-black rounded-md transition duration-200 ease-in-out">
          </div>
      </form>
    </section>
  <!-- End of Section 1 -->

</main>
</x-layouts.index>