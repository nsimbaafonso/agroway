<section class="relative h-[60vh] flex items-center justify-center text-center overflow-hidden">

    <!-- Background Parallax -->
    <div class="absolute inset-0 bg-fixed bg-center bg-cover"
         style="background-image: url('{{ asset('img/parallax.jpg') }}');">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-green-950/80 backdrop-blur-[2px]"></div>

    <!-- Conteúdo -->
    <div class="relative z-10 max-w-3xl px-6 text-white">
        <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
            Transformando o <span class="text-yellow-400">agronegócio</span> com tecnologia
        </h2>

        <p class="text-lg text-neutral-200 mb-8 leading-relaxed">
            Conectamos produtores, clientes e logística em uma única plataforma moderna, eficiente e acessível.
        </p>

        <!-- CTA PADRONIZADO -->
        <a href="#"
           class="inline-block px-12 py-5 bg-yellow-400 text-green-950 text-xs font-black rounded-md 
                  hover:bg-yellow-500 transition-all shadow-[0_10px_30px_-10px_rgba(250,204,21,0.5)] 
                  uppercase tracking-[0.2em]">
            Começar agora
        </a>
    </div>

</section>