<x-layouts.index>
  <main class="max-w-7xl m-auto">
    <section class="dm:my-10">
      
      <div class="container mx-auto p-4">
        <div class="bg-gray-800 rounded-lg shadow-lg p-6">
          <img class="float-left w-48 h-48 object-cover mb-4 mr-4" src="{{ asset($blog->image_path) }}" alt="Obrázek k článku">
          <div class="">
                <h2 class="text-gray-100 text-2xl font-bold mb-8">{{ $blog->title }}</h2>
                <p class="text-gray-200">{{ $blog->content }}</p>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>
  </section>
  </main>
    

</x-layouts.index>