<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Abizena -->
        <div>
            <x-input-label for="abizena" :value="__('Abizena')" />
            <x-text-input id="abizena" class="block mt-1 w-full" type="text" name="abizena" :value="old('abizena')" required autofocus autocomplete="abizena" />
            <x-input-error :messages="$errors->get('abizena')" class="mt-2" />
        </div>

        <!-- Jaiotze-Data -->
        <div>
            <x-input-label for="jaiodata" :value="__('Jaiodata')" />
            <x-text-input id="jaiodata" class="block mt-1 w-full" type="date" name="jaiodata" :value="old('jaiodata')" required autofocus autocomplete="jaiodata" />
            <x-input-error :messages="$errors->get('jaiodata')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Rola -->
        <div>
            <x-input-label for="rola" :value="__('Rola')" />
            <select id="rola" class="block mt-1 w-full" name="rola" required>
                <option value="0" {{ old('rola') == '0' ? 'selected' : '' }}>{{ __('Ikasle') }}</option>
                <option value="1" {{ old('rola') == '1' ? 'selected' : '' }}>{{ __('Irakasle') }}</option>
            </select>
            <x-input-error :messages="$errors->get('rola')" class="mt-2" />
</div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
