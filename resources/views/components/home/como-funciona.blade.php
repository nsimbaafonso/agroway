<section id="como-funciona" class="relative bg-neutral-50 py-24 overflow-hidden">
    
    <div class="absolute top-1/4 right-0 w-100 h-100 bg-yellow-400/10 blur-[100px] rounded-full -z-10"></div>
    <div class="absolute bottom-1/4 left-0 w-100 h-100 bg-green-100/30 blur-[100px] rounded-full -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 text-center relative z-30">
        
        <div class="text-center mb-20">
            <h2 class="text-3xl md:text-4xl font-black text-green-950 uppercase tracking-wider">Como Funciona</h2>
            <div class="w-20 h-1 bg-yellow-400 mt-4 mx-auto rounded-full"></div>
            <p class="mt-6 text-neutral-500 text-base md:text-lg max-w-2xl mx-auto font-light leading-relaxed">
                Nossa tecnologia conecta todos os pontos da cadeia produtiva de forma simples e eficiente.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $etapas = [
                    [
                        'icon' => 'M12 6v6m0 0v6m0-6h6m-6 0H6', 
                        'title' => 'O Produtor Cadastra',
                        'desc' => 'O agricultor regista-se na plataforma e lista os seus produtos disponíveis, definindo a origem e o preço justo.',
                    ],
                    [
                        'icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 
                        'title' => 'O Cliente Escolhe',
                        'desc' => 'Consumidores e empresas navegam pelo catálogo atualizado e selecionam os produtos frescos direto da fonte.',
                    ],
                    [
                        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 
                        'title' => 'O Motorista Entrega',
                        'desc' => 'Nossos transportadores parceiros garantem que a carga chegue ao destino com segurança e agilidade máxima.',
                    ],
                ];
            @endphp

            @foreach($etapas as $etapa)
            <div class="group relative bg-neutral-50 rounded-lg p-10 border border-neutral-200 hover:shadow-2xl hover:border-green-900/20 transition-all duration-500 flex flex-col items-center text-center">
                
                <div class="w-20 h-20 mb-8 flex items-center justify-center rounded-lg bg-white border border-neutral-200 group-hover:border-yellow-400 group-hover:bg-yellow-50 transition-all duration-500 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-950 transition-transform duration-500 group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $etapa['icon'] }}" />
                    </svg>
                </div>

                <h3 class="text-xl font-bold text-green-950 mb-4 uppercase tracking-tight group-hover:text-green-700 transition-colors">
                    {{ $etapa['title'] }}
                </h3>
                
                <p class="text-neutral-500 text-sm leading-relaxed font-light italic">
                    "{{ $etapa['desc'] }}"
                </p>

                <div class="absolute top-0 left-0 w-1 h-0 bg-yellow-400 transition-all duration-500 group-hover:h-1/4 rounded-tl-lg"></div>
            </div>
            @endforeach
        </div>

        <div class="mt-20 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="/login"
                class="px-10 py-4 border-2 border-green-950 text-green-950 hover:bg-green-950 hover:text-white font-bold rounded-lg transition-all duration-300 uppercase tracking-widest text-sm w-full sm:w-auto">
                Já tenho conta
            </a>
            <a href="/register"
                class="px-10 py-4 bg-yellow-400 hover:bg-yellow-500 text-green-950 font-bold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 uppercase tracking-widest text-sm w-full sm:w-auto">
                Criar conta agora
            </a>
        </div>
    </div>
</section>