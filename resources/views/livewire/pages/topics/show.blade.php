<div class="bg-primary text-text min-h-screen py-16 px-6 font-primary">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-accent mb-6 flex items-center gap-3">
            <i class="{{ $topic->icon }} text-hover text-2xl"></i>
            {{ $topic->title }}
        </h1>

        <p class="text-lg text-text/80 leading-relaxed mb-10">
            {{ $topic->description }}
        </p>

        @forelse($groupedPosts as $section => $articles)
            <div class="mb-10">
                <h2 class="text-2xl font-bold text-accent mb-4">{{ $section ?? 'Без секция' }}</h2>

                <ul class="space-y-2 list-disc list-inside">
                    @foreach ($articles as $index => $post)
                        <li>
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-hover hover:underline">
                                Статия {{ $loop->iteration }} – {{ $post->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @empty
            <p class="text-text/70">Няма налични статии по тази тема.</p>
        @endforelse
    </div>
</div>
