<section class="bg-primary-light py-24 px-6 text-text" id="explore">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-accent mb-12">Основни Теми</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 text-left">
            @foreach ($topics as $topic)
                <a href="{{ route('topics.show', $topic->slug) }}" wire:navigate
                    class="flex flex-col items-start gap-4 group hover:scale-[1.02] transition-transform bg-primary p-6 rounded-xl shadow hover:shadow-lg">

                    <i class="{{ $topic->icon }} text-5xl text-accent group-hover:text-hover"></i>

                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-accent mb-2 group-hover:text-hover">
                            {{ $topic->title }}
                        </h3>
                        <p class="text-base leading-relaxed text-text/90 mb-4">
                            {{ $topic->description }}
                        </p>
                        <span
                            class="inline-block text-accent hover:text-hover font-semibold text-sm uppercase tracking-wide">
                            Прочети още →
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
