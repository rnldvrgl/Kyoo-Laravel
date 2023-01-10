{{-- Hero Section --}}
<section id="hero">
    {{-- Flex Container --}}
    <div class="container flex flex-col justify-center items-center px-6 mx-auto space-y-0 md:space-y-0 lg:flex-row">
        {{-- Image --}}
        <div class="flex items-center justify-center">
            <img class="w-full h-full" src="{{ URL::to('/') }}/images/waiting-line.png" alt="waiting-line">
        </div>
        {{-- Left Item --}}
        <div class="flex flex-col mb-32 space-y-14 lg:w-5/12">
            <h1 class="text-5xl font-bold leading-none sm:text-5xl text-center lg:text-5xl lg:text-left">
                Handle your
                queues
                <span class="dark:text-kyoo-primary-100">wisely</span> and <span
                    class="dark:text-kyoo-primary-100">instantaneously</span>
            </h1>
            <p class="mt-6 mb-8 text-lg text-center lg:text-left">Republic Central Colleges is
                committed to providing
                quality services to students, graduates, faculty, and other members of the school.</p>
            <div class="flex justify-center lg:justify-start">
                <a href="#" class="btn-primary-red inline-flex items-center justify-center">
                    <x-carbon-home class="h-6 w-6" />
                    <span class="w-full"> VIEW QUEUE</span>
                </a>
            </div>
        </div>
    </div>
</section>
</div>
