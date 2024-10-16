<x-layouts.index>
<main class="min-h-screen">
  <!-- Section 1 -->
<section class="dm:my-10 bg-slate-800 mx-auto my-10 p-10 sm:w-1/2 md:w-96 flex flex-col sm:mx-auto rounded-md relative mb-20">
  <h2 class="text-white text-2xl font-semibold mb-5 text-center">Vytvoř si účet</h2>
  <form action="/register" method="POST">
      @csrf

      <div class="my-4 flex flex-col">
          <label class="mb-2 text-white" for="name">Jméno</label>
          <input type="text" id="name" name="name" placeholder="Jméno" class="w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400" required />
      </div>

      <div class="my-4 flex flex-col">
          <label class="mb-2 text-white" for="email">E-mail</label>
          <input type="email" id="email" name="email" placeholder="E-mail" class="w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400" required />
      </div>

      <div class="my-4 flex flex-col">
          <label for="password" class="mb-2 text-white">Heslo</label>
          <input type="password" name="password" placeholder="Heslo" class="w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400" required />
      </div>

      <div class="mb-4">
          <a href="/log" class="text-white hover:underline">Již máte účet? Přihlaste se.</a>
      </div>

      <div class="text-center">
          <button type="submit" class="px-5 py-2 text-white font-semibold text-xl hover:bg-gray-600 bg-black rounded-md transition duration-200 ease-in-out">Zaregistrovat se</button>
      </div>
  </form>
</section>
<!-- End of Section 1 -->

</main>

</x-layouts.index>