<div class="bg-primary text-text py-20 px-6 font-primary min-h-screen">
    <div class="max-w-5xl mx-auto">

        <div class="text-center mb-10">
            <h1 class="text-4xl sm:text-5xl font-bold text-accent mb-4 leading-tight">
                {{ $course->title }}
            </h1>
        </div>


        @if ($course->image)
            <div class="mb-10 text-center">
                <img src="{{ asset('storage/' . $course->image) }}" alt="Корица на курса"
                    class="w-full max-w-2xl mx-auto rounded-xl shadow hover:scale-105 transition-transform duration-300">
            </div>
        @endif


        @if ($course->price)
            <div class="text-center text-2xl text-accent font-semibold mb-6">
                @if ($course->discount_price)
                    <span class="line-through text-text/60 mr-2">{{ number_format($course->price, 2) }} лв</span>
                    <span>{{ number_format($course->discount_price, 2) }} лв</span>
                @else
                    {{ number_format($course->price, 2) }} лв
                @endif
            </div>
        @endif


        @if ($course->description)
            <p class="text-base text-text/80 leading-relaxed mb-10 text-center max-w-3xl mx-auto">
                {{ $course->description }}
            </p>
        @endif


        @if ($course->video_path)
            <div class="mb-12">
                <video controls class="w-full max-w-4xl mx-auto rounded-xl shadow">
                    <source src="{{ asset('storage/' . $course->video_path) }}" type="video/mp4">
                    Вашият браузър не поддържа видео елемент.
                </video>
            </div>
        @elseif ($course->video_url)
            <div class="mb-12 aspect-w-16 aspect-h-9">
                <iframe src="{{ $course->video_url }}" class="w-full h-full rounded-xl shadow" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        @endif

        @if ($course->content)
            <div class="prose prose-invert max-w-none">
                {!! $course->content !!}
            </div>
        @endif

    </div>
</div>
