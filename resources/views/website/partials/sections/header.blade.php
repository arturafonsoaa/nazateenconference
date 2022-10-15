<section id="section-banner" class="bg-center bg-cover bg-fixed bg-no-repeat"
    style="background-image: url('{{ Vite::asset('resources/img/background1.png') }}')">

    @include('website.partials.navbar')

    <div class="container py-24 lg:py-56 m-auto flex flex-col items-center">
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
    </div>
</section>
