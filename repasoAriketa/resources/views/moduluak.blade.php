<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moduluak Kudeatzeko Orria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-bold mb-4">{{ __('Modulu berria sortu') }}</h3>

                    <form action="{{ route('moduluak.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="izena" :value="__('Izena')" />
                            <x-text-input id="izena" class="block mt-1 w-full" type="text" name="izena" :value="old('izena')" required />
                            <x-input-error :messages="$errors->get('izena')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="gela" :value="__('Gela')" />
                            <x-text-input id="gela" class="block mt-1 w-full" type="text" name="gela" :value="old('gela')" required />
                            <x-input-error :messages="$errors->get('gela')" class="mt-2" />
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('Gorde') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <hr class="my-6">

                    <h3 class="text-lg font-bold mb-4">{{ __('Erregistratutako Moduluak') }}</h3>
                    <table class="table-auto w-full text-left border-collapse border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">{{ __('Izena') }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ __('Gela') }}</th>
                                <th class="border border-gray-300 px-4 py-2">{{ __('Ekintzak') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($moduluak as $modulo)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $modulo->izena }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $modulo->gela }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        
                                        <a href="{{ route('moduluak.edit', $modulo->id) }}" class="text-blue-500 hover:underline">{{ __('Editatu') }}</a>

                                        <form action="{{ route('moduluak.destroy', $modulo->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline ml-2">
                                                {{ __('Ezabatu') }}
                                            </button>
                                        </form>

                                        <form action="{{ route('matrikulatu', $modulo->id) }}" method="POST" class="inline ml-2">
                                            @csrf
                                            <button type="submit" class="bg-green-500  p-2 rounded">
                                                {{ __('Matrikulatu') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4">{{ __('Ez dago erregistratutako modulurik.') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


