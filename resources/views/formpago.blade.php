<x-app-layout>
    <div class="container mx-auto p-6 max-w-md mt-10 bg-white shadow-md rounded-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Compra de Producto</h2>

        <!-- Información del producto -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Información del Producto</h3>
            <p class="text-gray-600">Nombre: <span class="font-semibold">Hamburguesa Clásica</span></p>
            <p class="text-gray-600">Ingredientes: <span class="font-semibold">Pan, Pechuga de pollo, mayonesa, lechuga, rodajas de tomate, pepinillos.</span></p>
            <p class="text-gray-600">Existencias: <span class="font-semibold">15 unidades</span></p>
        </div>

        <!-- Precios -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Precios</h3>
            <p class="text-gray-600">Precio Normal: <span class="font-semibold line-through text-red-500">$4.85</span></p>
            <p class="text-gray-600">Precio con Descuento: <span class="font-semibold text-green-600">$3.25</span></p>
            <p class="text-gray-600">Ahorras: <span class="font-semibold text-green-600">$1.60</span></p>
        </div>

        <!-- Métodos de pago -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Métodos de Pago</h3>
            <select class="block w-full px-4 py-2 text-gray-700 border border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500">
                <option value="">Selecciona un método de pago</option>
                <option value="tarjeta_credito">Tarjeta de Crédito</option>
                <option value="tarjeta_debito">Tarjeta de Débito</option>
                <option value="paypal">PayPal</option>
                <option value="transferencia_bancaria">Transferencia Bancaria</option>
                <option value="transferencia_bancaria">Efectivo (contra entrega)</option>
            </select>
        </div>

        <!-- Cantidad de compra -->
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2" for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" min="1" max="15" value="1" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Botón de compra -->
        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-md transition duration-200">
            Comprar Ahora
        </button>
    </div>
</x-app-layout>
