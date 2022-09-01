<section id="section-register-now" class="py-20">
    <div class="container m-auto sm:px-4" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-4xl text-white font-bold">Se Cadastre Para Comprar</h2>
            <div class="separator">
                <span>
                    <i class="fa fa-square text-neon-blue"></i>
                </span>
            </div>
        </div>
        <div class="max-w-4xl m-auto ">
            <form action="" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-4 mb-8 sm:grid-cols-1 ">
                    <div>
                        <div class="mb-4">
                            <input type="text" placeholder="Nome completo*"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-transparent">
                        </div>
                        <div class="mb-4">
                            <input type="text" placeholder="Whatsapp*"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-0">
                        </div>
                        <div>
                            <input type="text" placeholder="E-mail*"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-0">
                        </div>
                    </div>
                    <div class="h-full">
                        <div class="h-full">
                            <textarea placeholder="Quais suas expectativas para o Nazateen Conference?"
                                class="w-full bg-neutral-gray p-4 text-white focus:ring-0 focus:border focus:border-neon-blue border-0 h-full"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="uppercase py-2 px-8 bg-neon-blue rounded-lg">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</section>
