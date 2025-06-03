<footer class="bg-primary-light text-text pt-20 pb-12 px-6 font-primary">
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mb-16 text-sm">

        <div>
            <h4 class="text-accent font-semibold mb-4 uppercase tracking-wide text-lg">Компания</h4>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('about') }}"
                        class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-px after:bg-accent
                              hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                        За нас
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h4 class="text-accent font-semibold mb-4 uppercase tracking-wide text-lg">Линкове</h4>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('about') }}"
                        class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-px after:bg-accent
                              hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                        Блог
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h4 class="text-accent font-semibold mb-4 uppercase tracking-wide text-lg">Контакти</h4>
            <ul class="space-y-2">
                <li>
                   <a href="{{ route('contact') }}"
                        class="relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-px after:bg-accent
                              hover:after:w-full after:transition-all after:duration-300 hover:text-accent transition">
                        Свържи се с нас
                    </a>
                </li>
            </ul>
        </div>

    </div>


    <div class="border-t border-white/10 pt-6 text-center text-text/50 text-xs tracking-wide">
        © {{ now()->year }} Сакрална геометрия. Всички права запазени.
    </div>
</footer>
