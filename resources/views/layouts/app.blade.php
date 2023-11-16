<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="flex h-screen">
    <!-- Горизонтальная панель (серый фон) -->
    <div class="w-350 bg-gray-200 p-4 flex flex-col justify-between">
        <div class="top_content">
            <div class="text-2xl font-bold mb-4">{{ config('app.name', 'Laravel') }}</div>

            <!-- Вертикальный список страниц с иконками -->
            <ul class="pages_links">
                <li class="page">
                    <i class="fas fa-list"></i>
                    <a href="/application">
                        Заявки
                    </a>
                </li>
                <li class="page">
                    <i class="fas fa-truck"></i>
                    <a href="/delivery">
                        Доставки
                    </a>
                </li>
                <li class="page">
                    <i class="fas fa-user-friends"></i>
                    <a href="/agents">
                        Контрагенты
                    </a>
                </li>
                <li class="page">
                    <i class="fas fa-bell"></i>
                    <a href="#">
                        Уведомления
                    </a>
                </li>
            </ul>
        </div>
        <!-- Right Side Of Navbar -->
        <ul class="flex items-center space-x-2">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

        <div class="bottom_content">
            <!-- Информация о пользователе с иконкой -->
            <div class="mt-auto">
                <div class="flex items-center space-x-2">
                    <div class="w-12 h-12 rounded-full bg-blue-500"></div>
                    <div>
                        <div class="text-black font-semibold">Имя Фамилия</div>
                        <div class="text-gray-500">почта@example.com</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Кнопка для сворачивания/разворачивания меню -->
{{--         <button class="block md:hidden mt-4 p-2 bg-gray-300 text-black hover:bg-gray-400">--}}
{{--            <i class="fas fa-chevron-left"></i>--}}
{{--        </button>--}}
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
