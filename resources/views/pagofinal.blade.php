<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">
            {{ __('Estación de pago') }}
        </h2>
    </x-slot>



    <script>
        // Función para cargar el total desde el carrito
        function cargarTotal() {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            let total = carrito.reduce((acc, producto) => acc + producto.precio * producto.cantidad, 0);
            document.getElementById('total').innerText = `$${total.toFixed(2)}`;
        }

        // Función para confirmar compra y limpiar carrito
        function confirmarCompra(event) {
            event.preventDefault(); // Evitar recargar la página

            // Obtener los datos del formulario
            const nombre = document.getElementById('nombre').value;
            const direccion = document.getElementById('direccion').value;
            const metodoPago = document.querySelector('input[name="metodo-pago"]:checked').value;
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];

            // Validación básica de campos
            if (nombre && direccion && metodoPago) {
                // Simular el envío de datos (aquí podrías hacer una solicitud fetch si tienes un backend)
                const data = {
                    nombre,
                    direccion,
                    metodoPago,
                    carrito
                };

                // Mostrar los datos en la consola (simulación de envío)
                console.log("Datos de compra enviados:", data);

                // Mensaje de confirmación
                alert(`Compra confirmada para ${nombre}. Método de pago: ${metodoPago}`);

                // Borrar el carrito en el localStorage
                localStorage.removeItem('carrito');

                // Redireccionar al usuario a la página de productos
                window.location.href = 'dashboard2';
            } else {
                alert("Por favor, completa todos los campos.");
            }
        }

        // Cargar total al cargar la página
        window.onload = cargarTotal;
    </script>

        <div class="container mx-auto p-6 max-w-lg mt-4 border border-gray-800 shadow-md rounded-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Método de Pago</h2>

        <!-- Total del Carrito -->
        <div class="flex justify-between items-center mb-4">
            <span class="text-xl font-semibold text-gray-700">Total a Pagar:</span>
            <span id="total" class="text-2xl font-semibold text-green-600">$0.00</span>
        </div>

        <!-- Formulario de Pago -->
        <form onsubmit="confirmarCompra(event)" class="space-y-4">
            <!-- Información Personal -->
            <div>
                <label for="nombre" class="block text-gray-700 font-semibold">Nombre Completo</label>
                <input type="text" id="nombre" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div>
                <label for="direccion" class="block text-gray-700 font-semibold">Dirección de Envío</label>
                <input type="text" id="direccion" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Métodos de Pago -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Selecciona Método de Pago</h3>
                <div class="flex items-center mb-2">
                    <input type="radio" id="tarjeta" name="metodo-pago" value="Tarjeta de Crédito/Débito" class="mr-2" required>
                    <label for="tarjeta" class="text-gray-700">Tarjeta de Crédito/Débito</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="paypal" name="metodo-pago" value="PayPal" class="mr-2">
                    <label for="paypal" class="text-gray-700">Efectivo (contra entrega)</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="transferencia" name="metodo-pago" value="Transferencia Bancaria" class="mr-2">
                    <label for="transferencia" class="text-gray-700">Transferencia Bancaria</label>
                </div>
            </div>

            <!-- Botón de Confirmar Compra -->
            <button type="submit" class="w-full border border-gray-800 hover:bg-lime-300 text-gray-800 font-semibold py-2 rounded-md transition duration-200">
                Confirmar Compra
            </button>
        </form>

        <!-- Botón de Volver al Carrito -->
        <button onclick="window.location.href='carrito.html'" class="w-full mt-4 border border-gray-800 hover:bg-PLOrange text-gray-800 font-semibold py-2 rounded-md transition duration-200">
            Volver al Carrito
        </button>
    </div>



</x-app-layout>

