<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editatu Modulu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-bold mb-4">{{ __('Moduluaren Datuak Aldatu') }}</h3>
                    
                    <!-- Formulario para Editar un Módulo -->
                    <form action="{{ route('moduluak.update', $modulo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <x-input-label for="izena" :value="__('Izena')" />
                            <x-text-input id="izena" class="block mt-1 w-full" type="text" name="izena" :value="old('izena', $modulo->izena)" required />
                            <x-input-error :messages="$errors->get('izena')" class="mt-2" />
                        </div>
                        
                        <div class="mb-4">
                            <x-input-label for="gela" :value="__('Gela')" />
                            <x-text-input id="gela" class="block mt-1 w-full" type="text" name="gela" :value="old('gela', $modulo->gela)" required />
                            <x-input-error :messages="$errors->get('gela')" class="mt-2" />
                        </div>
                        
                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('Gorde Aldaketak') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

