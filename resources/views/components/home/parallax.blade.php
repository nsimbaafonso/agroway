<section class="relative h-75 md:h-100 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div 
            class="w-full h-full bg-fixed bg-center bg-cover bg-no-repeat transition-transform duration-500"
            style="background-image: url('{{ asset('img/parallax.jpg') }}');">
        </div>
        <div class="absolute inset-0 bg-green-950/75"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <span class="text-yellow-400 font-bold uppercase tracking-[0.4em] text-[10px] md:text-xs mb-4 block opacity-90">
            Qualidade Direto da Origem
        </span>
        
        <h2 class="text-3xl md:text-5xl font-black text-white uppercase leading-tight tracking-tight">
            Do campo para a sua <span class="text-yellow-400">Mesa</span>
        </h2>
    </div>
</section>

@push("styles")
<style>
    /* Correção para dispositivos móveis */
    @media (max-width: 1024px) {
        .bg-fixed {
            background-attachment: scroll !important;
        }
    }
</style> 
@endpush