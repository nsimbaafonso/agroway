<section class="py-20 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-green-950 uppercase tracking-wider">Outros Produtos Frescos</h2>
            <div class="w-20 h-1 bg-yellow-400 mt-4 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                // Usando as mesmas imagens conforme solicitado, com novos IDs e descrições
                $outros = [
                    ['id' => 7, 'nome' => 'Cenouras', 'provincia' => 'Bié', 'img' => 'abacates.jpg', 'preco' => 600, 'produtor' => 'Fazenda Esperança', 'desc' => 'Cenouras crocantes e ricas em vitaminas, perfeitas para sumos e saladas.'],
                    ['id' => 8, 'nome' => 'Pimentos', 'provincia' => 'Namibe', 'img' => 'abacaxis.jpg', 'preco' => 850, 'produtor' => 'Agro-Mar', 'desc' => 'Pimentos coloridos e carnudos, ideais para refogados e grelhados.'],
                    ['id' => 9, 'nome' => 'Batata Doce', 'provincia' => 'Malanje', 'img' => 'bananas.jpg', 'preco' => 500, 'produtor' => 'Cooperativa Kwanza', 'desc' => 'Batata doce de polpa alaranjada, muito nutritiva e saborosa.'],
                    ['id' => 10, 'nome' => 'Cebolas', 'provincia' => 'Huíla', 'img' => 'beringelas.jpg', 'preco' => 700, 'produtor' => 'Sítio da Serra', 'desc' => 'Cebolas selecionadas de casca firme, indispensáveis no seu tempero.'],
                    ['id' => 11, 'nome' => 'Tomates', 'provincia' => 'Benguela', 'img' => 'mandiocas.jpg', 'preco' => 1200, 'produtor' => 'Horta Litoral', 'desc' => 'Tomates maduros e sumarentos, colhidos no ponto ideal para molhos.'],
                    ['id' => 12, 'nome' => 'Alhos', 'provincia' => 'Huambo', 'img' => 'milhos.jpg', 'preco' => 2500, 'produtor' => 'Fazenda Planalto', 'desc' => 'Alho nacional de aroma intenso e dentes graúdos.'],
                ];
            @endphp

            @foreach($outros as $prod)
            <a href="/produto/{{ $prod['id'] }}" class="cursor-pointer group bg-white rounded-lg overflow-hidden border border-neutral-200 hover:shadow-2xl hover:border-green-900/20 transition-all duration-500 flex flex-col relative">
                
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

        <div class="mt-16 text-center">
            <a href="/produtos" class="cursor-pointer inline-block px-12 py-4 border-2 border-green-950 text-green-950 font-bold rounded-lg hover:bg-green-950 hover:text-white transition-all duration-300 uppercase tracking-widest text-sm">
                Explorar todo o mercado
            </a>
        </div>
    </div>
</section>