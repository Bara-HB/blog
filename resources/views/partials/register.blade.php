<main class="min-h-screen">
  <!-- Section1 -->
  <section class=" dm:my-10 bg-slate-800 m-10 p-10 sm:w-1/2 md:w-96 flex flex-col sm:mx-auto rounded-md relative mb-20">
      <h2 class="text-white text-2xl font-semibold mb-5 text-center">Vytvoř si účet</h2>
        <form action="/register" method="POST" class="">
          @csrf

          <div class="my-10 flex flex-col">
            <label class="mb-5 text-white" for="text">Name</label>
            <div class="w-full max-w-xs mx-auto">
              <input type="text" id="name" name="name" placeholder="Jméno" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required/>
          </div>

          <div class="my-10 flex flex-col">
            <label class="mb-5 text-white" for="email">E-mail</label>
            <div class="w-full max-w-xs mx-auto">
              <input type="email" id="email" name="email" placeholder="E-mail" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required/>
          </div>
          </div>

          <div class="my-10 flex flex-col">
            <label for="password" class="mb-5 text-white">Heslo</label>
            <div class="w-full max-w-xs mx-auto">
              <input type="password" name="password" placeholder="Heslo" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" required/>
            </div>
          </div>

          <div class="mb-6">
            <a href="/log" class="text-white hover:underline ">Již máte účet? Přihlaste se.</a>
          </div>

          <div class="">
            <button type="submit" class="px-5 py-2 text-white font-semibold text-xl hover:underline bg-black rounded-md">Zaregistrovat se</button>
          </div>
        </form>
      
    </section>
    <!-- End of Section 1 -->

</main>