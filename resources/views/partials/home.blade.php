<x-layouts.index>
<main class="max-w-7xl text-center m-auto">

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  @if (session('success'))
    <div class="bg-gray-800 border text-gray-200 px-4 py-3 rounded mb-4" role="alert">
        {{ session('success') }}
    </div>
  @endif
  
  <!-- Section 1 -->
    <section class="md:flex md:items-center">
      <div class="md:w-1/2 flex">
          <p class="text-white text-center text-2xl leading-loose self-center p-10 lg:p-28">
              "Vyzkoušejte naši cestu k hubnutí - žádné diety, žádné doplňky, jen opravdové jídlo."
          </p>
      </div>
      <div class="md:w-1/2 p-6">
          <img class="w-full h-auto max-w-lg object-cover mx-auto" src="{{ asset('images/fruit_salad.jpg') }}" alt="Ovocný salát">
      </div>
    </section>
  <!-- End of Section 1 -->

  <!-- Section 2 -->
    <section class="dm:my-16">
      <h2 class="text-white text-2xl font-semibold mt-16 mb-6 mx-8 md:my-16 text-center">Články</h2>
  
      <div class="container mx-auto flex flex-wrap">
        @foreach ($blogs->take(4) as $item)
            <div class="w-full md:w-1/2 lg:w-1/4 p-4 flex">
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col flex-1">
                    <img class="w-full h-48 object-cover mb-4" src="{{ asset($item->image_path) }}" alt="Obrázek k článku">
                    <div class="p-4 flex-1">
                      <h3 class="text-gray-200 text-2xl font-bold mb-4">
                        <a href="{{ route('blogs.show', $item->id) }}">{{ \Illuminate\Support\Str::limit($item->title, 150) }}</a>
                      </h3>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </section>
  <!-- End of Section 2 -->

  <!-- Section 3 -->
    <section class="w-full md:flex md:items-center">
      <div class="md:w-1/2 order-2">
          <h2 class="text-white text-center text-2xl leading-loose pt-10 px-10">"Jak vám pomůžeme dosáhnout vaší cílové váhy?"</h2>
          <ul class="text-white text-center text-lg leading-loose p-10">
              <li>1. Pochopíte, proč je voda důležitá a co vám přinese.</li>
              <li>2. Ujasníte si, které potraviny jsou vhodné k redukci váhy, a se kterými byste to neměli přehánět.</li>
              <li>3. Přijdete na to, proč je metr vaším kamarádem.</li>
              <li>4. Postupem času si vybudujete sebevědomí.</li>
          </ul>
      </div>
      <div class="md:w-1/2 p-6">
          <img class="w-full h-auto max-w-lg object-cover mx-auto" src="{{ asset('images/apple.jpg') }}" alt="Jablko">
      </div>
    </section>
  <!-- End of Section 3 -->

</main>

</x-layouts.index>