<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Agroway')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header id="header"
        class="fixed w-full top-0 left-0 z-50 bg-green-950/90 backdrop-blur-md text-white transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="/" class="text-2xl font-bold tracking-wide">
                <span class="text-yellow-400">Agro</span>way
            </a>

            <!-- Botão Mobile -->
            <button id="menu-btn" class="md:hidden text-2xl text-yellow-400 hover:scale-110 transition">
                <i id="menu-icon" class="fas fa-bars"></i>
            </button>

            <!-- NAV ÚNICO -->
            <nav id="menu"
                class="absolute md:static top-full left-0 w-full md:w-auto 
                    bg-green-900/95 md:bg-transparent backdrop-blur-md md:backdrop-blur-none
                    flex flex-col md:flex-row items-center
                    gap-6 md:gap-8
                    px-6 md:px-0 py-6 md:py-0
                    opacity-0 md:opacity-100
                    scale-95 md:scale-100
                    pointer-events-none md:pointer-events-auto
                    transition-all duration-300 ease-in-out">

                <!-- Links -->
                <a href="/" class="nav-link">Home</a>
                <a href="/sobre" class="nav-link">Sobre</a>
                <a href="/produtos" class="nav-link">Produtos</a>
                <a href="/contato" class="nav-link">Contato</a>

                <div class="w-full h-px bg-green-800 md:hidden"></div>

                <a href="/login" class="nav-link">Entrar</a>

                <a href="/criar-conta"
                    class="bg-yellow-400 text-green-950 px-5 py-2 rounded-full font-semibold hover:bg-yellow-500 transition">
                    Criar Conta
                </a>
            </nav>
        </div>
    </header>

    @yield('conteudo')

    <footer class="bg-green-950 text-neutral-100 mt-20">
        <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Marca -->
            <div>
                <h2 class="text-2xl font-bold mb-4">
                    <span class="text-yellow-400">Agro</span>way
                </h2>
                <p class="text-neutral-400 text-sm leading-relaxed">
                    Conectando o campo ao futuro. Uma plataforma moderna para impulsionar o agronegócio com tecnologia.
                </p>

                <!-- Social -->
                <div class="flex gap-4 mt-6 text-lg">
                    <a href="#" class="hover:text-yellow-400 transition"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-yellow-400 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-yellow-400 transition"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="hover:text-yellow-400 transition"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- Navegação -->
            <div class="flex flex-col gap-2">
                <h3 class="text-lg font-semibold mb-4 text-white">Navegação</h3>

                <a href="/" class="footer-link">Home</a>
                <a href="/sobre" class="footer-link">Sobre</a>
                <a href="/produtos" class="footer-link">Produtos</a>
                <a href="/contato" class="footer-link">Contato</a>
            </div>

            <!-- Empresa -->
            <div class="flex flex-col gap-2">
                <h3 class="text-lg font-semibold mb-4 text-white">Empresa</h3>

                <a href="#" class="footer-link">Sobre nós</a>
                <a href="#" class="footer-link">Carreiras</a>
                <a href="#" class="footer-link">Política de Privacidade</a>
                <a href="#" class="footer-link">Termos de Uso</a>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-white">Fique por dentro</h3>
                <p class="text-sm text-neutral-400 mb-4">
                    Receba novidades e atualizações da plataforma.
                </p>

                <form class="flex flex-col gap-3">
                    <input type="email" placeholder="Seu email"
                        class="px-4 py-2 rounded-md bg-green-900 border border-green-800 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">

                    <button
                        class="bg-yellow-400 text-green-950 py-2 rounded-md font-semibold hover:bg-yellow-500 transition">
                        Subscrever
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom -->
        <div class="border-t border-green-900">
            <div
                class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-neutral-400">

                <p>© 2026 Agroway. Todos os direitos reservados.</p>

                <div class="flex gap-6">
                    <a href="#" class="footer-link">Privacidade</a>
                    <a href="#" class="footer-link">Termos</a>
                    <a href="#" class="footer-link">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
