@extends('pages.layout.app')
@section('content')

    <div id="page" class="site">

       @include('pages.layout.header')

        <main id="primary" class="site-main">


            <article id="post-22404" class="post-22404 page type-page status-publish hentry">

                <header id="hero" class="hero hero-type__content hero-template__service"
                        style="background-image: url('../../wp-content/uploads/2022/04/va-page-offset-e1673550406686.jpg');">
                    <div class="hero-overlay"></div>
                    <div class="container above-overlay" id="gf_3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>An Expert in Virtual Assistant Services</h1>
                                <h5 class="secondary">Accomplish More. Juggle Less.</h5>
                                <p></p>
                                <a class="btn" id="hero-cta-btn"
                                   href="../../get-started/index.html"><span>Hire {{ env('APP_NAME') }}</span></a></div>
                        </div>
                        <div class="row hero-columns-below">
                            <div class="col-sm-12 col-md-4 col-lg-4 hero-column">
                                <p class="icon text-center"><i class="fa-thin fa-location-pin"></i></p>
                                <h4 class="text-center"></h4>
                                <h3 style="font-family: Roboto Condensed, Arial Narrow, sans-serif; color: #ffffff; font-size: 14pt; text-align: center; letter-spacing: 0.2em; font-weight: 700;">
                                    U.S.-BASED</h3>
                                <p class="text-center">We search the entire country for a Virtual Assistant to find the
                                    right person for your organization.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 hero-column">
                                <p class="icon text-center"><i class="fa-thin fa-graduation-cap"></i></p>
                                <h4 class="text-center"></h4>
                                <h3 style="font-family: Roboto Condensed, Arial Narrow, sans-serif; color: #ffffff; font-size: 14pt; text-align: center; letter-spacing: 0.2em; font-weight: 700;">
                                    HIGHLY VETTED</h3>
                                <p class="text-center">Our exhaustive recruiting process includes – but isn't limited to
                                    – several video interviews and skills assessments to find talented, hard-working
                                    candidates.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 hero-column">
                                <p class="icon text-center"><i class="fa-thin fa-head-side-gear"></i></p>
                                <h4 class="text-center"></h4>
                                <h3 style="font-family: Roboto Condensed, Arial Narrow, sans-serif; color: #ffffff; font-size: 14pt; text-align: center; letter-spacing: 0.2em; font-weight: 700;">
                                    AI-EMPOWERED</h3>
                                <p class="text-center">Our AI-empowered Virtual Assistants bring exceptional efficiency
                                    and sharpened focus to everything you do.</p>
                            </div>
                        </div>
                    </div>
                </header>
            </article>
        </main>
    </div>

    <div class="entry-content">


        <section id="three-columns-w-cta" class="three-column-content" style="background-color:#F4F4F4 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="u-fade-type-static js-scroll-trigger is-active">What's holding you back?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <i class="fa-thin fa-clock"></i>
                        <h3>Lack of Time</h3>
                        <p class="u-fade-type-static js-scroll-trigger is-active">Are you stretched so thin that you
                            don’t have time to hire the help you need—let alone take a vacation?</p></div>
                    <div class="col-lg-4">
                        <i class="fa-thin fa-message-xmark"></i>
                        <h3>Unanswered Calls &amp; Emails</h3>
                        <p class="u-fade-type-static js-scroll-trigger is-active">Have you missed information critical
                            for growing your organization or serving your clients?</p></div>
                    <div class="col-lg-4">
                        <i class="fa-thin fa-chart-line-down"></i>
                        <h3>Missed Projects &amp; Deadlines</h3>
                        <p class="u-fade-type-static js-scroll-trigger is-active">How many opportunities do you miss
                            because of your chaos? It's time to hire a Virtual Assistant!</p></div>
                </div>
                <div class="row call-to-action-row u-fade-type-down js-scroll-trigger is-active">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <a class="btn" href="../../get-started/index.html"><span>Hire {{ env('APP_NAME') }}</span></a>
                    </div>
                </div>
            </div>
        </section>


        <style>
            #tiles-accordian .fa-thin {
                transition: all ease 0.2s;
                cursor: pointer;
            }

            #tiles-accordian .title-close-bttn:hover {
                font-weight: 300;
                font-size: 1.75em;
                text-align: center;
            }

            .services-module-desktop h2, .services-module-desktop p {
                font-family: 'Source Sans Pro', sans-serif;
            }

            .services-module-desktop h2 {
                text-transform: uppercase;
            }

            .services-module-desktop .service-btn {
                width: 100%;
                background-color: #f4f4f4;
                border-radius: 10px;
                font-family: 'Roboto Condensed', sans-serif;
                font-weight: bold;
                font-size: 20px;
                text-transform: uppercase;
                color: #02293d;
            }

            .services-module-desktop .service-btn:hover, .services-module-desktop .selected {
                background-color: white !important;
                border: 2px solid #12d678 !important;
                box-shadow: none;
            }

            .services-module-desktop h3 {
                font-family: 'Roboto Slab', serif;
                font-weight: bold;
                margin-bottom: 1em;
            }

            .services-module-desktop .content-btn {
                background-color: #12d678;
                color: white;
                border-radius: 10px;
                font-family: 'Roboto Condensed', sans-serif;
                font-weight: bold;
                text-transform: uppercase;
                border: none;
                padding: 0.7em 2em;
                margin-top: 1em;
            }

            .services-module-desktop .content-button:hover {
                color: #02293d;
            }

            .services-module-desktop .arrow-buttons {
                text-align: right;
            }

            .services-module-desktop .arrow-btn {
                border-radius: 50%;
                background-color: #12d678;
                color: white;
                border: none;
                width: 35px;
                height: 35px;
                transition: background-color 2s; /* Transition effect with 2 seconds duration */
            }

            .services-module-desktop .arrow-btn:hover {
                background-color: #d8f4df;
                border: none;
            }

            .services-module-desktop .arrow-btn:focus {
                outline: none;
            }

            .services-module-desktop .arrow-bottons #prev {
                background-color: #d8f4df;
            }

            .services-module-desktop .arrow-bottons #next {
            }

            .services-module-desktop .col-8 {
                position: relative;
                overflow: hidden;
                min-height: 525px;
                padding-bottom: 10px;
            }

            .services-module-desktop .content {
                position: absolute;
                left: 100%; /* Hide them by default */
                transition: left 0.5s; /* Add a smooth transition */
            }

            #content-1 {
                left: 0; /* Show it by default */
            }

            .services-module-desktop h2, .services-module-desktop h3, .services-module-desktop p, .services-module-desktop btn, .services-module-desktop .content {
                text-align: center;
            }

            .services-module-desktop .title-row {
                border-bottom: 2px solid #818385;
                margin-bottom: 3em;
                padding-bottom: 1em;
            }

            .services-module-desktop .service-btn {
                border: solid 2px #f4f4f4;
                margin-bottom: 10px;
                transition: ease all 0.5s;
            }

            .services-module-desktop .caption-icon i {
                font-size: 2.5em;
                border-radius: 100%;
                background-color: #f4f4f4;
                padding: 15px;
                width: 150px;
                height: 150px;
            }

            .services-module-desktop .caption-icon i::before {
                vertical-align: middle;
            }

            .services-module-mobile {
                display: none;
            }

            .tiles {
                padding: 4em 0 0 0;
            }

            @media only screen and (max-width: 1200px) {
                .services-module-mobile {
                    display: block !important;
                }

                .services-module-desktop {
                    display: none !important;
                }
            }

            .tiles-btn {
                background: white;
            }
        </style>

        <section id="tiles_title" class="tiles" style="background-color:#fff ">
            <!-- Mobile only -->
            <div class="container services-module-mobile">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="text-center"></h2>
                        <h2>What Is a Virtual Assistant?</h2>
                        <p class="text-center tiles-title-sub">{{ env('APP_NAME') }}'s Virtual Assistant services provide a variety of
                            solutions, including:</p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div id="tiles-accordian" class="row">
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-4521">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-4521"
                                                aria-expanded="false" aria-controls="collapse-4521">
                                            <span>Administrative Tasks</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-4521" class="collapse" aria-labelledby="heading-4521"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-users-gear"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <div class="bullet-container">
                                        <div class="bullet-left">
                                            <ul class="list">
                                                <li>Calendar &amp; schedule management</li>
                                                <li>Email management</li>
                                                <li>Travel coordination</li>
                                                <li>Meeting confirmation, preparation &amp; notes</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-right">
                                            <ul class="list">
                                                <li>Event planning &amp; coordination</li>
                                                <li>Project assistance, research &amp; reporting powered by AI tools
                                                </li>
                                                <li>Employee candidate pre-screening &amp; interviews</li>
                                                <li>Return calls &amp; voicemails</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-mobile">
                                            <ul class="list">
                                                <li>Calendar &amp; schedule management</li>
                                                <li>Email management</li>
                                                <li>Travel coordination</li>
                                                <li>Meeting confirmation, preparation &amp; notes</li>
                                                <li>Event planning &amp; coordination</li>
                                                <li>Project assistance, research &amp; reporting</li>
                                                <li>Employee candidate pre-screening &amp; interviews</li>
                                                <li>Return calls &amp; voicemails</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p></p>
                                    <!-- Leave blank -->
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-4522">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-4522"
                                                aria-expanded="false" aria-controls="collapse-4522">
                                            <span>Operational Tasks</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-4522" class="collapse" aria-labelledby="heading-4522"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-handshake"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <div class="bullet-container">
                                        <div class="bullet-left-move">
                                            <ul class="list">
                                                <li>Client intake</li>
                                                <li>Project coordination</li>
                                                <li>HR-related tasks</li>
                                                <li>CRM management and updating</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-right">
                                            <ul class="list">
                                                <li>Industry research</li>
                                                <li>Report generation</li>
                                                <li>Data analysis enhanced by AI-powered insights</li>
                                                <li>Project management assistance</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-mobile">
                                            <ul class="list">
                                                <li>Client intake</li>
                                                <li>Project coordination</li>
                                                <li>HR-related tasks</li>
                                                <li>CRM management and updating</li>
                                                <li>Industry research</li>
                                                <li>Report generation</li>
                                                <li>Data analysis</li>
                                                <li>Project management assistance</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p></p>
                                    <!-- Leave blank -->
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-4523">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-4523"
                                                aria-expanded="false" aria-controls="collapse-4523">
                                            <span>Financial Tasks</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-4523" class="collapse" aria-labelledby="heading-4523"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i
                                            class="fa-classic fa-thin fa-money-check-dollar"
                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <div class="bullet-container">
                                        <div class="bullet-left-move">
                                            <ul class="list">
                                                <li>Light bookkeeping</li>
                                                <li>Compile &amp; submit expense reports</li>
                                                <li>Billing disputes</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-right">
                                            <ul class="list">
                                                <li>Send invoices</li>
                                                <li>Vendor management</li>
                                                <li>Run financial reports with support from AI-driven tools</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-mobile">
                                            <ul class="list">
                                                <li>Client intake</li>
                                                <li>Light bookkeeping</li>
                                                <li>Compile &amp; submit expense reports</li>
                                                <li>Billing disputes</li>
                                                <li>Send invoices</li>
                                                <li>Vendor management</li>
                                                <li>Run financial reports</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p></p>
                                    <!-- Leave blank -->
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-4524">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-4524"
                                                aria-expanded="false" aria-controls="collapse-4524">
                                            <span>Personal Tasks</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-4524" class="collapse" aria-labelledby="heading-4524"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i
                                            class="fa-classic fa-thin fa-hand-holding-box"
                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <div class="bullet-container">
                                        <div class="bullet-left-move">
                                            <ul class="list">
                                                <li>Gift purchases</li>
                                                <li>Send personal cards</li>
                                                <li>Set personal appointments</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-right">
                                            <ul class="list">
                                                <li>AI-enhanced vendor research</li>
                                                <li>Vacation planning</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-mobile">
                                            <ul class="list">
                                                <li>Client intake</li>
                                                <li>Gift purchases</li>
                                                <li>Send personal cards</li>
                                                <li>Set personal appointments</li>
                                                <li>Vendor research</li>
                                                <li>Vacation planning</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p></p>
                                    <!-- Leave blank -->
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-4525">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-4525"
                                                aria-expanded="false" aria-controls="collapse-4525">
                                            <span>Marketing Tasks</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-4525" class="collapse" aria-labelledby="heading-4525"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-share-nodes"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <div class="bullet-container">
                                        <div class="bullet-left">
                                            <ul class="list">
                                                <li>Schedule pre-written &amp; pre-approved social media content</li>
                                                <li>Report generation with AI-enhanced insights</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-right">
                                            <ul class="list">
                                                <li>Manage social calendar &amp; library</li>
                                                <li>eNewsletters, blogs &amp; eBlasts</li>
                                                <li>Compile free or licensed stock photos</li>
                                                <li>Responding to social media posts</li>
                                            </ul>
                                        </div>
                                        <div class="bullet-mobile">
                                            <ul class="list">
                                                <li>Client intake</li>
                                                <li>Schedule pre-written &amp; pre-approved social media content</li>
                                                <li>Manage social calendar &amp; library</li>
                                                <li>Report generation</li>
                                                <li>eNewsletters, blogs &amp; eBlasts</li>
                                                <li>Compile free or licensed stock photos</li>
                                                <li>Responding to social media posts</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p></p>
                                    <!-- Leave blank -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Mobile only -->

            <!-- Desktop only -->
            <div class="container services-module-desktop">
                <div class="row title-row">
                    <div class="col-12">
                        <h2></h2>
                        <h2>What Is a Virtual Assistant?</h2>
                        <p>{{ env('APP_NAME') }}'s Virtual Assistant services provide a variety of solutions, including:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <!-- Left column with buttons -->
                        <button class="btn service-btn selected" id="btn-1">Administrative Tasks</button>
                        <button class="btn service-btn " id="btn-2">Operational Tasks</button>
                        <button class="btn service-btn " id="btn-3">Financial Tasks</button>
                        <button class="btn service-btn " id="btn-4">Personal Tasks</button>
                        <button class="btn service-btn " id="btn-5">Marketing Tasks</button>
                    </div>
                    <div class="col-8">
                        <!-- Right column with content -->
                        <div class="content service-content active" id="content-1" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-users-gear"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <div class="bullet-container">
                                <div class="bullet-left">
                                    <ul class="list">
                                        <li>Calendar &amp; schedule management</li>
                                        <li>Email management</li>
                                        <li>Travel coordination</li>
                                        <li>Meeting confirmation, preparation &amp; notes</li>
                                    </ul>
                                </div>
                                <div class="bullet-right">
                                    <ul class="list">
                                        <li>Event planning &amp; coordination</li>
                                        <li>Project assistance, research &amp; reporting powered by AI tools</li>
                                        <li>Employee candidate pre-screening &amp; interviews</li>
                                        <li>Return calls &amp; voicemails</li>
                                    </ul>
                                </div>
                                <div class="bullet-mobile">
                                    <ul class="list">
                                        <li>Calendar &amp; schedule management</li>
                                        <li>Email management</li>
                                        <li>Travel coordination</li>
                                        <li>Meeting confirmation, preparation &amp; notes</li>
                                        <li>Event planning &amp; coordination</li>
                                        <li>Project assistance, research &amp; reporting</li>
                                        <li>Employee candidate pre-screening &amp; interviews</li>
                                        <li>Return calls &amp; voicemails</li>
                                    </ul>
                                </div>
                            </div>
                            <p></p> <!-- Paragraph -->
                            <!-- Leave blank -->
                        </div>
                        <div class="content service-content active" id="content-2" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-handshake"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <div class="bullet-container">
                                <div class="bullet-left-move">
                                    <ul class="list">
                                        <li>Client intake</li>
                                        <li>Project coordination</li>
                                        <li>HR-related tasks</li>
                                        <li>CRM management and updating</li>
                                    </ul>
                                </div>
                                <div class="bullet-right">
                                    <ul class="list">
                                        <li>Industry research</li>
                                        <li>Report generation</li>
                                        <li>Data analysis enhanced by AI-powered insights</li>
                                        <li>Project management assistance</li>
                                    </ul>
                                </div>
                                <div class="bullet-mobile">
                                    <ul class="list">
                                        <li>Client intake</li>
                                        <li>Project coordination</li>
                                        <li>HR-related tasks</li>
                                        <li>CRM management and updating</li>
                                        <li>Industry research</li>
                                        <li>Report generation</li>
                                        <li>Data analysis</li>
                                        <li>Project management assistance</li>
                                    </ul>
                                </div>
                            </div>
                            <p></p> <!-- Paragraph -->
                            <!-- Leave blank -->
                        </div>
                        <div class="content service-content active" id="content-3" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-money-check-dollar"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <div class="bullet-container">
                                <div class="bullet-left-move">
                                    <ul class="list">
                                        <li>Light bookkeeping</li>
                                        <li>Compile &amp; submit expense reports</li>
                                        <li>Billing disputes</li>
                                    </ul>
                                </div>
                                <div class="bullet-right">
                                    <ul class="list">
                                        <li>Send invoices</li>
                                        <li>Vendor management</li>
                                        <li>Run financial reports with support from AI-driven tools</li>
                                    </ul>
                                </div>
                                <div class="bullet-mobile">
                                    <ul class="list">
                                        <li>Client intake</li>
                                        <li>Light bookkeeping</li>
                                        <li>Compile &amp; submit expense reports</li>
                                        <li>Billing disputes</li>
                                        <li>Send invoices</li>
                                        <li>Vendor management</li>
                                        <li>Run financial reports</li>
                                    </ul>
                                </div>
                            </div>
                            <p></p> <!-- Paragraph -->
                            <!-- Leave blank -->
                        </div>
                        <div class="content service-content active" id="content-4" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-hand-holding-box"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <div class="bullet-container">
                                <div class="bullet-left-move">
                                    <ul class="list">
                                        <li>Gift purchases</li>
                                        <li>Send personal cards</li>
                                        <li>Set personal appointments</li>
                                    </ul>
                                </div>
                                <div class="bullet-right">
                                    <ul class="list">
                                        <li>AI-enhanced vendor research</li>
                                        <li>Vacation planning</li>
                                    </ul>
                                </div>
                                <div class="bullet-mobile">
                                    <ul class="list">
                                        <li>Client intake</li>
                                        <li>Gift purchases</li>
                                        <li>Send personal cards</li>
                                        <li>Set personal appointments</li>
                                        <li>Vendor research</li>
                                        <li>Vacation planning</li>
                                    </ul>
                                </div>
                            </div>
                            <p></p> <!-- Paragraph -->
                            <!-- Leave blank -->
                        </div>
                        <div class="content service-content active" id="content-5" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-share-nodes"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <div class="bullet-container">
                                <div class="bullet-left">
                                    <ul class="list">
                                        <li>Schedule pre-written &amp; pre-approved social media content</li>
                                        <li>Report generation with AI-enhanced insights</li>
                                    </ul>
                                </div>
                                <div class="bullet-right">
                                    <ul class="list">
                                        <li>Manage social calendar &amp; library</li>
                                        <li>eNewsletters, blogs &amp; eBlasts</li>
                                        <li>Compile free or licensed stock photos</li>
                                        <li>Responding to social media posts</li>
                                    </ul>
                                </div>
                                <div class="bullet-mobile">
                                    <ul class="list">
                                        <li>Client intake</li>
                                        <li>Schedule pre-written &amp; pre-approved social media content</li>
                                        <li>Manage social calendar &amp; library</li>
                                        <li>Report generation</li>
                                        <li>eNewsletters, blogs &amp; eBlasts</li>
                                        <li>Compile free or licensed stock photos</li>
                                        <li>Responding to social media posts</li>
                                    </ul>
                                </div>
                            </div>
                            <p></p> <!-- Paragraph -->
                            <!-- Leave blank -->
                        </div>
                    </div>
                </div>
                <!-- Bottom right corner with arrows -->
                <div class="arrow-buttons">
                    <button class="arrow-btn" id="prev"><i class="fas fa-angle-left fa-2x"></i></button>
                    <button class="arrow-btn" id="next"><i class="fas fa-angle-right fa-2x"></i></button>
                </div>
            </div>
            <!-- END Desktop only -->
        </section>

        <!-- Desktop Module JS -->
        <script>
            // Get all the buttons and content elements
            var buttons = $(".service-btn");
            var contents = $(".service-content");

            // Get the .col-8 element that is a child of .services-module-desktop
            var col = $(".services-module-desktop").find(".col-8");
            // Get the width of that element
            var colWidth = col.width();
            // Set the same width to all the content elements
            contents.each(function () {
                $(this).width(colWidth);
            });

            // Get the current index of the active content
            var currentIndex = contents.index($(".active"));

            // Function to show the content corresponding to a button
            function showContent(index) {
                // Hide the current content by animating its left property to -100% and its opacity to 0
                contents.eq(currentIndex).animate({left: "-100%", opacity: 0}, 750, function () {
                    // Reset the left property of the hidden content to 100%
                    $(this).css("left", "100%");
                });
                // Show the new content by animating its left property to 0 and its opacity to 1
                contents.eq(index).animate({left: "0", opacity: 1}, 750);
                // Update the current index
                currentIndex = index;
            }

            // Add click event listeners to the buttons
            buttons.each(function (index) {
                $(this).click(function () {
                    // Show the content for the clicked button
                    showContent(index);
                    // Remove the selected class from all buttons
                    buttons.removeClass("selected");
                    // Add the selected class to the clicked button
                    $(this).addClass("selected");
                });
            });

            // Add click event listeners to the arrows
            $("#prev").click(function () {
                // Show the previous content if it exists
                if (currentIndex > 0) {
                    showContent(currentIndex - 1);
                    // Remove the selected class from all buttons
                    buttons.removeClass("selected");
                    // Add the selected class to the corresponding button
                    buttons.eq(currentIndex).addClass("selected");
                }
            });
            $("#next").click(function () {
                // Show the next content if it exists
                if (currentIndex < contents.length - 1) {
                    showContent(currentIndex + 1);
                    // Remove the selected class from all buttons
                    buttons.removeClass("selected");
                    // Add the selected class to the corresponding button
                    buttons.eq(currentIndex).addClass("selected");
                }
            });

            // Create a callback function that will be executed when the class attribute of an element changes
            function classChangeCallback(mutations) {
                // Loop through the mutations list
                for (let mutation of mutations) {
                    // Check if the mutation is a class attribute change
                    if (mutation.attributeName === "class") {
                        // Get the target element and its current class
                        let target = mutation.target;
                        let currentClass = target.className;
                        // Check if the target element is a service-btn
                        if (target.classList.contains("service-btn")) {
                            // Check if the target element is selected
                            if (target.classList.contains("selected")) {
                                // Get the id of the target element
                                let id = target.id;
                                // Get the number of service-btns
                                let numButtons = $(".service-btn").length;
                                // Check if the target element is the first or the last service-btn
                                if (id === "btn-1") {
                                    // Set the background-color of #prev button to #d8f4df
                                    $("#prev").css("background-color", "#d8f4df");
                                } else {
                                    // Set the background-color of #prev button back to #12d678
                                    $("#prev").css("background-color", "#12d678");
                                }
                                if (id === "btn-" + numButtons) {
                                    // Set the background-color of #next button to #d8f4df
                                    $("#next").css("background-color", "#d8f4df");
                                } else {
                                    // Set the background-color of #next button back to #12d678
                                    $("#next").css("background-color", "#12d678");
                                }
                            }
                        }
                    }
                }
            }

            // Create a MutationObserver instance and pass the callback function as an argument
            let observer = new MutationObserver(classChangeCallback);

            // Select the elements that you want to observe for class changes
            let serviceBtns = $(".service-btn");
            let arrowBtns = $(".arrow-btn");

            // Call the observe method on the MutationObserver instance and pass the element and an options object that specifies which attributes to observe
            for (let btn of serviceBtns) {
                observer.observe(btn, {attributes: true, attributeFilter: ['class']});
            }

            for (let btn of arrowBtns) {
                observer.observe(btn, {attributes: true, attributeFilter: ['class']});
            }
        </script>


        <section id="ai-banner" class="talk-to-sales-banner" style="background: #02293d;">
            <div class="container">
                <div class="row d-flex flex-row justify-content-center">
                    <div class="col-sm-6 text-left">
                        <h2 class="text-left">AI-Amplified Efficiency.<br>Human-Led Excellence.</h2>
                        <p>{{ env('APP_NAME') }} Executive Assistants don’t just check tasks off a list — they think like leaders, act
                            with autonomy, and move at the speed of your priorities.<br><br>And now, they’re equipped to
                            move even faster.<br><br>Our EAs combine C-suite experience with {{ env('APP_NAME') }}’s proprietary AI
                            tools to anticipate needs, streamline execution, and surface insights that drive better
                            decisions.<br><br>From intelligent inbox triage to proactive prep for meetings and projects,
                            every EA is empowered to use AI not for shortcuts — but for strategy. That means less
                            micromanagement, more trust, and more time back for what only you can do.<br><br>This isn’t
                            traditional administrative support. It’s executive partnership — amplified through AI, led
                            by a human you can trust.</p>
                    </div>
                    <div class="col-sm-6 text-right d-flex flex-column justify-content-center">
                        <div class="outter-button d-flex flex-row justify-content-end">
                            <a class="btn u-fade-type-down js-scroll-trigger"
                               href="../../artificial-intelligence/index.html">LEARN MORE<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="Two Column Content Section Title" class="two-column-content" style="background-color: ">
            <div class="container">
                <div class="row u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-12">
                        <h2 class="text-left"></h2>
                        <h2>Why Hire a Virtual Assistant?</h2>
                    </div>
                </div>
                <div class="row u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-6">
                        <p></p>
                        <p>As a busy leader, there are a lot of things on your plate.</p>
                        <p>Whether it’s managing email, staying on top of project updates, or keeping up with an
                            overloaded schedule, there are so many details required to run a successful
                            organization.</p>
                        <p>But those details come at a heavy cost: your focus.</p>
                        <p>The important details of your organization have to be handled, but who says you’re the best
                            person to handle them?</p>
                        <p>We all want to focus on things that make the biggest impact—professionally and personally.
                            But too often, the demanding details steal our time and attention.</p>
                        <p>It’s time to take it back with {{ env('APP_NAME') }}.</p>
                        <p></p>
                    </div>
                    <div class="col-lg-6">
                        <p></p>
                        <p>{{ env('APP_NAME') }}’s AI-empowered Virtual Assistant services are pre-vetted and intentionally matched with
                            you and your organization, saving you countless hours of managing job postings, filtering
                            candidates, and checking references. </p>
                        <p>By combining human expertise with powerful AI-enhanced tools, our assistants bring greater
                            efficiency and insight to every task. Our standards are high, and our acceptance rate is
                            lower than Harvard’s, ensuring you get the right Virtual Assistant for your needs.</p>
                        <p>So, instead of accomplishing those important (but time-consuming) administrative tasks, work
                            with {{ env('APP_NAME') }}. We are a flexible staffing company you can trust—powered by people, enhanced by
                            AI, giving you more time to focus on what matters most.</p>
                        <p></p>
                    </div>
                </div>
                <div class="row call-to-action-row u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <a class="btn" href="../../get-started/index.html"><span>Hire {{ env('APP_NAME') }}</span></a>
                    </div>
                </div>
            </div>
        </section>


        <section id="resources" class="two-column-content" style="background-color: ">
            <div class="container">
                <div class="row u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-12">
                        <h2 class="text-left"></h2>
                    </div>
                </div>
                <div class="row u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-6">
                        <p></p>
                        <p><img decoding="async" class="alignnone size-full wp-image-25172"
                                src="https://resources.belaysolutions.com/hubfs/Landing Page Assets/Resource Icons/25-Things-Assistant-Icon.png"
                                alt="25 Things You Can Delegate to an Assistant Today" width="400"></p>
                        <p></p>
                    </div>
                    <div class="col-lg-6">
                        <p></p>
                        <h2>25 Things You Can Delegate to Our Virtual Assistants Today</h2>
                        <p>Delegation is one of the most effective tools in a leader’s tool kit because it helps you
                            grow your business. We’re confident we can help your business become more productive. Still
                            researching the benefits of hiring a virtual assistant or how this would improve your
                            workflows? To get started, here’s a list of commonly delegated tasks that you can hand over
                            today!</p>
                        <p>&nbsp;</p>
                        <p><a class="btn"
                              href="https://resources.belaysolutions.com/25-things-you-can-delegate-to-an-assistant-today"
                              target="_blank" rel="noopener">DOWNLOAD</a></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>


        <section id="learnmore" class="three-up-boxed-steps" style="background-color: ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>How It Works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <svg id="a svg-hiw-1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 355.2 353.8">
                                <defs>
                                    <style>.c {
                                            fill: url(#b);
                                        }</style>
                                    <linearGradient id="b" x1="0" y1="620.9" x2="355.2" y2="620.9"
                                                    gradientTransform="translate(0 -444)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#12d678"></stop>
                                        <stop offset="1" stop-color="#377da1"></stop>
                                    </linearGradient>
                                </defs>
                                <path class="c"
                                      d="M346.6,226.4c-4.7,0-8.7-3.6-8.7-8.1,0-111.4-94.7-202.1-211.1-202.1-4.7,0-8.7-3.6-8.7-8.1S121.9,0,126.8,0c30.8,0,60.8,5.8,89,17.2,27.2,11,51.6,26.8,72.6,46.7,21,20.1,37.4,43.3,48.9,69.4,11.9,26.9,17.9,55.5,17.9,85,.1,4.4-3.9,8.1-8.6,8.1Zm-46.4-31.9c0-19.2-4-37.8-11.6-55.3-7.5-16.9-18.2-32.2-31.8-45.2-13.7-13.1-29.6-23.3-47.3-30.5-18.4-7.5-37.8-11.2-57.9-11.2-4.7,0-8.7,3.6-8.7,8.1s3.8,8.1,8.7,8.1c72.5,0,131.4,56.4,131.4,125.9,0,4.5,3.8,8.1,8.7,8.1,4.7,.1,8.5-3.5,8.5-8Zm-52.4-12.4c0-21.3-8.7-41.3-24.4-56.4-15.8-15.1-36.8-23.4-59.2-23.4-4.7,0-8.7,3.6-8.7,8.1s3.8,8.1,8.7,8.1c36.6,0,66.3,28.4,66.3,63.4,0,4.5,3.8,8.1,8.7,8.1,4.7,.2,8.6-3.4,8.6-7.9Zm2.6,171.7c68.7-1.9,85.2-51.6,85.8-53.5,2.8-8.4,1.6-19.6,.6-25.6l-.2-2.7c-2.7-17.7-17.6-23.3-21.7-24.5l-59.3-20.2c-16.6-6.3-29.8,1.1-37.4,11.2l-14.1,13.8c-3.3,3-5.4,2.4-6,2.1-68-36.2-92.9-86.7-97.2-96.4-.6-1.2-1.1-2.4-1.6-4.3,.3-1.2,1-2.5,2-3.6l18.6-18.6c11.7-9.7,9.8-25.7,6.9-33.5l-19.6-56.1c-5.3-16.6-15-21.3-20-22.9-3.7-1.4-10.4-2.3-19.9-2.8-4-.2-7.8,.1-11.5,1.2-2,.6-3.2,1.1-3.2,1.1h0C.6,39.3,0,98.5,0,101c0,37.3,20.9,75.3,21.7,76.5,41.9,83.8,119.5,133.5,134.7,142.7,1.1,.7,2.1,1.4,3.2,2,44.9,30.7,86.8,31.5,90.5,31.5,.2,.1,.3,.1,.3,.1ZM59.6,35.2l1.2-.5c1.7-.5,3.5-.7,5.3-.6,9.3,.6,13.8,1.5,14.9,1.8l1.7,.6s4.2,1.6,7.1,11l19.8,56.6c0,.1,3.3,9.5-1.4,13.2-.6,.5-1,.9-1.6,1.4l-18.3,18.3c-3.4,3.4-5.9,7.7-7,12.3-1.2,5.4-.6,10.6,2,14.8,.2,.3,.5,.8,.7,1.1,4.7,10.7,32.1,66,105,105,5.1,2.9,16.5,5.3,27.5-4.9l14.3-14c1-.9,1.8-1.9,2.6-3,2.1-2.9,7.1-7.3,15.7-4.1l59.5,20.3,1.6,.6c1.1,.3,6.9,2.5,8,10.4l.3,1.9c1.1,7.1,1.1,13.7,.1,17-.6,1.6-13.7,39.4-68.7,41,.1-.5-38.8,0-80.1-28.2-1.4-.9-2.7-1.8-4.1-2.6-14.3-8.7-88.2-56-128-135.6-.2-.3-19.5-35.4-19.5-68,.2-2.1,1-49.5,41.4-65.8Z"></path>
                            </svg>
                            <h3>Step 1. Sales Call</h3>
                            <p>Meet with your Solutions Consultant to identify your exact needs and pain points and
                                determine the right hire for you. If {{ env('APP_NAME') }} is a good fit, we’ll send you an agreement to
                                sign, and you’ll be paired with a Client Success Consultant.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <svg version="1.1" id="a svg-hiw-2" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 354.2 351.8"
                                 style="enable-background:new 0 0 354.2 351.8;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: none;
    }

    .st1 {
        fill: none;
        stroke: #BF0042;
        stroke-width: 3.09;
        stroke-miterlimit: 10;
    }

    .st2 {
        fill: url(#SVGID_1_);
        stroke: url(#SVGID_00000092417665054066584520000012471874632642572722_);
        stroke-width: 3.09;
        stroke-miterlimit: 10;
    }

    .st3 {
        fill: url(#SVGID_00000169518943977363039200000002145654358441011647_);
        stroke: url(#SVGID_00000078739581554423795810000010532224927892320163_);
        stroke-width: 3.09;
        stroke-miterlimit: 10;
    }

    .st4 {
        fill: url(#SVGID_00000047042129842369169550000015657456943881132962_);
        stroke: url(#SVGID_00000131332442214087941070000005898266598050591395_);
        stroke-width: 3.09;
        stroke-miterlimit: 10;
    }

    .st5 {
        fill: url(#SVGID_00000035513835999837891540000007706932849453741705_);
        stroke: url(#SVGID_00000178194554208085907740000011021578650130091652_);
        stroke-width: 3.09;
        stroke-miterlimit: 10;
    }

    .st6 {
        fill: url(#SVGID_00000080207671080669945490000002042943160698908572_);
        stroke: url(#SVGID_00000052791852928940999130000017157576543270246559_);
        stroke-width: 3.09;
        stroke-miterlimit: 10;
    }

    .st7 {
        fill: url(#SVGID_00000178912335822992874570000004498987968634316712_);
        stroke: url(#SVGID_00000013174085689413639830000013065129127930038975_);
        stroke-width: 9.44;
        stroke-miterlimit: 10;
    }
</style>
                                <path class="st0" d="M94.7,262.5h26.5c-9.2-1.1-18-3.2-26.5-6.2V262.5z"></path>
                                <path class="st0" d="M182.5,262.5v-8.3c-10.1,4.1-20.8,7-32.1,8.3H182.5z"></path>
                                <path class="st0"
                                      d="M191.3,262.5h22.1c0.9,0,1.8-0.8,1.8-1.8v-26.3c-7.3,6.1-15.3,11.5-23.9,15.8V262.5z"></path>
                                <path class="st0"
                                      d="M62,260.7c0,0.9,0.8,1.8,1.8,1.8h22.1v-9.7c-8.5-3.8-16.5-8.5-23.9-14V260.7z"></path>
                                <circle class="st1" cx="138.9" cy="92.2" r="31.5"></circle>
                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="51.74" y1="696.8279"
                                                x2="225.84" y2="696.8279" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <linearGradient id="SVGID_00000018219226719303972020000014756712997544573326_"
                                                gradientUnits="userSpaceOnUse" x1="50.195" y1="697.1481" x2="227.385"
                                                y2="697.1481" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <path
                                    style="fill:url(#SVGID_1_);stroke:url(#SVGID_00000018219226719303972020000014756712997544573326_);stroke-width:3.09;stroke-miterlimit:10;"
                                    d="
	M90.3,200.1c-2.4,0-4.4,2-4.4,4.4v48.3c2.9,1.3,5.8,2.4,8.8,3.5v-51.8C94.7,202.1,92.7,200.1,90.3,200.1z"></path>
                                <linearGradient id="SVGID_00000093893119755974458380000000625448946982777019_"
                                                gradientUnits="userSpaceOnUse" x1="51.74" y1="731.5441" x2="225.84"
                                                y2="731.5441" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <linearGradient id="SVGID_00000119801077327411598290000001757075991838086291_"
                                                gradientUnits="userSpaceOnUse" x1="50.195" y1="731.5441" x2="227.385"
                                                y2="731.5441" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <path
                                    style="fill:url(#SVGID_00000093893119755974458380000000625448946982777019_);stroke:url(#SVGID_00000119801077327411598290000001757075991838086291_);stroke-width:3.09;stroke-miterlimit:10;"
                                    d="
	M135.9,263.4c5,0,9.8-0.3,14.6-0.9h-29.3C126,263.1,130.9,263.4,135.9,263.4z"></path>
                                <linearGradient id="SVGID_00000145744470175008111550000015096214151804721341_"
                                                gradientUnits="userSpaceOnUse" x1="51.74" y1="560.91" x2="225.84"
                                                y2="560.91" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <linearGradient id="SVGID_00000180345062605019503770000017006654339845015992_"
                                                gradientUnits="userSpaceOnUse" x1="50.195" y1="560.91" x2="227.385"
                                                y2="560.91" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <path
                                    style="fill:url(#SVGID_00000145744470175008111550000015096214151804721341_);stroke:url(#SVGID_00000180345062605019503770000017006654339845015992_);stroke-width:3.09;stroke-miterlimit:10;"
                                    d="
	M138.9,134.4c23.2,0,42.1-18.9,42.1-42.1s-18.9-42.1-42.1-42.1S96.8,69.1,96.8,92.3S115.7,134.4,138.9,134.4z M138.9,60.7
	c17.4,0,31.5,14.2,31.5,31.5c0,17.3-14.2,31.5-31.5,31.5s-31.5-14.2-31.5-31.5C107.4,74.9,121.5,60.7,138.9,60.7z"></path>
                                <linearGradient id="SVGID_00000113315779442070920340000017775726967075595430_"
                                                gradientUnits="userSpaceOnUse" x1="51.74" y1="661.7277" x2="225.84"
                                                y2="661.7277" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <linearGradient id="SVGID_00000147929579800259605740000004708909365580677015_"
                                                gradientUnits="userSpaceOnUse" x1="50.195" y1="662.4986" x2="227.385"
                                                y2="662.4986" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <path
                                    style="fill:url(#SVGID_00000113315779442070920340000017775726967075595430_);stroke:url(#SVGID_00000147929579800259605740000004708909365580677015_);stroke-width:3.09;stroke-miterlimit:10;"
                                    d="
	M62,204.2c0.3-25.5,21-46.2,46.5-46.2H169c12.4,0,24,4.8,32.7,13.5c8.7,8.7,13.5,20.3,13.5,32.7v30.2c3.7-3.1,7.3-6.5,10.6-10.1
	v-20.1c0-15.2-5.9-29.5-16.6-40.2c-10.7-10.7-25-16.6-40.2-16.6h-60.5c-15.2,0-29.5,5.9-40.2,16.6c-10.7,10.7-16.6,25-16.6,40.2v26
	c3.3,3.1,6.7,5.9,10.3,8.6V204.2z"></path>
                                <linearGradient id="SVGID_00000164488706879452549660000018290087216300914818_"
                                                gradientUnits="userSpaceOnUse" x1="51.74" y1="695.7663" x2="225.84"
                                                y2="695.7663" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <linearGradient id="SVGID_00000062897952382272889890000000689289989352084373_"
                                                gradientUnits="userSpaceOnUse" x1="50.2051" y1="696.1449" x2="227.3951"
                                                y2="696.1449" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#FFFFFF"></stop>
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="1" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <path
                                    style="fill:url(#SVGID_00000164488706879452549660000018290087216300914818_);stroke:url(#SVGID_00000062897952382272889890000000689289989352084373_);stroke-width:3.09;stroke-miterlimit:10;"
                                    d="
	M186.9,200.1c-2.4,0-4.4,2-4.4,4.4v49.7c3-1.2,5.9-2.6,8.8-4v-45.7C191.3,202.1,189.3,200.1,186.9,200.1z"></path>
                                <linearGradient id="SVGID_00000014591690865931752330000003255259235160902801_"
                                                gradientUnits="userSpaceOnUse" x1="7.94" y1="644.51" x2="346.2433"
                                                y2="644.51" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="0.76" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <linearGradient id="SVGID_00000071524918286293341650000013523808650296694711_"
                                                gradientUnits="userSpaceOnUse" x1="3.22" y1="644.51" x2="350.9633"
                                                y2="644.51" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                    <stop offset="0" style="stop-color:#12D678"></stop>
                                    <stop offset="0.76" style="stop-color:#377DA1"></stop>
                                </linearGradient>
                                <path
                                    style="fill:url(#SVGID_00000014591690865931752330000003255259235160902801_);stroke:url(#SVGID_00000071524918286293341650000013523808650296694711_);stroke-width:9.44;stroke-miterlimit:10;"
                                    d="
	M340.2,310.2l-95.9-95.9c15.9-21.7,25.2-48.2,25.2-77c0-72.1-58.7-130.9-130.8-130.9S7.9,65.2,7.9,137.3s58.7,130.8,130.8,130.8
	c28.5,0,54.8-9.2,76.3-24.7l96,96c3.9,3.8,9.1,6,14.6,6s10.7-2.2,14.6-6c3.8-3.9,6-9.1,6-14.6C346.3,319.3,344.1,314.1,340.2,310.2
	L340.2,310.2z M18.3,137.3c0-66.4,54.1-120.5,120.4-120.5s120.4,54.1,120.4,120.5s-54,120.4-120.4,120.4
	C72.4,257.8,18.3,203.7,18.3,137.3L18.3,137.3z M332.9,332.1c-3.8,3.8-10.7,3.8-14.5,0l-93.6-93.7l14.4-14.4l93.7,93.6
	c1.9,2,3,4.6,3,7.3S334.7,330.1,332.9,332.1z"></path>
</svg>
                            <h3>Step 2. Discovery Call</h3>
                            <p>Meet with your Client Success Consultant to deep dive into your tasks, tools, culture,
                                and personality requirements to ensure we match you with the right {{ env('APP_NAME') }}
                                Professional.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <svg id="a svg-hiw-3" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 345.7 353.7">
                                <defs>
                                    <style>.c {
                                            fill: url(#b);
                                        }</style>
                                    <linearGradient id="b" x1="0" y1="167.15" x2="345.7" y2="167.15"
                                                    gradientTransform="translate(0 344) scale(1 -1)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fff"></stop>
                                        <stop offset="0" stop-color="#12d678"></stop>
                                        <stop offset="1" stop-color="#377da1"></stop>
                                    </linearGradient>
                                </defs>
                                <path class="c"
                                      d="M103,190c28.1,0,50.9-22.8,50.9-50.9s-22.8-50.9-50.9-50.9-50.9,22.8-50.9,50.9,22.8,50.9,50.9,50.9Zm0-85.2c18.9,0,34.3,15.4,34.3,34.3s-15.4,34.3-34.3,34.3-34.3-15.4-34.3-34.3,15.4-34.3,34.3-34.3Zm83.2,118.9c-12.8-12.8-29.9-19.9-48.1-19.9H68c-18.2,0-35.3,7.1-48.1,19.9C7.1,236.5,0,253.6,0,271.8v65.4c0,9.1,7.4,16.5,16.5,16.5H189.6c9.1,0,16.5-7.4,16.5-16.5v-65.4h0c0-18.1-7.1-35.2-19.9-48.1Zm-118.2-3.2h70.1c13.7,0,26.6,5.3,36.3,15s15,22.6,15,36.4v65.3h-23.7v-65.1c0-3.8-3.1-6.8-6.8-6.8s-6.8,3.1-6.8,6.8v65.1H53.9v-65.1c0-3.8-3.1-6.8-6.8-6.8s-6.8,3.1-6.8,6.8v65.1H16.8v-65.3c-.2-28.4,22.8-51.4,51.2-51.4ZM242.9,101.8c28.1,0,50.9-22.8,50.9-50.9S271,0,242.9,0s-50.9,22.8-50.9,50.9c0,28.1,22.8,50.9,50.9,50.9Zm0-85.2c18.9,0,34.3,15.4,34.3,34.3s-15.4,34.3-34.3,34.3-34.3-15.4-34.3-34.3,15.4-34.3,34.3-34.3Zm102.8,167.4h0v65.4c0,9.1-7.4,16.5-16.5,16.5h-108.7c-4.6,0-8.3-3.7-8.3-8.3s3.7-8.3,8.3-8.3h71.4v-64.9c0-3.8,3.1-6.8,6.8-6.8s6.8,3.1,6.8,6.8v64.9h23.5v-65.3c0-13.8-5.3-26.7-15-36.4s-22.6-15-36.3-15h-70.1c-12.1,0-23.8,4.2-32.8,11.7-1.6,1.3-3.4,1.9-5.3,1.9-2.4,0-4.8-1-6.4-3-2.9-3.5-2.5-8.8,1.1-11.7,12.1-10,27.5-15.5,43.5-15.5h70.1c18.2,0,35.3,7.1,48.1,19.9,12.8,12.8,19.8,29.9,19.8,48.1h0Z"></path>
                            </svg>
                            <h3>Step 3. Placement Process</h3>
                            <p>Now for our Secret Sauce: Your Client Success Consultant will vet and interview top
                                candidates from our bench of nearly 2,000 U.S.-based Professionals. They’ll select the
                                best match for you—in an average of just <em><strong>one week.</strong></em></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <svg id="a svg-hiw-4" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 291.2 353.9">
                                <defs>
                                    <style>.c {
                                            fill: url(#b);
                                        }</style>
                                    <linearGradient id="b" x1="0" y1="156.55" x2="291.2" y2="156.55"
                                                    gradientTransform="translate(0 333.5) scale(1 -1)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fff"></stop>
                                        <stop offset="0" stop-color="#12d678"></stop>
                                        <stop offset="1" stop-color="#377da1"></stop>
                                    </linearGradient>
                                </defs>
                                <path class="c"
                                      d="M271.6,0h-125c-10.9,0-19.7,8.8-19.7,19.7v11.5H24.9C11.2,31.2,0,42.4,0,56.1V329c0,13.7,11.2,24.9,24.9,24.9H188.1c13.8,0,24.9-11.2,24.9-24.9V115.2l5-3.1h53.5c10.9,0,19.7-8.8,19.7-19.7V19.7c.1-10.9-8.7-19.7-19.6-19.7Zm-78.2,329c0,2.9-2.4,5.3-5.3,5.3H24.9c-2.9,0-5.3-2.4-5.3-5.3V56.2c0-2.9,2.4-5.3,5.3-5.3H126.9v41.4c0,10.9,8.8,19.7,19.7,19.7h10v19.1c0,3.8,2.1,7.4,5.4,9.3l1.2,.6c2.2,.9,4.6,1,6.8,.4,.5-.1,.9-.3,1.4-.5s.9-.4,1.3-.7l20.5-12.7v201.5h.2ZM271.6,19.7V92.4h-56.3c-1.8,0-3.6,.5-5.2,1.5l-33.7,20.9v-12.6c0-5.4-4.4-9.8-9.8-9.8h-19.9V19.7h124.9Zm-115.1,178.3c-7.8-7.8-18.3-12.1-29.3-12.1h-41.3c-11.1,0-21.5,4.3-29.3,12.1s-12.1,18.2-12.1,29.3v38.6c0,6.1,5,11.1,11.1,11.1h102c6.1,0,11.1-5,11.1-11.1v-38.6c-.1-11.1-4.4-21.5-12.2-29.3Zm-.4,66.5h-11v-37c0-3.1-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6v37h-54.6v-37c0-3.1-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6v37h-11v-37.2c0-16,13-28.9,28.9-28.9h41.3c7.7,0,15,3,20.5,8.5s8.5,12.7,8.5,20.5v37.1h-.2ZM106.6,119.4c-17.3,0-31.4,14.1-31.4,31.4s14.1,31.4,31.4,31.4,31.4-14.1,31.4-31.4-14.1-31.4-31.4-31.4Zm0,50.3c-10.4,0-18.9-8.5-18.9-18.9s8.5-18.9,18.9-18.9,18.9,8.5,18.9,18.9c0,10.5-8.5,18.9-18.9,18.9Zm26.8,142.4h-53.8c-4,0-7.2-3.2-7.2-7.2s3.2-7.2,7.2-7.2h53.8c4,0,7.2,3.2,7.2,7.2s-3.2,7.2-7.2,7.2Zm30.8-170.8l-.9-.3,.9,.3Zm.5,.1c-.2,0-.3-.1-.5-.1,.2,0,.3,.1,.5,.1Zm4.2,.2c.4-.1,.8-.1,1.3-.3-.5,.2-.9,.2-1.3,.3Zm-3.3,0c-.2,0-.3-.1-.5-.1,.2,.1,.3,.1,.5,.1Zm3,.1h.3c-.1-.1-.2-.1-.3,0Zm-3.5-.2c-.1,0-.3-.1-.4-.1,.1,.1,.3,.1,.4,.1Zm2.2,.3h-.4c.1-.1,.2,0,.4,0Zm1.3-.1c-.4,.1-.8,.1-1.2,.1,.4-.1,.8-.1,1.2-.1Zm-1.7,0h0Zm-.4,0h0Zm-.5,0c-.1,0-.3,0-.4-.1,.1,0,.3,.1,.4,.1Z"></path>
                            </svg>
                            <h3>Step 4. Kickoff Call</h3>
                            <p>You, your Client Success Consultant, and your new teammate will have a kickoff call—the
                                official start to your partnership—to meet each other, set initial goals, discuss
                                communication plans, and set yourselves up for success.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <svg id="a svg-hiw-5" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 414 243.63">
                                <defs>
                                    <style>.d {
                                            fill: url(#b);
                                            stroke: url(#c);
                                            stroke-miterlimit: 10;
                                            stroke-width: 5.7px;
                                        }</style>
                                    <linearGradient id="b" x1="5.49" y1="190.55" x2="408.51" y2="190.55"
                                                    gradientTransform="translate(0 312.37) scale(1 -1)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fff"></stop>
                                        <stop offset="0" stop-color="#12d678"></stop>
                                        <stop offset="1" stop-color="#377da1"></stop>
                                    </linearGradient>
                                    <linearGradient id="c" x1="2.64" y1="190.55" x2="411.36" y2="190.55"
                                                    gradientTransform="translate(0 312.37) scale(1 -1)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fff"></stop>
                                        <stop offset="0" stop-color="#12d678"></stop>
                                        <stop offset="1" stop-color="#377da1"></stop>
                                    </linearGradient>
                                </defs>
                                <path class="d"
                                      d="M107.85,45.69l-.2,.8h0c0-.3,.1-.5,.2-.8Zm184.5,12.3c-.2-.5-.4-.9-.7-1.3l3.3,7.5-2.6-6.2Zm115,85.5c-1.6,4.2-4.9,7.7-9.3,9.7l-48.4,21.2c-4.4,1.9-9.2,1.9-13.4,.3-4.1-1.6-7.6-4.7-9.5-8.9-.9,.6-1.9,1.2-2.8,1.9-2.5,1.7-4.7,3.3-6.8,4.8,.3,.6,.6,1.1,.8,1.6,1.7,4.1,2.2,8.6,1.4,12.9-.8,4.2-2.8,8.1-6.1,11.2-3.2,3-7.5,5.2-12.9,5.8-3.2,.4-6.9,.2-10.9-.8,.1,3.5-.3,6.5-1.4,9.1-1.6,4.2-4.5,7.1-8,9-3.2,1.7-6.9,2.5-10.7,2.5-2.4,0-4.7-.3-7-.9-6.2,25.6-30.3,14-34.3,11.8-.6-.3-1.2-.7-1.8-1.2h0l-4.2-4.1h0c-6.4,2-13.2,3.9-19.7,4.6-8.5,1-16.4,.2-22.4-4.2-10.8-8-69.9-57.5-89.6-74-1.5,3.8-4.2,6.8-7.6,8.8-2.6,1.5-5.7,2.4-8.8,2.4-1.5,0-3-.2-4.5-.6l-51-13.7c-4.6-1.2-8.4-4.3-10.6-8.2h0c-2.2-3.9-3-8.6-1.8-13.3L36.55,17.39c1.2-4.7,4.3-8.4,8.2-10.6h0c3.9-2.3,8.6-3,13.3-1.8l51,13.7c4.7,1.2,8.4,4.3,10.6,8.2h0c2,3.4,2.8,7.6,2.1,11.7l.5-.2h0c.9-.3,1.9-.5,2.8-.3,32.5,1.2,49.2-.5,61.6-1.7,22.7-2.3,32-3.2,91.2,14.9-.1-2.4,.3-4.9,1.2-7.1,1.6-4.2,4.9-7.7,9.3-9.7l48.3-21.4c4.4-1.9,9.2-1.9,13.4-.3,4.2,1.6,7.7,4.9,9.7,9.3l47.3,108c1.9,4.4,1.9,9.3,.3,13.4ZM107.35,47.69l.3-1.1,.2-.8h0l2.4-8.7c.4-1.6,.1-3.2-.6-4.4-.8-1.3-2-2.3-3.6-2.7l-51-13.7c-1.6-.4-3.1-.2-4.4,.6h0c-1.3,.7-2.3,2-2.7,3.5l-30.6,113.7c-.4,1.6-.2,3.2,.6,4.4,.8,1.3,2,2.3,3.6,2.7l51,13.7c1.6,.4,3.2,.2,4.4-.6h0c1.3-.7,2.3-2,2.7-3.5l27.7-103.1Zm199.7,130.8c-4.5-10.4-44.1-51.1-48.1-55.2-.3-.2-.5-.5-.7-.8-33.1-41.8-51.3-28.4-67-16.8-11.1,8.2-21.3,15.7-34.6,10.2-.2-.1-.4-.1-.6-.2h0c-26-12.2-8.4-49.5,.9-65.8-8.6,.2-19,.2-31.7-.2l-7.2,2.8-23.8,91.5c14.6,12.3,81.3,68.2,92.5,76.4,3.3,2.4,8.4,2.7,14.2,2,3.7-.5,7.6-1.3,11.4-2.4l-16.1-15.7c-2.3-2.3-2.3-6-.1-8.2s6-2.4,8.2-.1l22.6,21.9,1.4,1.3,5.5,5.4c2.9,1.5,15,6.7,17.6-7.6l-42.2-39c-2.4-2.2-2.5-5.9-.3-8.2,2.2-2.4,5.9-2.5,8.2-.3l43,39.6c1.9,1.8,5.5,3,9.1,3,1.9,0,3.7-.3,5.1-1.1,1.2-.6,2.1-1.6,2.6-3,.9-2.3,.9-5.7-.6-10.5l-45.2-45.2c-2.3-2.3-2.3-6,0-8.3s6-2.3,8.3,0l45.5,45.5c5.6,2.5,10.2,3.3,13.8,2.8,2.6-.3,4.7-1.3,6.1-2.6,1.4-1.4,2.3-3.1,2.6-4.9,.6-2.3,.4-4.4-.4-6.3Zm14-23.1l-37.9-89.1-.7-1.7c-64.3-20-72.7-19.2-94.7-16.9-4.7,.5-10.1,1-16.7,1.4h0c-3.7,5.7-29.6,46.5-10.2,55.9h.1c.1,0,.1,.1,.2,.1,7.2,2.9,14.8-2.7,23.1-8.8,19.9-14.7,42.9-31.6,82.9,18.7,2.7,2.7,29.5,30.2,43.1,47.7,2.5-1.8,4.8-3.4,6.9-4.9,1.4-.7,2.7-1.5,3.9-2.4Zm75.3-20.6l-47.3-108c-.7-1.5-1.8-2.5-3.3-3.1-1.4-.6-3-.6-4.5,.1l-48.3,21.2c-1.5,.7-2.5,1.8-3.1,3.3-.6,1.4-.6,3,.1,4.5l1.7,4,3.3,7.5,.2,.5,42.1,96.1c.7,1.5,1.8,2.5,3.3,3.1,1.4,.6,3,.6,4.5-.1l48.4-21.2c1.5-.6,2.5-1.8,3.1-3.2,.4-1.6,.4-3.2-.2-4.7ZM54.85,98.59c-4.5,0-8.6,1.8-11.5,4.8-2.9,2.9-4.8,7-4.8,11.5s1.8,8.6,4.8,11.5c2.9,2.9,7,4.8,11.5,4.8s8.6-1.8,11.5-4.8c2.9-2.9,4.8-7,4.8-11.5s-1.8-8.6-4.8-11.5c-3-3-7.1-4.8-11.5-4.8h0Zm4.5,16.3c0,1.3-.5,2.4-1.3,3.2s-2,1.3-3.2,1.3c-1.3,0-2.4-.5-3.2-1.3-.8-.8-1.3-2-1.3-3.2,0-1.3,.5-2.4,1.3-3.2s2-1.3,3.2-1.3c1.3,0,2.4,.5,3.2,1.3,.8,.8,1.3,1.9,1.3,3.2Zm295.4,3.1c1.3-.2,2.5,.1,3.4,.8s1.6,1.7,1.8,3c.2,1.3-.1,2.5-.8,3.4-.7,.9-1.7,1.6-3,1.8s-2.5-.1-3.4-.8-1.6-1.7-1.8-3c-.2-1.3,.1-2.5,.8-3.4,.7-.9,1.8-1.6,3-1.8h0Zm-15.4,7c.7,4.4,3.1,8.2,6.5,10.7s7.6,3.7,12.1,3c4.4-.7,8.2-3.1,10.7-6.5s3.7-7.6,3-12.1c-.7-4.4-3.1-8.2-6.5-10.7s-7.6-3.7-12.1-3c-4.4,.7-8.2,3.1-10.7,6.5-2.5,3.3-3.7,7.6-3,12.1Z"></path>
                            </svg>
                            <h3>Step 5. Onboarding</h3>
                            <p>Your Client Success Consultant stays close to provide our signature exceptional service
                                and guide you through our proven onboarding process</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <svg id="a svg-hiw-6" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 339.4 342.5">
                                <defs>
                                    <style>.d {
                                            fill: url(#b);
                                            stroke: url(#c);
                                            stroke-miterlimit: 10;
                                            stroke-width: 7.5px;
                                        }</style>
                                    <linearGradient id="b" x1="21.2" y1="142.35" x2="318.3" y2="142.35"
                                                    gradientTransform="translate(0 322.1) scale(1 -1)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#12d678"></stop>
                                        <stop offset=".76" stop-color="#377da1"></stop>
                                    </linearGradient>
                                    <linearGradient id="c" x1="2.46" y1="149.36" x2="336.77" y2="149.36"
                                                    gradientTransform="translate(0 322.1) scale(1 -1)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#12d678"></stop>
                                        <stop offset=".76" stop-color="#377da1"></stop>
                                    </linearGradient>
                                </defs>
                                <path class="d"
                                      d="M278.7,114.4c-2.4,.6-4.8-.9-5.4-3.4-11.2-47.5-53.1-80.6-101.8-80.6S80.8,63.5,69.7,111c-.5,2.1-2.4,3.5-4.4,3.5-.4,0-.7-.1-1.1-.1-2.4-.6-4-3-3.4-5.4,5.8-24.6,19.8-46.8,39.6-62.7,20-16.1,45.3-24.9,71.1-24.9s51,8.9,71,24.9c19.8,15.8,33.8,38.1,39.6,62.7,.6,2.4-.9,4.8-3.4,5.4ZM80,198.8c-2.8-7.1-5.7-14.4-7.8-21.9-3.5-12.3-5.3-26.4-5.3-41.8,0-2.5-2-4.5-4.5-4.5s-4.5,2-4.5,4.5c0,16.3,1.9,31.2,5.7,44.4,2.2,7.8,5.3,15.4,8.1,22.7,4.1,10.4,8.1,20.3,10,31.1,3.2,17.9,5.8,34.1,4.6,51.1-.7,9.1-3,16.4-6.7,21.5-1.5,2-1.1,4.8,.9,6.3,.8,.6,1.7,.9,2.7,.9,1.4,0,2.7-.6,3.7-1.9,4.8-6.5,7.6-15.3,8.4-26.1,1.4-18.1-1.4-35.6-4.7-53.4-2.1-11.8-6.4-22.5-10.6-32.9Zm67.8-71.4c1.2,.8,1.9,2.2,1.9,3.7s-.7,2.9-1.9,3.7l-19.5,13.6c-.7,.5-1.7,.8-2.6,.8-.7,0-1.4-.1-2.1-.5-1.4-.8-2.4-2.3-2.4-4v-9.4c-25.6-2-89.3-9.3-89.3-30.7,0-8,8.1-14.5,25-19.9,2.4-.8,4.9,.6,5.7,3,.7,2.4-.6,4.9-3,5.7-14.8,4.8-18.7,9.3-18.7,11.2,0,2.1,4.7,7.1,22,12.2,14.6,4.3,35.2,7.6,58.3,9.4v-8.7c0-1.7,.9-3.2,2.4-4s3.3-.6,4.7,.4l19.5,13.5Zm-10.5,3.6l-7.1-4.9v9.9l7.1-5Zm145.2,78.3c.4,0,.6,0,.9-.1,19.4-4.1,28.4-9,29.5-16,.6-4.7-2.7-8.4-6-10.3l-21.8-16.6v-31.3c0-2.5-2.1-4.5-4.5-4.5s-4.5,2-4.5,4.5v33.6c0,1.4,.6,2.7,1.8,3.6l23.8,18.1c.2,.1,.4,.3,.6,.4,.4,.2,1.2,.9,1.5,1.4-.6,.8-4.1,4.4-21.7,8.2h-2c-1.4,0-2.6,.6-3.5,1.5-7.2,8.4-3.7,16.1-.9,22.3,.9,1.9,1.7,3.8,2.3,5.7,.4,1,.7,1.9,1,2.8s.7,1.9,.9,2.7c-.1,0-.2,.1-.4,.1-12.4,3.5-19.5,3.1-31.2,2-2.5-.2-4.7,1.6-5,4.1-.2,2.4,1.7,4.7,4.1,4.9,5,.5,9.3,.8,13.5,.8,3.6,0,7.2-.2,11.1-.9,1.2-1.5,3.4-2.1,5.3-1.3q.1,.1,.3,.2c1.4-.4,2.8-.7,4.3-1.2,3-.9,5.1-2.4,6.2-4.5,1.7-3.4,.4-6.9-.6-10-.3-.8-.6-1.7-.8-2.4-.8-2.4-1.8-4.7-2.7-6.8-2.5-5.5-3.5-8.1-1.7-11.1h.2v.1Zm-4.8,36c-.1-.1-.2-.1-.3-.2-1.9-.8-4.1-.2-5.3,1.3-.3,.3-.5,.6-.6,1-2.8,6.4-4.5,13-6.2,19.4-1.7,6.3-3.2,12.2-5.7,17.9-4,9.2-15.8,8.5-30.8,6.6-2.5-.4-5-.6-7.1-.8-18-1.5-80.9-22.7-94-47.3-3.1-5.9-3.1-11.5,.1-17.1,1.2-2.2,.5-4.9-1.7-6.2-2.2-1.2-4.9-.4-6.1,1.7-4.7,8.3-4.8,17.2-.2,25.9,8.6,16.1,31.8,28.8,49.8,36.6,9.1,4,18.4,7.3,26.7,9.9v39.6c0,2.5,2,4.5,4.5,4.5s4.5-2,4.5-4.5v-37.1c6.6,1.7,12,2.7,15.6,3.1,2,.1,4.3,.4,6.8,.8,4.5,.6,9.9,1.2,15.1,1.2,10.2,0,20.4-2.5,25.1-13.1,2.8-6.3,4.5-12.9,6.1-19.2,1.7-6.3,3.2-12.3,5.8-18.1,.9-2.3-.1-4.8-2.1-5.9Zm8.6-159.4c-2.4-.9-5,.4-5.8,2.7-.9,2.4,.4,5,2.7,5.8,12.9,4.5,16.3,8.6,16.3,10.4,0,4.1-15.3,14.2-62,19.9v-8.6c0-1.7-.9-3.2-2.4-4s-3.3-.6-4.7,.3l-19.4,13.7c-1.2,.8-1.9,2.2-1.9,3.7s.7,2.9,1.9,3.7l19.5,13.7c.7,.5,1.7,.8,2.6,.8,.7,0,1.4-.1,2.1-.5,1.4-.8,2.4-2.3,2.4-4v-9.6c28.3-3.3,71-11.3,71-29,0-7.5-7.3-13.8-22.3-19Zm7.8-40.2l-3.6,15.7-2.5-15.9-15-3.7,15.2-2.7,3.6-15.7,2.5,15.9,15,3.7-15.2,2.7Zm14.2,30.2l-2.4,10.3-1.6-10.4-9.8-2.4,10-1.7,2.4-10.3,1.6,10.4,9.8,2.4-10,1.7ZM45.2,263.1l-4.1,17-2.9-17.3-17-4.1,17.3-2.9,4.1-17,2.9,17.3,17,4.1-17.3,2.9Zm16.2,32.9l-2.7,11.1-1.9-11.3-11.1-2.7,11.3-1.9,2.7-11.1,1.9,11.3,11.1,2.7-11.3,1.9Z"></path>
                            </svg>
                            <h3>Step 6. Nurturing</h3>
                            <p>You will have ongoing check-ins to support both you and your {{ env('APP_NAME') }} Professional
                                throughout your partnership with {{ env('APP_NAME') }}.</p>
                        </div>
                    </div>

                </div>
                <div class="row call-to-action-row u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <a class="btn" href="../../get-started/index.html"><span>Hire {{ env('APP_NAME') }}</span></a>
                    </div>
                </div>
            </div>
        </section>


        <section id="Hire {{ env('APP_NAME') }} Steps Section Title" class="talk-to-sales-steps" style="background-color:#d7eafd;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 left-column">
                        <h2 class="text-left"></h2>
                        <h2 style="text-align: left;">The {{ env('APP_NAME') }} Difference</h2>
                        <a class="btn u-fade-type-down js-scroll-trigger" href="../../get-started/index.html"><span>Hire {{ env('APP_NAME') }}</span></a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8 right-column layout-2">
                        <div class="boxed-column boxed-hover-on">
                            <div class="boxed-column-inner gradient-icon-parent layout-center">
                                <svg id="a" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 441.04 291.37">
                                    <defs>
                                        <style>.c {
                                                fill: url(#b);
                                            }</style>
                                        <linearGradient id="b" x1="0" y1="145.68" x2="441.04" y2="145.68"
                                                        gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#12d678"></stop>
                                            <stop offset="1" stop-color="#377da1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path class="c"
                                          d="M212.56,291.37c-1.5,0-3.07-.15-4.71-.45-10.11-1.86-22.52-9.56-25.87-22.09-3.96-14.81-7.54-19.48-8.87-20.79-4.85,2.53-14.23,4.62-25.77-6.55-4.69-4.54-9.49-10.97-14.27-19.09-1.46-2.47-2.26-3.17-2.46-3.32-1.2-.22-5.27,.72-8.56,1.48-1.4,.32-2.91,.67-4.55,1.03-17.19,3.73-50.04-3.59-60.2-21.36-2.62-4.58-3.85-4.3-8.42-3.26-1.84,.42-3.74,.85-5.85,.85-7.38,0-11.71-6.71-17.2-15.21-3.58-5.54-8.03-12.43-12.24-15.66C3.44,159.16,.86,136.67,.22,123.96c-1.04-20.83,1.63-40.95,7.34-55.21,3.67-9.18,5.42-18.66,7.1-27.82C17.98,22.9,21.4,4.27,41.23,.18c1.19-.25,2.42-.25,3.62,0,1.17,.24,117.36,23.84,186.37,25.06,20.74,.37,25.55,2.05,30.33,7.25,.42,.45,.44,.47,.52,.52,.37,.24,3.99,2.32,19.46,2.32,12.11,0,27.71,3.84,35.16,14.6,2.6,3.76,14.15,10.48,23.36,14.56,4.07,1.8,6.22,6.31,5.05,10.6l-4.3,15.77c2.04-1.48,3.97-3.21,5.4-5.16,.77-1.05,1.51-2.08,2.23-3.08,6.24-8.68,12.69-17.65,24.1-17.02,4.36-1.38,16.22-12.86,21.6-20.26,.67-.93,1.67-2.42,2.82-4.15,10.1-15.15,18.03-25.82,27.98-24.97,4.62,.39,8.47,3.32,10.57,8.04,4.73,10.63,10.73,40.58-2.46,51.58-1.81,1.51-3.69,2.89-5.51,4.23-5.82,4.29-9.36,7.13-9.36,10.3,0,11.55-1.13,17.65-8.14,25.54-1.67,1.95-3.29,10.88-3.41,16.54l.02,19.48c1.54,24.42-9.97,32.87-16.97,35.74-9.26,3.79-19.22,11.36-16.81,20.22l.7,2.54c2.09,7.61,6.45,23.44,9.5,37.63,5.34,24.83,4.73,33.65-2.6,37.74-2.91,1.62-8.85,3.2-15.94-4.44-5.59-6.03-10.95-13.7-16.12-21.11-5.16-7.4-10.5-15.05-15.36-19.89-3.8-3.79-6.22-4.78-7.13-4.49-3.83,1.22-7.34,2.67-10.73,4.07-10.26,4.23-21.88,9.02-32.57-.13-5.42-4.64-17.53-4.01-23.58,1.23-.22,.19-19.78,16.99-34.37,15.89-1.25,3.14-2.25,9.17,.4,13.98,4.17,7.57,1.32,12.96-.1,14.92-2.61,3.62-7,5.54-12.4,5.54Zm-3.16-11.57h0Zm-36.04-50.07c2.12,0,4.22,.42,6.23,1.27,8.38,3.53,14.66,14.07,19.77,33.17,.88,3.28,3.87,5.75,6.88,7.3-2.45-10.84,.6-22.58,6.24-28.66,4.57-4.92,9.96-5.26,13.78-3.85,3.06-.18,12.76-4.43,20.97-11.54,12.87-11.16,34.87-11.76,47.08-1.29,1.92,1.64,4.27,1.17,13.99-2.84,3.55-1.47,7.58-3.13,12.11-4.58,17.13-5.47,30.15,13.18,42.74,31.23,.9,1.29,1.81,2.59,2.71,3.88-1.84-8.71-4.85-21.08-9.68-38.63l-.71-2.58c-4.53-16.63,6.2-32.96,27.36-41.61,5.9-2.41,6.18-12.28,5.82-17.94-.04-.63-.06-1.09-.06-1.33v-19.37c0-.19,.09-19.56,7.95-28.41,2.91-3.27,3.59-4.39,3.59-13.58,0-12.5,9.64-19.61,16.68-24.79,1.65-1.21,3.21-2.36,4.59-3.51,2.06-2.54,2.3-14.02-.18-23.92-3.51,4.28-7.61,10.43-9.33,13.02-1.26,1.9-2.36,3.53-3.25,4.76-.2,.28-20.57,27.69-36.01,27.69-.35,0-.7-.01-1.04-.04-1.67-.15-5.66,5.46-8.6,9.55-.75,1.04-1.52,2.11-2.32,3.21-8.39,11.44-22.97,16.55-24.6,17.1-2.42,.81-5.06,.55-7.28-.71-2.22-1.26-3.8-3.39-4.35-5.88l-2.52-11.36c-.32-1.43-.28-2.91,.1-4.32l3.7-13.57c-7.71-3.93-19.1-10.54-23.87-17.43-3.11-4.49-12.6-6.85-20.36-6.85-14.72,0-23.75-1.62-29.31-5.25-1.98-1.29-3.19-2.61-3.92-3.4-.03-.03-.06-.06-.08-.09-1.1-.36-4.88-1.13-17.32-1.35-66.35-1.17-171.04-21.68-187.58-25-5.69,1.99-7.7,8.29-10.95,25.95-1.76,9.56-3.75,20.4-8.09,31.25-4.59,11.47-6.88,28.88-6.12,46.57,.81,19.01,4.75,28.99,6.45,30.69,6.68,5.13,12.05,13.46,16.37,20.15,1.36,2.1,3.06,4.75,4.35,6.47,5.85-1.32,18.61-3.8,27.62,11.97,4.33,7.57,26.94,15.71,40.75,12.71,1.56-.34,3-.67,4.33-.98,11.11-2.56,21.61-4.98,30.57,10.26,8.69,14.76,14.67,18.53,16.29,18.76,2.74-1.52,5.63-2.29,8.48-2.29Zm46.22,25.93h0Zm-47.02-8.09h0ZM24.62,152.71h0Zm-.09-.07h0Zm382.08-.91h0Zm-33.49-86.09h0Zm48.28-3.52h0ZM170.94,190.63c-.94,0-1.63-.16-2.3-.31-2.53-.58-4.66-2.1-6-4.28-1.82-2.96-3.4-5.54,4.39-40.52-2.9-2.38-6.88-5.69-10.83-9.17-13.8-12.15-19.07-18.4-15.98-25.66,2.56-6.03,8.83-8.27,27.91-9.99,5.08-.46,10.05-.76,13.71-.95,1.45-3.43,3.45-8.11,5.59-12.83,8.22-18.23,11.41-23.17,18.16-23.17,6.2,0,8.97,5.29,11.66,10.41,1.62,3.1,3.69,7.36,6.16,12.69,2.19,4.74,4.33,9.52,5.85,12.97,36.63,2.2,39.13,6.41,41.16,9.82,4,6.72-1.69,12.66-5.08,16.2-2.45,2.56-5.93,5.88-10.33,9.89-3.98,3.62-7.97,7.11-10.84,9.59,.86,3.67,2.02,8.8,3.1,14.03,1.2,5.8,2.06,10.53,2.54,14.04,.67,4.92,1.69,12.34-4.55,15.82-5.21,2.9-10.12,1.36-27.64-8.7-4.48-2.57-8.82-5.18-11.97-7.1-23.68,14.81-31.05,17.25-34.71,17.25Zm-6.88-71.43c5.17,4.77,12.23,10.75,18.57,15.77,2.72,2.15,3.96,5.68,3.19,9.06-1.74,7.61-3.53,16.14-4.83,23.04,6-3.39,13.34-7.81,19.77-11.9,2.93-1.87,6.67-1.88,9.62-.03,6.54,4.1,14.01,8.54,20.08,11.92-1.34-6.84-3.22-15.35-5.07-22.89-.81-3.32,.32-6.8,2.93-9.01,6.03-5.1,12.68-10.99,17.83-15.78-6.88-.82-15.63-1.53-23.37-1.92-3.42-.17-6.45-2.27-7.81-5.42-3.06-7.07-6.57-14.89-9.55-21.19-2.9,6.24-6.27,14.02-9.14,21.03-1.34,3.29-4.49,5.48-8.04,5.59-8.04,.26-17.23,.91-24.19,1.73Zm23.89-10.72h0Z"></path>
                                </svg>
                                <h3>U.S.-Based Professionals</h3>
                                <p>Our Professionals are all based in the U.S. with vetted and proven experience.</p>
                            </div>
                        </div>
                        <div class="boxed-column boxed-hover-on">
                            <div class="boxed-column-inner gradient-icon-parent layout-center">
                                <svg id="a" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 402.76 264.76">
                                    <defs>
                                        <style>.c {
                                                fill: url(#b);
                                            }</style>
                                        <linearGradient id="b" x1="0" y1="132.38" x2="402.76" y2="132.38"
                                                        gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#12d678"></stop>
                                            <stop offset="1" stop-color="#377da1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path class="c"
                                          d="M401.23,209.93c-1.95-3.17-5.28-5-9.01-5h-20.02V21.02c0-11.57-9.45-21.02-21.02-21.02H52c-11.62,0-21.02,9.45-21.02,21.02V204.92H10.51c-3.5,0-6.73,1.67-8.68,4.56-1.95,2.84-2.39,6.51-1.11,9.73l9.68,25.02c4.73,12.29,16.74,20.52,29.92,20.52H359.02c12.12,0,23.02-6.67,28.58-17.41l13.96-27.14c1.72-3.28,1.56-7.12-.33-10.29ZM47.66,21.02c0-2.39,1.95-4.34,4.34-4.34H351.18c2.39,0,4.34,1.95,4.34,4.34V204.92H47.66V21.02ZM372.75,239.73c-2.67,5.12-7.9,8.34-13.74,8.34H40.32c-6.34,0-12.12-3.95-14.4-9.9l-6.4-16.57H382.1l-9.34,18.13ZM69.62,40.48V184.63H333.55V40.48H69.62Zm11.12,11.12h241.68v16.68H80.75v-16.68Zm241.68,121.9H80.75V79.41h241.68v94.09Z"></path>
                                </svg>
                                <h3>No Overhead Costs</h3>
                                <p>Keep costs low by hiring someone remotely and skipping the overhead.</p>
                            </div>
                        </div>
                        <div class="boxed-column boxed-hover-on">
                            <div class="boxed-column-inner gradient-icon-parent layout-center">
                                <svg id="a" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 381.23 336.19">
                                    <defs>
                                        <style>.d {
                                                fill: url(#b);
                                                stroke: url(#c);
                                                stroke-miterlimit: 10;
                                                stroke-width: 5.32px;
                                            }</style>
                                        <linearGradient id="b" x1="3.82" y1="168.1" x2="377.41" y2="168.1"
                                                        gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#12d678"></stop>
                                            <stop offset="1" stop-color="#377da1"></stop>
                                        </linearGradient>
                                        <linearGradient id="c" x1="1.16" x2="380.07" xlink:href="#b"></linearGradient>
                                    </defs>
                                    <path class="d"
                                          d="M376.86,127.04c-.69-1.45-1.94-2.55-3.47-3.04l-82.61-26.33s-.02,0-.03,0c-.3-.09-.61-.16-.93-.2-.09-.01-.19-.02-.28-.03-.24-.02-.47-.03-.71-.02-.09,0-.18,0-.26,0-.03,0-.05,0-.08,0l-35.73,3.31c3.99-10.64,5.97-19.37,5.97-26.3,0-38.55-31.36-69.91-69.91-69.91s-69.91,31.36-69.91,69.91c0,4.62,.88,10.04,2.65,16.29l-27.61-8.8c-2.84-.91-5.9,.49-7.07,3.23L4.29,277.49c-.63,1.47-.63,3.15,.02,4.62,.65,1.47,1.88,2.6,3.39,3.13l87.17,30.37s.03,0,.05,.01c.25,.09,.51,.15,.78,.2,.08,.02,.16,.03,.24,.04,.26,.04,.52,.06,.78,.07,.02,0,.04,0,.06,0,.06,0,.13-.01,.19-.01,.19,0,.38-.01,.57-.04h.1l108.2-14.44,85.87,29.91c.63,.22,1.27,.32,1.9,.32,2.31,0,4.48-1.39,5.38-3.65l78.02-196.37c.59-1.49,.54-3.16-.15-4.61Zm-246.38-52.6c0-32.22,26.12-58.34,58.34-58.34s58.34,26.12,58.34,58.34-58.34,115.84-58.34,115.84c0,0-58.34-83.62-58.34-115.84Zm128.02,85.17l-56.08,130.62-96.62,12.88,17.47-43.96,36.57-92.03c10.52,16.89,19.03,29.13,19.5,29.79l9.49,13.6,9.49-13.6c.61-.87,15.02-21.57,29.67-46.62,8.28-14.15,14.85-26.6,19.76-37.46l32.13-2.98-21.36,49.76Zm-108.84-9.32c.88,1.5,1.76,2.99,2.63,4.46l-58.85,148.11-76.07-26.5L95.43,94.54l30.86,9.84c5.1,12.7,12.86,27.93,23.37,45.9Zm64.54,141.82l78.06-181.81,71.7,22.85-73.69,185.46-76.07-26.5Zm-25.39-180.94c21.33,0,38.67-17.35,38.67-38.67s-17.35-38.67-38.67-38.67-38.67,17.35-38.67,38.67,17.35,38.67,38.67,38.67Zm0-65.78c14.97,0,27.1,12.14,27.1,27.1s-12.13,27.1-27.1,27.1-27.1-12.14-27.1-27.1,12.13-27.1,27.1-27.1Z"></path>
                                </svg>
                                <h3>Fully Managed Onboarding &amp; Support</h3>
                                <p>Our team guides you through every step of the process—as you onboard and beyond.</p>
                            </div>
                        </div>
                        <div class="boxed-column boxed-hover-on">
                            <div class="boxed-column-inner gradient-icon-parent layout-center">
                                <svg in="a" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 640 512">
                                    <defs>
                                        <style>.d {
                                                fill: url(#b);
                                                stroke: url(#c);
                                                stroke-miterlimit: 10;
                                                stroke-width: 8.26px;
                                            }</style>
                                        <linearGradient id="b" x1="8.1" y1="162.64" x2="347.1" y2="162.64"
                                                        gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#12d678"></stop>
                                            <stop offset=".76" stop-color="#377da1"></stop>
                                        </linearGradient>
                                        <linearGradient id="c" x1="3.97" y1="162.64" x2="351.23" y2="162.64"
                                                        xlink:href="#b"></linearGradient>
                                    </defs>
                                    <path class="d"
                                          d="M384 64c0 29.8-20.4 54.9-48 62V480H528c8.8 0 16 7.2 16 16s-7.2 16-16 16H320 112c-8.8 0-16-7.2-16-16s7.2-16 16-16H304V126c-27.6-7.1-48-32.2-48-62H112c-8.8 0-16-7.2-16-16s7.2-16 16-16H264.6C275.6 12.9 296.3 0 320 0s44.4 12.9 55.4 32H512c8.8 0 16 7.2 16 16s-7.2 16-16 16H384zm56.7 298.3C457.8 375.1 482.9 384 512 384s54.2-8.9 71.3-21.7C600.4 349.5 608 334.2 608 320H416v-1.6l0 .1V320c0 14.2 7.6 29.5 24.7 42.3zm71.3-215L426.3 288H597.7L512 147.3zM384 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96s-128-43-128-96zM32 320c0 14.2 7.6 29.5 24.7 42.3C73.8 375.1 98.9 384 128 384s54.2-8.9 71.3-21.7C216.4 349.5 224 334.2 224 320H32v-1.6l0 .1V320zm10.3-32H213.7L128 147.3 42.3 288zM128 416C57.3 416 0 373 0 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96zM320 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path>
                                </svg>
                                <h3>Flexible Service Plans</h3>
                                <p>Only pay for what you need. And if your needs change, so can your commitment.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="banner-simple-section-title" class="banner-simple" style="background-color: ">
            <div class="container">
                <div class="row d-flex flex-column justify-content-center u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-12">
                        <h2 class="text-center"></h2>
                        <h2 style="color: white; text-align: center;">Who can use our Virtual Assistant Services?</h2>
                    </div>
                </div>
                <div class="row middle-row u-fade-type-down js-scroll-trigger">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <p class="text-center"><span style="color: white;">Executives<br>Small Businesses<br>Church Leaders</span>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <p class="text-center"><span
                                style="color: white;">Sales Teams<br>Attorneys<br>Consultants</span></p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <p class="text-center"><span
                                style="color: white;">Entrepreneurs<br>Photographers<br>Authors</span></p>
                    </div>
                </div>
                <div class="row d-flex flex-column justify-content-center u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-12">
                        <h4 class="text-center"><span style="color: white;">And you, probably!</span></h4>
                    </div>
                </div>
            </div>
        </section>


        <section id="quotes-header" class="code-content u-fade-type-down js-scroll-trigger" style="background-color: ;">
            <div class="container code-inner-content">
                <div class="row">
                    <div class="col-lg-12" style="padding: 5em 0;">
                        <h3 style="width: 60%; text-align: center; margin: auto; padding-top: 100px; margin-bottom: -100px;">
                            Learn How {{ env('APP_NAME') }} Clients Leverage Their Virtual Assistants to Accomplish More</h3>
                    </div>
                </div>
            </div>
        </section>


        <style>
            .testimonial-icon {
                color: #12d678;
            }

            #fancy-testimonial-slider .testimonials-flexslider {
                background-image: none;
            }

            .slides, .slides > li, .flex-control-nav, .flex-direction-nav {
                color: #03293d;
            }

            .fancy-testimonial-button {
                background-color: #03293d;
                color: white;
                text-transform: uppercase;
                margin-top: 1em;
            }

            .testimonial-icon {
                max-width: 150px;
            }

            .testimonials-boxed .testimonials-flexslider .testimonial-slide p {
                font-family: 'Source Sans Pro';
                font-size: 18px !important;
                text-transform: none;
            }

            .testimonial-photo {
                margin-top: auto;
                margin-bottom: auto;
                height: 150px;
                width: 150px;
                object-fit: cover;
                position: center center;
                border-radius: 100%;
                border: solid 2px white;
            }

            .testimonial-name, .testimonial-title {
                font-family: 'Roboto Condensed';
            }

            .testimonial-name {
                font-weight: bold;
            }

            .testimonial-attribution-text {
                max-width: 100%;
                margin: 2em;
                text-transform: uppercase;
            }

            .fa-quote-right.testimonial-icon {
                bottom: 325px;
                left: 975px;
            }

            @media screen and (min-width: 800px) {
                .fancy-testimonial-slide {
                    height: 800px;
                }
            }

            @media screen and (max-width: 800px) {
                .testimonial-photo {
                    height: 100px;
                    width: 100px;
                    margin: auto;
                }

                .fancy-testimonial-button {
                    font-size: 0.7rem;
                }

                .testimonial-attribution-text {
                    max-width: 100%;
                    text-align: center;
                }
            }
        </style>

        <section id="testimonials_fancy_section_title"
                 class="testimonials-boxed testimonials-fancy u-fade-type-static js-scroll-trigger"
                 style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="testimonials-flexslider">

                        <div class="flex-viewport" style="overflow: hidden; position: relative; height: 800px;">
                            <ul class="slides"
                                style="width: 1000%; transition-duration: 0s; transform: translate3d(-1180px, 0px, 0px);">
                                <li class="testimonial-slide fancy-testimonial-slide clone" aria-hidden="true"
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">I started seeing that [other Chick-fil-A
                                        owner/operators] were simply taking their 40 hours a week and able to double
                                        that without putting additional effort in. I really wanted to be proactive in
                                        leading the team [and] creating the culture that we wanted – I would say I was
                                        spending a ridiculous amount of time in email and not enough time serving my
                                        customers, understanding their needs and leading and building my team.<br>
                                        <br>
                                        What we do is sell chicken. [But] I didn’t get into the business to do
                                        administrative work or sit in the office. I got into the business because I
                                        wanted to serve people. I just can’t imagine going through some of the
                                        challenges of opening a new restaurant without support. I don’t know how I
                                        would’ve been able to accomplish it without [her] help. Even if it’s just your
                                        wife turning to you and saying, ‘I get to see you a lot more than I did before.’
                                        That’s really important.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2023/09/tim-sweetman-crop.png"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Tim Sweetman</h3>
                                            <h4 class="testimonial-title">Owner &amp; Operator at Chick-fil-A</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide flex-active-slide"
                                    data-thumb-alt=""
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">It’s always a win when you have a great
                                        person who joins your team in any position. But I think even more so in this
                                        position [of VA] because [my {{ env('APP_NAME') }} VA] has a lot of access to our practice and
                                        to things in my life. There are things that [my {{ env('APP_NAME') }} VA] knows about my life
                                        that no one else in this practice knows. And that’s a testament to the type of
                                        trust that you have to build.<br>
                                        <br>
                                        She helps me to be more productive because I’m able to just focus on the things
                                        that I want to get done. [She] makes my life better. So those things make me
                                        really just recommend to anyone who’s thinking about getting an assistant
                                        through {{ env('APP_NAME') }}.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2023/09/leisle-chung-crop.png"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Leisle Chung</h3>
                                            <h4 class="testimonial-title">CEO of Vanguard Skin Specialists</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide" data-thumb-alt=""
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">To get an average of three hours back into
                                        my day … has been a huge win. It allows me to turn my attention to other items
                                        that are more impactful. It has helped me become a better leader and ultimately
                                        a better communicator with the other team members.<br>
                                        <br>
                                        The machine that {{ env('APP_NAME') }} has created — the selection process, the onboarding
                                        process, the information gathered ahead of time — has contributed to huge
                                        success, and it’s impressive. I’ve talked to a lot of people about it, and I’m a
                                        fan.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2023/09/J-Amundson-Headshot-crop.png"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Jim Amundson</h3>
                                            <h4 class="testimonial-title">President &amp; CEO of BankIn Minnesota</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide" data-thumb-alt=""
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">I started seeing that [other Chick-fil-A
                                        owner/operators] were simply taking their 40 hours a week and able to double
                                        that without putting additional effort in. I really wanted to be proactive in
                                        leading the team [and] creating the culture that we wanted – I would say I was
                                        spending a ridiculous amount of time in email and not enough time serving my
                                        customers, understanding their needs and leading and building my team.<br>
                                        <br>
                                        What we do is sell chicken. [But] I didn’t get into the business to do
                                        administrative work or sit in the office. I got into the business because I
                                        wanted to serve people. I just can’t imagine going through some of the
                                        challenges of opening a new restaurant without support. I don’t know how I
                                        would’ve been able to accomplish it without [her] help. Even if it’s just your
                                        wife turning to you and saying, ‘I get to see you a lot more than I did before.’
                                        That’s really important.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2023/09/tim-sweetman-crop.png"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Tim Sweetman</h3>
                                            <h4 class="testimonial-title">Owner &amp; Operator at Chick-fil-A</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide clone" aria-hidden="true"
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">It’s always a win when you have a great
                                        person who joins your team in any position. But I think even more so in this
                                        position [of VA] because [my {{ env('APP_NAME') }} VA] has a lot of access to our practice and
                                        to things in my life. There are things that [my {{ env('APP_NAME') }} VA] knows about my life
                                        that no one else in this practice knows. And that’s a testament to the type of
                                        trust that you have to build.<br>
                                        <br>
                                        She helps me to be more productive because I’m able to just focus on the things
                                        that I want to get done. [She] makes my life better. So those things make me
                                        really just recommend to anyone who’s thinking about getting an assistant
                                        through {{ env('APP_NAME') }}.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2023/09/leisle-chung-crop.png"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Leisle Chung</h3>
                                            <h4 class="testimonial-title">CEO of Vanguard Skin Specialists</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                            </ul>
                        </div>
                        <ol class="flex-control-nav flex-control-paging">
                            <li><a href="#" class="flex-active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ol>
                        <ul class="flex-direction-nav">
                            <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                            <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                        </ul>
                    </div>
                    <script type="text/javascript" charset="utf-8">
                        $(document).ready(function () {
                            $('.testimonials-flexslider').flexslider({
                                animation: "slide",              //String: Select your animation type, "fade" or "slide"
                                easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
                                direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
                                reverse: false,                 //{NEW} Boolean: Reverse the animation direction
                                animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
                                smoothHeight: true,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
                                startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
                                slideshow: true,
                                // Usability features
                                pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
                                pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
                                useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
                                touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices

                                // Primary Controls
                                controlNav: true,
                            });
                        });
                    </script>
                </div>
            </div>
        </section>


        <div class="embed-full-screen">
            <a href="#" class="close-full-screen"><i class="bi bi-x-circle"></i></a>
            <div class="embed-container">
                <iframe id="belay-brand-story-video" width="560" height="315"
                        src="https://youtube.com/embed/HdbZx84KBbU" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
            </div>
        </div>

        <section id="Video Full Width Section Title" class="video-full-width">
            <div class="vid-background-image zoom-out-animation js-scroll-trigger"
                 style="background-image: url('../../wp-content/uploads/2022/04/frank-bg.jpg');"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-flex-center">
                        <h4></h4>
                        <h2>Client Story</h2>
                        <h2></h2>
                        <h3 style="color: #ffffff; text-align: center;">Watch Frank’s Story</h3>
                        <a href="#" class="text-center open-full-screen open-full-screen-video"><i
                                class="bi bi-play-circle"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $(".open-full-screen-video").click(function (e) {
                e.preventDefault();
                $('.embed-full-screen').addClass('open');
                $("#belay-brand-story-video")[0].src += "?autoplay=1";
            });

            $(".close-full-screen, .embed-container").click(function (e) {
                e.preventDefault();
                $('.embed-full-screen').removeClass('open');
                $("#belay-brand-story-video")[0].src += "?autoplay=0";
            });

            $(document).on('keydown', function (event) {
                if (event.key == "Escape") {
                    $('.embed-full-screen').removeClass('open');
                    $("#belay-brand-story-video")[0].src += "?autoplay=0";
                }
            });
        </script>


        <section id="Hire {{ env('APP_NAME') }} Banner Section Title" class="talk-to-sales-banner">
            <div class="container">
                <div class="row d-flex flex-row justify-content-center">
                    <div class="col-sm-6 text-left">
                        <h2 class="text-left"></h2>
                        <h2>Stop spending countless hours every week on tasks someone else can do for you.</h2>
                        <p>Contact us today to discover how you can reclaim your schedule, focus on what matters, and
                            achieve the growth you deserve.</p>
                    </div>
                    <div class="col-sm-6 text-right d-flex flex-column justify-content-center">
                        <div class="outter-button d-flex flex-row justify-content-end">
                            <a class="btn u-fade-type-down js-scroll-trigger" href="../../get-started/index.html">Hire
                                {{ env('APP_NAME') }}<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="faqs-section-title" class="faqs" style="background-color:#f8f9fa ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5 left-column">
                        <h2 class="text-left"></h2>
                        <h2 style="text-align: left;">Got a question about Virtual Assistants?<br>No problem.</h2>
                        <p class="text-left">Our team is here to help!</p>
                        <a class="btn" href="../../get-started/index.html"><span>Hire {{ env('APP_NAME') }}</span></a></div>
                    <div class="col-sm-12 col-md-12 col-lg-7 right-column">
                        <div id="faq-accordion">
                            <div class="card">
                                <div class="card-header" id="heading-2971">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2971" aria-expanded="false"
                                                aria-controls="collapse-2971">
                                            <span>What does the typical VA do for a client?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2971" class="collapse" aria-labelledby="heading-2971"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>VA can handle your calendar, appointments, manage your email accounts, post
                                            social media, proof/edit documents, book travel arrangements, coordinate
                                            between clients and/or team members, and coordinate almost anything you
                                            need!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2972">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2972" aria-expanded="false"
                                                aria-controls="collapse-2972">
                                            <span>Do I get a team of assistants that rotate?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2972" class="collapse" aria-labelledby="heading-2972"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>No, you will have one dedicated VA that we match you with based on your
                                            needs, industry, personality and working style.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2973">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2973" aria-expanded="false"
                                                aria-controls="collapse-2973">
                                            <span>How long does it take for me to be matched?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2973" class="collapse" aria-labelledby="heading-2973"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>On average, our clients are matched within one week. <br><br>Your Client
                                            Success Consultant will meet with your Placement Team to discuss, vet and
                                            select 2-3 top candidates from our bench of nearly 2,000 U.S.-based talent,
                                            and then interview and select the best match for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2974">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2974" aria-expanded="false"
                                                aria-controls="collapse-2974">
                                            <span>What happens if the VA and I don’t work well together?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2974" class="collapse" aria-labelledby="heading-2974"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Your Client Success Consultant will be there to help. You’ll work together to
                                            find a new match and keep your downtime to a minimum. If there are any minor
                                            hiccups, we will address them and find a solution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2975">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2975" aria-expanded="false"
                                                aria-controls="collapse-2975">
                                            <span>How does my Virtual Assistant account for the work done? Manage time off or vacation?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2975" class="collapse" aria-labelledby="heading-2975"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>That will be between you and your new assistant. If there are times you know
                                            are slower, then let your VA know that would be a good time for time off.
                                            Commit to over-communicate with each other so work can be done ahead of time
                                            and productivity doesn’t lapse.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2976">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2976" aria-expanded="false"
                                                aria-controls="collapse-2976">
                                            <span>What security measures are in place to protect me?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2976" class="collapse" aria-labelledby="heading-2976"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>All our contractors sign a Confidentiality Agreement to protect you and your
                                            business. If you would like any additional contracts, then we can discuss
                                            that. We highly recommend strong passwords and using a password manager to
                                            keep your accounts secure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2977">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2977" aria-expanded="false"
                                                aria-controls="collapse-2977">
                                            <span>Will I be able to interview the candidate you pick for me?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2977" class="collapse" aria-labelledby="heading-2977"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>We get it. Handing over the decision on who will work with you is a tough
                                            one. But what we also know after helping people just like you is that you
                                            don’t have time to devote to screening and setting up interviews. We have a
                                            customized system to match you to someone equipped to handle everything you
                                            need accomplished.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2978">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2978" aria-expanded="false"
                                                aria-controls="collapse-2978">
                                            <span>Can the VA answer my phone?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2978" class="collapse" aria-labelledby="heading-2978"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>It depends on how many hours you are contracted for. You can have specific
                                            time periods where your phone can be forwarded to your assistant. If your
                                            Virtual Assistant isn’t able to answer in that moment, they can return calls
                                            and triage those messages. If you need a full-time receptionist, we
                                            recommend Ruby Receptionist – we use them and love them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2979">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-2979" aria-expanded="false"
                                                aria-controls="collapse-2979">
                                            <span>Can the VA call people for me?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-2979" class="collapse" aria-labelledby="heading-2979"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, they are there to support your communication to your team and
                                            clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-29710">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-29710" aria-expanded="false"
                                                aria-controls="collapse-29710">
                                            <span>Can the VA make Sales Calls for me?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-29710" class="collapse" aria-labelledby="heading-29710"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>You know your product best! They can relieve other admin and support tasks
                                            that will allow you added time for those calls.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-29711">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-29711" aria-expanded="false"
                                                aria-controls="collapse-29711">
                                            <span>Can my Virtual Assistant use AI?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-29711" class="collapse" aria-labelledby="heading-29711"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Absolutely – in fact, we encourage it! Our clients hire our Virtual
                                            Assistants to increasingly utilize AI to help maximize productivity and
                                            increase efficiency to help them accomplish more and juggle less.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-29712">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-29712" aria-expanded="false"
                                                aria-controls="collapse-29712">
                                            <span>I am new to the virtual concept and have no idea how this will work for me. Is there help?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-29712" class="collapse" aria-labelledby="heading-29712"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, you will be assigned a Client Success Consultant who will walk through
                                            onboarding with you and who is there as a coach and resource for your entire
                                            time here at {{ env('APP_NAME') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-29713">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-29713" aria-expanded="false"
                                                aria-controls="collapse-29713">
                                            <span>What if I don’t use all of my hours?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-29713" class="collapse" aria-labelledby="heading-29713"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>When you hire a virtual assistant, they can “ebb and flow” your hours
                                            throughout the month. We just shoot to come in at the contracted amount at
                                            the end of the month. If they go over, we simply bill the extra hours, but
                                            they do not roll over to the next month. We track and report on those during
                                            onboarding to make sure you are at a good amount of hours for the work
                                            needed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-29714">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-29714" aria-expanded="false"
                                                aria-controls="collapse-29714">
                                            <span>What if you do such a great job of matching me, that I want to bring my Virtual Assistant on to my staff full time?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-29714" class="collapse" aria-labelledby="heading-29714"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>You’re right – it happens! Our Virtual Assistant company knows it’s a
                                            possibility that you’ll get to the place in your business where you want to
                                            expand your W-2 team, and we love nothing more than knowing we helped you
                                            find your first (or second or fifth) hire. Talk to your Solutions Consultant
                                            about the details.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection
