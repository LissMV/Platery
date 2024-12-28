
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("¡Tu compra fue realizada exitósamente!") }}
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center pt-9">
            <img src="{{ asset('images/COMIDA.png') }}" alt="" width="" height="" class="flex justify-center"/>
        </div>

        <div class="flex justify-center items-center pt-6">
            <a href="{{ route('restaurants') }}"
               class="bg-PBlue hover:bg-PLOrange text-white font-bold py-4 w-4/6 text-center rounded-lg shadow-lg">
                Ir a comprar
            </a>
        </div>

    </div>
</x-app-layout>
