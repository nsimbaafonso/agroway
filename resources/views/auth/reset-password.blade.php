@extends('layouts.auth')

@section('title', 'Nova Senha - Agroway')

@section('conteudo')
    <section class="relative bg-neutral-50 min-h-screen flex items-center justify-center px-6 overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96 bg-green-800/5 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-400/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="w-full max-w-sm relative z-10 animate-fadeUp">

            <div class="bg-white/80 backdrop-blur-xl border border-neutral-200 rounded-xl p-8 shadow-xl">

                <div class="flex flex-col items-center mb-8 gap-4">
                    <div
                        class="w-12 h-12 bg-neutral-50 border border-green-800/20 rounded-md flex items-center justify-center">
                        <i class="fas fa-shield-alt text-green-800 text-lg"></i>
                    </div>

                    <div class="text-center">
                        <h1 class="text-neutral-900 font-black tracking-[0.2em] uppercase text-sm">
                            Nova Senha
                        </h1>
                        <p class="text-[10px] text-neutral-400 font-bold uppercase tracking-widest mt-2 px-2">
                            Crie uma combinação segura para sua conta
                        </p>
                    </div>
                </div>

                <form method="POST" action="/redefinir-senha" class="space-y-4">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="relative">
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400 text-xs"></i>
                        <input type="password" name="password" placeholder="Nova Senha" required
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 
                               outline-none transition-all">
                    </div>

                    <div class="relative">
                        <i
                            class="fas fa-check-double absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400 text-xs"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirmar Nova Senha" required
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 
                               outline-none transition-all">
                    </div>

                    <button type="submit"
                        class="w-full py-3.5 cursor-pointer bg-green-800 text-white font-black rounded-md 
                           hover:bg-green-900 transition-all 
                           uppercase tracking-widest text-xs mt-2
                           shadow-[0_10px_30px_-10px_rgba(22,101,52,0.4)]">
                        Atualizar Senha
                    </button>
                </form>

            </div>

            <div class="text-center mt-6">
                <a href="/login"
                    class="text-neutral-400 hover:text-neutral-600 text-[9px] font-bold uppercase tracking-[0.4em]">
                    <i class="fas fa-arrow-left mr-2"></i> Voltar ao login
                </a>
            </div>

        </div>

    </section>
@endsection
