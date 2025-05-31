<div class="bg-primary text-text py-20 px-6 font-primary min-h-screen">
    <div class="max-w-6xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-accent mb-12">Книги и Източници</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 text-left">
            @forelse ($books as $book)
                <a href="{{ route('books.show', $book->slug) }}" wire:navigate
                    class="bg-primary-light p-6 rounded-xl shadow hover:shadow-lg transition group flex flex-col overflow-hidden">


                    @if ($book->cover_image)
                        <div class="h-90 w-full mb-4 overflow-hidden rounded-lg shadow-inner">
                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Корица на {{ $book->title }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        </div>
                    @endif


                    <h3 class="text-xl font-bold text-accent group-hover:text-hover mb-1">
                        {{ $book->title }}
                    </h3>
                    @if ($book->author)
                        <p class="text-sm italic text-text/60 mb-2">от {{ $book->author }}</p>
                    @endif


                    <p class="text-text/80 mb-4 text-base leading-relaxed line-clamp-4">
                        {{ $book->description }}
                    </p>


                    <div class="text-accent font-semibold text-sm mb-4">
                        @if ($book->discount_price)
                            <span class="line-through text-text/60 mr-2">{{ number_format($book->price, 2) }} лв</span>
                            <span>{{ number_format($book->discount_price, 2) }} лв</span>
                        @elseif ($book->price)
                            {{ number_format($book->price, 2) }} лв
                        @endif
                    </div>

                    <div class="mt-auto">
                        <span
                            class="inline-block mt-2 px-4 py-2 rounded-full bg-accent text-black font-semibold text-sm uppercase tracking-wide shadow hover:bg-hover hover:text-primary transition">
                            Разгледай повече →
                        </span>
                    </div>
                </a>
            @empty
                <p class="text-text/60 col-span-3">Все още няма налични книги.</p>
            @endforelse
        </div>
    </div>
</div>
