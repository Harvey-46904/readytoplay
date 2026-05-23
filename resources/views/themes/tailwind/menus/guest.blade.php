@php
$torneos = App\Models\Torneo::all();
@endphp
<nav class="flex items-center justify-end flex-1 hidden w-full h-full space-x-10 md:flex">




    <div @mouseenter="dropdown = true" @mouseleave="dropdown=false" @click.away="dropdown=false"
        x-data="{ dropdown: false }" class="relative h-full select-none">
        <div @click="dropdown = !dropdown" :class="{ 'text-wave-600': dropdown, 'text-gray-500': !dropdown }"
            class="inline-flex items-center h-full space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out cursor-pointer select-none hover:text-wave-600 focus:outline-none focus:text-wave-500">
            <span>Torneos</span>
            <svg class="flex-shrink-0 w-5 h-5 mt-1 text-yellow-500 duration-200 group-hover:text-yellow-400 transition-color ease"
                fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17 3V2H7v1H2v3c0 2.97 2.16 5.43 5 5.91V14H5v2h14v-2h-2v-2.09c2.84-.48 5-2.94 5-5.91V3h-5zm-2 11H9v-2h6v2zm2-4.17V5h3v1c0 1.68-1.09 3.09-2.59 3.59L17 9.83zM4 6V5h3v4.83l-.41-.24C5.09 9.09 4 7.68 4 6z" />
            </svg>
        </div>

        <div x-show="dropdown" x-transition:enter="duration-200 ease-out scale-95"
            x-transition:enter-start="opacity-50 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition duration-100 ease-in scale-100"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="absolute w-screen max-w-sm px-2 transform -translate-x-1/2 left-1/2 sm:px-0" x-cloak>
            <div class="shadow-lg rounded-xl">
                <div class="overflow-hidden border border-gray-100 shadow-md rounded-xl">
                    <div class="relative z-20 grid bg-white">
                        @foreach ($torneos as $torneo)
                        <a href="{{ route('torneo.detalle', $torneo->slug) }}"
                            class="flex items-start p-10 -m-3 space-x-3 transition duration-150 ease-in-out rounded-lg pb-7 group">
                            <svg class="flex-shrink-0 w-5 h-5 mt-1 text-yellow-500 duration-200 group-hover:text-yellow-400 transition-color ease"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17 3V2H7v1H2v3c0 2.97 2.16 5.43 5 5.91V14H5v2h14v-2h-2v-2.09c2.84-.48 5-2.94 5-5.91V3h-5zm-2 11H9v-2h6v2zm2-4.17V5h3v1c0 1.68-1.09 3.09-2.59 3.59L17 9.83zM4 6V5h3v4.83l-.41-.24C5.09 9.09 4 7.68 4 6z" />
                            </svg>
                            <div class="space-y-1">
                                <p
                                    class="text-base font-medium leading-6 text-gray-700 duration-200 group-hover:text-gray-900 transition-color ease">
                                    {{$torneo->nombre}}
                                </p>
                                <p
                                    class="text-xs font-normal leading-5 text-gray-500 duration-200 group-hover:text-gray-700 transition-color ease">
                                     {{$torneo->categoria}}
                                </p>
                            </div>
                        </a>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-1 h-5 mx-10 border-r border-gray-300"></div>
    <a href="{{ route('login') }}"
        class="text-base font-medium leading-6 text-gray-500 whitespace-no-wrap hover:text-wave-600 focus:outline-none focus:text-gray-900">
        Iniciar Sesión
    </a>
    <span class="inline-flex rounded-md shadow-sm">
        <a href="{{ route('register') }}"
            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-500 hover:bg-wave-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-wave active:bg-wave-700">
            Registrarse
        </a>
    </span>
</nav>