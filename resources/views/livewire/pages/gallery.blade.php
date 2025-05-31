<div class="bg-primary text-text font-primary px-6 py-20 min-h-screen">
    <div class="max-w-5xl mx-auto text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-accent mb-4">Галерия</h1>
        <p class="text-lg text-text/70">Свещени форми, геометрия и вдъхновения в изображения.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        @foreach ($images as $img)
            <div class="overflow-hidden rounded-xl shadow group">
                <img src="{{ asset('storage/' . $img->image) }}" alt="{{ $img->title }}"
                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" />
            </div>
        @endforeach
    </div>
</div>
