@extends('layouts.site')

@section('title', 'Abacate Hass Premium - Agroway Marketplace')

@section('conteudo')
    <section class="relative bg-white pt-32 pb-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">

            <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-neutral-400 mb-12">
                <a href="/" class="hover:text-green-800 transition">Home</a>
                <i class="fas fa-chevron-right text-[8px]"></i>
                <a href="/produtos" class="hover:text-green-800 transition">Marketplace</a>
                <i class="fas fa-chevron-right text-[8px]"></i>
                <span class="text-green-800">Abacate Orgânico</span>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <div class="space-y-6">
                    <div class="relative aspect-square rounded-3xl overflow-hidden shadow-2xl group">
                        <img src="{{ asset('img/abacates.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            alt="Abacate Premium">

                        <div
                            class="absolute top-6 left-6 bg-white/90 backdrop-blur-md px-4 py-2 rounded-full shadow-sm flex items-center gap-2">
                            <i class="fas fa-location-dot text-yellow-500 text-xs"></i>
                            <span class="text-[10px] font-black text-neutral-800 uppercase tracking-wider">Origem:
                                Huambo</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="mb-8">
                        <span
                            class="inline-block px-3 py-1 bg-green-100 text-green-800 text-[10px] font-black uppercase tracking-widest rounded-md mb-4">
                            Em Estoque
                        </span>
                        <h1 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-4 tracking-tight leading-tight">
                            Abacate <span class="text-green-800">Hass Premium</span>
                        </h1>
                        <div class="flex items-center gap-4">
                            <span class="text-3xl font-black text-green-800 tracking-tighter">
                                2.500,00 <span class="text-sm text-neutral-400 font-medium uppercase tracking-normal">aoa /
                                    Unidade</span>
                            </span>
                        </div>
                    </div>

                    <div class="space-y-8 border-y border-neutral-100 py-8 mb-8">
                        <div>
                            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-neutral-400 mb-3">Descrição do
                                Produto</h3>
                            <p class="text-neutral-500 leading-relaxed font-light text-lg">
                                Ricos em gorduras saudáveis e com uma textura extremamente cremosa, nossos abacates são
                                colhidos manualmente nas terras férteis do Huambo.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center text-green-800">
                                    <i class="fas fa-leaf text-sm"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-black uppercase text-neutral-800">Cultivo</span>
                                    <span class="text-sm text-neutral-500 font-light">100% Orgânico</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center text-green-800">
                                    <i class="fas fa-truck-fast text-sm"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-black uppercase text-neutral-800">Entrega</span>
                                    <span class="text-sm text-neutral-500 font-light">24h - 48h</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">

                        <div class="flex flex-col sm:flex-row gap-4 items-stretch">
                            <div class="flex items-center border border-neutral-200 rounded-md bg-neutral-50">
                                <button type="button" class="px-6 py-5 text-neutral-400 hover:text-green-800 transition">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" value="1"
                                    class="w-12 text-center bg-transparent font-bold text-neutral-800 outline-none border-none focus:ring-0">
                                <button type="button" class="px-6 py-5 text-neutral-400 hover:text-green-800 transition">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                            <button
                                class="group flex-1 px-12 py-5 cursor-pointer bg-neutral-900 text-white text-xs font-black rounded-md 
                                         hover:bg-black active:scale-95 transition-all shadow-xl shadow-neutral-900/10 
                                         uppercase tracking-[0.2em] flex items-center justify-center gap-3">
                                <i class="fas fa-shopping-basket text-lg group-hover:animate-bounce"></i>
                                Adicionar ao Carrinho
                            </button>
                        </div>

                        <a href="https://wa.me/244900000000?text={{ urlencode('Olá! Tenho interesse no Abacate Hass Premium que vi no marketplace da Agroway. Poderia me passar mais informações?') }}"
                            target="_blank"
                            class="w-full px-12 cursor-pointer py-5 border-2 border-green-800 text-green-800 text-xs font-black rounded-md 
                                     hover:bg-green-800 hover:text-white active:scale-95 transition-all 
                                     uppercase tracking-[0.2em] flex items-center justify-center gap-3">
                            <i class="fab fa-whatsapp text-xl"></i>
                            Negociar via WhatsApp
                        </a>
                    </div>

                    <div
                        class="mt-12 p-8 rounded-2xl bg-neutral-50 flex flex-col sm:flex-row items-center justify-between border border-neutral-100 gap-6">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-yellow-400 flex items-center justify-center font-black text-green-950 shrink-0">
                                AW
                            </div>
                            <div>
                                <span
                                    class="block text-[10px] font-black uppercase text-neutral-400 tracking-widest">Produtor
                                    Responsável</span>
                                <span class="text-sm font-bold text-neutral-800 uppercase">Cooperativa Agrícola do
                                    Huambo</span>
                            </div>
                        </div>
                        <a href="/produtor/perfil"
                            class="inline-block px-8 py-4 bg-white border border-neutral-200 text-neutral-800 text-[10px] font-black uppercase tracking-widest rounded-md hover:bg-neutral-100 transition">
                            Ver Perfil
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
