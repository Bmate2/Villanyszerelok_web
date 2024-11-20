<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex justify-center">
           <h1 class="text-3xl text-yellow-600 font-bold">Regisztráció</h1> 
        </div>

        <!-- Name -->
        <div>
            <x-text-input   id="name" 
                            class="block 
                                mt-5 
                                w-full 
                                border-4 
                                border-yellow-400 
                                rounded-lg 
                                p-3 
                                focus:ring-yellow-500 
                                font-bold" 
                            type="text" 
                            name="name" :value="old('name')" 
                            required autofocus autocomplete="name" 
                            placeholder="Írd be ide a nevedet"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input   id="email" 
                            class="block 
                                mt-1 
                                w-full 
                                border-4 
                                border-yellow-400 
                                rounded-lg 
                                p-3
                                focus:ring-yellow-500 
                                font-bold" 
                            type="email" 
                            name="email" :value="old('email')" 
                            required autocomplete="username"
                            placeholder="Írd be ide az címedet"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input   id="password" 
                            class="block 
                                mt-1 
                                w-full 
                                border-4 
                                border-yellow-400 
                                rounded-lg 
                                p-3 
                                focus:ring-yellow-500 
                                font-bold"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="Írd be ide a jelszavadat"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input   id="password_confirmation" 
                            class="block 
                                mt-1 
                                w-full 
                                border-4 
                                border-yellow-400 
                                rounded-lg 
                                p-3 
                                focus:ring-yellow-500 
                                font-bold"
                            type="password"
                            name="password_confirmation" 
                            required autocomplete="new-password" 
                            placeholder="Írd be ide a újra jelszavadat"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between block mt-4">
            <a class="  underline 
                        font-bold
                        text-sm text-gray-600 
                        hover:text-yellow-600  
                        rounded-md
                        focus:ring-yellow-400 
                        focus:ring-2 
                        focus:ring-offset-2 
                        focus:ring-yellow-400
                        justify-end" 
                href="{{ route('login') }}">
                {{ __('Már regisztráltál?') }}
            </a>
            
            <button type="submit" 
                    class=" bg-yellow-500 
                            text-white 
                            font-bold 
                            py-3 
                            px-6 
                            rounded-lg 
                            shadow-lg 
                            border-4 
                            border-yellow-600 
                            hover:bg-yellow-600 
                            transition-transform 
                            transform hover:scale-105 
                            focus:outline-none 
                            focus:ring-2 
                            focus:ring-yellow-400 
                            focus:ring-offset-2">
                {{ __('Regisztráció') }}
            </button>
        </div>
    </form>
</x-guest-layout>
