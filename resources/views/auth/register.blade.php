@extends('layouts.registerLayout')


<section class="min-h-screen flex items-stretch text-white ">
    <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center banner-register" >
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="w-full px-24 z-10">
            <h1 class="text-5xl font-bold text-left tracking-wide">Tecnología, en tus manos.</h1>
            <p class="text-3xl my-4">Estilo y rendimiento, juntos!!</p>
        </div>
        <div class="bottom-0 absolute p-4 text-center right-0 left-0 flex justify-center space-x-4">
            <span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
            </span>
            <span>
                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
            </span>
            <span>
                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </span>
        </div>
    </div>
    <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background: #0000">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        </div>
        <div class="w-full py-6 z-20">
            <div class="my-6 flex items-center justify-center">
                <img style="width:6rem; margin-right:2px" src="{{ asset('img/logowordPhone.png') }}" alt="Logo">
            </div>

            <p class="text-gray-100">
                Regístrate para ver los mejores celulares en stock!!
            </p>
            <form action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                <div class="pb-2 pt-4">
                    <input type="text" id="name" name="name"
                    value="{{ old('name') }}" required placeholder="Nombre" class="block w-full p-4 text-lg rounded-sm bg-black">
                    @error('name')
                    <div>{{ $message }}</div>
                @enderror
                </div>
                <div class="pb-2 pt-4">
                    <input class="block w-full p-4 text-lg rounded-sm bg-black" type="email" id="email" name="email"
                    value="{{ old('email') }}" required placeholder="Email">
                    @error('email')
                    <div>{{ $message }}</div>
                @enderror
                </div>
                <div class="pb-2 pt-4">
                    <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" id="password" name="password" required autocomplete="new-password" placeholder="Contraseña">
                </div>
                <div class="pb-2 pt-4">
                    <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" id="password_confirmation" name="password_confirmation" required placeholder="Repetir Contraseña">
                </div>

                <div class="px-4 pb-2 pt-4">
                    <button class="uppercase block w-full p-2 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">Registrar</button>
                </div>

                <div class="p-4 text-center right-0 left-0 flex justify-center space-x-4 mt-16 lg:hidden ">
                    <a href="#">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </a>
                    <a href="#">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

<div id="successModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
    <div class="bg-white p-8 rounded-lg z-10">
        <h2 class="text-2xl font-bold text-center mb-4">¡Registro exitoso!</h2>
        <p class="text-lg text-center">Tu cuenta ha sido creada exitosamente.</p>
    </div>
</div>


<script>
    function showSuccessModalAndRedirect() {
        document.getElementById('successModal').classList.remove('hidden');
        setTimeout(function() {
            window.location.href = '/';
        }, 3000);
    }
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        showSuccessModalAndRedirect();
    });
</script>

{{-- <div class="h-screen md:flex">
    <div
        class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
        <div>
            <h1 class="text-white font-bold text-4xl font-sans">GoFinance</h1>
            <p class="text-white mt-1">The most popular peer to peer lending at SEA</p>
            <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read
                More</button>
        </div>
        <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
    </div>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
        <form method="POST" action="{{ route('register') }}" class="bg-white">
            @csrf
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
            <div>
                <label class="block mb-1 font-bold text-gray-500" for="email">Nombre</label>
                <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" type="text" id="name" name="name"
                    value="{{ old('name') }}" required />
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div >
                <label class="block mb-1 font-bold text-gray-500" for="email">Email</label>
                <input class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" type="email" id="email" name="email" value="{{ old('email') }}" required />
                @error('email')
                <div>{{ $message }}</div>
            @enderror
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <input class="pl-2 outline-none border-none"  type="password" id="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl">

                <input class="pl-2 outline-none border-none"type="password" id="password_confirmation" name="password_confirmation" required
                autocomplete="new-password" />
            </div>
            <button type="submit"
                class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Register</button>
        </form>
    </div>
</div> --}}
