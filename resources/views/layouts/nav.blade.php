<nav class="relative bg-[#262A40] text-white px-4 md:px-8 py-2">
    <div class="flex items-center justify-between">
        <img src="{{ asset('assets/GHS_Badge.png') }}" alt="GHS Logo" class="h-12 w-12 md:h-16 md:w-16">
        
        <!-- Mobile menu button -->
        <button class="md:hidden text-white hover:text-[#DE2413]" onclick="toggleMenu()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Desktop menu -->
        <ul class="hidden md:flex flex-row items-center justify-center gap-4">
            <li><a href="/" class="hover:border-b-2 hover:transition-colors hover:text-[#DE2413]">Home</a></li>
            <li><a href="/club_150" class="hover:border-b-2 hover:transition-colors hover:text-[#DE2413]">Club 150</a></li>
            <li><a href="/programme" class="hover:border-b-2 hover:transition-colors hover:text-[#DE2413]">Programme</a></li>
            <li><a href="/pillar_project" class="hover:border-b-2 hover:transition-colors hover:text-[#DE2413]">Pillar Project</a></li>
            <li><a href="/alumni" class="hover:border-b-2 hover:transition-colors hover:text-[#DE2413]">Alumni</a></li>
        </ul>

        <div class="hidden md:flex flex-col items-center gap-2">
            <a href="/alumni_register" class="bg-[#DE2413] text-white px-4 py-2 w-full text-center hover:bg-white hover:text-[#DE2413] rounded-md transition-all">Register</a>
            <a href="/donate" class="bg-[#262A40] text-white px-4 py-2 w-full text-center hover:bg-white hover:text-[#DE2413] rounded-md transition-all border border-white">Donate</a>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden mt-4">
        <ul class="flex flex-col gap-4 pb-4">
            <li><a href="/" class="block hover:text-[#DE2413]">Home</a></li>
            <li><a href="/club_150" class="block hover:text-[#DE2413]">Club 150</a></li>
            <li><a href="/programme" class="block hover:text-[#DE2413]">Programme</a></li>
            <li><a href="/pillar_project" class="block hover:text-[#DE2413]">Pillar Project</a></li>
            <li><a href="/alumni" class="block hover:text-[#DE2413]">Alumni</a></li>
        </ul>
        <div class="flex flex-col gap-2 pt-4 border-t border-gray-600">
            <a href="/alumni_register" class="bg-[#DE2413] text-white px-4 py-2 text-center hover:bg-white hover:text-[#DE2413] rounded-md transition-all">Register</a>
            <a href="/donate" class="bg-[#262A40] text-white px-4 py-2 text-center hover:bg-white hover:text-[#DE2413] rounded-md transition-all border border-white">Donate</a>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }
</script>