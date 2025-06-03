<div class="bg-primary text-text font-primary px-6 py-20">
    <div class="max-w-3xl mx-auto text-center mb-20">
        <h1 class="text-4xl md:text-5xl font-bold text-accent mb-6">Свържи се с нас</h1>
        <p class="text-lg md:text-xl text-text/80 leading-relaxed">
            Имаш въпрос, идея или вдъхновение? Пиши ни. Очакваме с радост да чуем от теб.
        </p>

        <div class="mt-10 text-accent/80 italic text-lg">
            „Когато мисълта, думите и сърцето са в хармония – се ражда истинската връзка.“
        </div>
    </div>

    <div class="max-w-xl mx-auto">
        @if (session()->has('success'))
            <div class="bg-green-600 text-white p-4 rounded mb-6 text-sm text-center shadow">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="send" class="space-y-6">
            <div>
                <label class="block mb-1 text-sm font-semibold text-accent">Име</label>
                <input type="text" wire:model="name"
                    class="w-full rounded bg-primary-light text-text border border-white/10 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent transition">
                @error('name')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-accent">Имейл</label>
                <input type="email" wire:model="email"
                    class="w-full rounded bg-primary-light text-text border border-white/10 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent transition">
                @error('email')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-accent">Съобщение</label>
                <textarea wire:model="message" rows="5"
                    class="w-full rounded bg-primary-light text-text border border-white/10 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent transition"></textarea>
                @error('message')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="border-2 border-accent text-accent font-semibold px-10 py-3 rounded-full
           hover:bg-accent hover:text-black transition-all duration-300 uppercase tracking-wider
           shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 cursor-pointer">
                Изпрати съобщение
            </button>
        </form>
        <livewire:components.social-links />
    </div>
</div>
