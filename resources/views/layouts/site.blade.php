<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Agroway')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    @stack('styles')
</head>

<body>
    <header x-data="{ open: false }" @scroll.window="open = false" id="header" class="fixed w-full top-0 left-0 z-50 bg-green-950/90 backdrop-blur-md text-white transition-all duration-300">

        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <a href="/" class="text-2xl font-bold tracking-wide">
                <span class="text-yellow-400">Agro</span>way
            </a>

            <div class="flex items-center gap-4 md:hidden">
                <a href="/carrinho" class="relative text-xl text-yellow-400 hover:scale-110 transition">
                    <i class="fas fa-shopping-cart"></i>
                    <span
                        class="absolute -top-2 -right-2 bg-yellow-400 text-green-950 text-[10px] w-5 h-5 flex items-center justify-center rounded-full font-bold">
                        2
                    </span>
                </a>

                <button @click="open = !open" class="text-2xl text-yellow-400 hover:scale-110 transition">
                    <i :class="open ? 'fas fa-times' : 'fas fa-bars'"></i>
                </button>
            </div>

            <nav 
                x-show="open || window.innerWidth >= 768"
                x-cloak
                @resize.window="if(window.innerWidth >= 768) open = false"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="absolute z-50 md:static top-full left-0 w-full md:w-auto 
                bg-green-900/95 md:bg-transparent
                flex flex-col md:flex-row items-center
                gap-6 md:gap-8
                px-6 md:px-0 py-6 md:py-0"
            >

                <div
                    class="flex flex-col md:flex-row items-center gap-6 md:gap-8 font-medium text-sm uppercase tracking-wider">
                    <a href="/"
                        @click="open = false"
                        class="relative hover:text-yellow-400 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-yellow-400 after:transition-all hover:after:w-full">
                        Home
                    </a>
                    <a href="/produtos"
                        @click="open = false"
                        class="relative hover:text-yellow-400 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-yellow-400 after:transition-all hover:after:w-full">
                        Produtos
                    </a>
                    <a href="/sobre"
                        @click="open = false"
                        class="relative hover:text-yellow-400 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-yellow-400 after:transition-all hover:after:w-full">
                        Sobre
                    </a>
                    <a href="/contato"
                        @click="open = false"
                        class="relative hover:text-yellow-400 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-yellow-400 after:transition-all hover:after:w-full">
                        Contato
                    </a>
                </div>

                <div class="w-full h-px bg-green-800 md:hidden"></div>

                <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-auto">

                    <a href="/carrinho"
                        @click="open = false"
                        class="hidden md:block relative text-xl text-yellow-400 hover:scale-110 transition mr-2">
                        <i class="fas fa-shopping-cart"></i>
                        <span
                            class="absolute -top-2 -right-2 bg-yellow-400 text-green-950 text-[10px] w-5 h-5 flex items-center justify-center rounded-full font-bold">2</span>
                    </a>

                    <a href="/login"
                        @click="open = false"
                        class="w-full md:w-auto px-6 py-2.5 rounded-md border border-white/20 text-white text-xs font-black uppercase tracking-widest hover:bg-white/10 transition-all backdrop-blur-sm text-center">
                        Entrar
                    </a>

                    <a href="/criar-conta"
                        @click="open = false"
                        class="w-full md:w-auto px-6 py-2.5 bg-yellow-400 text-green-950 text-xs font-black rounded-md hover:bg-yellow-300 transition-all shadow-[0_8px_25px_-8px_rgba(250,204,21,0.5)] uppercase tracking-widest text-center">
                        Criar Conta
                    </a>
                </div>
            </nav>
        </div>
    </header>

    @yield('conteudo')

    <footer class="bg-green-950 text-neutral-100">
        <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Marca -->
            <div>
                <h2 class="text-2xl font-bold mb-4">
                    <span class="text-yellow-400">Agro</span>way
                </h2>

                <p class="text-neutral-400 text-sm leading-relaxed mb-6">
                    Conectando o campo ao futuro. Uma plataforma moderna para impulsionar o agronegócio com tecnologia.
                </p>

                <!-- Social -->
                <div class="flex gap-4">
                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 rounded-full 
                          bg-green-900 text-yellow-400 
                          transition-all duration-300
                          hover:bg-yellow-400 hover:text-green-950
                          hover:-translate-y-1 hover:scale-110 hover:shadow-lg">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 rounded-full 
                          bg-green-900 text-yellow-400 
                          transition-all duration-300
                          hover:bg-yellow-400 hover:text-green-950
                          hover:-translate-y-1 hover:scale-110 hover:shadow-lg">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 rounded-full 
                          bg-green-900 text-yellow-400 
                          transition-all duration-300
                          hover:bg-yellow-400 hover:text-green-950
                          hover:-translate-y-1 hover:scale-110 hover:shadow-lg">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#"
                        class="flex items-center justify-center w-10 h-10 rounded-full 
                          bg-green-900 text-yellow-400 
                          transition-all duration-300
                          hover:bg-yellow-400 hover:text-green-950
                          hover:-translate-y-1 hover:scale-110 hover:shadow-lg">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div class="flex flex-col gap-2">
                <h3 class="text-lg font-semibold mb-4 text-white">Link Rápidos</h3>

                <a href="/" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Home</a>
                <a href="/sobre" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Sobre</a>
                <a href="/produtos" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Produtos</a>
                <a href="/contato" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Contato</a>
            </div>

            <!-- Empresa -->
            <div class="flex flex-col gap-2">
                <h3 class="text-lg font-semibold mb-4 text-white">Empresa</h3>

                <a href="#" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Sobre nós</a>
                <a href="#" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Carreiras</a>
                <a href="#" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Política de
                    Privacidade</a>
                <a href="#" class="text-neutral-400 hover:text-yellow-400 transition hover:pl-1">Termos de
                    Uso</a>
            </div>
        </div>

        <!-- Bottom -->
        <div class="border-t border-green-900">
            <div
                class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-neutral-400">

                <p>&copy; {{ date('Y') }} Agroway. Todos os direitos reservados.</p>

                <div class="flex gap-6">
                    <a href="#" class="hover:text-yellow-400 transition">Privacidade</a>
                    <a href="#" class="hover:text-yellow-400 transition">Termos</a>
                    <a href="#" class="hover:text-yellow-400 transition">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
