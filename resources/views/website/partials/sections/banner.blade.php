<section id="section-banner" class="py-40 sm:py-14 " >
    <div class="container m-auto flex flex-col items-center" data-aos="fade-up">
        <div class="flex gap-8 justify-center mb-8 sm:min-w-full sm:flex-wrap">
            <div class="flex items-center gap-2">
                <i class="fa fa-fw fa-calendar-check text-neon-pink text-xl"></i>
                <span class="text-white font-bold">
                    14 e 15 de Outubro de 2022
                </span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fa fa-fw fa-microphone-lines text-neon-pink text-xl"></i>
                <span class="text-white font-bold">
                    4 palestrantes
                </span>
            </div>
            <div class="flex items-center gap-2 sm:text-center">
                <i class="fa fa-fw fa-location-dot text-neon-pink text-xl"></i>
                <span class="text-white font-bold">
                    Igreja do Nazareno Central de Mossoró
                </span>
            </div>
        </div>
        <figure class="max-w-4xl m-auto mb-16">
            <img src="{{ Vite::asset('resources/img/logo-nazateen-conference.png') }}">
        </figure>
        <div class='w-96 h-40 py-5 mb-6 sm:px-4'>
            <h2 class='text-center text-5xl font-bold text-white'>Faltam...</h2>
            <div class="flex justify-around items-center p-4 box-border">
                <div class='w-20 h-20 sm:w-16 sm:h-16 bg-black/[.4] text-white flex flex-col items-center justify-center' >
                    <span id='days'></span>
                    <span class='text-small'>Dias</span>
                </div>
                <div class='w-20 h-20 sm:w-16 sm:h-16 bg-black/[.4] text-white flex flex-col items-center justify-center' >
                    <span id='hours'></span>
                    <span class='text-small'>Horas</span>
                </div>
                <div class='w-20 h-20 sm:w-16 sm:h-16 bg-black/[.4] text-white flex flex-col items-center justify-center' >
                    <span id='mins'></span>
                    <span class='text-small'>Minutos</span>
                </div>
                <div class='w-20 h-20 sm:w-16 sm:h-16 bg-black/[.4] text-white flex flex-col items-center justify-center' >
                    <span id='secs'></span>
                    <span class='text-small'>Segundos</span>
                </div>    
            </div>
        </div>
        <div class="text-center">
            <a href="#section-ticket" class="bg-neon-pink rounded-lg py-2 px-8 text-white uppercase">
                Comprar Ingresso
            </a>
        </div>
    </div>
</section>
