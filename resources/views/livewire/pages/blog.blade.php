<div class="bg-primary text-text font-primary px-6 py-20">

    <div class="max-w-4xl mx-auto text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-accent mb-6">Блог</h1>
        <p class="text-lg md:text-xl text-text/80 leading-relaxed">
            Изследвания, вдъхновения и знание за сакралната геометрия, съзнанието и Вселената.
        </p>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach ($posts as $post)
            <div class="bg-primary-light rounded-xl shadow hover:shadow-lg transition overflow-hidden flex flex-col">

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Снимка към {{ $post->title }}"
                        class="w-full h-48 object-cover" />
                @endif

                <div class="p-6 flex flex-col justify-between h-full">
                    <div>
                        <h2 class="text-xl font-bold text-accent mb-3">
                            {{ $post->title }}
                        </h2>
                        <p class="text-text/80 text-sm leading-relaxed mb-6">
                            {{ $post->excerpt }}
                        </p>
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}"
                        class="mt-auto inline-block text-accent hover:text-hover font-semibold transition">
                        Прочети повече →
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
