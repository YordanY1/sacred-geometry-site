<div>
    <div class="bg-primary text-text font-primary px-6 py-20">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-accent mb-6">{{ $post->title }}</h1>

            <p class="text-sm text-text/60 mb-8">
                Публикувано на {{ $post->created_at->format('d.m.Y') }}
            </p>

            <div class="prose prose-invert max-w-none text-text/90">
                {!! nl2br(e($post->body)) !!}
            </div>
        </div>
    </div>

</div>
