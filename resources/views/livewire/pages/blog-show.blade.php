<div class="bg-primary text-text font-primary px-6 py-20 min-h-screen">
    <div class="max-w-4xl mx-auto">

        @if ($post->image)
            <div class="mb-10 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('storage/' . $post->image) }}" alt="Снимка към {{ $post->title }}"
                    class="w-full h-80 object-cover" />
            </div>
        @endif

        <h1 class="text-4xl md:text-5xl font-bold text-accent mb-4 leading-tight">{{ $post->title }}</h1>
        <p class="text-sm text-text/60 mb-6">
            Публикувано на {{ $post->created_at->format('d.m.Y') }}
        </p>


        @if ($post->excerpt)
            <div class="text-lg italic text-text/70 mb-8 border-l-4 border-accent pl-4">
                {{ $post->excerpt }}
            </div>
        @endif


        <div class="prose prose-invert max-w-none text-text/90 leading-relaxed [&>img]:rounded-xl [&>img]:my-6">
            {!! $post->content !!}
        </div>



        <div class="mt-12">
            <a href="{{ route('blog') }}"
                class="inline-block text-sm text-accent hover:text-hover font-medium transition">
                ← Обратно към блога
            </a>
        </div>
    </div>
</div>
