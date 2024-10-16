<x-layouts.index>
<main class="min-h-screen">
<!-- Section1 -->
  <section class="dm:my-10 bg-slate-800 mx-auto my-10 p-10 sm:w-1/2 md:w-96 flex flex-col sm:mx-auto rounded-md relative mb-20">
    <h2 class="text-white text-2xl font-semibold mb-5 text-center">Přihlášení</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/log" method="POST">
        @csrf
        <div class="my-4 flex flex-col">
            <label class="mb-2 text-white" for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="E-mail" class="w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400" />
        </div>

        <div class="my-4 flex flex-col">
            <label for="password" class="mb-2 text-white">Heslo</label>
            <input type="password" name="password" placeholder="Heslo" class="w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400" />
        </div>

        <div class="mb-4">
            <a href="/register" class="text-white hover:underline">Registrovat se.</a>
        </div>

        <div class="text-center">
            <button type="submit" class="px-5 py-2 text-white font-semibold text-xl hover:bg-gray-600 bg-black rounded-md transition duration-200 ease-in-out">Přihlásit se</button>
        </div>
    </form>
  </section>
<!-- End of Section 1 -->


</main>
</x-layouts.index>