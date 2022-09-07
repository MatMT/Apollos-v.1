<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
    @vite('resources/css/app.css')
    <!-- ALPINE JS -->
    @vite(['resources/js/dash.js'])
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" type="image/x-icon">

    <title>Admin | Apollo's</title>
</head>

<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{ navOpen: false }">
        <!-- NAV -->
        <nav class="absolute md:relative w-64 transform -translate-x-full md:translate-x-0 h-screen overflow-y-scroll bg-black transition-all duration-300"
            :class="{ '-translate-x-full': !navOpen }">
            <div class="flex flex-col justify-between h-full">
                <div class="p-4">
                    <!-- LOGO -->
                    <a class="flex items-center text-white space-x-4" href="">
                        <svg class="w-7 h-7 bg-indigo-600 rounded-lg p-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        {{-- Titulo Dashboard --}}
                        <span class="text-xl font-bold">Admin | Apollo's </span>
                    </a>

                    <!-- SEARCH BAR -->
                    <div class="border-gray-700 py-5 text-white border-b rounded">
                        <div class="relative">
                            {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <form action="" method="GET">
                                <input type="search"
                                    class="w-full py-2 rounded pl-10 bg-gray-800 border-none focus:outline-none focus:ring-0"
                                    placeholder="Buscar">
                            </form> --}}
                        </div>
                        <!-- SEARCH RESULT -->
                    </div>

                    <!-- NAV LINKS -->
                    <div class="py-4 text-gray-400 space-y-1">
                        <!-- BASIC LINK -->
                        <a href="#"
                            class="block py-2.5 px-4 flex items-center space-x-2 bg-gray-800 text-white hover:bg-gray-800 hover:text-white rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>{{__('Dashboard')}}</span>
                        </a>
                        <!-- DROPDOWN LINK -->
                        {{-- <div class="block" x-data="{ open: false }">
                            <div @click="open = !open"
                                class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
                                <div class="flex items-center space-x-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Content</span>
                                </div>
                                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 15l7-7 7 7"></path>
                                </svg>
                                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <div x-show="open"
                                class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
                                <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                                    Categories
                                </a>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                                    Courses
                                </a>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                                    Instruction
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <!-- PROFILE -->
                <div class="text-gray-200 border-gray-800 rounded flex items-center justify-between p-2">
                    <div class="flex items-center space-x-2">
                        <!-- AVATAR IMAGE BY FIRST LETTER OF NAME -->
                        <img src="{{ asset('assets/mini.png') }}" class="w-7 rounded-full" alt="Profile">
                        <h1>Admin</h1>
                    </div>
                    {{-- Cerrar sesión --}}
                    <a onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#"
                        class="hover:bg-gray-800 hover:text-white p-2 rounded">

                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>

                        {{-- <form id="logoutForm" action="" method="POST"></form> --}}
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        </form>
                    </a>
                </div>

            </div>
        </nav>
        <!-- END OF NAV -->

        <!-- PAGE CONTENT -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
            <div class="md:hidden justify-between items-center bg-black text-white flex">
                <h1 class="text-2xl font-bold px-4">Admin | Apollo's </h1>
                <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
                    <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <section class="max-w-7xl mx-auto py-4 px-5">
                <div class="flex justify-between items-center border-b border-gray-300">
                    <h1 class="text-2xl font-semibold pt-2 pb-6">{{__('Musical reports')}}</h1>
                </div>

                <!-- STATISTICS -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 py-6">
                    <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                        <div class="space-y-2">
                            <p class="text-xs text-gray-400 uppercase">{{__('Reported cases')}}</p>
                            <div class="flex items-center space-x-2">
                                <h1 class="text-xl font-semibold">
                                    @if ($reports)
                                        {{ $reports->count() }}
                                    @else
                                        0
                                    @endif
                                </h1>
                                {{-- <p class="text-xs bg-red-50 text-red-500 px-1 rounded">-2.9</p> --}}
                            </div>
                        </div>
                        {{-- Icono --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                        <div class="space-y-2">
                            <p class="text-xs text-gray-400 uppercase">{{__('Solved cases')}}</p>
                            <div class="flex items-center space-x-2">
                                <h1 class="text-xl font-semibold">
                                    @if ($resolved)
                                        {{ $resolved->count() }}
                                    @else
                                        0
                                    @endif
                                </h1>
                                {{-- <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+3.1</p> --}}
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>

                    </div>

                    <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                        <div class="space-y-2">
                            <p class="text-xs text-gray-400 uppercase">{{__('Denied cases')}}</p>
                            <div class="flex items-center space-x-2">
                                <h1 class="text-xl font-semibold">
                                    @if ($denied)
                                        {{ $denied->count() }}
                                    @else
                                        0
                                    @endif
                                </h1>
                                {{-- <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+3.1</p> --}}
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 9.75L19.5 12m0 0l2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25m-10.5-6l4.72-4.72a.75.75 0 011.28.531V19.94a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.506-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.395C2.806 8.757 3.63 8.25 4.51 8.25H6.75z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
                        <div class="space-y-2">
                            <p class="text-xs text-gray-400 uppercase">{{__('Accepted cases')}}</p>
                            <div class="flex items-center space-x-2">
                                <h1 class="text-xl font-semibold">
                                    @if ($acepted)
                                        {{ $acepted->count() }}
                                    @else
                                        0
                                    @endif
                                </h1>
                                {{-- <p class="text-xs bg-green-50 text-green-500 px-1 rounded">+3.1</p> --}}
                            </div>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
                        </svg>

                    </div>
                </div>
                <!-- END OF STATISTICS -->

                <!-- TABLE -->
                <div class="bg-white shadow rounded-sm my-2.5 overflow-x-auto">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">{{__('User')}}</th>
                                <th class="py-3 px-6 text-left">{{__('Song')}}</th>
                                <th class="py-3 px-6 text-center">{{__('Song')}}</th>
                                <th class="py-3 px-6 text-center">{{__('Status')}}</th>
                                <th class="py-3 px-6 text-center">{{__('Action')}}</th>
                            </tr>
                        </thead>
                </div>
                <tbody class="text-gray-600 text-sm">
                    <!-- Caso -->
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($reports as $report)
                        @php
                            ++$i;
                            $song = $report->Infosong($report->song_id);
                        @endphp
                        <tr
                            class="border-b border-gray-200 @if ($i % 2 == 0) bg-gray-50 @endif hover:bg-gray-100">
                            <!-- Usuario -->
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="{{ asset('storage') . '/uploads/pfp/' . $report->InfoUser($report->reportedUser_id)->image }}" />
                                    </div>
                                    <span> {{ $report->InfoUser($report->reportedUser_id)->username }}
                                    </span>
                                </div>
                            </td>
                            <!-- Colección -->
                            <td class="py-3 px-3 text-left whitespace-nowrap">
                                <p class="ml-2">{{ $song->name_song }}</p>
                            </td>

                            <td class="py-3 px-6 flex justify-center">
                                <audio controls src="{{ asset('storage') . '/uploads/canciones/' . $song->url }}"
                                    preload="none" controlsList="nodownload noplaybackrate"></audio>
                            </td>
                            <td class="py-3 px-3 text-center">
                                @if ($report->status == 'pending')
                                    <span
                                        class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">{{__('Pending')}}</span>
                                @else
                                    <span
                                        class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{__('Solved')}}</span>
                                @endif
                                </span>
                            </td>
                            {{-- Interacción --}}
                            <td class="py-3 px-6 text-center">

                                <div class="flex item-center justify-center gap-1">


                                    <form action="{{ route('admin.denied.store', [$report, $song]) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit">
                                            <div
                                                class="w-4 mr-2 transform
                                                @if ($report->status == 'resolved' && $song->visibility == false) text-red-600 @endif
                                                hover:text-red-600 hover:scale-110 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M5.965 4.904l9.131 9.131a6.5 6.5 0 00-9.131-9.131zm8.07 10.192L4.904 5.965a6.5 6.5 0 009.131 9.131zM4.343 4.343a8 8 0 1111.314 11.314A8 8 0 014.343 4.343z"
                                                        clip-rule="evenodd" />
                                                </svg>

                                            </div>
                                        </button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('admin.accepted.store', [$report, $song]) }}"
                                        method="POST">
                                        @csrf

                                        <button type="submit">
                                            <div
                                                class="w-4 mr-2 transform @if ($report->status == 'resolved' && $song->visibility == true) text-green-500 @endif hover:text-green-500 hover:scale-110 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
    </div>
    <!-- END OF TABLE -->


    </section>
    <!-- END OF PAGE CONTENT -->
    </main>
    </div>
</body>

</html>
