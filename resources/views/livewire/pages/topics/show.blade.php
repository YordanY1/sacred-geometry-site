<div class="bg-primary text-text min-h-screen py-16 px-6 font-primary">
    <div class="max-w-4xl mx-auto">


        <h1 class="text-4xl font-bold text-accent mb-2 flex items-center gap-3">
            <i class="{{ $topic->icon }} text-hover text-2xl"></i>
            {{ $topic->title }}
        </h1>

        <p class="text-lg text-text/80 leading-relaxed mb-10">
            {{ $topic->description }}
        </p>

        <article class="prose prose-invert max-w-none text-text/90 leading-relaxed space-y-8">
            {!! $topic->content !!}
        </article>

    </div>
</div>
