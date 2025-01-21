<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div><br><br>

                <div class="flex justify-center mb-4">
                    <a href="{{ route('moduluak.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                        {{ __('Moduluak kudeatu') }}
                    </a>
                </div>

                <div class="flex justify-center mb-4">
                    <a href="{{ route('ikasleak') }}" class="inline-block bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                        {{ __('ikasle Zerrenda') }}
                    </a>
                </div>

                <div class="flex justify-center">
                    <a href="{{ route('moduluak.ikaslea') }}" class="inline-block bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">
                        {{ __('Moduluak ikusi') }}
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>




