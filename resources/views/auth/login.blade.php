<x-app-layout>
    <section class="w-full h-screen bg-center bg-cover bg-blob">
        <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
            <div class="rounded-2xl shadow-3xl w-full max-w-4xl overflow-hidden">
                <div class="md:flex w-full">
                    {{-- Left Item --}}
                    <div class="hidden md:flex flex-col justify-center align-center text-center w-fit px-16 space-y-6">
                        <x-application-logo />
                        <h3 class="text-kyoo-secondary-400 font-bold uppercase">Queueing Management System</h3>
                    </div>

                    {{-- Right Item --}}
                    <div class="w-full
                        md:w-3/5 py-10 px-5 md:px-10">
                        <div class="text-center mb-5">
                            <div class="flex align-center justify-center p-3">
                                <x-avatar />
                            </div>
                            <h1 class="font-bold text-3xl text-gray-900">SIGN IN</h1>
                            <p>Enter your information to login</p>
                        </div>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Email --}}
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <x-carbon-email class="h-6" />
                                        </div>

                                        <x-text-input id="email" type="email" name="email" :value="old('email')"
                                            placeholder="johnsmith@example.com" required autofocus />
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            {{-- Password --}}
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-12">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <x-carbon-password class="h-6" />
                                        </div>
                                        <x-text-input id="password" type="password" placeholder="************"
                                            name="password" required autocomplete="current-password" />
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>


                            {{-- Sign in Button --}}
                            <div class="flex -mx-3">
                                <div class="w-full px-3">
                                    <button
                                        class="block w-full mx-auto bg-kyoo-primary-300 hover:bg-kyoo-primary-400  focus:bg-kyoo-primary-500 text-white rounded-lg px-3 py-3 font-semibold">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
