<x-app-layout>
    {{-- Hero --}}
    <section class="h-[80vh] bg-black flex flex-col justify-center items-center"
        style="background-image: url('{{ asset('assets/Home_Hero_BG.jpg') }}'); background-size: cover; background-position: center;">
        {{-- Overlay --}}
        <div class="w-screen h-[80vh] z-10 heroBG absolute">0</div>
        {{-- Center Content --}}
        <div
            class="text-black text-center z-20 relative flex flex-col justify-center items-center rounded-md max-w-[50%] text-balance py-[10px] px[10px] bg-white bg-opacity-80 backdrop-blur shadow-xl">
            <h1 class=" montagu-slab-h1 text-center text-4xl md:text-5xl">
                Reuniting Generations, Rekindling Memories.
            </h1>
            <p class=" text-center text-2xl md:text-xl text-pretty w-[82%]">
                Join us for a once-in-a-lifetime celebration of Girls High School’s legacy and community.
            </p>
            @include('components.button', ['content' => 'Register Now', 'href' => '/alumni_register'])
        </div>
    </section>
    {{-- Red Square --}}
    <section class="bg-white h-[70vh] flex flex-col justify-center items-center" style="background-image: url('{{ asset('assets/Section_2_BG.png') }}'); background-size: cover; background-position: center;">
        {{-- Overlay --}}
        <div class="w-screen h-[70vh] z-10 heroBG absolute">0</div>
        {{-- Center Content --}}
        <div class="bg-[#DE2413] text-white text-center py-8 px-8 w-1/3 z-20">
            <h2 class="montagu-slab-h1 text-4xl mb-2">
                150 Years of Tradition, Excelence, and Community.
            </h2>
            <p class="text-5xl tangerine-regular">
                For 150 years, Girls High School has been a beacon of learning, leadership, and legacy. This year, we
                invite you to celebrate this incredible milestone with us through events that honor our history, our
                people, and our community.
        </div>
    </section>
</x-app-layout>
