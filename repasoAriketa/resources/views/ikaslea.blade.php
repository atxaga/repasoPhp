<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zure Moduluak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-bold mb-4">{{ __('Matrikulatu Zure Moduluak') }}</h3>

                    @if($moduluak->isEmpty())
                        <p>{{ __('Ez zaude inon matrikulatuta.') }}</p>
                    @else
                        <table class="table-auto w-full text-left border-collapse border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2">{{ __('Izena') }}</th>
                                    <th class="border border-gray-300 px-4 py-2">{{ __('Gela') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($moduluak as $modulo)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $modulo->izena }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $modulo->gela }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

