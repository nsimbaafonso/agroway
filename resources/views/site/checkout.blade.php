@extends('layouts.site')

@section('title', 'Finalizar Pedido - Agroway Marketplace')

@section('conteudo')
    <section class="relative bg-neutral-50 pt-32 pb-24 min-h-screen">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-12">
                <h2 class="text-xs uppercase tracking-[0.3em] text-green-800 font-black mb-4">Pagamento Seguro</h2>
                <h1 class="text-4xl font-bold text-neutral-900 tracking-tight">Finalizar <span
                        class="text-green-800">Pedido</span></h1>
            </div>

            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="grid lg:grid-cols-3 gap-12 items-start">

                    <div class="lg:col-span-2 space-y-8">

                        <div class="bg-white p-10 rounded-2xl border border-neutral-100 shadow-sm">
                            <div class="flex items-center gap-4 mb-8">
                                <span
                                    class="w-8 h-8 rounded-full bg-green-800 text-white flex items-center justify-center text-xs font-black">01</span>
                                <h3 class="text-sm font-black uppercase tracking-widest text-neutral-800">Informações
                                    Pessoais</h3>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase text-neutral-400 tracking-widest">Nome
                                        Completo</label>
                                    <input type="text" name="nome" placeholder="Ex: Dionisio Andre" required
                                        class="w-full px-6 py-4 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-2 focus:ring-green-800/20 focus:border-green-800 outline-none transition-all font-medium">
                                </div>
                                <div class="space-y-2">
                                    <label
                                        class="text-[10px] font-black uppercase text-neutral-400 tracking-widest">Telefone /
                                        WhatsApp</label>
                                    <input type="tel" name="telefone" placeholder="+244 000 000 000" required
                                        class="w-full px-6 py-4 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-2 focus:ring-green-800/20 focus:border-green-800 outline-none transition-all font-medium">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-10 rounded-2xl border border-neutral-100 shadow-sm">
                            <div class="flex items-center gap-4 mb-8">
                                <span
                                    class="w-8 h-8 rounded-full bg-green-800 text-white flex items-center justify-center text-xs font-black">02</span>
                                <h3 class="text-sm font-black uppercase tracking-widest text-neutral-800">Endereço de
                                    Entrega</h3>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2 md:col-span-2">
                                    <label
                                        class="text-[10px] font-black uppercase text-neutral-400 tracking-widest">Província
                                        / Cidade</label>
                                    <select name="localizacao"
                                        class="w-full px-6 py-4 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-2 focus:ring-green-800/20 focus:border-green-800 outline-none transition-all font-medium appearance-none">
                                        <option value="luanda">Luanda</option>
                                        <option value="huambo">Huambo</option>
                                        <option value="benguela">Benguela</option>
                                    </select>
                                </div>
                                <div class="space-y-2 md:col-span-2">
                                    <label
                                        class="text-[10px] font-black uppercase text-neutral-400 tracking-widest">Endereço
                                        Detalhado</label>
                                    <textarea name="endereco" rows="3" placeholder="Rua, Bairro, Nº da Casa ou Ponto de Referência" required
                                        class="w-full px-6 py-4 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-2 focus:ring-green-800/20 focus:border-green-800 outline-none transition-all font-medium resize-none"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-10 rounded-2xl border border-neutral-100 shadow-sm">
                            <div class="flex items-center gap-4 mb-8">
                                <span
                                    class="w-8 h-8 rounded-full bg-green-800 text-white flex items-center justify-center text-xs font-black">03</span>
                                <h3 class="text-sm font-black uppercase tracking-widest text-neutral-800">Método de
                                    Pagamento</h3>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-4">
                                <label
                                    class="relative flex items-center gap-4 p-6 border-2 border-neutral-100 rounded-xl cursor-pointer hover:border-green-800/30 transition-all has-checked:border-green-800 has-checked:bg-green-50/30">
                                    <input type="radio" name="pagamento" value="transferencia"
                                        class="w-4 h-4 text-green-800 focus:ring-green-800 border-neutral-300" checked>
                                    <div>
                                        <span class="block text-xs font-black uppercase text-neutral-800">Transferência /
                                            IBAN</span>
                                        <span class="text-[10px] text-neutral-400 font-medium">Envio de comprovativo</span>
                                    </div>
                                </label>

                                <label
                                    class="relative flex items-center gap-4 p-6 border-2 border-neutral-100 rounded-xl cursor-pointer hover:border-green-800/30 transition-all has-checked:border-green-800 has-checked:bg-green-50/30">
                                    <input type="radio" name="pagamento" value="entrega"
                                        class="w-4 h-4 text-green-800 focus:ring-green-800 border-neutral-300">
                                    <div>
                                        <span class="block text-xs font-black uppercase text-neutral-800">Pagamento na
                                            Entrega</span>
                                        <span class="text-[10px] text-neutral-400 font-medium">TPA ou Numerário</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <aside class="space-y-6 lg:sticky lg:top-32">
                        <div class="bg-neutral-900 p-8 rounded-2xl shadow-2xl text-white">
                            <h3
                                class="text-xs font-black uppercase tracking-[0.2em] text-neutral-500 mb-8 border-b border-white/10 pb-4">
                                Revisão Final</h3>

                            <div class="space-y-4 mb-10">
                                <div class="flex items-center gap-4 py-2">
                                    <div class="w-12 h-12 rounded bg-white/10 shrink-0 overflow-hidden">
                                        <img src="{{ asset('img/abacates.jpg') }}"
                                            class="w-full h-full object-cover opacity-80">
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-[10px] font-bold uppercase truncate">Abacate Hass Premium</p>
                                        <p class="text-[10px] text-neutral-500 font-medium">Qtd: 01</p>
                                    </div>
                                    <span class="text-xs font-bold">2.500,00</span>
                                </div>

                                <div class="pt-6 border-t border-white/10 space-y-3">
                                    <div class="flex justify-between text-xs text-neutral-400">
                                        <span>Subtotal</span>
                                        <span>2.500,00 AOA</span>
                                    </div>
                                    <div class="flex justify-between text-xs text-neutral-400">
                                        <span>Entrega Estimada</span>
                                        <span class="text-green-400">Grátis</span>
                                    </div>
                                    <div class="pt-4 flex justify-between items-end">
                                        <span
                                            class="text-[10px] font-black uppercase tracking-widest text-neutral-500">Total
                                            a Pagar</span>
                                        <span class="text-2xl font-black text-white tracking-tighter">2.500,00 <span
                                                class="text-[10px] font-medium text-neutral-500">AOA</span></span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full px-12 py-5 bg-green-600 text-white text-xs font-black rounded-md 
                                       hover:bg-green-500 active:scale-95 transition-all
                                       uppercase tracking-[0.2em] flex items-center justify-center gap-3">
                                <i class="fas fa-lock"></i>
                                Confirmar e Encomendar
                            </button>

                            <p
                                class="text-[9px] text-center mt-6 text-neutral-500 font-bold uppercase tracking-widest leading-relaxed">
                                Ao confirmar, você concorda com os termos de marketplace da Agroway.
                            </p>
                        </div>

                        <div class="flex justify-center gap-8 opacity-20 grayscale">
                            <i class="fas fa-certificate text-2xl text-neutral-900"></i>
                            <i class="fas fa-shield-check text-2xl text-neutral-900"></i>
                            <i class="fas fa-truck text-2xl text-neutral-900"></i>
                        </div>
                    </aside>

                </div>
            </form>
        </div>
    </section>
@endsection
