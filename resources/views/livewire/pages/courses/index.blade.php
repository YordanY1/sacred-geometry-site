<div class="bg-primary text-text py-20 px-6 min-h-screen font-primary">
    <div class="max-w-6xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-accent mb-12">Курсове</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
            @forelse ($courses as $course)
                <a href="{{ route('courses.show', $course->slug) }}" wire:navigate
                    class="bg-primary-light p-6 rounded-xl shadow hover:shadow-lg transition group flex flex-col overflow-hidden">


                    @if ($course->image)
                        <div class="h-60 w-full mb-4 overflow-hidden rounded-lg shadow-inner">
                            <img src="{{ asset('storage/' . $course->image) }}" alt="Корица на {{ $course->title }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        </div>
                    @endif


                    <h3 class="text-xl font-bold text-accent mb-2 group-hover:text-hover">
                        {{ $course->title }}
                    </h3>


                    <p class="text-text/80 mb-4 line-clamp-4">
                        {{ $course->description }}
                    </p>


                    @if ($course->price)
                        <div class="text-accent font-semibold text-sm mb-4">
                            @if ($course->discount_price)
                                <span class="line-through text-text/60 mr-2">{{ number_format($course->price, 2) }}
                                    лв</span>
                                <span>{{ number_format($course->discount_price, 2) }} лв</span>
                            @else
                                {{ number_format($course->price, 2) }} лв
                            @endif
                        </div>
                    @endif

                    <div class="mt-auto">
                        <span
                            class="inline-block px-4 py-2 rounded-full bg-accent text-black font-semibold text-sm uppercase tracking-wide shadow hover:bg-hover hover:text-primary transition">
                            Прочети повече →
                        </span>
                    </div>
                </a>
            @empty
                <p class="text-text/60 col-span-3">Няма налични курсове.</p>
            @endforelse
        </div>
    </div>
</div>
