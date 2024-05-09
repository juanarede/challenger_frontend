@extends('layouts.layout')

@section('content')
    <aside id="sidenav-open" class="h-screen">
        <nav class="flex-grow flex flex-col h-full p-2 justify-between text-gray-500 bg-gray-800">
            <div class="flex flex-col mx-2 my-3 space-y-4">
                <img src="{{ asset('img/logowordPhone.png') }}" alt="Logo">
                <a href="{{ route('home') }}" class="inline-flex items-center py-3 text-blue-600 bg-white rounded-lg px-2" :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <svg class="  flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                    <span class="ml-2"  x-show="menu">Home</span>
                  </a>

                  <a href="#" class="inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg px-2" :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                    <span class="ml-2"  x-show="menu">Folders</span>
                  </a>
            </div>


        </nav>

        <a href="#" id="sidenav-close" title="Close Menu" aria-label="Close Menu"></a>
    </aside>

    <main class="overflow-y-scroll h-screen">
        <!----------------- Header ----------------->
        <header class="flex items-center justify-between p-4 sticky top-0 bg-white md:mx-aut lg:ml-4 border-b mb-4">
            <div class="flex items-center justify-between">
                <a href="#sidenav-open" class="visible sm:hidden" title="Open Menu" aria-label="Open Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-900" fill="currentColor"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="4" y1="6" x2="20" y2="6" />
                        <line x1="4" y1="12" x2="20" y2="12" />
                        <line x1="4" y1="18" x2="20" y2="18" />
                    </svg>
                </a>
                <h1 class="mx-2 text-xl font-bold text-gray-900">Dashboard</h1>
            </div>
            <input style="width: 499px"
            type="text"
            class="hidden sm:block flex-grow sm:flex-grow-0 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
            name="search"
            placeholder="Search..." />

            <div class="flex space-x-4">
                <button class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                  <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>
                </button>

                <button class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                  <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                  </svg>
                </button>
              </div>


        </header>

        <!----------------- stadisticas ----------------->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:mx-auto lg:ml-4 border-b mb-4">
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg mb-4">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Total Client</span>
                        <span class="text-lg font-semibold counter" data-target="{{ $totalClientes }}">0</span>
                    </div>
                    <div class=" rounded-md">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>

                    </div>
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">2%</span>
                    <span>from 2021</span>
                </div>
            </div>

            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg mb-4">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Total Pedidos</span>
                        <span class="text-lg font-semibold counter" data-target="{{ $totalPedidos }}">0</span>
                    </div>
                    <div class=" rounded-md">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>

                    </div>
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>from 2023</span>
                </div>
            </div>

            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg mb-4">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Stock</span>
                        <span class="text-lg font-semibold counter" data-target="{{ $totalCantidadDisponible }}">0</span>
                    </div>
                    <div class=" rounded-md">
                        <div
                            class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-violet-100 rounded-full mr-6">
                            <svg style="width: 27px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#B197FC"
                                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                            </svg>
                        </div>

                    </div>
                </div>

            </div>
        </section>



        <section class="flex flex-wrap">
            <div class="w-full lg:w-3/2">


                <!----------------- Clientes ----------------->
                <div class="flex flex-col w-full p-4">
                    <div class="mb-4 text-1xl font-bold text-gray-800">Clientes</div>
                    <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                        <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Nombre
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Telefono
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Pedidos
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($totalPedidosPorCliente as $cliente)
                                    @if ($cliente->pedidos->count() > 0)
                                        <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <!-- Icono de circulo con fondo -->
                                                    <div
                                                        class="flex-shrink-0 h-10 w-10 rounded-full flex items-center justify-center bg-blue-200">
                                                        <i class="fa-regular fa-user text-blue-500"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $cliente->Nombre }}</div>
                                                        <div class="text-sm text-gray-500"><i
                                                                class="fa-regular fa-envelope mr-1"></i>{{ $cliente->Email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500"><i
                                                        class="fa-solid fa-phone mr-1"></i>{{ $cliente->Teléfono }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $cliente->pedidos->count() }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $cliente->pedidos_sum_total }}$</div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>



                        </table>
                    </div>
                </div>
        </section>
    </main>
    @push('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
    @endpush

@endsection
