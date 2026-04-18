<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard Produtor | Agroway')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('styles')
</head>

<body class="bg-white text-neutral-800">

    <div  x-data="{ sidebarOpen: false }" class="min-h-screen flex relative overflow-hidden">

        <!-- GLOW -->
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-green-700/10 blur-[140px] rounded-full"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-green-900/10 blur-[140px] rounded-full"></div>

        <!-- SIDEBAR -->
        @include('components.produtor.sidebar-produtor')

        <!-- OVERLAY MOBILE -->
        <div x-show="sidebarOpen"
            x-transition.opacity
            @click="sidebarOpen = false"
            class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 md:hidden">
        </div>

        <!-- CONTENT -->
        <div class="flex-1 md:ml-64 flex flex-col relative z-10">

            <!-- HEADER -->
            @include('components.produtor.header-produtor', [
                'title' => $title ?? 'Dashboard',
            ])

            <!-- MAIN -->
            <main class="mt-20 px-6 py-8 max-w-7xl mx-auto w-full">
                @yield('conteudo')
            </main>

        </div>

    </div>

    @stack('scripts')
</body>

</html>
