<section class="pt-32 pb-12 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="mb-12">
            <h1 class="text-3xl md:text-5xl font-black text-green-950 uppercase tracking-tighter">
                Catálogo de <span class="text-yellow-500 italic">Produtos</span>
            </h1>
            <div class="w-20 h-1 bg-yellow-400 mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 bg-neutral-50 rounded-xl border border-neutral-200">
            <div class="relative">
                <input type="text" placeholder="Pesquisar produto..." 
                    class="w-full pl-10 pr-4 py-3 bg-white border border-neutral-200 rounded-lg text-sm focus:ring-2 focus:ring-yellow-400 outline-none transition-all">
                <svg class="absolute left-3 top-3.5 h-4 w-4 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>

            <select class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-lg text-sm text-neutral-600 focus:ring-2 focus:ring-yellow-400 outline-none cursor-pointer">
                <option value="">Todas Categorias</option>
                <option value="frutas">Frutas</option>
                <option value="legumes">Legumes</option>
                <option value="cereais">Cereais</option>
            </select>

            <select class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-lg text-sm text-neutral-600 focus:ring-2 focus:ring-yellow-400 outline-none cursor-pointer">
                <option value="">Todas Províncias</option>
                <option value="huambo">Huambo</option>
                <option value="bengo">Bengo</option>
                <option value="luanda">Luanda</option>
            </select>

            <select class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-lg text-sm text-neutral-600 focus:ring-2 focus:ring-yellow-400 outline-none cursor-pointer">
                <option value="">Todos Produtores</option>
                <option value="girassol">Fazenda Girassol</option>
                <option value="agrosul">Agro-Sul</option>
            </select>
        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $produtos = [
                    ['id' => 1, 'nome' => 'Abacates', 'provincia' => 'Huambo', 'img' => 'abacates.jpg', 'preco' => 1500, 'produtor' => 'Fazenda Girassol', 'desc' => 'Abacates manteiga colhidos hoje, ideais para consumo imediato e cremosos.'],
                    ['id' => 2, 'nome' => 'Abacaxis', 'provincia' => 'Bengo', 'img' => 'abacaxis.jpg', 'preco' => 1200, 'produtor' => 'Cooperativa Agro-Sul', 'desc' => 'Abacaxi pérola muito doce e suculento, direto das terras do Huambo.'],
                    ['id' => 3, 'nome' => 'Bananas', 'provincia' => 'Benguela', 'img' => 'bananas.jpg', 'preco' => 800, 'produtor' => 'Sítio Boa Vista', 'desc' => 'Bananas ricas em potássio, cultivadas de forma 100% orgânica e natural.'],
                    ['id' => 4, 'nome' => 'Beringelas', 'provincia' => 'Cuanza Sul', 'img' => 'beringelas.jpg', 'preco' => 950, 'produtor' => 'Horta do Vale', 'desc' => 'Beringelas frescas e firmes, selecionadas manualmente para maior qualidade.'],
                    ['id' => 5, 'nome' => 'Mandiocas', 'provincia' => 'Uíge', 'img' => 'mandiocas.jpg', 'preco' => 1100, 'produtor' => 'Fazenda Central', 'desc' => 'Mandioca macia de cozimento rápido, perfeita para acompanhamentos.'],
                    ['id' => 6, 'nome' => 'Milhos', 'provincia' => 'Huíla', 'img' => 'milhos.jpg', 'preco' => 750, 'produtor' => 'Agro Futuro', 'desc' => 'Milho verde doce e tenro, ideal para canjicas, pamonhas ou cozidos.'],
                ];
            @endphp

            @foreach($produtos as $prod)
            <a href="/produto/{{ $prod['id'] }}" class="cursor-pointer group bg-neutral-50 rounded-lg overflow-hidden border border-neutral-200 hover:shadow-2xl hover:border-green-900/20 transition-all duration-500 flex flex-col relative">
                
                <div class="relative overflow-hidden aspect-square bg-neutral-100">
                    <img src="{{ asset('img/' . $prod['img']) }}" alt="{{ $prod['nome'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <div class="absolute top-4 left-4 flex flex-col gap-1">
                        <div class="bg-white/95 backdrop-blur px-3 py-1 rounded-full shadow-sm border border-neutral-100 w-fit">
                            <p class="text-[10px] font-bold text-green-950 uppercase tracking-tight">Produtor: {{ $prod['produtor'] }}</p>
                        </div>
                        <div class="bg-yellow-400 px-3 py-0.5 rounded-full shadow-sm w-fit">
                            <p class="text-[9px] font-black text-green-950 uppercase tracking-tighter">{{ $prod['provincia'] }}</p>
                        </div>
                    </div>

                    <div class="absolute bottom-4 right-4 translate-y-12 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="bg-green-950 text-white p-3 rounded-full shadow-lg hover:bg-green-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="p-6 flex flex-col grow">
                    <h3 class="font-bold text-green-950 text-xl uppercase leading-snug group-hover:text-green-700 transition-colors">
                        {{ $prod['nome'] }}
                    </h3>

                    <p class="mt-2 text-neutral-500 text-sm line-clamp-2 italic leading-relaxed">
                        "{{ $prod['desc'] }}"
                    </p>
                    
                    <div class="mt-auto pt-6 flex justify-between items-end border-t border-neutral-200/60">
                        <div>
                            <span class="text-[10px] text-neutral-400 uppercase font-bold block mb-1">Preço Kwanza</span>
                            <span class="text-2xl font-black text-green-900 italic">
                                {{ number_format($prod['preco'], 0, ',', '.') }} 
                                <small class="text-xs font-bold not-italic">Kz</small>
                            </span>
                        </div>
                        
                        <div class="text-green-950 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-20 flex justify-center gap-2">
            <button class="px-4 py-2 rounded-lg border border-neutral-200 text-neutral-400 hover:border-yellow-400 transition-all font-bold uppercase text-xs">Anterior</button>
            <button class="w-10 h-10 rounded-lg bg-yellow-400 text-green-950 font-bold shadow-md">1</button>
            <button class="w-10 h-10 rounded-lg border border-neutral-200 text-neutral-600 hover:border-yellow-400 transition-all font-bold">2</button>
            <button class="px-4 py-2 rounded-lg border border-neutral-200 text-neutral-600 hover:border-yellow-400 transition-all font-bold uppercase text-xs">Próximo</button>
        </div>

    </div>
</section>