@extends('layouts.auth')

@section('title', 'Recuperar Senha - Agroway')

@section('conteudo')
    <section class="relative bg-neutral-50 min-h-screen flex items-center justify-center px-6 overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96 bg-green-800/5 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-400/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="w-full max-w-sm relative z-10 animate-fadeUp">

            <div class="bg-white/80 backdrop-blur-xl border border-neutral-200 rounded-xl p-8 shadow-xl">

                <div class="flex flex-col items-center mb-8 gap-4">
                    <div
                        class="w-12 h-12 bg-neutral-50 border border-green-800/20 rounded-md flex items-center justify-center">
                        <i class="fas fa-key text-green-800 text-lg"></i>
                    </div>

                    <div class="text-center">
                        <h1 class="text-neutral-900 font-black tracking-[0.2em] uppercase text-sm">
                            Recuperar Senha
                        </h1>
                        <p
                            class="text-[10px] text-neutral-400 font-bold uppercase tracking-widest mt-2 leading-relaxed px-4">
                            Insira seu e-mail para receber o link de redefinição
                        </p>
                    </div>
                </div>

                <form method="POST" action="/recuperar-senha" class="space-y-4">
                    @csrf

                    <div class="relative">
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400 text-xs"></i>

                        <input type="email" name="email" placeholder="E-mail cadastrado" required
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 
                               outline-none transition-all">

                        @error('email')
                            <p class="text-red-500 text-[10px] font-bold uppercase tracking-wider mt-2 ml-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-3.5 cursor-pointer bg-green-800 text-white font-black rounded-md 
                           hover:bg-green-900 transition-all 
                           uppercase tracking-widest text-xs mt-2
                           shadow-[0_10px_30px_-10px_rgba(22,101,52,0.4)]">
                        Enviar Link
                    </button>
                </form>

                <div class="mt-8 pt-6 border-t border-neutral-200 text-center">
                    <a href="/login"
                        class="text-[10px] text-neutral-500 hover:text-green-800 uppercase font-bold tracking-[0.2em]">
                        Voltar para o Login
                    </a>
                </div>

            </div>

            <div class="text-center mt-6">
                <p class="text-neutral-400 text-[9px] font-bold uppercase tracking-[0.3em]">
                    Não recebeu o e-mail? <a href="#" class="text-green-800 hover:underline">Tente novamente</a>
                </p>
            </div>

        </div>

    </section>
@endsection
