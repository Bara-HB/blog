<x-layouts.index>
<main class="max-w-7xl m-auto">
  
    <section class="dm:my-10">
        <h2 class="text-gray-200 text-2xl font-bold text-center mb-8">Články</h2>

        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($blogs as $blog)
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col">
                        <img class="w-full h-48 object-cover mb-4" src="{{ asset($blog->image_path) }}" alt="Obrázek k článku">
                        <div class="flex-1">
                            <h1 class="text-2xl font-bold text-gray-200 mb-4">{{ \Illuminate\Support\Str::limit($blog->title, 150) }}</h1>
                            <p class="text-gray-200">
                                {{ \Illuminate\Support\Str::limit($blog->content, 500) }} 
                                <a href="{{ route('blogs.show', $blog->id) }}" class="text-blue-400 underline">Přečíst více</a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
     
</main>
</x-layouts.index>