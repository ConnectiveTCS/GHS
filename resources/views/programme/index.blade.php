<x-app-layout>
    {{-- Hero --}}
    @include('components.hero-section', [
        'bg' => asset('assets/Club150_Hero_BG.jpg'),
        'button1' => [
            'component' => 'components.button',
            'href' => '#',
            'content' => 'Download Full Programme',
            'bgColor' => '#DE2413',
            'mt' => 2
],
        'button2' => [
            'component' => 'components.button',
            'href' => '#',
            'content' => 'RSVP for Banquet',
            'bgColor' => '#262A40',
            'mt' => 2
],
'h1' => 'A Celebration 150 Years in the Making',
// 'p' => 'Explore the exciting lineup of events designed to honor our past, celebrate the present, and inspire the future. From networking with alumni to reliving treasured memories, there’s something for everyone.'
'hideImg' => 'hidden',
'p' => 'Explore the exciting lineup of events designed to honor our past, celebrate the present, and inspire the future. From networking with alumni to reliving treasured memories, there’s something for everyone.'
    ])
    {{-- Programme Section --}}
    <section class="bg-white h-[70vh] flex flex-col justify-start items-start py-[50px] px-[50px]" style="background-image: url('') }}'); background-size: cover; background-position: center;">
        <h1 class="montagu-slab-h1 text-3xl mb-2">Programme</h1>
        {{-- Events --}}
        <div>
            
        </div>
    </section>
</x-app-layout>
