<div class="bg-primary text-[--color-text] min-h-screen py-20 px-6 font-primary">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-wide text-accent">
            Сакрална геометрия и космично познание
        </h1>

        <p class="text-lg md:text-xl italic text-accent/70 mb-10 leading-relaxed">
            „Хармонията на космоса е музиката на сакралната геометрия.“
        </p>

        <a href="{{ route('blog') }}"
            class="inline-block px-8 py-3 rounded-full bg-[--color-primary-light] text-accent font-semibold uppercase tracking-wide shadow-[0_0_10px_#d4af37] hover:bg-accent hover:text-black transition">
            Разгледай знанието
        </a>
    </div>

    <div class="mt-16 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="flex justify-center">
            <img src="{{ asset('images/kepler-triangle.png') }}" alt="Сакрална геометрия"
                class="w-full max-w-md opacity-90 hover:scale-105 transition-transform duration-500">
        </div>
        <div class="text-text text-lg leading-relaxed">
            <h3 class="text-2xl font-bold text-accent mb-4">Какво представлява Kepler-овият триъгълник?</h3>
            <p>
                Това е специален правоъгълен триъгълник, чиито страни са в съотношение с числата на златното сечение.
                В сакралната геометрия той символизира баланса между духа и материята и присъства в природата,
                архитектурата и изкуството.
            </p>
        </div>

    </div>


    <div class="mt-24">
        <livewire:components.core-topics />
    </div>

    <livewire:components.latest-posts />

    <livewire:components.social-links />

</div>
