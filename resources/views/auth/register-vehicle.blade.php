@extends('layouts.auth')

@section('title', 'Dados do Veículo - Agroway')

@section('conteudo')
    <section class="relative bg-neutral-50 min-h-screen flex items-center justify-center px-6 py-12 overflow-hidden">

        <div class="absolute top-0 right-0 w-96 h-96 bg-green-800/5 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-400/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="w-full max-w-2xl relative z-10 animate-fadeUp">

            <div class="bg-white/80 backdrop-blur-xl border border-neutral-200 rounded-xl p-8 shadow-xl">

                <div class="flex flex-col items-center mb-8 gap-4">
                    <div class="w-12 h-12 bg-neutral-50 border border-green-800/20 rounded-md flex items-center justify-center text-green-800">
                        <i class="fas fa-truck-loading text-lg"></i>
                    </div>

                    <div class="text-center">
                        <h1 class="text-neutral-900 font-black tracking-[0.2em] uppercase text-sm">Dados do Veículo</h1>
                        <p class="text-[10px] text-neutral-400 font-bold uppercase tracking-widest mt-1">Informações para logística de entrega</p>
                    </div>
                </div>

                <form method="POST" action="/cadastro-veiculo" class="space-y-4" enctype="multipart/form-data">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-4">

                        <select name="tipo_veiculo" required
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 border border-neutral-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                            <option value="">Tipo de Veículo</option>
                            <option value="mota">Mota</option>
                            <option value="carro">Carro</option>
                            <option value="camiao">Camião</option>
                            <option value="bicicleta">Bicicleta</option>
                        </select>

                        <input type="text" name="marca" placeholder="Marca (Ex: Toyota, Yamaha)" required
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 border border-neutral-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">

                        <input type="text" name="modelo" placeholder="Modelo" required
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 border border-neutral-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">

                        <input type="text" name="matricula" placeholder="Matrícula" required
                            class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 border border-neutral-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">

                        <div class="space-y-1">
                            <input type="file" name="carta_conducao" required
                                class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 border border-neutral-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                            <p class="text-[9px] text-neutral-400 font-bold uppercase tracking-widest px-1">
                                <i class="fas fa-info-circle text-green-700 mr-1"></i> Upload da Carta de Condução
                            </p>
                        </div>

                        <div class="space-y-1">
                            <input type="file" name="livrete" required
                                class="w-full px-4 py-3 text-sm rounded-md bg-white text-neutral-800 border border-neutral-200 focus:border-green-500 focus:ring-1 focus:ring-green-500 outline-none">
                            <p class="text-[9px] text-neutral-400 font-bold uppercase tracking-widest px-1">
                                <i class="fas fa-info-circle text-green-700 mr-1"></i> Upload do Livrete do Veículo
                            </p>
                        </div>

                    </div>

                    <button type="submit"
                        class="w-full py-3.5 cursor-pointer bg-green-800 text-white font-black rounded-md 
                           hover:bg-green-900 transition-all 
                           uppercase tracking-widest text-xs mt-4
                           shadow-[0_10px_30px_-10px_rgba(22,101,52,0.4)]">
                        Finalizar Cadastro
                    </button>

                </form>

            </div>

        </div>
    </section>
@endsection