<x-app-layout>
    {{-- Hero --}}
    @include('components.hero-section', [
        'bg' => asset('assets/Club150_Hero_BG.jpg'),
        'button1' => [
            'component' => 'components.button',
            'href' => '#',
            'content' => 'Join Club 150 Now',
            'bgColor' => '#DE2413',
            'mt' => 2,
        ],
        'button2' => [
            'component' => 'components.button',
            'href' => '#',
            'content' => 'Once Off Payment',
            'bgColor' => '#262A40',
            'mt' => 2,
        ],
        'h1' => 'Welcome to Club 150',
        'hideImg' => 'hidden',
        'p' =>
            'For 150 years, Girls High School has nurtured generations of leaders, dreamers, and changemakers. This year, as we celebrate our remarkable milestone, we invite you to be part of this historic journey.',
    ])
    {{-- Programme --}}
    <section class="bg-white flex flex-col justify-start items-start px-[50px] py-[100px]"
        style="background-image: url('') }}'); background-size: cover; background-position: center;">
        <h1 class="montagu-slab-h1 text-4xl mb-2 text-left w-[40%]">See Your Contributions in Action – Club 150 Projects
        </h1>
        <p class="text-2xl md:text-xl text-pretty w-[35%]">Thanks to your generous support, we're transforming Girls High
            School for future generations. Here’s a look at the projects your donations are making possible.</p>
            {{-- Projects Container --}}
        <div class="flex flex-col gap-4 bg-[#262A40] w-full mt-8 rounded-[20px] p-8">
        <!-- Tabs -->
        <div class="flex justify-start my-6">
            <button class="px-4 py-2 rounded-tl-2xl bg-red-600 text-white mr-2">Current</button>
            <button class="px-4 py-2 rounded-tl-2xl bg-gray-700 text-white mr-2">Upcoming</button>
            <button class="px-4 py-2 rounded-tl-2xl bg-gray-700 text-white">Completed</button>
        </div>

        <!-- Project Cards -->
        <div class="mx-auto space-y-8 px-4 w-full">
            <!-- Garden Revival -->
            @foreach ( $projectCards as $card )
                
            @include('components.projectCards')
            @endforeach
        </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('button');
            const cards = document.querySelectorAll('.project-card');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => {
                        t.classList.remove('bg-red-600');
                        t.classList.add('rounded-tl-2xl'); // remove pb-2 from all tabs
                        tab.classList.remove('rounded-t-lg')
                    });
                    tab.classList.add('bg-red-600');
                    tab.classList.remove('rounded-tl-2xl');
                    tab.classList.add('rounded-t-lg') // add pb-2 to active tab

                    const selectedTab = tab.textContent.toLowerCase();
                    cards.forEach(card => {
                        if (card.dataset.category === selectedTab) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                });
            });
        });
    </script>
</x-app-layout>
