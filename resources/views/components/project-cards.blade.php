<div class="project-card" data-category="current">
    <div class="flex flex-col md:flex-row  p-4 rounded-lg">
        <div class="flex flex-col">
            <h2 class="text-2xl font-bold mb-2 montagu-slab-h1 text-left text-white">
                {{ $title ?? 'The Garden Revival' }}
            </h2>
            <img src="{{ asset($image ?? 'assets/garden-revival.jpg') }}" alt="Garden Revival"
                class=" h-[400px] min-w-[800px] md:w-1/3 rounded-lg">
        </div>
        <div class="md:ml-6 flex flex-col items-center justify-center text-white text-center">
            <p class="mb-4 text-xl w-[80%]">
                {{ $description ?? 'Revamping the school’s garden, introducing indigenous plants and interactive learning stations for educational purposes.' }}
            </p>
            <p class="text-gray-300">
                {{ $dateOfCompletion ?? '📅 Oct – Dec 2026' }}
            </p>
            <p class="text-gray-300">
                {{ $completionPercentage ?? '🏗️ 75% Completion' }}
            </p>
        </div>
    </div>
</div>
