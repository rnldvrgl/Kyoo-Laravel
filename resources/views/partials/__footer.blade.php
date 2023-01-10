{{-- Footer Section --}}
<footer class=" bg-kyoo-secondary-400 mt-auto">
    <div class="max-w-2xl mx-auto text-white py-5">
        <div class="text-center">
            <div class="flex flex-col space-y-2 items-center">
                <img src="{{ URL::to('/') }}/images/kyoo-logo.svg" alt="kyoo-logo" class="h-16 w-16">
                <h3 class="text-2xl mb-3">Queueing Management System</h3>
            </div>
            <div class="flex justify-center my-5">
                <div class="flex flex-wrap justify-center -mx-5 -my-2">
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-400 hover:text-kyoo-primary-300 ">
                            Home
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-400 hover:text-kyoo-primary-300">
                            FAQs
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-400 hover:text-kyoo-primary-300 ">
                            Send Feedback
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 flex flex-col md:flex-row md:justify-between items-center text-md text-gray-400">
            <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Morse Coders, 2022. </p>
            <div class="order-1 md:order-2">
                <span class="px-3">Ronald</span>
                <span class="px-3 border-l">Willy</span>
                <span class="px-3 border-l">Shey</span>
            </div>
        </div>
    </div>
</footer>
