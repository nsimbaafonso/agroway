<aside 
    x-bind:class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    class="bg-green-900 border-r border-green-800/50 
    w-64 fixed top-0 left-0 h-screen 
    overflow-y-auto z-50 flex flex-col p-6

    transform transition-all duration-500 ease-in-out

    md:translate-x-0">

    <!-- CLOSE MOBILE -->
    <button 
        class="md:hidden absolute top-4 right-4 text-xl text-green-200"
        @click="sidebarOpen = false"
    >
        <i class="fas fa-times"></i>
    </button>

    <!-- LOGO -->
    <div class="mb-10 pt-2">
        <a href="/produtor/dashboard" class="text-xl font-black flex items-center gap-2">
            <div class="bg-white text-green-900 p-1.5 rounded-lg">
                <i class="fas fa-leaf"></i>
            </div>
            <span class="text-white">
                Agro<span class="text-yellow-400">way</span>
            </span>
        </a>

        <p class="text-[10px] text-green-200/50 mt-4 uppercase font-black tracking-[0.2em]">
            Painel do produtor
        </p>
    </div>

    @php
        function active($route) {
            return request()->is($route) ? 'bg-green-800 text-white' : 'text-green-100/70 hover:text-white hover:bg-green-800/50';
        }
    @endphp

    <!-- NAV -->
    <nav class="space-y-2 flex-1">

        <a href="/produtor/dashboard"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm {{ active('produtor/dashboard') }}">
            <i class="fas fa-gauge-high"></i>
            Dashboard
        </a>

        <a href="/produtor/produtos"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm {{ active('produtor/produtos*') }}">
            <i class="fas fa-box"></i>
            Meus Produtos
        </a>

        <a href="/produtor/pedidos"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm {{ active('produtor/pedidos*') }}">
            <i class="fas fa-cart-shopping"></i>
            Pedidos
        </a>

        <a href="/produtor/configuracoes"
            class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold text-sm {{ active('produtor/configuracoes') }}">
            <i class="fas fa-user-gear"></i>
            Perfil
        </a>

    </nav>

    <!-- LOGOUT -->
    <div class="pt-6 border-t border-green-800/50">
        <form method="POST" action="/logout">
            @csrf
            <button class="flex items-center gap-3 w-full px-4 py-3 rounded-xl text-green-200/60 hover:text-white hover:bg-green-700 transition font-bold text-sm">
                <i class="fas fa-arrow-right-from-bracket"></i>
                Sair
            </button>
        </form>
    </div>
</aside>
