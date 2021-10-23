<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"
        defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch"
        href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('app.js') }}"></script>
    <!--!Alelrtify links-->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
        <script type='text/javascript'
        src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js '></script>
    <script src="https://cdn.tiny.cloud/1/gftmenba3a5p8c52libehb2jyij9mdxu5a84z2uow29h78cz/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body class="bg-gray-600">
    <div id="app">
        <nav class=" shadow bg-gray-800">
            <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <div>
                        <a class="text-2xl font-bold text-white lg:text-3xl hover:text-gray-300 "
                            style="text-decoration:none"
                            href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button"
                            class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24"
                                class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="items-center md:flex">
                    <div class="flex flex-col md:flex-row md:mx-6">
                        <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                            style="text-decoration:none"
                            href="#">Home</a>
                        <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                            style="text-decoration:none"
                            href="#">Shop</a>
                        <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                            style="text-decoration:none"
                            href="#">Contact</a>
                        <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                            style="text-decoration:none"
                            href="#">About</a>
                        @guest
                            @if (Route::has('login'))
                                <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                                    style="text-decoration:none"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            @if (Route::has('register'))
                                <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                                    style="text-decoration:none"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                                style="text-decoration:none"
                                href="home/profile">{{ __('Profile') }}</a>
                            <a class="my-1 text-sm font-medium text-gray-200 hover:text-indigo-400 md:mx-4 md:my-0 "
                                style="text-decoration:none"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                class="d-none">
                                @csrf
                            </form>

                        </div>
                    @endguest
                </div>
            </div>
    </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
