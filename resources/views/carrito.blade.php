<x-app-layout>

    <script>
        // Función para cargar el carrito desde localStorage y mostrarlo
        function cargarCarrito() {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const carritoContainer = document.getElementById('carrito-container');
            let total = 0;

            carritoContainer.innerHTML = ''; // Limpiar el contenedor

            carrito.forEach((producto, index) => {
                const subtotal = producto.precio * producto.cantidad;
                total += subtotal;

                carritoContainer.innerHTML += `
                    <div class="border border-gray-800 p-4 rounded-lg flex flex-col justify-between">
                        <div>
                            <h4 class="font-semibold text-lg text-gray-800 mb-2">${producto.nombre}</h4>
                            <p class="text-gray-600 mb-1">Cantidad: <span class="font-medium">${producto.cantidad}</span></p>
                            <p class="text-gray-600 mb-4">Subtotal: <span class="font-semibold">$${subtotal.toFixed(2)}</span></p>
                        </div>
                        <button onclick="eliminarDelCarrito(${index})" class="text-red-600 font-semibold hover:underline">Eliminar</button>
                    </div>
                `;
            });

            document.getElementById('total').innerText = `$${total.toFixed(2)}`;
        }

        // Función para eliminar un producto del carrito
        function eliminarDelCarrito(index) {
            let carrito = JSON.parse(localStorage.getItem('carrito'));
            carrito.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            cargarCarrito();  // Volvemos a cargar el carrito para actualizar la vista
        }

        // Cargar carrito cuando se carga la página
        window.onload = cargarCarrito;
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">
            {{ __('Carrito de compras') }}
        </h2>
    </x-slot>

    <main class="flex-1 container mx-auto p-6">
        <!-- Contenedor del carrito -->
        <div id="carrito-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Aquí se mostrarán los productos en tarjetas individuales -->
        </div>
    </main>

    <!-- Total y botón de volver a comprar en la parte inferior -->
    <footer class="border border-gray-800 shadow-md fixed bottom-0 left-0 w-full py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="text-xl font-semibold text-gray-800">
                Total: <span id="total" class="text-lime-600">$0.00</span>
            </div>
            <button onclick="window.location.href='restaurants'" class="border border-gray-800 hover:bg-PLOrange text-gray-800 font-semibold py-2 px-4 rounded-lg">
                Seguir Comprando
            </button>

            <button onclick="window.location.href='pago.html'" class="border border-gray-800 hover:bg-lime-200 text-gray-800 font-semibold py-2 px-12 rounded-lg">
                Ir a pagar
            </button>

        </div>
    </footer>
</x-app-layout>
