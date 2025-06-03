<nav x-data="{ open: false }" class="bg-primary text-text font-primary border-b border-white/10 shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        {{-- Logo --}}
        <a href="/" wire:navigate class="inline-block group">
            <img src="{{ asset('images/logo/geometria_anima.png') }}" alt="Сакрална геометрия лого"
                class="h-16 sm:h-20 lg:h-24 w-auto rounded-xl shadow-lg group-hover:scale-110 transition duration-300">
        </a>

        {{-- Search (Desktop) --}}
        <div class="hidden md:flex items-center relative w-72 group">
            <i
                class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-accent"></i>

            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Търси теми, курсове или книги..."
                class="w-full pl-10 pr-4 py-2 rounded-full bg-white text-black shadow-lg focus:outline-none focus:ring-2 focus:ring-accent transition placeholder-gray-500">

            @if (strlen($search) >= 2)
                <div
                    class="absolute top-full mt-2 w-full bg-white text-black rounded-xl shadow-2xl z-50 max-h-64 overflow-auto border border-accent/20 animate-scale-fade-in">

                    @forelse ($results as $group => $items)
                        @if (count($items))
                            <div
                                class="px-4 py-2 border-b border-gray-200 font-semibold text-accent uppercase text-xs tracking-wide">
                                {{ $group }}
                            </div>
                            @foreach ($items as $item)
                                @php
                                    $route = match ($group) {
                                        'Блог статии' => route('blog.show', $item->slug),
                                        'Курсове' => route('courses.show', $item->slug),
                                        'Книги' => route('books.show', $item->slug),
                                        default => '#',
                                    };
                                @endphp
                                <a href="{{ $route }}"
                                    class="block px-4 py-2 text-sm hover:bg-accent hover:text-white transition duration-150">
                                    {{ $item->title }}
                                </a>
                            @endforeach
                        @endif
                    @empty
                        <div class="px-4 py-3 text-sm text-gray-600">Няма резултати</div>
                    @endforelse
                </div>
            @endif
        </div>


        {{-- Desktop Menu --}}
        <ul class="hidden md:flex gap-8 text-base uppercase tracking-wider">
            <li>
                <a href="/" wire:navigate
                    class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-accent
                   hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                    Начало
                </a>
            </li>
            <li>
                <a href="/about" wire:navigate
                    class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-accent
                   hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                    За нас
                </a>
            </li>
            <li>
                <a href="/courses" wire:navigate
                    class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-accent
                   hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                    Курсове
                </a>
            </li>
            <li>
                <a href="/books" wire:navigate
                    class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-accent
                   hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                    Книги
                </a>
            </li>
            <li>
                <a href="/gallery" wire:navigate
                    class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-accent
                   hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                    Галерия
                </a>
            </li>
            <li>
                <a href="/blog" wire:navigate
                    class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-accent
                   hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                    Блог
                </a>
            </li>
            <li>
                <a href="/contact" wire:navigate
                    class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-0.5 after:bg-accent
                   hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                    Контакти
                </a>
            </li>
        </ul>

        {{-- Hamburger --}}
        <button @click="open = !open" class="md:hidden focus:outline-none">
            <i :class="open ? 'fas fa-times' : 'fas fa-bars'" class="text-2xl text-accent"></i>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-transition class="md:hidden px-6 pb-6">

        {{-- Search (Mobile) --}}
        <div class="mt-4 mb-4 relative group">
            <i
                class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-accent"></i>

            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Търси теми, курсове или книги..."
                class="w-full pl-10 pr-4 py-2 rounded-full bg-white text-black shadow-lg focus:outline-none focus:ring-2 focus:ring-accent transition placeholder-gray-500">

            @if (strlen($search) >= 2)
                <div
                    class="absolute top-full mt-2 w-full bg-white text-black rounded-xl shadow-2xl z-50 max-h-64 overflow-auto border border-accent/20 animate-scale-fade-in">
                    @forelse ($results as $group => $items)
                        @if (count($items))
                            <div
                                class="px-4 py-2 border-b border-gray-200 font-semibold text-accent uppercase text-xs tracking-wide">
                                {{ $group }}
                            </div>
                            @foreach ($items as $item)
                                @php
                                    $route = match ($group) {
                                        'Блог статии' => route('blog.show', $item->slug),
                                        'Курсове' => route('courses.show', $item->slug),
                                        'Книги' => route('books.show', $item->slug),
                                        default => '#',
                                    };
                                @endphp
                                <a href="{{ $route }}"
                                    class="block px-4 py-2 text-sm hover:bg-accent hover:text-white transition duration-150">
                                    {{ $item->title }}
                                </a>
                            @endforeach
                        @endif
                    @empty
                        <div class="px-4 py-3 text-sm text-gray-600">Няма резултати</div>
                    @endforelse
                </div>
            @endif
        </div>


        <ul class="flex flex-col gap-4 text-base uppercase tracking-wider">
            <li><a href="/" wire:navigate class="nav-link">Начало</a></li>
            <li><a href="/about" wire:navigate class="nav-link">За нас</a></li>
            <li><a href="/courses" wire:navigate class="nav-link">Курсове</a></li>
            <li><a href="/books" wire:navigate class="nav-link">Книги</a></li>
            <li><a href="/blog" wire:navigate class="nav-link">Блог</a></li>
            <li><a href="/contact" wire:navigate class="nav-link">Контакти</a></li>
        </ul>
    </div>
</nav>
