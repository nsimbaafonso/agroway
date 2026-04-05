<section class="relative bg-neutral-50 py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div class="max-w-2xl">
                <h2 class="text-xs uppercase tracking-[0.3em] text-green-800 font-black mb-4">
                    Marketplace
                </h2>
                <h3 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6 tracking-tight">
                    Outros <span class="text-green-800">produtos</span>
                </h3>
                <div class="w-20 h-1.5 bg-yellow-400 mb-6 rounded-full"></div>
                <p class="text-lg text-neutral-500 font-light leading-relaxed">
                    Descubra mais opções frescas e selecionadas diretamente do campo para sua mesa.
                </p>
            </div>

            <div class="flex gap-3">
                <button
                    class="swiper-prev-custom w-12 h-12 rounded-full border border-neutral-200 flex items-center justify-center text-green-800 hover:bg-green-800 hover:text-white transition-all duration-300 disabled:opacity-30 disabled:cursor-not-allowed">
                    <i class="fas fa-chevron-left text-sm"></i>
                </button>
                <button
                    class="swiper-next-custom w-12 h-12 rounded-full border border-neutral-200 flex items-center justify-center text-green-800 hover:bg-green-800 hover:text-white transition-all duration-300 disabled:opacity-30 disabled:cursor-not-allowed">
                    <i class="fas fa-chevron-right text-sm"></i>
                </button>
            </div>
        </div>

        <div class="swiper outrosProdutosSwiper overflow-visible!">
            <div class="swiper-wrapper">

                @foreach ([['img' => 'abacates', 'nome' => 'Abacate', 'provincia' => 'Huambo', 'preco' => 2500], ['img' => 'abacaxis', 'nome' => 'Abacaxi', 'provincia' => 'Benguela', 'preco' => 1800], ['img' => 'bananas', 'nome' => 'Banana', 'provincia' => 'Uíge', 'preco' => 1200], ['img' => 'beringelas', 'nome' => 'Beringela', 'provincia' => 'Huíla', 'preco' => 1600], ['img' => 'mandiocas', 'nome' => 'Mandioca', 'provincia' => 'Malanje', 'preco' => 900], ['img' => 'milhos', 'nome' => 'Milho', 'provincia' => 'Cuanza Sul', 'preco' => 700]] as $produto)
                    <div class="swiper-slide h-auto">
                        <a href="/produtos/detalhes"
                            class="group block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 h-full border border-neutral-100">

                            <div class="relative overflow-hidden aspect-4/3">
                                <img src="{{ asset('img/' . $produto['img'] . '.jpg') }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                    alt="{{ $produto['nome'] }}" />

                                <div
                                    class="absolute inset-0 bg-green-950/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="flex justify-between items-start mb-3">
                                    <h4
                                        class="text-lg font-bold text-neutral-800 tracking-tight group-hover:text-green-800 transition-colors">
                                        {{ $produto['nome'] }}
                                    </h4>

                                    <div
                                        class="flex items-center gap-1.5 text-[10px] font-black uppercase text-neutral-400 bg-neutral-50 px-2 py-1 rounded">
                                        <i class="fas fa-location-dot text-yellow-500"></i>
                                        <span>{{ $produto['provincia'] }}</span>
                                    </div>
                                </div>

                                <p class="text-sm text-neutral-500 mb-6 leading-relaxed line-clamp-2 font-light">
                                    Colheita fresca selecionada rigorosamente para garantir a máxima qualidade.
                                </p>

                                <div class="border-t border-neutral-100 pt-5 flex flex-col">
                                    <span
                                        class="text-[10px] uppercase tracking-widest text-neutral-400 font-bold mb-1">Preço
                                        Unitário</span>
                                    <span class="text-green-800 font-black text-xl tracking-tight">
                                        {{ number_format($produto['preco'], 2, ',', '.') }} <span
                                            class="text-xs text-neutral-400 font-medium tracking-normal">AOA</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        new Swiper(".outrosProdutosSwiper", {
            slidesPerView: 1.2,
            spaceBetween: 24,
            grabCursor: true,
            loop: true,
            speed: 600,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2.2
                },
                1024: {
                    slidesPerView: 3
                },
                1280: {
                    slidesPerView: 4
                }
            },
            navigation: {
                nextEl: ".swiper-next-custom",
                prevEl: ".swiper-prev-custom",
            }
        });
    </script>
@endpush
