<div class="bg-primary text-text min-h-screen py-16 px-6 font-primary">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-accent mb-6">
            {{ $topic->title }}
        </h1>

        <p class="text-lg text-text/80 leading-relaxed mb-12">
            {{ $topic->description }}
        </p>


        <div class="bg-primary-light p-6 rounded-xl shadow-inner text-text">
            <p>Тук скоро ще добавим съдържание по темата <strong>{{ $topic->title }}</strong>.</p>
        </div>
    </div>
</div>
