<x-layouts.index>
<main class="max-w-7xl text-center m-auto">

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif


  <!-- Section 1 -->

    <section class="md:flex">
      <div class="md:w-1/2 flex">
        <p class="text-white text-center text-2xl/loose self-center p-10 lg:p-28">"Vyzkoušejte naši cestu k hubnutí - žádné diety, žádné doplňky, jen opravdové jídlo."</p>
      </div>
      <div class="md:w-1/2 p-12 object-fill">
        <img class="md:max-w-lg object-fill mx-auto p-6" src="{{ asset('images/fruit_salad.jpg') }}" alt="Ovocný salát">
      </div>
    </section>
  <!-- End of Section 1 -->
  <!-- Section 2 -->
    <section class="dm:my-16">
      
      <h2 class="text-white text-2xl font-semibold mt-16 mb-6 mx-8 md:my-16 text-center">Články</h2>
      
      <div class="sm:grid sm:grid-cols-2 md:grid-cols-4 md:mx-5">

        <div class="bg-slate-800 mx-auto my-3 rounded-md max-w-80">
          <article class="md:p-3 w-full flex flex-col hover:border-solid rounded-md">
            <img class="rounded-md m-auto mt-5 max-w-72" src="{{ asset('images/glass_with_water.jpg') }}" alt="Sklenice s vodou">
            <a href="#" class="text-white text-lg py-5">Pitný režim
            </a>
          </article>
        </div>

        <div class="bg-slate-800 mx-auto my-3 rounded-md max-w-80">
          <article class="md:p-3 w-full flex flex-col hover:border-solid rounded-md">
            <img class="rounded-md m-auto mt-5 max-w-72" src="{{ asset('images/meter.jpg') }}" alt="Metr a ovoce">
            <a href="#" class="text-white text-lg py-5">Metr je váš kamarád
            </a>
          </article>
        </div>

        <div class="bg-slate-800 mx-auto my-3 rounded-md max-w-80">
          <article class="md:p-3 w-full flex flex-col hover:border-solid rounded-md">
            <img class="rounded-md m-auto mt-5 max-w-72" src="{{ asset('images/fruit.jpg') }}" alt="">
            <a href="#" class="text-white text-lg py-5">Které ovoce jíst častěji?
            </a>
          </article>
        </div>

        <div class="bg-slate-800 mx-auto my-3 rounded-md max-w-80">
          <article class="md:p-3 w-full flex flex-col hover:border-solid rounded-md">
            <img class="rounded-md m-auto mt-5 max-w-72" src="{{ asset('images/oatmeal.jpg') }}" alt="">
            <a href="#" class="text-white text-lg py-5">Vločky jsou náš přítel
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
      <div class="md:w-1/2 p-12 object-fill">
        <img class="md:max-w-lg object-fill mx-auto p-6" src="{{ asset('images/apple.jpg') }}" alt="">

      </div>
    </section>
  <!-- End of Section 3 -->

</main>

</x-layouts.index>