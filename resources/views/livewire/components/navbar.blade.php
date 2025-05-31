<nav x-data="{ open: false }" class="bg-primary text-text font-primary border-b border-white/10 shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        {{-- Logo --}}
        <a href="/" wire:navigate class="text-2xl font-bold text-accent tracking-wide">
            Сакрална геометрия
        </a>

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
