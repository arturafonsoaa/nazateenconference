<section id="section-banner" class="py-14 lg:py-32 bg-center bg-cover bg-fixed bg-no-repeat"
    style="background-image: url('{{ Vite::asset('resources/img/background1.png') }}')">
    <div class="container m-auto flex flex-col items-center">
        <div class="flex gap-x-8 gap-y-4 justify-center mb-8 sm:min-w-full sm:flex-wrap">
            <div class="flex items-start lg:items-center gap-2" data-aos="fade-up">
                <i class="fa fa-fw fa-calendar-check text-neon-pink text-xl"></i>
                <span class="text-white font-bold">
                    14 e 15 de Outubro de 2022
                </span>
            </div>
            <div class="flex items-start lg:items-center gap-2" data-aos="fade-up" data-aos-delay="100">
                <i class="fa fa-fw fa-microphone-lines text-neon-pink text-xl"></i>
                <span class="text-white font-bold">
                    4 palestrantes
                </span>
            </div>
            <div class="flex items-start lg:items-center gap-2 sm:text-center" data-aos="fade-up" data-aos-delay="200">
                <i class="fa fa-fw fa-location-dot text-neon-pink text-xl"></i>
                <span class="text-white font-bold">
                    Igreja do Nazareno Central de Mossoró
                </span>
            </div>
        </div>
        <figure class="max-w-6xl m-auto mb-8" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ Vite::asset('resources/img/logo-nazateen-conference.png') }}">
        </figure>
        <div class='w-96 py-4 sm:px-4'>
            <h2 class='text-center text-4xl lg:text-5xl font-bold text-white mb-4' data-aos="fade-up" data-aos-delay="400">
                Faltam
            </h2>
            <div class="flex justify-around items-center gap-2 p-4 mb-2" data-aos="fade-up" data-aos-delay="500">
                <div class='py-4 px-6 bg-black/[.4] text-white flex flex-col items-center justify-center'>
                    <span id='days' class="text-xl lg:text-2xl font-bold mb-2"></span>
                    <span class='text-small'>Dias</span>
                </div>
                <div class='py-4 px-6 bg-black/[.4] text-white flex flex-col items-center justify-center'>
                    <span id='hours' class="text-xl lg:text-2xl font-bold mb-2"></span>
                    <span class='text-small'>Hrs</span>
                </div>
                <div class='py-4 px-6 bg-black/[.4] text-white flex flex-col items-center justify-center'>
                    <span id='mins' class="text-xl lg:text-2xl font-bold mb-2"></span>
                    <span class='text-small'>Mins</span>
                </div>
                <div class='py-4 px-6 bg-black/[.4] text-white flex flex-col items-center justify-center'>
                    <span id='secs' class="text-xl lg:text-2xl font-bold mb-2"></span>
                    <span class='text-small'>Segs</span>
                </div>
            </div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="600">
            <a href="#section-ticket" class="bg-neon-pink rounded-lg py-2 px-8 text-white uppercase">
                Comprar Ingresso
            </a>
        </div>
    </div>
</section>
