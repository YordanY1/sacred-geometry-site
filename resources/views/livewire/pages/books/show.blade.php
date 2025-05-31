<div class="bg-primary text-text py-20 px-6 font-primary min-h-screen">
    <div class="max-w-5xl mx-auto">

        <div class="text-center mb-10">
            <h1 class="text-4xl sm:text-5xl font-bold text-accent mb-4 leading-tight">
                {{ $book->title }}
            </h1>
            @if ($book->author)
                <p class="text-lg italic text-text/70">от {{ $book->author }}</p>
            @endif
        </div>


        @if ($book->cover_image || $book->back_image)
            <div class="flex flex-col sm:flex-row justify-center gap-10 mb-16 text-center">

                @if ($book->cover_image)
                    <div class="flex-1">
                        <p class="mb-2 text-accent font-semibold text-sm uppercase tracking-wide">Корица</p>
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Корица на {{ $book->title }}"
                            class="w-full max-w-xs mx-auto rounded-xl shadow-lg hover:scale-105 transition-transform duration-300" />
                    </div>
                @endif


                @if ($book->back_image)
                    <div class="flex-1">
                        <p class="mb-2 text-accent font-semibold text-sm uppercase tracking-wide">Задна корица</p>
                        <img src="{{ asset('storage/' . $book->back_image) }}" alt="Задна корица на {{ $book->title }}"
                            class="w-full max-w-xs mx-auto rounded-xl shadow-md hover:scale-105 transition-transform duration-300" />
                    </div>
                @endif

            </div>
        @endif


        <div class="text-center max-w-3xl mx-auto mb-12">
            @if ($book->price)
                <div class="text-2xl font-semibold text-accent mb-4">
                    @if ($book->discount_price)
                        <span class="line-through text-text/60 mr-2">{{ number_format($book->price, 2) }} лв</span>
                        <span>{{ number_format($book->discount_price, 2) }} лв</span>
                    @else
                        {{ number_format($book->price, 2) }} лв
                    @endif
                </div>
            @endif

            @if ($book->description)
                <p class="text-base leading-relaxed text-text/80">
                    {{ $book->description }}
                </p>
            @endif
        </div>

        @if ($book->content)
            <div class="prose prose-invert max-w-none mb-12">
                {!! $book->content !!}
            </div>
        @endif

    </div>
</div>
