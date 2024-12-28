
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>


    <div class="">

        <div class="flex justify-center items-center  border position: absolute border-cyan-950 m-10 ">
            <img src="{{ asset('images/pollocampero.png') }}" alt="" width="400" height="500" class="flex justify-center "/>

            <div class="place-items: center flex flex-col items-center">
                <p class="text-3xl mx-10">Pollo Campero</p>
                <x-primary-button class=" vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Ver productos') }}
                </x-primary-button>
            </div>

        </div>


        <div class="flex justify-center items-center  border position: absolute border-cyan-950 m-10 ml-[780px]">
            <img src="{{ asset('images/haciendareal.png') }}" alt="" width="400" height="500" class="flex justify-center "/>

            <div class="place-items: center flex flex-col items-center">
                <p class="text-3xl mx-10">Hacienda Real</p>
                <x-primary-button class=" vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Ver productos') }}
                </x-primary-button>
            </div>

        </div>

    </div>



    <div>
        <div class="flex justify-center items-center  border position: absolute border-cyan-950 m-10 mt-[390px]">
            <img src="{{ asset('images/lapampa.png') }}" alt="" width="400" height="500" class="flex justify-center "/>

            <div class="place-items: center flex flex-col items-center">
                <p class="text-3xl mx-[74px]">La Pampa</p>
                <x-primary-button class="vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Ver productos') }}
                </x-primary-button>
            </div>

        </div>
    </div>

    <div>
        <div class="flex justify-center items-center  border position: absolute border-cyan-950 m-10 mt-[390px] ml-[780px]">
            <img src="{{ asset('images/lacalaca.png') }}" alt="" width="400" height="500" class="flex justify-center "/>

            <div class="place-items: center flex flex-col items-center">
                <p class="text-3xl mx-[74px]">LacaLaca</p>
                <x-primary-button class="vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Ver productos') }}
                </x-primary-button>
            </div>

        </div>
    </div>






</x-app-layout>
