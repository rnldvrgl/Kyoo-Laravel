<x-layout>
    <div class="bg-kyoo-secondary-400 text-white">
        {{-- Navbar --}}
        <nav class="relative container mx-auto p-6">
            {{-- Flex Container --}}
            <div class="flex items-center justify-between">
                {{-- Logo --}}
                <div class="pt-2">
                    <img src="{{ URL::to('/') }}/images/kyoo-logo.svg" alt="kyoo-logo" class="h-16 w-16 mr-2">
                </div>
                {{-- Menu Items --}}
                <div class="hidden space-x-12 md:flex ">
                    <a href="#"
                        class=" py-2 px-2 hover:text-kyoo-primary-300 border-b-2 border-kyoo-primary-400 transition duration-200 ">
                        HOME
                    </a>
                    <a href="#" class="py-2 px-2 hover:text-kyoo-primary-300 transition duration-200">FAQs</a>

                    <a href="#" class="py-2 px-2 hover:text-kyoo-primary-300 transition duration-200">SEND
                        FEEDBACK</a>
                </div>
                {{-- Buttons --}}
                <div class="hidden space-x-3 md:flex">
                    <a href="#" class="btn-primary-red">LOGIN</a>
                    <a href="#" class="btn-primary-red">VIEW
                        QUEUE</a>
                </div>

                {{-- Not Final --}}
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-kyoo-secondary-500" x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="white">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        {{-- Hero Section --}}
        @include('partials.__hero-section')

        {{-- Wave --}}
        <img src="{{ URL::to('/') }}/images/wave.png" alt="" class="w-auto">

        {{-- Footer Section --}}
        @include('partials.__footer')
</x-layout>
