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

        <!-- section begin -->
        <section id="section-speakers" class="text-light" data-bgimage="url(images-event/bg/1.jpg) fixed top center"
            data-stellar-background-ratio=".2">
            <div class="wm wm-border dark wow fadeInDown">speakers</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>The Speakers</h1>
                        <div class="separator"><span><i class="fa fa-square"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
                        <!-- team member -->
                        <div class="de-team-list">
                            <div class="team-pic">
                                <img src="images-event/team/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="team-desc">
                                <h3>John Smith</h3>
                                <p class="lead">Expert Designer</p>
                                <div class="small-border"></div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat.</p>

                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team close -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
                        <!-- team member -->
                        <div class="de-team-list">
                            <div class="team-pic">
                                <img src="images-event/team/2.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="team-desc">
                                <h3>Michael Dennis</h3>
                                <p class="lead">Expert Designer</p>
                                <div class="small-border"></div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat.</p>

                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team close -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
                        <!-- team member -->
                        <div class="de-team-list">
                            <div class="team-pic">
                                <img src="images-event/team/3.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="team-desc">
                                <h3>Sarah Michelle</h3>
                                <p class="lead">Expert Designer</p>
                                <div class="small-border"></div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat.</p>

                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team close -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
                        <!-- team member -->
                        <div class="de-team-list">
                            <div class="team-pic">
                                <img src="images-event/team/4.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="team-desc">
                                <h3>Katty Wilson</h3>
                                <p class="lead">Expert Designer</p>
                                <div class="small-border"></div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat.</p>

                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team close -->
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="section-schedule" aria-label="section-services-tab"
            data-bgimage="url(images-event/bg/2.png) fixed center no-repeat">
            <div class="wm wm-border dark wow fadeInDown ">schedule</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>Event Schedule</h1>
                        <div class="separator"><span><i class="fa fa-square"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-12 wow fadeInUp">
                        <div class="de_tab tab_style_4 text-center">
                            <ul class="de_nav de_nav_dark">
                                <li class="active" data-link="#section-services-tab">
                                    <h3>Day <span>01</span></h3>
                                    <h4>June 20, 2022</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>02</span></h3>
                                    <h4>June 21, 2022</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>03</span></h3>
                                    <h4>March 22, 2021</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>04</span></h3>
                                    <h4>March 23, 2021</h4>
                                </li>
                                <li data-link="#section-services-tab">
                                    <h3>Day <span>05</span></h3>
                                    <h4>March 24, 2021</h4>
                                </li>
                            </ul>

                            <div class="de_tab_content text-left">

                                <div id="tab1" class="tab_single_content dark">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 10:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/1.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>John Smith</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Introduction Creative Design</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">12:00 - 14:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/2.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Michael Dennis</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Getting Started With Creative Design</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">16:00 - 18:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/3.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Sarah Michelle</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Prepare Your Design Concept</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">20:00 - 22:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/4.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Katty Wilson</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Creative Design Implementation Basic</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab2" class="tab_single_content dark">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 12:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/5.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Rose Shipp</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Creative Design Implementation Basic 2</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">12:00 - 14:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/6.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Isaac Nicholas</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>How to Design Happiness</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">16:00 - 18:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/7.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>John Arnold</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Good Storytelling For Great Design</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">20:00 - 22:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/1.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>John Smith</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Unintuitive Lessons on Being a Designer</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab3" class="tab_single_content dark">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 12:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/2.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Michael Dennis</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>The Secret of Great App Design</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">12:00 - 14:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/3.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Sarah Michelle</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Use Design Thinking in Your Everyday Routine</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">16:00 - 18:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/4.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Katty Wilson</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Design Into The Real World</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">20:00 - 22:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/5.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Rose Shipp</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Advanced Design Implementation</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab4" class="tab_single_content dark">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 12:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/6.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Isaac Nicholas</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Advanced Design Implementation 2</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">12:00 - 14:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/7.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>John Arnold</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Branding, Identity &amp; Logo Design Explained</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">16:00 - 18:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/1.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>John Smith</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>The Art of Personal Branding</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">20:00 - 22:00 PM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/2.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Michael Dennis</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>8 Secret Benefits of Branding</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab5" class="tab_single_content dark">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 12:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/1.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>John Smith</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>How To Brand A Startup On A Small Budget</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 12:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/2.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>John Smith</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Establishing a Brand Identity</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 12:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/3.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Sarah Michelle</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Interview With World Class Designer</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <div class="sc-time">08:00 - 12:00 AM</div>
                                                    <div class="sc-pic">
                                                        <img src="images-event/team/4.jpg" class="img-circle"
                                                            alt="">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>Katty Wilson</h4>
                                                        <span>Founder & CEO</span>
                                                    </div>
                                                    <div class="sc-info">
                                                        <h3>Close Event Ceremony &amp; Doorprize</h3>
                                                        <p>In this session we will discuss about digital topics in
                                                            detail. You need laptops and other tech support
                                                            equipment. This session will last for 2 hours. So
                                                            prepare yourself.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-ticket" class="text-light" data-bgimage="url(images-event/bg/2.jpg) fixed top">
            <div class="wm wm-border dark wow fadeInDown">tickets</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>Choose a Ticket</h1>
                        <div class="separator"><span><i class="fa fa-square"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-s1 mb30 wow fadeInUp">
                            <div class="top">
                                <h2>Day Pass</h2>
                                <p class="price"><span class="currency id-color">$</span> <b>49.99</b></p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check_alt2"></i>Conference Tickets</li>
                                    <li><i class="icon_check_alt2"></i>Free Lunch Nad Coffee</li>
                                    <li><i class="icon_check_alt2"></i>Certificates</li>
                                    <li><i class="icon_close_alt2"></i>Private Access</li>
                                    <li><i class="icon_close_alt2"></i>Experts Contacts</li>
                                </ul>
                                <a href="" class="btn btn-custom text-white">Buy Ticket</a>
                            </div>
                            <div class="ps1-deco"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-s1 mb30 wow fadeInUp">
                            <div class="ribbon color-2 text-white">Recommend</div>
                            <div class="top">
                                <h2>Full Pass</h2>
                                <p class="price"><span class="currency id-color">$</span> <b>79.99</b></p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check_alt2"></i>Conference Tickets</li>
                                    <li><i class="icon_check_alt2"></i>Free Lunch Nad Coffee</li>
                                    <li><i class="icon_check_alt2"></i>Certificates</li>
                                    <li><i class="icon_check_alt2"></i>Private Access</li>
                                    <li><i class="icon_close_alt2"></i>Experts Contacts</li>
                                </ul>
                                <a href="" class="btn btn-custom text-white">Buy Ticket</a>
                            </div>
                            <div class="ps1-deco"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-s1 mb30 wow fadeInUp">
                            <div class="top">
                                <h2>Group Pass</h2>
                                <p class="price"><span class="currency id-color">$</span> <b>139.99</b></p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="icon_check_alt2"></i>Conference Tickets</li>
                                    <li><i class="icon_check_alt2"></i>Free Lunch Nad Coffee</li>
                                    <li><i class="icon_check_alt2"></i>Certificates</li>
                                    <li><i class="icon_check_alt2"></i>Private Access</li>
                                    <li><i class="icon_check_alt2"></i>Experts Contacts</li>
                                </ul>
                                <a href="" class="btn btn-custom text-white">Buy Ticket</a>
                            </div>
                            <div class="ps1-deco"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-sponsors" class="py-20 bg-center bg-cover bg-fixed bg-no-repeat" style="background-image: url('{{ Vite::asset('resources/img/background3.jpg') }}')">
            <div class="container m-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl text-white font-bold">Patrocinadores Oficiais</h2>
                    <div class="separator">
                        <span>
                            <i class="fa fa-square text-neon-orange"></i>
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
                                <blockquote class="splide__slide">
                                    <p class="text-4xl text-neon-orange mb-4">
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

                                <blockquote class="splide__slide">
                                    <p class="text-4xl text-neon-orange mb-4">
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
            <div id="gallery" class="gallery zoom-gallery full-gallery de-gallery pf_full_width wow fadeInUp"
                data-wow-delay=".3s">

                <!-- gallery item -->
                <div class="item residential">
                    <div class="picframe">
                        <a href="images-event/portfolio/1.jpg" title="Event Photo">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">View Image</span>
                                </span>
                            </span>
                            <img src="images-event/portfolio/1.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item hospitaly">
                    <div class="picframe">
                        <a href="images-event/portfolio/2.jpg" title="Event Photo">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">View Image</span>
                                </span>
                            </span>
                            <img src="images-event/portfolio/2.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item hospitaly">
                    <div class="picframe">
                        <a href="images-event/portfolio/3.jpg" title="Event Photo">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">View Image</span>
                                </span>
                            </span>
                            <img src="images-event/portfolio/3.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item residential">
                    <div class="picframe">
                        <a href="images-event/portfolio/4.jpg" title="Event Photo">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">View Image</span>
                                </span>
                            </span>
                            <img src="images-event/portfolio/4.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
        </section>

        <section id="call-to-action" class="bg-gradient-to-r from-neon-orange to-neon-blue py-16">
            <div class="container m-auto">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-white">
                            Adquira agora seu ingresso
                        </h3>
                    </div>

                    <div>
                        <a href="#section-ticket" class="bg-neon-orange py-2 px-8 rounded-lg uppercase text-white">
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
                        feito por <br> <a href="" class="text-neon-orange">Artur Afonso</a> e <a href=""
                            class="text-neon-orange">Felipe de Sena</a>
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

        <a href="#" class="block fixed bottom-6 right-6 bg-neon-orange p-3 rounded-lg">
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
                    page: 'splide__pagination__page fa fa-circle text-white mx-1 my-4 text-xs',
                },
            })
            splide.mount()
        })
    </script>
@endsection
