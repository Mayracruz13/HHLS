<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Logo -->
    <div class="flex justify-center mb-4">
        <img src="{{ asset('img/Color.webp') }}" alt="Logo" class="h-20">
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full border-green-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full border-green-500" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- reCAPTCHA -->
        <div class="mt-4">
            <x-input-label :value="__('reCAPTCHA')" />
            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
            <x-input-error :messages="$errors->get('g-recaptcha-response')" class="mt-2" />
        </div>

        <!-- Buttons -->
        <div class="flex items-center justify-between mt-4">
            <x-primary-button class="bg-green-600 hover:bg-green-700 focus:bg-green-700 active:bg-green-800">
                {{ __('Iniciar sesión') }}
            </x-primary-button>

            <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                {{ __('Registrarse') }}
            </a>
        </div>

        <!-- Agregar script de reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </form>
</x-guest-layout>
