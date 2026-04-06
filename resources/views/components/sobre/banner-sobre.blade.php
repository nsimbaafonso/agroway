<section class="w-full h-screen relative overflow-hidden bg-slate-950 bg-cover bg-center bg-no-repeat group"
    style="background-image: url('{{ asset('img/sobre.jpg') }}');">

    <div class="absolute inset-0 bg-linear-to-b from-slate-950/50 via-slate-950/80 to-slate-950 z-10"></div>

    <div class="relative z-20 flex items-center justify-center h-full px-6 text-center">
        <div class="max-w-4xl space-y-6">

            <h1 class="hero-static-anim text-4xl md:text-6xl font-bold text-white leading-[1.2] tracking-tight">
                Cultivando o <em class="text-green-500 font-bold not-italic">futuro</em> da <br class="hidden md:block">
                agricultura em Angola
            </h1>

            <p
                class="hero-static-anim max-w-2xl mx-auto text-base md:text-xl text-slate-300/90 font-light leading-relaxed">
                Mais do que um marketplace, somos a ponte que conecta o suor do produtor rural
                à mesa das famílias angolanas, priorizando a transparência e a inovação.
            </p>

            <div class="hero-static-anim pt-8">
                <a href="#nossa-historia"
                    class="inline-block px-12 py-5 bg-yellow-400 text-slate-950 text-xs font-black rounded-md 
                          hover:bg-yellow-300 active:scale-95 transition-all 
                          shadow-[0_15px_40px_-12px_rgba(250,204,21,0.5)] 
                          uppercase tracking-[0.2em]">
                    Conheça nossa história
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full leading-0 z-30 pointer-events-none">
        <svg class="relative block w-full h-15 md:h-25" viewBox="0 24 150 28" preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax-waves">
                <use href="#gentle-wave" x="48" y="0" fill="rgba(255, 255, 255, 0.7)" class="animate-wave-7" />
                <use href="#gentle-wave" x="48" y="3" fill="rgba(255, 255, 255, 0.5)" class="animate-wave-10" />
                <use href="#gentle-wave" x="48" y="5" fill="rgba(255, 255, 255, 0.3)" class="animate-wave-13" />
                <use href="#gentle-wave" x="48" y="7" fill="#ffffff" class="animate-wave-20" />
            </g>
        </svg>
    </div>
</section>

@push('styles')
    <style>
        /* Reutilizando suas animações para manter a performance e consistência */
        @keyframes wave {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        .animate-wave-7 {
            animation: wave 7s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .animate-wave-10 {
            animation: wave 10s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .animate-wave-13 {
            animation: wave 13s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .animate-wave-20 {
            animation: wave 20s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .hero-static-anim {
            opacity: 0;
            animation: slideUpBlur 1s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        .hero-static-anim:nth-child(1) {
            animation-delay: 200ms;
        }

        .hero-static-anim:nth-child(2) {
            animation-delay: 400ms;
        }

        .hero-static-anim:nth-child(3) {
            animation-delay: 600ms;
        }

        .hero-static-anim:nth-child(4) {
            animation-delay: 800ms;
        }

        @keyframes slideUpBlur {
            0% {
                opacity: 0;
                transform: translateY(30px);
                filter: blur(10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
                filter: blur(0px);
            }
        }
    </style>
@endpush
