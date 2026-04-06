@extends('layouts.auth')

@section('title', 'Cadastro - Agroway')

@section('conteudo')
    <section class="relative bg-neutral-50 min-h-screen flex items-center justify-center px-6 overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96 bg-green-800/5 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-400/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="w-full max-w-2xl relative z-10 animate-fadeUp">

            <div class="bg-white/80 backdrop-blur-xl border border-neutral-200 rounded-xl p-8 shadow-xl">

                <div class="flex flex-col items-center mb-8 gap-4">
                    <div
                        class="w-12 h-12 bg-neutral-50 border border-green-800/20 rounded-md flex items-center justify-center">
                        <i class="fas fa-leaf text-green-800 text-lg"></i>
                    </div>

                    <h1 class="text-neutral-900 font-black tracking-[0.2em] uppercase text-sm">
                        Agroway
                    </h1>
                </div>

                <form method="POST" action="/registro" class="space-y-4" enctype="multipart/form-data">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-4">

                        <input type="text" name="name" placeholder="Nome completo"
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">

                        <input type="email" name="email" placeholder="E-mail"
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">

                        <input type="text" name="telefone" placeholder="Telefone"
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">

                        <select name="provincia"
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                            <option value="">Selecionar província</option>
                            <option value="luanda">Luanda</option>
                            <option value="benguela">Benguela</option>
                            <option value="huambo">Huambo</option>
                            <option value="huila">Huíla</option>
                            <option value="uige">Uíge</option>
                            <option value="malanje">Malanje</option>
                            <option value="cuanza_sul">Cuanza Sul</option>
                        </select>

                        <select name="tipo"
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                            <option value="">Tipo de usuário</option>
                            <option value="produtor">Produtor</option>
                            <option value="cliente">Cliente</option>
                            <option value="entregador">Entregador</option>
                        </select>

                        <div class="space-y-1">
                            <input type="file" name="bi"
                                class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                                   border border-neutral-200 
                                   focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                            <p class="text-[10px] text-neutral-400 font-bold uppercase tracking-widest px-1">
                                <i class="fas fa-info-circle text-green-700 mr-1"></i> Selecione a cópia do seu BI (PDF ou
                                Imagem)
                            </p>
                        </div>

                        <div class="relative md:col-span-1">
                            <input id="password" type="password" name="password" placeholder="Senha"
                                class="w-full px-4 py-3 pr-10 text-sm rounded-md bg-white text-neutral-800 
                                   border border-neutral-200 
                                   focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                        </div>

                        <div class="relative md:col-span-1">
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="Confirmar senha"
                                class="w-full px-4 py-3 pr-10 text-sm rounded-md bg-white text-neutral-800 
                                   border border-neutral-200 
                                   focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                        </div>

                    </div>

                    <button type="submit"
                        class="w-full py-3.5 cursor-pointer bg-green-800 text-white font-black rounded-md 
                           hover:bg-green-900 transition-all 
                           uppercase tracking-widest text-xs mt-4
                           shadow-[0_10px_30px_-10px_rgba(22,101,52,0.4)]">
                        Criar Conta
                    </button>

                </form>

                <div class="mt-8 pt-6 border-t border-neutral-200 text-center">
                    <a href="/login"
                        class="text-[10px] text-neutral-500 hover:text-green-800 uppercase font-bold tracking-[0.2em]">
                        Já tenho uma conta
                    </a>
                </div>

            </div>

        </div>

    </section>
@endsection
