@extends('layouts.auth')

@section('title', 'Login - Agroway')

@section('conteudo')
    <section class="relative bg-neutral-50 min-h-screen flex items-center justify-center px-6 overflow-hidden">

        <!-- GLOWS -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-green-800/5 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-400/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="w-full max-w-sm relative z-10 animate-fadeUp">

            <!-- CARD -->
            <div class="bg-white/80 backdrop-blur-xl border border-neutral-200 rounded-xl p-8 shadow-xl">

                <!-- LOGO -->
                <div class="flex flex-col items-center mb-8 gap-4">
                    <div
                        class="w-12 h-12 bg-neutral-50 border border-green-800/20 rounded-md flex items-center justify-center">
                        <i class="fas fa-leaf text-green-800 text-lg"></i>
                    </div>

                    <h1 class="text-neutral-900 font-black tracking-[0.2em] uppercase text-sm">
                        Agroway
                    </h1>
                </div>

                <!-- FORM -->
                <form method="POST" action="/login" class="space-y-4" onsubmit="handleLoginSubmit(event)">
                    @csrf

                    <!-- EMAIL -->
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400 text-xs"></i>

                        <input type="email" name="email" placeholder="E-mail"
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-md bg-white text-neutral-800 
                               border border-neutral-200 
                               focus:border-green-500 focus:ring-1 focus:ring-green-500 
                               outline-none transition-all">

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- PASSWORD -->
                    <div class="space-y-2">
                        <div class="relative">
                            <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400 text-xs"></i>

                            <input id="password" type="password" name="password" placeholder="Senha"
                                class="w-full pl-11 pr-10 py-3 text-sm rounded-md bg-white text-neutral-800 
                                   border border-neutral-200 
                                   focus:border-green-500 focus:ring-1 focus:ring-green-500 
                                   outline-none transition-all">
                        </div>

                        @error('password')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                        <!-- OPTIONS -->
                        <div class="flex items-center justify-between text-sm mt-2">

                            <!-- REMEMBER -->
                            <label class="flex items-center gap-2 text-neutral-500 text-xs">
                                <input type="checkbox" name="remember"
                                    class="rounded border-neutral-300 text-green-600 focus:ring-green-500">
                                Lembrar-me
                            </label>

                            <!-- FORGOT -->
                            <a href="/recuperar-senha"
                                class="text-[10px] text-neutral-400 hover:text-green-800 uppercase font-bold tracking-widest">
                                Esqueceu a senha?
                            </a>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 cursor-pointer py-3.5 bg-green-800 text-white font-black rounded-md 
                           hover:bg-green-900 transition-all 
                           uppercase tracking-widest text-xs mt-2
                           shadow-[0_10px_30px_-10px_rgba(22,101,52,0.4)]">

                        Entrar
                    </button>
                </form>

                <!-- REGISTER -->
                <div class="mt-8 pt-6 border-t border-neutral-200 text-center">
                    <a href="/criar-conta"
                        class="text-[10px] text-neutral-500 hover:text-green-800 uppercase font-bold tracking-[0.2em]">
                        Criar Nova Conta
                    </a>
                </div>

            </div>

            <!-- BACK -->
            <div class="text-center mt-6">
                <a href="/"
                    class="text-neutral-400 hover:text-neutral-600 text-[9px] font-bold uppercase tracking-[0.4em]">
                    <i class="fas fa-arrow-left mr-2"></i> Voltar
                </a>
            </div>

        </div>

    </section>

@endsection
