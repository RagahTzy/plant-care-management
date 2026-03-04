<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

        <style>
            body {
                background: linear-gradient(to bottom, #1E293B, #243044);
                color: #F1F5F9;
            }

            .glass-navbar {
                background: rgba(36, 48, 68, 0.75);
                backdrop-filter: blur(12px);
                border-bottom: 1px solid rgba(255,255,255,0.06);
            }

            .accent-text {
                color: #7DD3C0;
            }

            .soft-glow {
                text-shadow: 0 0 12px rgba(125, 211, 192, 0.3);
            }

            .nav-link {
                position: relative;
                color: #CBD5E1;
                transition: 0.3s ease;
            }

            .nav-link:hover {
                color: #7DD3C0;
            }

            .nav-link::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: -4px;
                width: 0%;
                height: 2px;
                background: #7DD3C0;
                transition: 0.4s ease;
            }

            .nav-link:hover::after {
                width: 100%;
            }

            .section-alt {
                background: #243044;
            }

            .card-modern {
                background: #2A3447;
                border: 1px solid rgba(255,255,255,0.05);
                transition: 0.4s ease;
            }

            .card-modern:hover {
                transform: translateY(-6px);
                box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            }

            .btn-modern {
                background: #7DD3C0;
                color: #1E293B;
                transition: 0.3s ease;
            }

            .btn-modern:hover {
                background: #5fc3ae;
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(125,211,192,0.4);
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-slate-900 text-white">

        <div class="min-h-screen">

            @auth
                @if(auth()->user()->role === 'admin')
                    @include('components.navbar-admin')
                @else
                    @include('components.navbar-user')
                @endif
            @endauth

            @guest
                @include('components.navbar-guest')
            @endguest

            @if (isset($header))
                <header class="bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>
                @yield('content')
            </main>

        </div>
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <script>
        AOS.init({
            duration: 1200,
            easing: 'ease-in-out',
            once: true
        });
        </script>
        </body>
</html>
