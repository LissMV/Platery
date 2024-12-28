
<x-app-layout>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compra de Producto</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script>
            function agregarAlCarrito() {
                const nombre = "Cheesecake de caramelo";
                const precio = 2.50;
                const cantidad = parseInt(document.getElementById('cantidad').value);

                // Obtenemos el carrito del localStorage, o un array vacío si no existe
                let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

                // Añadimos el producto al carrito
                carrito.push({ nombre, precio, cantidad });

                // Guardamos el carrito en localStorage
                localStorage.setItem('carrito', JSON.stringify(carrito));

                // Redireccionamos a la vista del carrito
                window.location.href = "carrito.html";
            }
        </script>
    </head>

    <header class="bg-CGreen">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-white font-bold text-xl">
             Añadir producto
            </h1>
        </div>
    </header>

    <div class="container mx-auto p-6 flex flex-col md:flex-row mt-2">
        <div class="w-120 h-120 mt-20">
            <img src="{{ asset('images/cheesecake.png') }}" alt="" class="w-full h-auto object-cover m-2"/>
        </div>

             <!-- Formulario de compra -->
        <div class="container mx-auto p-6 max-w-md border border-gray-800 shadow-md rounded-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Compra de Producto</h2>

            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700  ">Información del Producto</h3>
                <p class="text-gray-600">Nombre: <span class="font-semibold">Cheesecake de caramelo</span></p>
                <p class="text-gray-600">Ingredientes: <span class="font-semibold">Base de galleta, queso crema, azúcar, crema, huevos y caramelo.</span></p>
                <p class="text-gray-600">Existencia: <span class="font-semibold">2 unidades</span></p>
            </div>

            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700">Precios</h3>
                <p class="text-gray-600">Precio Normal: <span class="font-semibold line-through text-red-500">$4.15</span></p>
                <p class="text-gray-600">Precio con Descuento: <span class="font-semibold text-green-600">$2.50</span></p>
                <p class="text-gray-600">Ahorras: <span class="font-semibold text-green-600">$1.65</span></p>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" min="1" max="2" value="1" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <button onclick="agregarAlCarrito()" class="w-full border border-gray-800 hover:bg-PLOrange text-gray-800 font-semibold py-2 rounded-md transition duration-200">
                Agregar al Carrito
            </button>
        </div>
    </div>




</x-app-layout>
