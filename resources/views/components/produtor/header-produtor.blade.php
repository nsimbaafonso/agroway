<header class="bg-white border-b border-neutral-200
    fixed top-0 right-0 left-0 md:left-64
    h-20 flex items-center justify-between px-6 z-30">

    <!-- LEFT -->
    <div class="flex items-center gap-4">
        <button 
            class="md:hidden text-xl text-neutral-600"
            @click="sidebarOpen = !sidebarOpen"
        >
            <i class="fas fa-bars"></i>
        </button>
        
        <h2 class="text-lg font-bold text-neutral-800">
            {{ $title }}
        </h2>

    </div>

    <!-- RIGHT -->
    <div class="flex items-center gap-4">

        <!-- NOTIFICAÇÕES -->
        <a href="/produtor/notificacoes" class="relative w-10 h-10 flex items-center justify-center rounded-full bg-green-100 hover:bg-green-200 transition">
            <i class="fas fa-bell text-green-800"></i>
            <span class="absolute -top-1 -right-1 bg-green-800 text-white text-[10px] w-5 h-5 rounded-full flex items-center justify-center font-bold">
                3
            </span>
        </a>

        <!-- USER -->
        <div class="flex items-center gap-3">
            <div class="text-right hidden lg:block">
                <p class="text-sm font-bold">
                    {{ auth()->user()->name ?? 'Produtor' }}
                </p>
                <p class="text-[10px] text-neutral-400 uppercase font-black">
                    Produtor
                </p>
            </div>

            <a href="/produtor/configuracoes"
                class="w-11 h-11 bg-green-800 text-white rounded-full flex items-center justify-center hover:scale-105 transition">
                <i class="fas fa-user"></i>
            </a>
        </div>

    </div>

</header>
