<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{url('\logo-nobg.png')}}" class="h-24 px-0 mt-0 w-40 self-center">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-purple-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            

            <div class="flex items-center mt-4">
                <div class="items-start underline text-sm text-purple-700 hover:text-purple-600 mr-10">
                <a href="{{ route('register') }}">Register Now </a>
                </div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-purple-600 hover:text-purple-600 mr-5" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 bg-transparent hover:bg-purple text-purple font-semibold hover:text-white">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            @include('flash-message')
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
