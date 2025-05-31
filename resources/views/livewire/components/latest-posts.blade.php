<section class="bg-primary-light py-24 px-6 text-text">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-accent mb-12">Нови Публикации</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
            @forelse ($latestPosts as $post)
                <a href="{{ route('blog.show', $post->slug) }}" wire:navigate
                    class="bg-primary p-6 rounded-xl shadow hover:shadow-lg transition flex flex-col justify-between group">

                    @if ($post->image)
                        <div class="h-48 w-full mb-4 overflow-hidden rounded-lg shadow-inner">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Снимка към {{ $post->title }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        </div>
                    @endif

                    <div>
                        <h3 class="text-xl font-bold text-accent mb-2 group-hover:text-hover">
                            {{ $post->title }}
                        </h3>
                        <p class="text-text/80 mb-4 text-base leading-relaxed">
                            {{ $post->excerpt }}
                        </p>
                    </div>

                    <span class="text-accent hover:text-hover font-semibold text-sm uppercase tracking-wide">
                        Прочети повече →
                    </span>
                </a>

            @empty
                <p class="text-text/60 col-span-3">Все още няма публикувани статии.</p>
            @endforelse
        </div>
    </div>
</section>
