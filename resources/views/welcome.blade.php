<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Doña Betty</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen" style="background-color: #c4dafa">
    <header class="shadow relative" style="background-color: #4d82bc; z-index: 10;">

        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <button id="menuButton" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div class="flex flex-col items-center justify-center">
                    <img src="{{ asset('imagenfoto.webp') }}" alt="Logo de la tienda"
                        class="h-40 w-40 sm:h-60 sm:w-60 mb-4 rounded-full border-8" style="border-color: #84b6f4" />

                    <h1 class="text-2xl sm:text-4xl font-bold text-white text-center">
                        OFICINA DOÑA BETTY
                    </h1>
                </div>
                <div class="w-6"></div> <!-- Espacio para equilibrar el diseño -->
            </div>
        </div>

        <!-- Menú desplegable -->
        <div id="menu" class="hidden relative top-0 left-0 w-full bg-white shadow-md"
            style="background-color: #4d82bc; z-index: 10;">
            <div class="p-4">
                {{-- <h2 class="text-xl font-bold text-white mb-4 text-center">AUTENTICACION</h2> --}}
                {{-- <form> --}}
                    {{-- <div class="mb-4">
                        <label for="email" class="block text-white text-sm font-bold mb-2">Correo Electrónico</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-white text-sm font-bold mb-2">Contraseña</label>
                        <input type="password" id="password" name="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                    </div> --}}
                    <div class="flex items-center justify-between">
                        <a href="login"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            INICIAR SESSION
                        </a>
                        <a class="inline-block align-baseline font-bold text-sm text-white hover:text-blue-200"
                            href="register">
                            REGISTRARSE
                        </a>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-2 sm:px-0">
            <div class="mb-6 relative">
                <input type="search" placeholder="Buscar productos..."
                    class="pl-10 w-full h-10 px-4 py-2 text-gray-700 bg-white border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700"
                    style="border-color: #84b6f4" />
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2" style="color: #84b6f4"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-2 gap-4 sm:gap-6">
                @foreach ($products as $product)
                    <div class="bg-white overflow-hidden shadow-md rounded-lg border-2" style="border-color: #84b6f4">
                        <div class="p-4">
                            <div class="flex flex-col items-center space-y-2">
                                <div class="w-full h-32 sm:h-60 overflow-hidden rounded">
                                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                        class="w-full h-full object-cover" />
                                </div>
                                <div class="text-center">
                                    <h2 class="text-lg sm:text-xl font-semibold text-gray-900">{{ $product['name'] }}
                                    </h2>
                                    <p class="text-xs sm:text-sm" style="color: #005187">{{ $product['category'] }}</p>
                                    <p class="text-base sm:text-lg font-bold mt-2 text-green-600">
                                        ${{ number_format($product['price'], 2) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <script>
        // Manejar la búsqueda de productos
        const searchInput = document.querySelector('input[type="search"]');
        searchInput.addEventListener('input', function(e) {
            console.log('Buscando:', e.target.value);
        });

        // Manejar el menú desplegable
        const menuButton = document.getElementById('menuButton');
        const menu = document.getElementById('menu');
        menuButton.addEventListener('click', function() {
            menu.classList.toggle('hidden');
            document.querySelector('main').style.marginTop = menu.classList.contains('hidden') ? '0' : '0px';
        });
    </script>
</body>

</html>
