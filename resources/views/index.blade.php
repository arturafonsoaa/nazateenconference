@extends('layouts.site')

@section('content')
    <header>
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="column">Working Hours Monday - Friday <span
                                class="id-color"><strong>08:00-16:00</strong></span></div>
                        <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span>
                        </div>
                        <!-- social icons -->
                        <div class="column social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        <!-- social icons close -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="index.html">
                            <img class="logo" src="images-event/logo.png" alt="">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->

                    <div class="header-extra">
                        <div class="v-center">
                            <span id="b-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                    </div>

                    <!-- mainmenu begin -->
                    <ul id="mainmenu" class="ms-2">
                        <li><a href="#section-hero">Home<span></span></a></li>
                        <li><a href="#section-about">About<span></span></a></li>
                        <li><a href="#section-speakers">Speakers<span></span></a></li>
                        <li><a href="#section-schedule">Schedule<span></span></a></li>
                        <li><a href="#section-ticket">Ticket<span></span></a></li>
                        <li><a href="#section-sponsors">Sponsors<span></span></a></li>
                        <li><a href="#section-register">Register<span></span></a></li>
                    </ul>

                    <!-- mainmenu close -->



                </div>


            </div>
        </div>
    </header>

    <main id="main-content" class="bg-neutral-black">

        <!-- section begin -->
        <section id="section-hero" class="text-light" data-bgimage="url(images-event/bg/9.jpg) top left no-repeat"
            data-stellar-background-ratio=".2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <div class="d-flex justify-content-left sm-hide">
                            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-calendar-check-o id-color"></i>June
                                20th to 25th</div>
                            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-user id-color"></i>12 Speakers
                            </div>
                            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-map-marker id-color"></i>Palo
                                Alto, California</div>
                        </div>

                        <h1 class="title-3 text-left">
                            Creative Design<br>Expo <span class="id-color">2021</span>
                        </h1>

                        <div class="spacer-single"></div>

                        <a href="#section-ticket" class="btn-custom text-white scroll-to">Get Ticket</a>
                        <div class="spacer-single"></div>
                        <div id="defaultCountdown" class="countdown-s2"></div>
                    </div>

                    <div class="col-lg-6">
                        <img src="images-event/misc/man-1.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-about" data-bgimage="url(images-event/bg/1.png) fixed no-repeat">
            <div class="wm wm-border dark wow fadeInDown">welcome</div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                        <h2>Welcome to the Biggest<br>Creative Design Conference</h2>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                            occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                            expedita distinctio.
                        </p>

                        <div class="spacer10"></div>

                        <a href="#" class="btn-custom font-weight-bold text-white sm-mb-30">About Us</a>
                    </div>

                    <div class="col-lg-6 mb-sm-30 text-center wow fadeInRight">
                        <div class="de-images">
                            <img class="di-small wow fadeIn" src="images-event/misc/2.jpg" alt="" />
                            <img class="di-small-2" src="images-event/misc/3.jpg" alt="" />
                            <img class="img-fluid wow fadeInRight" data-wow-delay=".25s" src="images-event/misc/1.jpg"
                                alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- section begin -->
        <section id="section-features">
            <div class="wm wm-border dark wow fadeInDown ">features</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>Why you should Join Event</h1>
                        <div class="separator"><span><i class="fa fa-square"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>


                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0s">
                        <div class="box-number square">
                            <i class="bg-color hover-color-2 fa fa-microphone text-light"></i>
                            <div class="text">
                                <h3><span>World Class Speakers</span></h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay=".25s">
                        <div class="box-number square">
                            <i class="bg-color hover-color-2 fa fa-lightbulb-o text-light"></i>
                            <div class="text">
                                <h3><span>Best Experience</span></h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="box-number square">
                            <i class="bg-color hover-color-2 fa fa-sitemap text-light"></i>
                            <div class="text">
                                <h3><span>Networking</span></h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-single sm-hide"></div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay=".75s">
                        <div class="box-number square">
                            <i class="bg-color hover-color-2 fa fa-building text-light"></i>
                            <div class="text">
                                <h3><span>Modern Venue</span></h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="1s">
                        <div class="box-number square">
                            <i class="bg-color hover-color-2  fa fa-users text-light"></i>
                            <div class="text">
                                <h3><span>New People</span></h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeIn" data-wow-delay="1.25s">
                        <div class="box-number square">
                            <i class="bg-color hover-color-2 fa fa-mortar-board text-light"></i>
                            <div class="text">
                                <h3><span>Certificates</span></h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-speakers" class="py-20 bg-center bg-cover bg-fixed bg-no-repeat"
            style="background-image: url('{{ Vite::asset('resources/img/background3.png') }}')">
            <div class="container m-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl text-white font-bold">Os Palestrantes</h2>
                    <div class="separator">
                        <span>
                            <i class="fa fa-square text-neon-blue"></i>
                        </span>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="block rounded-lg shadow-lg bg-white">
                            <div class="overflow-hidden rounded-t-lg h-28 bg-neutral-gray"></div>
                            <div
                                class="w-32 -mt-16 overflow-hidden mx-auto mb-4">
                                <img src="https://dummyimage.com/400x400/fff/101010" class="w-full rounded-full border-2 border-white" />
                            </div>
                            <div class="px-8 pb-8">
                                <h4 class="text-2xl font-semibold mb-1 text-neutral-black">Palestrante 0</h4>
                                <p class="text-neutral-gray">
                                    Palestra de abertura
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg shadow-lg bg-white">
                            <div class="overflow-hidden rounded-t-lg h-28 bg-neon-blue"></div>
                            <div
                                class="w-32 -mt-16 overflow-hidden mx-auto mb-4">
                                <img src="https://dummyimage.com/400x400/fff/101010" class="w-full rounded-full border-2 border-white" />
                            </div>
                            <div class="px-8 pb-8">
                                <h4 class="text-2xl font-semibold mb-1 text-neutral-black">Palestrante 1</h4>
                                <p class="text-neon-blue">
                                    Santidade pessoal
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg shadow-lg bg-white">
                            <div class="overflow-hidden rounded-t-lg h-28 bg-neon-purple"></div>
                            <div
                                class="w-32 -mt-16 overflow-hidden mx-auto mb-4">
                                <img src="https://dummyimage.com/400x400/fff/101010" class="w-full rounded-full border-2 border-white" />
                            </div>
                            <div class="px-8 pb-8">
                                <h4 class="text-2xl font-semibold mb-1 text-neutral-black">Palestrante 2</h4>
                                <p class="text-neon-purple">
                                    Santidade social
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg shadow-lg bg-white">
                            <div class="overflow-hidden rounded-t-lg h-28 bg-neon-pink"></div>
                            <div
                                class="w-32 -mt-16 overflow-hidden mx-auto mb-4">
                                <img src="https://dummyimage.com/400x400/fff/101010" class="w-full rounded-full border-2 border-white" />
                            </div>
                            <div class="px-8 pb-8">
                                <h4 class="text-2xl font-semibold mb-1 text-neutral-black">Palestrante 3</h4>
                                <p class="text-neon-pink">
                                    Santidade sexual
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-schedule" class="py-20">
            <div class="container m-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl text-white font-bold">Programação</h2>
                    <div class="separator">
                        <span>
                            <i class="fa fa-square text-neon-purple"></i>
                        </span>
                    </div>
                </div>

                <div>
                    <ul class="nav nav-tabs flex bg-neutral-gray w-fit m-auto rounded-xl" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-day1" class="inline-block py-6 px-12 rounded-tl-xl rounded-bl-xl active"
                                data-bs-toggle="pill" data-bs-target="#tabs-day1" role="tab"
                                aria-controls="tabs-day1" aria-selected="true" id="tabs-day1-tab">
                                <span class="block text-white text-center text-2xl">
                                    Dia 01
                                </span>
                                <span class="block text-white text-center text-sm">
                                    14 de Outubro de 2022
                                </span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-day2" class="inline-block py-6 px-12 rounded-tr-xl rounded-br-xl"
                                data-bs-toggle="pill" data-bs-target="#tabs-day2" role="tab"
                                aria-controls="tabs-day2" id="tabs-day2-tab">
                                <span class="block text-white text-center text-2xl">
                                    Dia 02
                                </span>
                                <span class="block text-white text-center text-sm">
                                    15 de Outubro de 2022
                                </span>
                            </a>
                        </li>
                    </ul>

                    <div class="max-w-6xl m-auto">
                        <div class="tab-content pt-16">
                            <div class="tab-pane fade show active" id="tabs-day1" role="tabpanel"
                                aria-labelledby="tabs-day1-tab">
                                <div
                                    class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray">
                                    <div class="si-time text-white text-center">19:00 às 21:00</div>
                                    <div class="si-pic">
                                        <img src="https://dummyimage.com/400x400/fff/101010"
                                            class="rounded-full lg:w-9/12 mx-auto">
                                    </div>
                                    <div class="si-name">
                                        <h4 class="text-white font-bold">John Smith</h4>
                                        <span class="text-neon-purple">Igreja x</span>
                                    </div>
                                    <div class="si-info col-span-5">
                                        <h3 class="text-white font-extrabold text-xl mb-2">Tema da pregação ou palestra
                                        </h3>
                                        <p class="text-gray-200">In this session we will discuss about digital topics in
                                            detail. You need laptops and other tech support equipment. This session will
                                            last for 2 hours. So prepare yourself.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-day2" role="tabpanel" aria-labelledby="tabs-day1-tab">
                                <div
                                    class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray">
                                    <div class="si-time text-white text-center">19:00 às 21:00</div>
                                    <div class="si-pic">
                                        <img src="https://dummyimage.com/400x400/fff/101010"
                                            class="rounded-full lg:w-9/12 mx-auto">
                                    </div>
                                    <div class="si-name">
                                        <h4 class="text-white font-bold">John Smith</h4>
                                        <span class="text-neon-purple">Igreja x</span>
                                    </div>
                                    <div class="si-info col-span-5">
                                        <h3 class="text-white font-extrabold text-xl mb-2">Tema da pregação ou palestra
                                        </h3>
                                        <p class="text-gray-200">In this session we will discuss about digital topics in
                                            detail. You need laptops and other tech support equipment. This session will
                                            last for 2 hours. So prepare yourself.</p>
                                    </div>
                                </div>
                                <div
                                    class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray bg-gradient-to-r from-transparent via-zinc-900 to-transparent">
                                    <div class="si-time text-white text-center">19:00 às 21:00</div>
                                    <div class="si-pic">
                                        <img src="https://dummyimage.com/400x400/fff/101010"
                                            class="rounded-full lg:w-9/12 mx-auto">
                                    </div>
                                    <div class="si-name">
                                        <h4 class="text-white font-bold">John Smith</h4>
                                        <span class="text-neon-purple">Igreja x</span>
                                    </div>
                                    <div class="si-info col-span-5">
                                        <h3 class="text-white font-extrabold text-xl mb-2">Tema da pregação ou palestra
                                        </h3>
                                        <p class="text-gray-200">In this session we will discuss about digital topics in
                                            detail. You need laptops and other tech support equipment. This session will
                                            last for 2 hours. So prepare yourself.</p>
                                    </div>
                                </div>
                                <div
                                    class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray">
                                    <div class="si-time text-white text-center">19:00 às 21:00</div>
                                    <div class="si-pic">
                                        <img src="https://dummyimage.com/400x400/fff/101010"
                                            class="rounded-full lg:w-9/12 mx-auto">
                                    </div>
                                    <div class="si-name">
                                        <h4 class="text-white font-bold">John Smith</h4>
                                        <span class="text-neon-purple">Igreja x</span>
                                    </div>
                                    <div class="si-info col-span-5">
                                        <h3 class="text-white font-extrabold text-xl mb-2">Tema da pregação ou palestra
                                        </h3>
                                        <p class="text-gray-200">In this session we will discuss about digital topics in
                                            detail. You need laptops and other tech support equipment. This session will
                                            last for 2 hours. So prepare yourself.</p>
                                    </div>
                                </div>
                                <div
                                    class="schedule-item py-12 grid grid-cols-8 gap-4 items-center border-b border-b-neutral-gray bg-gradient-to-r from-transparent via-zinc-900 to-transparent">
                                    <div class="si-time text-white text-center">19:00 às 21:00</div>
                                    <div class="si-pic">
                                        <img src="https://dummyimage.com/400x400/fff/101010"
                                            class="rounded-full lg:w-9/12 mx-auto">
                                    </div>
                                    <div class="si-name">
                                        <h4 class="text-white font-bold">John Smith</h4>
                                        <span class="text-neon-purple">Igreja x</span>
                                    </div>
                                    <div class="si-info col-span-5">
                                        <h3 class="text-white font-extrabold text-xl mb-2">Tema da pregação ou palestra
                                        </h3>
                                        <p class="text-gray-200">In this session we will discuss about digital topics in
                                            detail. You need laptops and other tech support equipment. This session will
                                            last for 2 hours. So prepare yourself.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="section-ticket" class="py-20 bg-gradient-to-r from-neon-blue via-neon-purple to-neon-pink">
            <div class="container m-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl text-white font-bold">Investimento</h2>
                    <div class="separator">
                        <span>
                            <i class="fa fa-square text-neon-pink"></i>
                        </span>
                    </div>
                </div>

                <div class="max-w-6xl m-auto">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <div class="bg-neutral-black py-16">
                                <div class="text-center mb-8">
                                    <h4 class="text-2xl text-white font-light mb-6">Senha Padrão</h4>
                                    <p class="text-3xl text-white font-bold">
                                        <span class="text-neon-pink text-base align-top font-normal">R$</span> 40,00
                                    </p>
                                </div>
                                <div class="mb-16">
                                    <ul class="text-white text-sm">
                                        <li class="py-4 px-6 bg-neutral-gray">
                                            <i class="fa fa-check text-neon-pink mr-4"></i> Acesso à conferência
                                        </li>
                                        <li class="py-4 px-6">
                                            <i class="fa fa-check text-neon-pink mr-4"></i> Coffee break
                                        </li>
                                        <li class="py-4 px-6 bg-neutral-gray">
                                            <i class="fa fa-check text-neon-pink mr-4"></i> Brindes
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="bg-neon-pink rounded-lg py-2 px-8 text-white uppercase">
                                        Comprar Ingresso
                                    </a>
                                </div>
                            </div>
                            <div class="h-1 bg-gradient-to-r from-neon-pink to-neon-purple"></div>
                        </div>

                        <div class="col-span-2"></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- section close -->

        <section id="section-sponsors" class="py-20 bg-center bg-cover bg-fixed bg-no-repeat"
            style="background-image: url('{{ Vite::asset('resources/img/background3.png') }}')">
            <div class="container m-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl text-white font-bold">Patrocinadores Oficiais</h2>
                    <div class="separator">
                        <span>
                            <i class="fa fa-square text-neon-pink"></i>
                        </span>
                    </div>
                </div>

                <div class="lg:max-w-5xl flex justify-center items-center gap-4 my-12 m-auto">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/logo1.png') }}">
                    </figure>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/logo2.png') }}">
                    </figure>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/logo3.png') }}">
                    </figure>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/logo4.png') }}">
                    </figure>
                </div>
            </div>
        </section>

        <section id="section-testimonials" class="py-16">
            <div class="container m-auto">
                <div class="m-auto lg:w-2/3 text-center">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <blockquote class="splide__slide mb-8">
                                    <p class="text-4xl text-neon-pink mb-4">
                                        <i class="fa fa-quote-left"></i>
                                    </p>
                                    <p class="text-3xl font-semibold text-gray-200 mb-4">Superou minhas expectativas!</p>
                                    <p class="text-xl italic text-gray-200 mb-4">
                                        I'm always impressed with the event. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                    </p>
                                    <p class="text-base text-gray-200">Participante 1</p>
                                </blockquote>

                                <blockquote class="splide__slide mb-8">
                                    <p class="text-4xl text-neon-pink mb-4">
                                        <i class="fa fa-quote-left"></i>
                                    </p>
                                    <p class="text-3xl font-semibold text-gray-200 mb-4">Superou minhas expectativas!</p>
                                    <p class="text-xl italic text-gray-200 mb-4">
                                        I'm always impressed with the event. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                    </p>
                                    <p class="text-base text-gray-200">Participante 1</p>
                                </blockquote>
                            </div>
                        </div>
                        <ul class="splide__pagination"></ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-gallery">
            <div id="gallery" class="grid lg:grid-cols-5">

                <div class="item">
                    <figure>
                        <img src="https://dummyimage.com/800x500/101010/fff" />
                    </figure>
                </div>

                <div class="item">
                    <figure>
                        <img src="https://dummyimage.com/800x500/101010/fff" />
                    </figure>
                </div>

                <div class="item">
                    <figure>
                        <img src="https://dummyimage.com/800x500/101010/fff" />
                    </figure>
                </div>

                <div class="item">
                    <figure>
                        <img src="https://dummyimage.com/800x500/101010/fff" />
                    </figure>
                </div>

                <div class="item">
                    <figure>
                        <img src="https://dummyimage.com/800x500/101010/fff" />
                    </figure>
                </div>

            </div>
        </section>

        <section id="section-register-now" class="py-20">
            <div class="container m-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl text-white font-bold">Se Cadastre Para Comprar</h2>
                    <div class="separator">
                        <span>
                            <i class="fa fa-square text-neon-pink"></i>
                        </span>
                    </div>
                </div>
                <div class="max-w-4xl m-auto">
                    <form action="" method="post">
                        @csrf
                        <div class="grid grid-cols-2 gap-4 mb-8">
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

        <section id="call-to-action" class="bg-gradient-to-r from-neon-pink to-neon-purple py-16">
            <div class="container m-auto">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-white">
                            Adquira agora seu ingresso
                        </h3>
                    </div>

                    <div>
                        <a href="#section-ticket" class="bg-neon-pink py-2 px-8 rounded-lg uppercase text-white">
                            Comprar ingresso
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-neutral-black py-20">
        <div class="container m-auto">
            <div class="flex items-center justify-between">
                <div class="lg:basis-2/12">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/logo-nazateen-conference.png') }}" class="lg:w-60">
                    </figure>
                </div>

                <div class="lg:basis-8/12">
                    <p class="text-gray-200 text-center">
                        &copy; Copyright 2022 - Igreja do Nazareno Central de Mossoró - Template do site do Nazateen
                        Conference
                        feito por <br> <a href="" class="text-neon-pink">Artur Afonso</a> e <a href=""
                            class="text-neon-pink">Felipe de Sena</a>
                    </p>
                </div>

                <div class="lg:basis-2/12">
                    <div class="text-right">
                        <a href="#" class="text-white text-2xl mr-2">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white text-2xl mr-2">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#" class="text-white text-2xl mr-2">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="block fixed bottom-6 right-6 bg-neon-pink p-3 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 fill-white">
                <path fill-rule="evenodd"
                    d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </footer>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let splide = new Splide('.splide', {
                type: 'loop',
                arrows: false,
                autoplay: true,
                classes: {
                    pagination: 'splide__pagination',
                    page: 'splide__pagination__page fa fa-circle text-white mx-1 my-4',
                },
            })
            splide.mount()
        })
    </script>
@endsection
