<div class="bg-primary text-text font-primary px-6 py-20 min-h-screen">
    <div class="max-w-5xl mx-auto text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-accent mb-4">Галерия</h1>
        <p class="text-lg text-text/70">Свещени форми, геометрия и вдъхновения в изображения.</p>
    </div>

    <div x-data="{ open: false, imageUrl: '' }" class="relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            @foreach ($images as $img)
                <div class="overflow-hidden rounded-xl shadow group cursor-pointer"
                    @click="open = true; imageUrl = '{{ asset('storage/' . $img->image) }}'">
                    <img src="{{ asset('storage/' . $img->image) }}" alt="{{ $img->title }}"
                        class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" />
                </div>
            @endforeach
        </div>

        <!-- Fullscreen overlay -->
        <div x-show="open" x-transition class="fixed inset-0 bg-black/80 flex items-center justify-center px-4 z-50"
            @click.away="open = false" @keydown.escape.window="open = false">

            <!-- Close Button -->
            <button @click="open = false"
                class="absolute top-4 right-4 text-white bg-white/10 hover:bg-white/20 rounded-full p-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <img :src="imageUrl" class="max-h-[90vh] max-w-full rounded-lg shadow-lg" />
        </div>

    </div>

</div>
