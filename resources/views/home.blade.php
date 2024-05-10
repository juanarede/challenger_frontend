@extends('layouts.homeLayout')


<nav class="nav flex flex-wrap items-center justify-center px-4 relative z-50">
    <div class="flex flex-no-shrink items-center mr-24 py-3 text-grey-darkest">
        <img style="width:40px; margin-right:2px" src="{{ asset('img/logowordphoneHome.png') }}" alt="Logo">
        <span class="font-semibold text-xl tracking-tight md:block hidden">Word Phone</span>

        <div class="md:hidden ml-4">
            @auth
                <button id="avatarButton" class="p-1 bg-blue-200 rounded-full focus:outline-none focus:ring avatarButton">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center bg-blue-100">
                        <i class="fa-regular fa-user text-blue-500"></i>
                    </div>
                </button>

                <div id="modal"
                    class="hidden absolute mt-3 transform  bg-white rounded-md shadow-lg min-w-max z-20 modal">
                    <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                        <span class="text-gray-800">{{ auth()->user()->name }}</span>
                        <span class="text-sm text-gray-400">{{ auth()->user()->email }}</span>
                    </div>

                    <div class="p-2 hover:bg-blue-100 cursor-pointer">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center py-3 text-gray-800 "
                            :class="{ 'justify-start': menu, 'justify-center': menu == false }">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <span class="ml-1 text-sm text-gray-400" x-show="menu">Dashboard</span>
                        </a>
                    </div>
                    <div class="p-2">
                        <button
                            class="flex items-center justify-center py-3 text-gray-800 border-t w-full css-button-sharp--black">
                            <a href="{{ route('logout') }}" id="logout">Logout</a>
                        </button>
                    </div>
                </div>
            @endauth

            @guest
                <div class="registerLoginButtons">
                    <button id="registerButton"
                        class="inline-flex h-1 items-center justify-center gap-2 css-button-sliding-to-left--black"
                        onclick="showLoginModal()">
                        <span>Iniciar sesión</span>
                    </button>
                </div>
            @endguest
        </div>
    </div>
    <input class="menu-btn hidden" type="checkbox" id="menu-btn">
    <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
        <span class="navicon bg-grey-darkest flex items-center relative"></span>
    </label>
    <ul
        class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto absolute md:relative top-full left-0 bg-white rounded-md shadow-lg min-w-max z-50 md:z-auto">
        <li class="border-t md:border-none">
            <a href="/"
                class="block md:inline-block px-3 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold">Home</a>
        </li>

        <li class="border-t md:border-none">
            <a href="#"
                class="block md:inline-block px-3 py-3 no-underline text-grey-darkest hover:text-grey-darker">
                Catálogo</a>
        </li>

        <li class="border-t md:border-none">
            <a href="#"
                class="block md:inline-block px-3 py-3 no-underline text-grey-darkest hover:text-grey-darker">Sobre
                Nosotros</a>
        </li>
    </ul>
    <div style="margin-left: 3rem" class="md:block hidden">

        @auth
            <button id="avatarButton2" class="p-1 bg-blue-200 rounded-full focus:outline-none focus:ring avatarButton">
                <div class="flex-shrink-0 h-6 w-6 rounded-full flex items-center justify-center bg-blue-100">
                    <i class="fa-regular fa-user text-blue-500"></i>
                </div>
            </button>

            <div id="modal2"
                class="hidden absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max z-20 modal">
                <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                    <span class="text-gray-800">{{ auth()->user()->name }}</span>
                    <span class="text-sm text-gray-400">{{ auth()->user()->email }}</span>
                </div>

                <div class="p-2 hover:bg-blue-100 cursor-pointer">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center py-3 text-gray-800 "
                        :class="{ 'justify-start': menu, 'justify-center': menu == false }">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span class="ml-1 text-sm text-gray-400" x-show="menu">Dashboard</span>
                    </a>
                </div>
                <div class="p-2">
                    <button
                        class="flex items-center justify-center py-3 text-gray-800 border-t w-full css-button-sharp--black">
                        <a href="{{ route('logout') }}" id="logout">Logout</a>
                    </button>
                </div>
            </div>
        @endauth
        @guest
            <div class="registerLoginButtons">
                <button id="registerButton"
                    class="inline-flex h-2 items-center justify-center gap-2 css-button-sliding-to-left--black"
                    onclick="showLoginModal()">
                    <span>Iniciar sesión</span>
                </button>
            </div>
        @endguest
    </div>
</nav>




{{-- modal login --}}
<div style="z-index: 9999" id="loginModal"
    class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50">
    <div class="min-h-screen flex items-center justify-center">

        <div class="bg-white p-16 rounded shadow-2xl w-7/6">

            <button id="closeLoginModal"
                class="absolute top-0 right-0 mt-4 mr-4 text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <h2 class="text-3xl font-bold mb-10 text-gray-800">Iniciar sesión</h2>
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block mb-1 font-bold text-gray-500" for="email">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                        required>
                </div>
                <div>
                    <label class="block mb-1 font-bold text-gray-500" for="password">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                        required>
                </div>

                <button type="submit"
                    class="block w-full p-4 items-center justify-center gap-2 css-button-sliding-to-left--black">
                    <span>Iniciar sesión</span>
                </button>

                <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                    ¿No tienes una cuenta? <a href="{{ route('register') }}"
                        class="cursor-pointer text-indigo-600 hover:text-indigo-800">Regístrate</a>
                </div>
            </form>
        </div>
    </div>
</div>










<div class="container bg-white p-8 md:p-0 md:mx-auto lg:w-5/6 w-7/6 flex flex-col justify-center items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 mt-6 gap-7 md:gap-6 items-center">
        <div class="flex flex-col justify-center items-center md:items-start md:pr-15">
            <div class="flex items-center justify-center mb-4 md:justify-start">
                <h4 class="ml-2 text-sm font-bold tracking-widest text-primary uppercase">Lorem ipsum dolor sit amet
                    sit
                    amet</h4>
            </div>
            <h1
                class="mb-8 text-4xl font-extrabold leading-tight lg:text-6xl text-dark-grey-900 text-center md:text-left">
                Lorem ipsum dolor sit amet</h1>
            <p class="mb-6 text-base font-normal leading-7 text-grey-900 text-center md:text-left md:w-3/4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ex vel fugit sit rerum omnis voluptatum
                doloremque quos alias quis dolor in excepturi.
            </p>
        </div>
        <div class="flex justify-center relative">
            <div class="absolute w-96 h-96 rounded-full gradient-circle hidden md:block "></div>
            <img src="{{ asset('img/mockuphone.webp') }}" alt="phone"
                class="max-w-full h-auto z-10 hidden md:block ">
        </div>
    </div>
</div>





<div style="margin-top: 7rem" class="container mx-auto px-4 sm:px-8 mt-10">
    <div class="flex justify-between">
        <div class="w-full lg:w-4/6 relative">
            <div class="py-3">
                <div class="py-4 flex justify-between items-center">
                    <h2 class="text-2xl font-semibold leading-tight">Celulares</h2>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{ route('export') }}" class="btn btn-primary">Exportar a Excel</a>
                    </button>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Celulares / Modelos</th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Descripción</th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Precio</th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Estado</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <div id="product-container">
                                    @foreach ($productos as $key => $producto)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-4 h-8">
                                                        <img class="w-full h-full "
                                                            src="{{ asset('img/phone.png') }}" alt="phone">
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $producto->Nombre }}
                                                        </p>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-600 whitespace-no-wrap">
                                                    {{ $producto->Descripción }}
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">${{ $producto->Precio }}
                                                </p>
                                            </td>
                                            <td
                                                class="estado-producto-{{ $producto->id }} px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                @if ($producto->estatus == 1)
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                        <span class="relative">Stock</span>
                                                    </span>
                                                @else
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-red-500 opacity-100 rounded-full"></span>
                                                        <span class="relative">S/Stock</span>
                                                    </span>
                                                @endif
                                            </td>
                                            <td
                                                class="relative px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <button id="changeStatusButton{{ $key }}" type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <!-- Modal -->
                                                <div id="modalstatus{{ $key }}"
                                                    class="hidden modal-container">
                                                    <div class="modal-content">
                                                        <div class="flex flex-col items-center p-4">
                                                            <label class="inline-flex items-center cursor-pointer">
                                                                <input id="toggle-{{ $producto->id }}"
                                                                    type="checkbox" value=""
                                                                    class="sr-only peer"
                                                                    onchange="toggleStatus({{ $producto->id }})">
                                                                <div
                                                                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                                                </div>
                                                                <span
                                                                    class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Stock</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </div>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                    {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Aside -->
        <div class="w-1/4 mt-20">
            <div class="text-center hidden md:block ">
                <img class="w-full rounded-lg" src="{{ asset('img/publicidad.png') }}" alt="publicidad">
            </div>
        </div>
    </div>
</div>






<footer class="bg-black">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
            <img style="width:8rem; margin-right:2px" src="{{ asset('img/logowordPhone.png') }}" alt="Logo">
        </div>
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            <div class="px-5 py-2">
                <a href="#" class="text-base text-white hover:text-gray-900">
                    Home
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base text-white hover:text-gray-900">
                    Catálogo
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base text-white hover:text-gray-900">
                    Sobre Nosotros
                </a>
            </div>
        </nav>
        <div class="mt-8 flex justify-center space-x-6">
            <a href="#" class="text-white hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-white hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-white hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                        d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                </svg>
            </a>

        </div>
        <p class="mt-8 text-center text-base text-gray-400">
            &copy; 2024 WordPhone
        </p>
    </div>
</footer>


<script>

// modal iniciar sesion


function showLoginModal() {
    var modal = document.getElementById("loginModal");
    modal.classList.remove("hidden");
}

function closeLoginModal() {
    var modal = document.getElementById("loginModal");
    modal.classList.add("hidden");
}

window.addEventListener("click", function(event) {
    var modal = document.getElementById("loginModal");
    if (event.target === modal) {
        closeLoginModal();
    }
});

document.getElementById("closeLoginModal").addEventListener("click", function() {
    closeLoginModal();
});

    document.addEventListener("DOMContentLoaded", function() {
        @foreach ($productos as $key => $producto)
            const button{{ $key }} = document.querySelector(
                '#changeStatusButton{{ $key }}');
            const modal{{ $key }} = document.querySelector('#modalstatus{{ $key }}');
            const modalStatusLabel{{ $key }} = document.querySelector(
                '#modalStatusLabel{{ $key }}');

            button{{ $key }}.addEventListener('click', function() {
                document.querySelectorAll('[id^="modalstatus"]').forEach(modal => {
                    if (modal.id !== 'modalstatus{{ $key }}') {
                        modal.classList.add('hidden');
                    }
                });

                modal{{ $key }}.classList.toggle('hidden');
            });
        @endforeach
    });

    // toggle status


    function toggleStatus(id) {
        const checkbox = document.getElementById(`toggle-${id}`);
        const isChecked = checkbox.checked;

        fetch(`{{ route('inventario.toggleStatus', ':id') }}`.replace(':id', id), {
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => {
                if (response.ok) {
                    const estadoProducto = document.querySelector(`.estado-producto-${id}`);
                    const span = estadoProducto.querySelector('span');
                    if (isChecked) {
                        span.innerHTML =
                            '<span aria-hidden class="absolute inset-0 bg-green-500 opacity-50 rounded-full"></span><span class="relative">Stock</span>';
                    } else {
                        span.innerHTML =
                            '<span aria-hidden class="absolute inset-0 bg-red-500 opacity-100 rounded-full"></span><span class="relative">S/Stock</span>';
                    }

                    localStorage.setItem(`estado-${id}`, isChecked ? 'Stock' : 'Sin Stock');
                } else {
                    console.error('Error al actualizar el estado');
                }
            })
            .catch(error => {
                console.error('Error al actualizar el estado:', error);
            });
    }

    document.addEventListener("DOMContentLoaded", function() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            const id = checkbox.id.replace('toggle-', '');
            const storedValue = localStorage.getItem(`estado-${id}`);
            if (storedValue !== null) {
                const estadoProducto = document.querySelector(`.estado-producto-${id}`);
                const span = estadoProducto.querySelector('span');
                if (storedValue === 'Stock') {
                    span.innerHTML =
                        '<span aria-hidden class="absolute inset-0 bg-green-500 opacity-50 rounded-full"></span><span class="relative">Stock</span>';
                    checkbox.checked = true;
                } else {
                    span.innerHTML =
                        '<span aria-hidden class="absolute inset-0 bg-red-500 opacity-100 rounded-full"></span><span class="relative">S/Stock</span>';
                    checkbox.checked = false;
                }
            }
        });
    });
</script>
