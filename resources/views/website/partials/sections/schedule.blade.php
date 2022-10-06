<section id="section-schedule" class="py-20">
    <div class="container m-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl text-white font-bold">Programação</h2>
            <div class="separator">
                <span>
                    <i class="fa fa-square text-neon-purple"></i>
                </span>
            </div>
        </div>

        <div>
            <ul class="nav nav-tabs flex bg-neutral-gray w-fit m-auto rounded-xl" role="tablist"
                data-aos="fade-right" data-aos-delay="50">
                <li class="nav-item" role="presentation">
                    <a href="#tabs-day1" class="inline-block py-4 lg:py-6 px-8 lg:px-12 rounded-tl-xl rounded-bl-xl active"
                        data-bs-toggle="pill" data-bs-target="#tabs-day1" role="tab" aria-controls="tabs-day1"
                        aria-selected="true" id="tabs-day1-tab">
                        <span class="block text-white text-center text-xl lg:text-2xl">
                            Dia 01
                        </span>
                        <span class="hidden lg:block text-white text-center text-sm">
                            14 de Outubro de 2022
                        </span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tabs-day2" class="inline-block py-4 lg:py-6 px-8 lg:px-12 rounded-tr-xl rounded-br-xl"
                        data-bs-toggle="pill" data-bs-target="#tabs-day2" role="tab" aria-controls="tabs-day2"
                        id="tabs-day2-tab">
                        <span class="block text-white text-center text-xl lg:text-2xl">
                            Dia 02
                        </span>
                        <span class="hidden lg:block text-white text-center text-sm">
                            15 de Outubro de 2022
                        </span>
                    </a>
                </li>
            </ul>

            <div class="max-w-5xl m-auto">
                <div class="tab-content pt-16 ">
                    <div class="tab-pane fade show active" id="tabs-day1" role="tabpanel"
                        aria-labelledby="tabs-day1-tab">
                        <div class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray sm:flex sm:flex-col"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="si-time text-white text-center">18:00</div>

                            <div class="si-info col-span-5 sm:px-4">
                                <h3 class="text-white font-extrabold text-xl mb-2">
                                    Credenciamento
                                </h3>
                            </div>
                        </div>
                        <div class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray sm:flex sm:flex-col"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="si-time text-white text-center">19:30</div>
                            <div class="si-info col-span-4 sm:px-4">
                                <h3 class="text-white font-extrabold text-xl mb-2 text-center lg:text-left">
                                    1&ordf; Sessão
                                </h3>
                                <p class="text-gray-200">
                                    <ul class="text-white text-center lg:text-left">
                                        <li>Ministério DNA</li>
                                        <li>Ministério de Louvor Nazateen Conference</li>
                                        <li>Palestra sobre Santidade</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="si-name col-span-2">
                                <h4 class="text-white font-bold text-center lg:text-right">João Matheus</h4>
                                <p class="text-neon-purple text-center lg:text-right">Preletor</p>
                            </div>
                            <div class="si-pic sm:w-24">
                                <img src="{{ Vite::asset('resources/img/joaomatheus.jpeg') }}"
                                    class="rounded-full lg:w-9/12 mx-auto">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-day2" role="tabpanel" aria-labelledby="tabs-day1-tab">
                        <div class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray sm:flex sm:flex-col"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="si-time text-white text-center">14:00 às 16:00</div>
                            <div class="si-info col-span-4 sm:px-4">
                                <h3 class="text-white font-extrabold text-xl mb-2 text-center lg:text-left">
                                    2&ordf; Sessão
                                </h3>
                                <p class="text-gray-200">
                                    <ul class="text-white text-center lg:text-left">
                                        <li>Ministério de Teatro</li>
                                        <li>Ministério de Louvor Nazateen Conference</li>
                                        <li>Palestra sobre Santidade Pessoal</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="si-name col-span-2">
                                <h4 class="text-white font-bold text-center lg:text-right">Em breve</h4>
                                <p class="text-neon-purple text-center lg:text-right">Preletora</p>
                            </div>
                            <div class="si-pic sm:w-24">
                                <img src="https://dummyimage.com/400x400/fff/fff"
                                    class="rounded-full lg:w-9/12 mx-auto">
                            </div>
                        </div>
                        <div class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray sm:flex sm:flex-col"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="si-time text-white text-center">16:00 às 18:00</div>
                            <div class="si-info col-span-4 sm:px-4">
                                <h3 class="text-white font-extrabold text-xl mb-2 text-center lg:text-left">
                                    3&ordf; Sessão
                                </h3>
                                <p class="text-gray-200">
                                    <ul class="text-white text-center lg:text-left">
                                        <li>Ministério de Louvor Nazateen Conference</li>
                                        <li>Roda de Conversa</li>
                                        <li>Palestra sobre Santidade Sexual</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="si-name col-span-2">
                                <h4 class="text-white font-bold text-center lg:text-right">Em breve</h4>
                                <p class="text-neon-purple text-center lg:text-right">Preletor</p>
                            </div>
                            <div class="si-pic sm:w-24">
                                <img src="https://dummyimage.com/400x400/fff/fff"
                                    class="rounded-full lg:w-9/12 mx-auto">
                            </div>
                        </div>
                        <div class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray sm:flex sm:flex-col"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="si-time text-white text-center">18:00 às 19:30</div>

                            <div class="si-info col-span-5 sm:px-4">
                                <h3 class="text-white font-extrabold text-xl mb-2">
                                    Intervalo
                                </h3>
                            </div>
                        </div>
                        <div class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray sm:flex sm:flex-col"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="si-time text-white text-center">19:30 às 21:30</div>
                            <div class="si-info col-span-4 sm:px-4">
                                <h3 class="text-white font-extrabold text-xl mb-2 text-center lg:text-left">
                                    4&ordf; Sessão
                                </h3>
                                <p class="text-gray-200">
                                    <ul class="text-white text-center lg:text-left">
                                        <li>Vídeo/Testemunho</li>
                                        <li>Ministério de Louvor Nazateen Conference</li>
                                        <li>Palestra sobre Santidade Social</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="si-name col-span-2">
                                <h4 class="text-white font-bold text-center lg:text-right">Em breve</h4>
                                <p class="text-neon-purple text-center lg:text-right">Preletora</p>
                            </div>
                            <div class="si-pic sm:w-24">
                                <img src="https://dummyimage.com/400x400/fff/fff"
                                    class="rounded-full lg:w-9/12 mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
