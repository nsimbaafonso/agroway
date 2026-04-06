@extends('layouts.site')

@section('title', 'Seu Carrinho - Agroway Marketplace')

@section('conteudo')
    <section class="relative bg-neutral-50 pt-32 pb-24 min-h-screen">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-12 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <h2 class="text-xs uppercase tracking-[0.3em] text-green-800 font-black mb-2">Checkout</h2>
                    <h1 class="text-4xl font-bold text-neutral-900 tracking-tight">Seu <span
                            class="text-green-800">Carrinho</span></h1>
                </div>

                <button type="button"
                    class="px-8 py-4 cursor-pointer bg-white border-2 border-red-100 text-red-500 text-[10px] font-black uppercase tracking-[0.2em] rounded-md 
                           hover:bg-red-500 hover:text-white hover:border-red-500 active:scale-95 transition-all shadow-sm
                           flex items-center justify-center gap-3">
                    <i class="fas fa-trash-arrow-up text-sm"></i>
                    Limpar Carrinho Inteiro
                </button>
            </div>

            <form action="{{ route('carrinho') }}" method="POST">
                @csrf
                <div class="grid lg:grid-cols-3 gap-12 items-start">

                    <div class="lg:col-span-2 space-y-4">
                        <div
                            class="bg-white p-6 rounded-2xl border border-neutral-100 shadow-sm flex flex-col sm:flex-row items-center gap-6">
                            <input type="hidden" name="produto_id[]" value="1">

                            <div class="w-24 h-24 rounded-xl overflow-hidden bg-neutral-100 shrink-0">
                                <img src="{{ asset('img/abacates.jpg') }}" class="w-full h-full object-cover"
                                    alt="Produto">
                            </div>

                            <div class="flex-1 text-center sm:text-left">
                                <h3 class="text-lg font-bold text-neutral-800">Abacate Hass Premium</h3>
                                <p class="text-xs text-neutral-400 uppercase font-bold tracking-widest mt-1">Origem: Huambo
                                </p>
                            </div>

                            <div
                                class="flex items-center border border-neutral-100 rounded-lg bg-neutral-50 overflow-hidden">
                                <button type="button" class="px-4 py-2 cursor-pointer text-neutral-400 hover:text-green-800 transition">
                                    <i class="fas fa-minus text-xs"></i>
                                </button>
                                <input type="number" name="quantidade[]" value="1" min="1"
                                    class="w-10 text-center bg-transparent font-bold text-neutral-800 text-sm border-none focus:ring-0">
                                <button type="button" class="px-4 py-2 cursor-pointer text-neutral-400 hover:text-green-800 transition">
                                    <i class="fas fa-plus text-xs"></i>
                                </button>
                            </div>

                            <div class="text-right min-w-35">
                                <span
                                    class="block text-[10px] uppercase text-neutral-400 font-black tracking-widest">Subtotal</span>
                                <span class="text-lg font-black text-green-800 tracking-tighter">2.500,00 <span
                                        class="text-xs font-medium uppercase">AOA</span></span>
                            </div>

                            <button type="button"
                                class="group p-3 bg-neutral-50 rounded-lg text-neutral-300 hover:text-red-500 hover:bg-red-50 transition-all">
                                <i class="fas fa-trash-can text-lg"></i>
                            </button>
                        </div>
                    </div>

                    <aside class="bg-white p-8 rounded-2xl border border-neutral-100 shadow-xl lg:sticky lg:top-32">
                        <h3
                            class="text-xs font-black uppercase tracking-[0.2em] text-neutral-400 mb-8 border-b border-neutral-50 pb-4">
                            Resumo do Pedido</h3>

                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center">
                                <span class="text-neutral-500 font-light text-sm">Subtotal de produtos</span>
                                <span class="text-neutral-800 font-bold">2.500,00 AOA</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-neutral-500 font-light text-sm">Estimativa de Entrega</span>
                                <span
                                    class="text-green-700 font-bold text-[10px] uppercase tracking-widest bg-green-50 px-2 py-1 rounded">Grátis</span>
                            </div>
                            <div class="pt-6 border-t border-neutral-100 flex justify-between items-end">
                                <span class="text-neutral-900 font-black uppercase text-xs tracking-widest">Total
                                    Geral</span>
                                <span class="text-3xl font-black text-green-800 tracking-tighter">2.500,00 <span
                                        class="text-sm font-medium uppercase">AOA</span></span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <button type="submit"
                                class="w-full px-12 py-5 cursor-pointer bg-green-800 text-white text-xs font-black rounded-md 
                                       hover:bg-green-900 active:scale-95 transition-all shadow-lg shadow-green-900/20 
                                       uppercase tracking-[0.2em] flex items-center justify-center gap-3">
                                Finalizar Pedido
                            </button>

                            <a href="/produtos"
                                class="w-full px-12 py-5 cursor-pointer border-2 border-neutral-200 text-neutral-400 text-xs font-black rounded-md 
                                       hover:border-neutral-900 hover:text-neutral-900 active:scale-95 transition-all 
                                       uppercase tracking-[0.2em] flex items-center justify-center gap-3 text-center">
                                Continuar Comprando
                            </a>
                        </div>

                        <div
                            class="mt-8 flex items-center justify-center gap-4 opacity-30 grayscale border-t border-neutral-50 pt-8">
                            <i class="fas fa-shield-halved text-2xl"></i>
                            <span
                                class="text-[10px] font-bold uppercase tracking-widest leading-tight text-center">Pagamento
                                100% Seguro<br>e Protegido</span>
                        </div>
                    </aside>

                </div>
            </form>
        </div>
    </section>
@endsection
