<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form  method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex justify-center">
            <h1 class="text-3xl text-yellow-600 font-bold">Üdv újra itt!</h1>
        </div>

        <!-- Email Address -->
        <div class="relative mt-6">
            <x-text-input id="email" 
                            class="block mt-1 w-full border-4 border-yellow-400 rounded-lg p-3 focus:ring-yellow-500 font-bold" 
                            type="email" 
                            name="email" :value="old('email')" 
                            required autofocus autocomplete="username" 
                            placeholder="Írd be ide az email címedet"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="relative mt-6">
            <x-text-input id="password" 
                            class="block mt-1 w-full border-4 border-yellow-400 rounded-lg p-3 focus:ring-yellow-500 font-bold"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="Írd be ide a jelszavadat"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="h-5 w-5 text-yellow-600 border-4 border-yellow-600 rounded-lg focus:ring-yellow-400" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Emlékezz rám') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="  underline 
                            text-sm text-gray-600 
                            hover:text-gray-900 rounded-md 
                            focus:ring-yellow-400 
                            focus:ring-2 
                            focus:ring-offset-2 
                            focus:ring-indigo-500
                            justify-end" 
                            href="{{ route('password.request') }}">
                    {{ __('Elfelejtetted a jelszavadat?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-center mt-4">
            <button type="submit" class="bg-yellow-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg border-4 border-yellow-600 hover:bg-yellow-600 transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
                {{ __('Bejelentkezés') }}
            </button>
        </div>
    </form>
       
</x-guest-layout>
