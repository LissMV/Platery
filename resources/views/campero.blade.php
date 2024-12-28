
<x-app-layout>

    <header class="bg-CGreen">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-white font-bold text-xl">
             Pollo Campero
            </h1>
        </div>
    </header>



    <div class="grid grid-cols-4">

        <div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
            <img src="{{ asset('images/hamburguesacampero.png') }}" alt="" width="250" class=" m-2"/>

        <div>
            <p class="text-2xl break-words flex flex-col items-center">Hamburguesa Clásica</p>
            <div class="flex ">
                <p class="ml-6">Precio:</p>
                <p class="text-right ml-20  line-through text-red-700">$ 4.85</p>
            </div>
            <div class="flex ">
                <p class="ml-6">Nuevo precio:</p>
                <p class="text-right ml-7 text-lime-600">$ 3.25</p>
            </div>
            <div class="flex ">
                <p class="ml-6">Ahorro:</p>
                <p class="text-right ml-[75px] text-cyan-700">$ 1.60</p>
            </div>

            <div class="place-items: center mb-6 flex flex-col items-center">
                <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/pagos'" >
                    {{ __('Comprar') }}
                </x-primary-button>
            </div>

        </div>

    </div>

    <div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
        <img src="{{ asset('images/ensaladalatina.png') }}" alt="" width="250" class=" m-2"/>

        <div>
            <div class="flex flex-col items-center">
                <div class="flex flex-col items-center">
                    <p class="text-2xl break-words flex flex-col items-center">Ensalada Latina</p>
                    <div class="flex ">
                        <p>Precio:</p>
                        <p class="text-right ml-20  line-through text-red-700">$ 5.75</p>
                    </div>
                    <div class="flex ">
                        <p>Nuevo precio:</p>
                        <p class="text-right ml-7 text-lime-600">$ 3.75</p>
                    </div>
                    <div class="flex ">
                        <p >Ahorro:</p>
                        <p class="text-right ml-[75px] text-cyan-700">$ 2.00</p>
                    </div>
                </div>

                <div class="place-items: center mb-6 flex flex-col items-center">
                    <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/ensaladacompra'" >
                        {{ __('Comprar') }}
                    </x-primary-button>
                </div>

            </div>


        </div>

    </div>
    <div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
        <img src="{{ asset('images/cheesecake.png') }}" alt="" width="250" class=" m-2"/>

        <div>
            <div class="flex flex-col items-center">
                <p class="text-2xl break-words flex flex-col items-center">Cheesecake de caramelo</p>
                <div class="flex ">
                    <p >Precio:</p>
                    <p class="text-right ml-20  line-through text-red-700">$ 4.15</p>
                </div>
                <div class="flex ">
                    <p>Nuevo precio:</p>
                    <p class="text-right ml-7 text-lime-600">$ 2.50</p>
                </div>
                <div class="flex ">
                    <p>Ahorro:</p>
                    <p class="text-right ml-[75px] text-cyan-700">$ 1.65</p>
                </div>

                <div class="place-items: center mb-6 flex flex-col items-center">
                    <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/cheesecakecompra'" >
                        {{ __('Comprar') }}
                    </x-primary-button>
                </div>

            </div>



        </div>

    </div>
    <div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
        <img src="{{ asset('images/pizzacamperitos.png') }}" alt="" width="250" class=" m-2"/>

        <div>
            <div class="flex flex-col items-center">
                <p class="text-2xl break-words flex flex-col items-center">Pizza de Camperitos</p>
                <div class="flex ">
                    <p >Precio:</p>
                    <p class="text-right ml-20  line-through text-red-700">$ 13.00</p>
                </div>
                <div class="flex ">
                    <p>Nuevo precio:</p>
                    <p class="text-right ml-7 text-lime-600">$ 9.50</p>
                </div>
                <div class="flex">
                    <p >Ahorro:</p>
                    <p class="text-right ml-[75px] text-cyan-700">$ 3.50</p>
                </div>

                <div class="place-items: center mb-6 flex flex-col items-center">
                    <x-primary-button class="ms-3 vertical-align: bottom mt-6 " onclick="location.href='/campero'" >
                        {{ __('Comprar') }}
                    </x-primary-button>
                </div>

            </div>


        </div>

    </div>

</div>


























<!--AÑADIR DATOS-->

<div class="grid grid-cols-4">

    <div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
        <img src="{{ asset('images/hamburguesacampero.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <p class="text-2xl break-words flex flex-col items-center">Hamburguesa Clásica</p>
        <div class="flex ">
            <p class="ml-6">Precio:</p>
            <p class="text-right ml-20  line-through text-red-700">$ 4.85</p>
        </div>
        <div class="flex ">
            <p class="ml-6">Nuevo precio:</p>
            <p class="text-right ml-7 text-lime-600">$ 3.25</p>
        </div>
        <div class="flex ">
            <p class="ml-6">Ahorro:</p>
            <p class="text-right ml-[75px] text-cyan-700">$ 1.60</p>
        </div>

        <div class="place-items: center mb-6 flex flex-col items-center">
            <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/pago'" >
                {{ __('Comprar') }}
            </x-primary-button>
        </div>

    </div>

</div>

<div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
    <img src="{{ asset('images/ensaladalatina.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <div class="flex flex-col items-center">
            <div class="flex flex-col items-center">
                <p class="text-2xl break-words flex flex-col items-center">Ensalada Latina</p>
                <div class="flex ">
                    <p>Precio:</p>
                    <p class="text-right ml-20  line-through text-red-700">$ 5.75</p>
                </div>
                <div class="flex ">
                    <p>Nuevo precio:</p>
                    <p class="text-right ml-7 text-lime-600">$ 3.75</p>
                </div>
                <div class="flex ">
                    <p >Ahorro:</p>
                    <p class="text-right ml-[75px] text-cyan-700">$ 2.00</p>
                </div>
            </div>

            <div class="place-items: center mb-6 flex flex-col items-center">
                <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Comprar') }}
                </x-primary-button>
            </div>

        </div>


    </div>

</div>
<div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
    <img src="{{ asset('images/cheesecake.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <div class="flex flex-col items-center">
            <p class="text-2xl break-words flex flex-col items-center">Cheesecake de caramelo</p>
            <div class="flex ">
                <p >Precio:</p>
                <p class="text-right ml-20  line-through text-red-700">$ 4.15</p>
            </div>
            <div class="flex ">
                <p>Nuevo precio:</p>
                <p class="text-right ml-7 text-lime-600">$ 2.50</p>
            </div>
            <div class="flex ">
                <p>Ahorro:</p>
                <p class="text-right ml-[75px] text-cyan-700">$ 1.65</p>
            </div>

            <div class="place-items: center mb-6 flex flex-col items-center">
                <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Comprar') }}
                </x-primary-button>
            </div>

        </div>



    </div>

</div>
<div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
    <img src="{{ asset('images/pizzacamperitos.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <div class="flex flex-col items-center">
            <p class="text-2xl break-words flex flex-col items-center">Pizza de Camperitos</p>
            <div class="flex ">
                <p >Precio:</p>
                <p class="text-right ml-20  line-through text-red-700">$ 13.00</p>
            </div>
            <div class="flex ">
                <p>Nuevo precio:</p>
                <p class="text-right ml-7 text-lime-600">$ 9.50</p>
            </div>
            <div class="flex">
                <p >Ahorro:</p>
                <p class="text-right ml-[75px] text-cyan-700">$ 3.50</p>
            </div>

            <div class="place-items: center mb-6 flex flex-col items-center">
                <x-primary-button class="ms-3 vertical-align: bottom mt-6 " onclick="location.href='/campero'" >
                    {{ __('Comprar') }}
                </x-primary-button>
            </div>

        </div>


    </div>

</div>

</div>

<div class="grid grid-cols-4">

    <div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
        <img src="{{ asset('images/hamburguesacampero.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <p class="text-2xl break-words flex flex-col items-center">Hamburguesa Clásica</p>
        <div class="flex ">
            <p class="ml-6">Precio:</p>
            <p class="text-right ml-20  line-through text-red-700">$ 4.85</p>
        </div>
        <div class="flex ">
            <p class="ml-6">Nuevo precio:</p>
            <p class="text-right ml-7 text-lime-600">$ 3.25</p>
        </div>
        <div class="flex ">
            <p class="ml-6">Ahorro:</p>
            <p class="text-right ml-[75px] text-cyan-700">$ 1.60</p>
        </div>

        <div class="place-items: center mb-6 flex flex-col items-center">
            <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                {{ __('Comprar') }}
            </x-primary-button>
        </div>

    </div>

</div>

<div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
    <img src="{{ asset('images/ensaladalatina.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <div class="flex flex-col items-center">
            <div class="flex flex-col items-center">
                <p class="text-2xl break-words flex flex-col items-center">Ensalada Latina</p>
                <div class="flex ">
                    <p>Precio:</p>
                    <p class="text-right ml-20  line-through text-red-700">$ 5.75</p>
                </div>
                <div class="flex ">
                    <p>Nuevo precio:</p>
                    <p class="text-right ml-7 text-lime-600">$ 3.75</p>
                </div>
                <div class="flex ">
                    <p >Ahorro:</p>
                    <p class="text-right ml-[75px] text-cyan-700">$ 2.00</p>
                </div>
            </div>

            <div class="place-items: center mb-6 flex flex-col items-center">
                <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Comprar') }}
                </x-primary-button>
            </div>

        </div>


    </div>

</div>
<div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
    <img src="{{ asset('images/cheesecake.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <div class="flex flex-col items-center">
            <p class="text-2xl break-words flex flex-col items-center">Cheesecake de caramelo</p>
            <div class="flex ">
                <p >Precio:</p>
                <p class="text-right ml-20  line-through text-red-700">$ 4.15</p>
            </div>
            <div class="flex ">
                <p>Nuevo precio:</p>
                <p class="text-right ml-7 text-lime-600">$ 2.50</p>
            </div>
            <div class="flex ">
                <p>Ahorro:</p>
                <p class="text-right ml-[75px] text-cyan-700">$ 1.65</p>
            </div>

            <div class="place-items: center mb-6 flex flex-col items-center">
                <x-primary-button class="ms-3 vertical-align: bottom  mt-6" onclick="location.href='/campero'" >
                    {{ __('Comprar') }}
                </x-primary-button>
            </div>

        </div>



    </div>

</div>
<div class="flex flex-col justify-center items-center  border border-cyan-950 m-10 ">
    <img src="{{ asset('images/pizzacamperitos.png') }}" alt="" width="250" class=" m-2"/>

    <div>
        <div class="flex flex-col items-center">
            <p class="text-2xl break-words flex flex-col items-center">Pizza de Camperitos</p>
            <div class="flex ">
                <p >Precio:</p>
                <p class="text-right ml-20  line-through text-red-700">$ 13.00</p>
            </div>
            <div class="flex ">
                <p>Nuevo precio:</p>
                <p class="text-right ml-7 text-lime-600">$ 9.50</p>
            </div>
            <div class="flex">
                <p >Ahorro:</p>
                <p class="text-right ml-[75px] text-cyan-700">$ 3.50</p>
            </div>

            <div class="place-items: center mb-6 flex flex-col items-center">
                <x-primary-button class="ms-3 vertical-align: bottom mt-6 " onclick="location.href='/campero'" >
                    {{ __('Comprar') }}
                </x-primary-button>
            </div>

        </div>


    </div>

</div>

</div>


</x-app-layout>
