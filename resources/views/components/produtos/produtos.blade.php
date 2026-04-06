<section id="lista-produtos" class="relative bg-neutral-50 py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs uppercase tracking-[0.3em] text-green-800 font-black mb-4">
                Marketplace
            </h2>
            <h3 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6 tracking-tight">
                Todos os <span class="text-green-800">produtos</span>
            </h3>
            <div class="w-20 h-1.5 bg-yellow-400 mx-auto mb-6 rounded-full"></div>
            <p class="text-lg text-neutral-500 font-light leading-relaxed">
                Explore produtos filtrando por categoria e localização.
            </p>
        </div>

        <!-- SEARCH + FILTERS -->
        <form action="/produtos" method="GET"
            class="mb-16 space-y-4 lg:space-y-0 lg:flex lg:gap-4 items-stretch justify-between">

            <div class="w-full lg:flex-1 relative">
                <input type="text" name="search" placeholder="Pesquisar produtos..."
                    class="w-full pl-12 pr-4 py-3.5 rounded-md border border-neutral-200 
            focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700
            text-sm shadow-sm transition h-full">
                <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400 text-sm"></i>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">

                <select name="categoria"
                    class="w-full sm:w-auto px-4 py-3.5 rounded-md border border-neutral-200 text-sm 
            focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700 transition bg-white cursor-pointer">
                    <option value="">Todas categorias</option>
                    <option value="frutas">Frutas</option>
                    <option value="legumes">Legumes</option>
                    <option value="cereais">Cereais</option>
                </select>

                <select name="provincia"
                    class="w-full sm:w-auto px-4 py-3.5 rounded-md border border-neutral-200 text-sm 
            focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700 transition bg-white cursor-pointer">
                    <option value="">Todas províncias</option>
                    <option value="huambo">Huambo</option>
                    <option value="benguela">Benguela</option>
                    <option value="uige">Uíge</option>
                    <option value="huila">Huíla</option>
                    <option value="malanje">Malanje</option>
                    <option value="cuanza_sul">Cuanza Sul</option>
                </select>

                <button type="submit"
                    class="w-full sm:w-auto px-8 py-3.5 cursor-pointer bg-green-800 text-white text-[10px] font-black rounded-md 
            hover:bg-green-900 active:scale-95 transition-all 
            uppercase tracking-widest shadow-md shadow-green-900/10">
                    Filtrar
                </button>

            </div>
        </form>

        <!-- PRODUTOS (MESMO PADRÃO DA HOME) -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <a href="/produtos/detalhes"
                class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 touch-manipulation block">
                <div class="relative overflow-hidden aspect-4/3">
                    <img src="{{ asset('img/abacates.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Abacate" />
                    <div
                        class="absolute inset-0 bg-green-950/10 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity duration-500">
                    </div>
                </div>

                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-xl font-bold text-neutral-800 tracking-tight">Abacate</h4>
                        <div
                            class="flex items-center gap-1.5 text-[10px] font-black uppercase tracking-wider text-neutral-400 bg-neutral-50 px-2 py-1 rounded">
                            <i class="fas fa-location-dot text-yellow-500"></i>
                            <span>Huambo</span>
                        </div>
                    </div>
                    <p class="text-sm text-neutral-500 mb-6 leading-relaxed line-clamp-2">
                        Ricos em nutrientes e com cremosidade natural, colhidos no ponto ideal.
                    </p>
                    <div class="flex items-center justify-between border-t border-neutral-100 pt-6">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold">Preço
                                Unitário</span>
                            <span class="text-green-800 font-black text-xl tracking-tight">2.500,00 <span
                                    class="text-sm text-neutral-400 font-medium">AOA</span></span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/produtos/detalhes"
                class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 touch-manipulation block">
                <div class="relative overflow-hidden aspect-4/3">
                    <img src="{{ asset('img/abacaxis.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Abacaxi" />
                    <div
                        class="absolute inset-0 bg-green-950/10 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-xl font-bold text-neutral-800 tracking-tight">Abacaxi</h4>
                        <div
                            class="flex items-center gap-1.5 text-[10px] font-black uppercase tracking-wider text-neutral-400 bg-neutral-50 px-2 py-1 rounded">
                            <i class="fas fa-location-dot text-yellow-500"></i>
                            <span>Benguela</span>
                        </div>
                    </div>
                    <p class="text-sm text-neutral-500 mb-6 leading-relaxed line-clamp-2">
                        Doces, suculentos e com o sabor vibrante das terras tropicais.
                    </p>
                    <div class="flex items-center justify-between border-t border-neutral-100 pt-6">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold">Preço
                                Unitário</span>
                            <span class="text-green-800 font-black text-xl tracking-tight">1.800,00 <span
                                    class="text-sm text-neutral-400 font-medium">AOA</span></span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/produtos/detalhes"
                class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 touch-manipulation block">
                <div class="relative overflow-hidden aspect-4/3">
                    <img src="{{ asset('img/bananas.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Banana" />
                    <div
                        class="absolute inset-0 bg-green-950/10 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-xl font-bold text-neutral-800 tracking-tight">Banana</h4>
                        <div
                            class="flex items-center gap-1.5 text-[10px] font-black uppercase tracking-wider text-neutral-400 bg-neutral-50 px-2 py-1 rounded">
                            <i class="fas fa-location-dot text-yellow-500"></i>
                            <span>Uíge</span>
                        </div>
                    </div>
                    <p class="text-sm text-neutral-500 mb-6 leading-relaxed line-clamp-2">
                        Energia pura e natural, produzida com métodos sustentáveis.
                    </p>
                    <div class="flex items-center justify-between border-t border-neutral-100 pt-6">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold">Preço
                                Unitário</span>
                            <span class="text-green-800 font-black text-xl tracking-tight">1.200,00 <span
                                    class="text-sm text-neutral-400 font-medium">AOA</span></span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/produtos/detalhes"
                class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 touch-manipulation block">
                <div class="relative overflow-hidden aspect-4/3">
                    <img src="{{ asset('img/beringelas.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Beringela" />
                    <div
                        class="absolute inset-0 bg-green-950/10 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-xl font-bold text-neutral-800 tracking-tight">Beringela</h4>
                        <div
                            class="flex items-center gap-1.5 text-[10px] font-black uppercase tracking-wider text-neutral-400 bg-neutral-50 px-2 py-1 rounded">
                            <i class="fas fa-location-dot text-yellow-500"></i>
                            <span>Huíla</span>
                        </div>
                    </div>
                    <p class="text-sm text-neutral-500 mb-6 leading-relaxed line-clamp-2">
                        Versátil e nutritiva, essencial para uma dieta equilibrada.
                    </p>
                    <div class="flex items-center justify-between border-t border-neutral-100 pt-6">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold">Preço
                                Unitário</span>
                            <span class="text-green-800 font-black text-xl tracking-tight">1.600,00 <span
                                    class="text-sm text-neutral-400 font-medium">AOA</span></span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/produtos/detalhes"
                class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 touch-manipulation block">
                <div class="relative overflow-hidden aspect-4/3">
                    <img src="{{ asset('img/mandiocas.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Mandioca" />
                    <div
                        class="absolute inset-0 bg-green-950/10 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-xl font-bold text-neutral-800 tracking-tight">Mandioca</h4>
                        <div
                            class="flex items-center gap-1.5 text-[10px] font-black uppercase tracking-wider text-neutral-400 bg-neutral-50 px-2 py-1 rounded">
                            <i class="fas fa-location-dot text-yellow-500"></i>
                            <span>Malanje</span>
                        </div>
                    </div>
                    <p class="text-sm text-neutral-500 mb-6 leading-relaxed line-clamp-2">
                        Tradição e qualidade diretamente das melhores terras de Malanje.
                    </p>
                    <div class="flex items-center justify-between border-t border-neutral-100 pt-6">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold">Preço
                                Unitário</span>
                            <span class="text-green-800 font-black text-xl tracking-tight">900,00 <span
                                    class="text-sm text-neutral-400 font-medium">AOA</span></span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/produtos/detalhes"
                class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 touch-manipulation block">
                <div class="relative overflow-hidden aspect-4/3">
                    <img src="{{ asset('img/milhos.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                        alt="Milho" />
                    <div
                        class="absolute inset-0 bg-green-950/10 opacity-0 group-hover:opacity-100 group-active:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-xl font-bold text-neutral-800 tracking-tight">Milho</h4>
                        <div
                            class="flex items-center gap-1.5 text-[10px] font-black uppercase tracking-wider text-neutral-400 bg-neutral-50 px-2 py-1 rounded">
                            <i class="fas fa-location-dot text-yellow-500"></i>
                            <span>Cuanza Sul</span>
                        </div>
                    </div>
                    <p class="text-sm text-neutral-500 mb-6 leading-relaxed line-clamp-2">
                        Grãos selecionados com rigor para garantir o melhor sabor.
                    </p>
                    <div class="flex items-center justify-between border-t border-neutral-100 pt-6">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold">Preço
                                Unitário</span>
                            <span class="text-green-800 font-black text-xl tracking-tight">700,00 <span
                                    class="text-sm text-neutral-400 font-medium">AOA</span></span>
                        </div>
                    </div>
                </div>
            </a>

        </div>

        <!-- PAGINAÇÃO COM ÍCONES -->
        <div class="mt-20 flex justify-center">
            <div class="flex items-center gap-3">

                <!-- Anterior -->
                <button
                    class="w-10 h-10 cursor-pointer flex items-center justify-center rounded-md border bg-white hover:bg-neutral-100 transition">
                    <i class="fas fa-chevron-left text-sm"></i>
                </button>

                <!-- Página ativa -->
                <button
                    class="w-10 h-10 cursor-pointer flex items-center justify-center rounded-md bg-green-800 text-white font-bold">
                    1
                </button>

                <!-- Outras páginas -->
                <button
                    class="w-10 h-10 cursor-pointer flex items-center justify-center rounded-md border bg-white hover:bg-neutral-100">
                    2
                </button>

                <button
                    class="w-10 h-10 cursor-pointer flex items-center justify-center rounded-md border bg-white hover:bg-neutral-100">
                    3
                </button>

                <!-- Próximo -->
                <button
                    class="w-10 h-10 cursor-pointer flex items-center justify-center rounded-md border bg-white hover:bg-neutral-100 transition">
                    <i class="fas fa-chevron-right text-sm"></i>
                </button>

            </div>
        </div>

    </div>
</section>
