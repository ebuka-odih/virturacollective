@extends('pages.layout.app')
@section('content')

    <main id="primary" class="site-main">


        <article id="post-800" class="post-800 page type-page status-publish has-post-thumbnail hentry">

            <header id="hero" class="hero hero-type__content hero-template__other"
                    style="background-image: url('wp-content/uploads/2022/04/2021-homepage-hero.jpg');"
            >
                <div class="hero-overlay"></div>
                <div class="container above-overlay" id="gf_3">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Launch Your Virtual Career<br/>Today.</h1>
                            <h5 class="secondary">
                                Work from anywhere. Get matched with flexible, remote opportunities in administration, accounting, marketing. and more.
                            </h5>
                            <p></p>
                            <a class="btn" id="hero-cta-btn" href="{{ route('get_started') }}">
                                <span>
                                    Start Your Application</span><i
                                    class="bi bi-chevron-down"></i></a></div>
                    </div>
                </div>


            </header>
        </article>
    </main>


 <div class="entry-content">


    <style>
        #transformed-main-image,
        #transformed-image-1,
        #transformed-image-2,
        #transformed-image-3,
        #transformed-image-4 {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        #transformed-main-image {
            background-image: url("wp-content/uploads/2022/10/mobile-homepage-phone-icon.png");
            height: 99vh;
        }

        #transformed-image-1 {
            background-image: url("wp-content/uploads/2022/10/mobile-homepage-icon-1.png");
            height: 19vh;
        }

        #transformed-image-2 {
            background-image: url("wp-content/uploads/2022/10/mobile-homepage-icon-2.png");
            height: 19vh;
        }

        #transformed-image-3 {
            background-image: url("wp-content/uploads/2022/10/mobile-homepage-icon-3.png");
            height: 19vh;
        }

        #transformed-image-4 {
            background-image: url("wp-content/uploads/2022/10/mobile-homepage-icon-4.png");
            height: 19vh;
        }

        #transform-workday-section-animated {
            padding: 3em 0;
        }

        .transformed-text {
            margin: 0 !important;
        }

        .transform-list-block {
            align-items: center;
        }

        .transform-workday-section-animated .btn {
            color: #2d3133;
            border-color: #2d3133;
            background-color: #fff;
        }

        .transform-list-block {
            margin-bottom: 1em;
            text-align: center !important;
        }

        .image-list {
            position: absolute;
            background: white;
            padding-top: 8em;
        }

        .transform-workday-section-animated .btn {
            margin-top: 2em;
        }

        .transform-workday-section-animated h2 {
            z-index: 1;
        }

        @media only screen and (min-width: 575px) {
            #transformed-main-image {
                background-image: url("wp-content/uploads/2022/10/desktop-homepage-phone-icon.png");
                background-position: right;
            }

            #transformed-image-1,
            #transformed-image-2,
            #transformed-image-3,
            #transformed-image-4 {
                background-position: left;
            }

            #transformed-image-1 {
                background-image: url("wp-content/uploads/2022/10/desktop-homepage-icon-1.png");
                height: 23vh;
            }

            #transformed-image-2 {
                background-image: url("wp-content/uploads/2022/10/desktop-homepage-icon-2.png");
                height: 23vh;
            }

            #transformed-image-3 {
                background-image: url("wp-content/uploads/2022/10/desktop-homepage-icon-3.png");
                height: 23vh;
            }

            #transformed-image-4 {
                background-image: url("wp-content/uploads/2022/10/desktop-homepage-icon-4.png");
                height: 23vh;
            }

            .transform-list-block {
                text-align: left !important;
            }

            .image-list {
                position: inherit;
                padding-top: 0;
            }
        }

        @media only screen and (max-width: 575px) {
            .transform-workday-section-animated .delay-tws {
                transition-delay: 3s !important;
            }

            .transform-workday-section-animated .delay-2 {
                transition-delay: 3.2s !important;
            }

            .transform-workday-section-animated .delay-3 {
                transition-delay: 3.3s !important;
            }

            .transform-workday-section-animated .delay-4 {
                transition-delay: 3.4s !important;
            }

            .transform-workday-section-animated .delay-5 {
                transition-delay: 3.5s !important;
            }
        }
    </style>

    <section id="transform-workday-section-animated" class="transform-workday-section-animated"
             style="background: white;">
        <div class="container">
            <!-- Container -->
<div class="container py-5">

  <!-- Section Heading -->
  <h2 class="text-center fw-bold mb-5">
    Your Path to the Perfect Remote Job
  </h2>

  <!-- 4-Step Icons Row -->
  <div class="row text-center g-4 mb-5">
    <!-- Step 1 -->
    <div class="col-12 col-md-3">
      <div class="mb-3 fs-2 text-primary">
        <i class="fa-regular fa-user"></i>
      </div>
      <h5 class="fw-semibold">Create a Profile</h5>
      <p class="small text-muted">Tell us about your skills, goals, and experience.</p>
    </div>

    <!-- Step 2 -->
    <div class="col-12 col-md-3">
      <div class="mb-3 fs-2 text-primary">
        <i class="fa-solid fa-right-left"></i>
      </div>
      <h5 class="fw-semibold">Get Matched</h5>
      <p class="small text-muted">Our smart system connects you with jobs that suit your strengths.</p>
    </div>

    <!-- Step 3 -->
    <div class="col-12 col-md-3">
      <div class="mb-3 fs-2 text-primary">
        <i class="fa-solid fa-robot"></i>
      </div>
      <h5 class="fw-semibold">AI-Powered Matching</h5>
      <p class="small text-muted">Skill-building resources and data-driven recommendations.</p>
    </div>

    <!-- Step 4 -->
    <div class="col-12 col-md-3">
      <div class="mb-3 fs-2 text-primary">
        <i class="fa-regular fa-clock"></i>
      </div>
      <h5 class="fw-semibold">Flexible Work Hours</h5>
      <p class="small text-muted">Find roles that fit your ideal schedule and lifestyle.</p>
    </div>
  </div>

  <!-- Two-Column CTA Row -->
  <div class="row align-items-start gy-4">
    <!-- Left: Why Join -->
    <div class="col-12 col-md-6">
      <h4 class="fw-bold mb-3">Why Join Virtura Collective?</h4>
      <p>Post a job or request a staffing consultation to connect with pre-vetted professionals.</p>

      <!-- Optional action button -->
      <button class="btn btn-outline-primary mt-2">
        Join the Collective
      </button>
    </div>

    <!-- Right: Hire Talent -->
    <div class="col-12 col-md-6">
      <div class="p-4 border rounded-3 bg-light h-100">
        <h4 class="fw-bold mb-3">Looking to Hire Virtual Talent?</h4>
        <p class="mb-4">Post a job or request a staffing consultation to connect with pre-vetted professionals.</p>

        <button class="btn btn-primary w-100">
          Hire Through Virtura
        </button>
      </div>
    </div>
  </div>

</div>


        </div>
    </section>


    <section id="four-up-wide-section-title" class="four-up-wide">
        <div>
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-3 box"
                     style="background-image: url('https://belaysolutions.com/wp-content/uploads/2022/04/virtual-assist.jpeg);">
                    <a href="services/assistants/index.html">
                        <div class="box-inner d-flex flex-column justify-content-flex-start">
                            <i class="bi bi-headset"></i>
                            <h2>Virtual Assistants</h2>
                            <p>Are you drowning in pesky notifications, calendar invitations, and missed deadlines? A
                                {{ env('APP_NAME') }} Virtual Assistant can take it all off your desk — and your mind. From
                                administration to project management, a {{ env('APP_NAME') }} Virtual Assistant, empowered by AI tools
                                and technology, can handle it so that you can focus on the tasks that matter. Accomplish
                                more and juggle less with a {{ env('APP_NAME') }} Virtual Assistant.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 box"
                     style="background-image: url('https://belaysolutions.com/wp-content/uploads/2022/04/bookkeeping-services.jpg);">
                    <a href="services/accounting/index.html">
                        <div class="box-inner d-flex flex-column justify-content-flex-start">
                            <i class="bi bi-cash-stack"></i>
                            <h2>Accounting Professionals</h2>
                            <p>{{ env('APP_NAME') }} offers complete financial solutions, including Bookkeeping, Payroll, Fractional
                                CFOs and Controllers, Tax Services, Enterprise Accounting, Inventory Consulting, and
                                more. Our experts, empowered by AI-driven insights and tools, provide full-scale
                                accounting support, optimizing systems and ensuring compliance, so you can focus on
                                growing your organization with confidence.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 box"
                     style="background-image: url('https://belaysolutions.com/wp-content/uploads/2022/04/social-media-manager-services.jpg);">
                    <a href="services/marketing/index.html">
                        <div class="box-inner d-flex flex-column justify-content-flex-start">
                            <i class="bi bi-share"></i>
                            <h2>Marketing Assistants</h2>
                            <p>A {{ env('APP_NAME') }} Marketing Assistant offers busy leaders the flexible support they need to enhance
                                their marketing impact. Empowered by AI-enhanced tools and strategies, a Marketing
                                Assistant will manage your social media platforms and create on-brand content to expand
                                your reach in the marketing world including podcasts, webinars, and digital resources.
                                Additionally, an MA will streamline your communications through email and social
                                campaigns to advance your reach.</p>
                        </div>
                    </a>
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
                    <div class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                        <svg id="a svg-hiw-1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 355.2 353.8">
                            <defs>
                                <style>.c {
                                        fill: url(#b);
                                    }</style>
                                <linearGradient id="b" x1="0" y1="620.9" x2="355.2" y2="620.9"
                                                gradientTransform="translate(0 -444)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#12d678"/>
                                    <stop offset="1" stop-color="#377da1"/>
                                </linearGradient>
                            </defs>
                            <path class="c"
                                  d="M346.6,226.4c-4.7,0-8.7-3.6-8.7-8.1,0-111.4-94.7-202.1-211.1-202.1-4.7,0-8.7-3.6-8.7-8.1S121.9,0,126.8,0c30.8,0,60.8,5.8,89,17.2,27.2,11,51.6,26.8,72.6,46.7,21,20.1,37.4,43.3,48.9,69.4,11.9,26.9,17.9,55.5,17.9,85,.1,4.4-3.9,8.1-8.6,8.1Zm-46.4-31.9c0-19.2-4-37.8-11.6-55.3-7.5-16.9-18.2-32.2-31.8-45.2-13.7-13.1-29.6-23.3-47.3-30.5-18.4-7.5-37.8-11.2-57.9-11.2-4.7,0-8.7,3.6-8.7,8.1s3.8,8.1,8.7,8.1c72.5,0,131.4,56.4,131.4,125.9,0,4.5,3.8,8.1,8.7,8.1,4.7,.1,8.5-3.5,8.5-8Zm-52.4-12.4c0-21.3-8.7-41.3-24.4-56.4-15.8-15.1-36.8-23.4-59.2-23.4-4.7,0-8.7,3.6-8.7,8.1s3.8,8.1,8.7,8.1c36.6,0,66.3,28.4,66.3,63.4,0,4.5,3.8,8.1,8.7,8.1,4.7,.2,8.6-3.4,8.6-7.9Zm2.6,171.7c68.7-1.9,85.2-51.6,85.8-53.5,2.8-8.4,1.6-19.6,.6-25.6l-.2-2.7c-2.7-17.7-17.6-23.3-21.7-24.5l-59.3-20.2c-16.6-6.3-29.8,1.1-37.4,11.2l-14.1,13.8c-3.3,3-5.4,2.4-6,2.1-68-36.2-92.9-86.7-97.2-96.4-.6-1.2-1.1-2.4-1.6-4.3,.3-1.2,1-2.5,2-3.6l18.6-18.6c11.7-9.7,9.8-25.7,6.9-33.5l-19.6-56.1c-5.3-16.6-15-21.3-20-22.9-3.7-1.4-10.4-2.3-19.9-2.8-4-.2-7.8,.1-11.5,1.2-2,.6-3.2,1.1-3.2,1.1h0C.6,39.3,0,98.5,0,101c0,37.3,20.9,75.3,21.7,76.5,41.9,83.8,119.5,133.5,134.7,142.7,1.1,.7,2.1,1.4,3.2,2,44.9,30.7,86.8,31.5,90.5,31.5,.2,.1,.3,.1,.3,.1ZM59.6,35.2l1.2-.5c1.7-.5,3.5-.7,5.3-.6,9.3,.6,13.8,1.5,14.9,1.8l1.7,.6s4.2,1.6,7.1,11l19.8,56.6c0,.1,3.3,9.5-1.4,13.2-.6,.5-1,.9-1.6,1.4l-18.3,18.3c-3.4,3.4-5.9,7.7-7,12.3-1.2,5.4-.6,10.6,2,14.8,.2,.3,.5,.8,.7,1.1,4.7,10.7,32.1,66,105,105,5.1,2.9,16.5,5.3,27.5-4.9l14.3-14c1-.9,1.8-1.9,2.6-3,2.1-2.9,7.1-7.3,15.7-4.1l59.5,20.3,1.6,.6c1.1,.3,6.9,2.5,8,10.4l.3,1.9c1.1,7.1,1.1,13.7,.1,17-.6,1.6-13.7,39.4-68.7,41,.1-.5-38.8,0-80.1-28.2-1.4-.9-2.7-1.8-4.1-2.6-14.3-8.7-88.2-56-128-135.6-.2-.3-19.5-35.4-19.5-68,.2-2.1,1-49.5,41.4-65.8Z"/>
                        </svg>
                        <h3>Step 1. Sales Call</h3>
                        <p>Meet with your Solutions Consultant to identify your exact needs and pain points and
                            determine the right hire for you. If {{ env('APP_NAME') }} is a good fit, we’ll send you an agreement to
                            sign, and you’ll be paired with a Client Success Consultant.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                    <div class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                        <svg version="1.1" id="a svg-hiw-2" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 354.2 351.8" style="enable-background:new 0 0 354.2 351.8;"
                             xml:space="preserve">
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
                            <path class="st0" d="M94.7,262.5h26.5c-9.2-1.1-18-3.2-26.5-6.2V262.5z"/>
                            <path class="st0" d="M182.5,262.5v-8.3c-10.1,4.1-20.8,7-32.1,8.3H182.5z"/>
                            <path class="st0"
                                  d="M191.3,262.5h22.1c0.9,0,1.8-0.8,1.8-1.8v-26.3c-7.3,6.1-15.3,11.5-23.9,15.8V262.5z"/>
                            <path class="st0"
                                  d="M62,260.7c0,0.9,0.8,1.8,1.8,1.8h22.1v-9.7c-8.5-3.8-16.5-8.5-23.9-14V260.7z"/>
                            <circle class="st1" cx="138.9" cy="92.2" r="31.5"/>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="51.74" y1="696.8279"
                                            x2="225.84" y2="696.8279" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <linearGradient id="SVGID_00000018219226719303972020000014756712997544573326_"
                                            gradientUnits="userSpaceOnUse" x1="50.195" y1="697.1481" x2="227.385"
                                            y2="697.1481" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <path
                                style="fill:url(#SVGID_1_);stroke:url(#SVGID_00000018219226719303972020000014756712997544573326_);stroke-width:3.09;stroke-miterlimit:10;"
                                d="
	M90.3,200.1c-2.4,0-4.4,2-4.4,4.4v48.3c2.9,1.3,5.8,2.4,8.8,3.5v-51.8C94.7,202.1,92.7,200.1,90.3,200.1z"/>
                            <linearGradient id="SVGID_00000093893119755974458380000000625448946982777019_"
                                            gradientUnits="userSpaceOnUse" x1="51.74" y1="731.5441" x2="225.84"
                                            y2="731.5441" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <linearGradient id="SVGID_00000119801077327411598290000001757075991838086291_"
                                            gradientUnits="userSpaceOnUse" x1="50.195" y1="731.5441" x2="227.385"
                                            y2="731.5441" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <path
                                style="fill:url(#SVGID_00000093893119755974458380000000625448946982777019_);stroke:url(#SVGID_00000119801077327411598290000001757075991838086291_);stroke-width:3.09;stroke-miterlimit:10;"
                                d="
	M135.9,263.4c5,0,9.8-0.3,14.6-0.9h-29.3C126,263.1,130.9,263.4,135.9,263.4z"/>
                            <linearGradient id="SVGID_00000145744470175008111550000015096214151804721341_"
                                            gradientUnits="userSpaceOnUse" x1="51.74" y1="560.91" x2="225.84"
                                            y2="560.91" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <linearGradient id="SVGID_00000180345062605019503770000017006654339845015992_"
                                            gradientUnits="userSpaceOnUse" x1="50.195" y1="560.91" x2="227.385"
                                            y2="560.91" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <path
                                style="fill:url(#SVGID_00000145744470175008111550000015096214151804721341_);stroke:url(#SVGID_00000180345062605019503770000017006654339845015992_);stroke-width:3.09;stroke-miterlimit:10;"
                                d="
	M138.9,134.4c23.2,0,42.1-18.9,42.1-42.1s-18.9-42.1-42.1-42.1S96.8,69.1,96.8,92.3S115.7,134.4,138.9,134.4z M138.9,60.7
	c17.4,0,31.5,14.2,31.5,31.5c0,17.3-14.2,31.5-31.5,31.5s-31.5-14.2-31.5-31.5C107.4,74.9,121.5,60.7,138.9,60.7z"/>
                            <linearGradient id="SVGID_00000113315779442070920340000017775726967075595430_"
                                            gradientUnits="userSpaceOnUse" x1="51.74" y1="661.7277" x2="225.84"
                                            y2="661.7277" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <linearGradient id="SVGID_00000147929579800259605740000004708909365580677015_"
                                            gradientUnits="userSpaceOnUse" x1="50.195" y1="662.4986" x2="227.385"
                                            y2="662.4986" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <path
                                style="fill:url(#SVGID_00000113315779442070920340000017775726967075595430_);stroke:url(#SVGID_00000147929579800259605740000004708909365580677015_);stroke-width:3.09;stroke-miterlimit:10;"
                                d="
	M62,204.2c0.3-25.5,21-46.2,46.5-46.2H169c12.4,0,24,4.8,32.7,13.5c8.7,8.7,13.5,20.3,13.5,32.7v30.2c3.7-3.1,7.3-6.5,10.6-10.1
	v-20.1c0-15.2-5.9-29.5-16.6-40.2c-10.7-10.7-25-16.6-40.2-16.6h-60.5c-15.2,0-29.5,5.9-40.2,16.6c-10.7,10.7-16.6,25-16.6,40.2v26
	c3.3,3.1,6.7,5.9,10.3,8.6V204.2z"/>
                            <linearGradient id="SVGID_00000164488706879452549660000018290087216300914818_"
                                            gradientUnits="userSpaceOnUse" x1="51.74" y1="695.7663" x2="225.84"
                                            y2="695.7663" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <linearGradient id="SVGID_00000062897952382272889890000000689289989352084373_"
                                            gradientUnits="userSpaceOnUse" x1="50.2051" y1="696.1449" x2="227.3951"
                                            y2="696.1449" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#FFFFFF"/>
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="1" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <path
                                style="fill:url(#SVGID_00000164488706879452549660000018290087216300914818_);stroke:url(#SVGID_00000062897952382272889890000000689289989352084373_);stroke-width:3.09;stroke-miterlimit:10;"
                                d="
	M186.9,200.1c-2.4,0-4.4,2-4.4,4.4v49.7c3-1.2,5.9-2.6,8.8-4v-45.7C191.3,202.1,189.3,200.1,186.9,200.1z"/>
                            <linearGradient id="SVGID_00000014591690865931752330000003255259235160902801_"
                                            gradientUnits="userSpaceOnUse" x1="7.94" y1="644.51" x2="346.2433"
                                            y2="644.51" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="0.76" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <linearGradient id="SVGID_00000071524918286293341650000013523808650296694711_"
                                            gradientUnits="userSpaceOnUse" x1="3.22" y1="644.51" x2="350.9633"
                                            y2="644.51" gradientTransform="matrix(1 0 0 1 0 -468.62)">
                                <stop offset="0" style="stop-color:#12D678"/>
                                <stop offset="0.76" style="stop-color:#377DA1"/>
                            </linearGradient>
                            <path
                                style="fill:url(#SVGID_00000014591690865931752330000003255259235160902801_);stroke:url(#SVGID_00000071524918286293341650000013523808650296694711_);stroke-width:9.44;stroke-miterlimit:10;"
                                d="
	M340.2,310.2l-95.9-95.9c15.9-21.7,25.2-48.2,25.2-77c0-72.1-58.7-130.9-130.8-130.9S7.9,65.2,7.9,137.3s58.7,130.8,130.8,130.8
	c28.5,0,54.8-9.2,76.3-24.7l96,96c3.9,3.8,9.1,6,14.6,6s10.7-2.2,14.6-6c3.8-3.9,6-9.1,6-14.6C346.3,319.3,344.1,314.1,340.2,310.2
	L340.2,310.2z M18.3,137.3c0-66.4,54.1-120.5,120.4-120.5s120.4,54.1,120.4,120.5s-54,120.4-120.4,120.4
	C72.4,257.8,18.3,203.7,18.3,137.3L18.3,137.3z M332.9,332.1c-3.8,3.8-10.7,3.8-14.5,0l-93.6-93.7l14.4-14.4l93.7,93.6
	c1.9,2,3,4.6,3,7.3S334.7,330.1,332.9,332.1z"/>
</svg>
                        <h3>Step 2. Discovery Call</h3>
                        <p>Meet with your Client Success Consultant to deep dive into your tasks, tools, culture, and
                            personality requirements to ensure we match you with the right {{ env('APP_NAME') }} Professional.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                    <div class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                        <svg id="a svg-hiw-3" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 345.7 353.7">
                            <defs>
                                <style>.c {
                                        fill: url(#b);
                                    }</style>
                                <linearGradient id="b" x1="0" y1="167.15" x2="345.7" y2="167.15"
                                                gradientTransform="translate(0 344) scale(1 -1)"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fff"/>
                                    <stop offset="0" stop-color="#12d678"/>
                                    <stop offset="1" stop-color="#377da1"/>
                                </linearGradient>
                            </defs>
                            <path class="c"
                                  d="M103,190c28.1,0,50.9-22.8,50.9-50.9s-22.8-50.9-50.9-50.9-50.9,22.8-50.9,50.9,22.8,50.9,50.9,50.9Zm0-85.2c18.9,0,34.3,15.4,34.3,34.3s-15.4,34.3-34.3,34.3-34.3-15.4-34.3-34.3,15.4-34.3,34.3-34.3Zm83.2,118.9c-12.8-12.8-29.9-19.9-48.1-19.9H68c-18.2,0-35.3,7.1-48.1,19.9C7.1,236.5,0,253.6,0,271.8v65.4c0,9.1,7.4,16.5,16.5,16.5H189.6c9.1,0,16.5-7.4,16.5-16.5v-65.4h0c0-18.1-7.1-35.2-19.9-48.1Zm-118.2-3.2h70.1c13.7,0,26.6,5.3,36.3,15s15,22.6,15,36.4v65.3h-23.7v-65.1c0-3.8-3.1-6.8-6.8-6.8s-6.8,3.1-6.8,6.8v65.1H53.9v-65.1c0-3.8-3.1-6.8-6.8-6.8s-6.8,3.1-6.8,6.8v65.1H16.8v-65.3c-.2-28.4,22.8-51.4,51.2-51.4ZM242.9,101.8c28.1,0,50.9-22.8,50.9-50.9S271,0,242.9,0s-50.9,22.8-50.9,50.9c0,28.1,22.8,50.9,50.9,50.9Zm0-85.2c18.9,0,34.3,15.4,34.3,34.3s-15.4,34.3-34.3,34.3-34.3-15.4-34.3-34.3,15.4-34.3,34.3-34.3Zm102.8,167.4h0v65.4c0,9.1-7.4,16.5-16.5,16.5h-108.7c-4.6,0-8.3-3.7-8.3-8.3s3.7-8.3,8.3-8.3h71.4v-64.9c0-3.8,3.1-6.8,6.8-6.8s6.8,3.1,6.8,6.8v64.9h23.5v-65.3c0-13.8-5.3-26.7-15-36.4s-22.6-15-36.3-15h-70.1c-12.1,0-23.8,4.2-32.8,11.7-1.6,1.3-3.4,1.9-5.3,1.9-2.4,0-4.8-1-6.4-3-2.9-3.5-2.5-8.8,1.1-11.7,12.1-10,27.5-15.5,43.5-15.5h70.1c18.2,0,35.3,7.1,48.1,19.9,12.8,12.8,19.8,29.9,19.8,48.1h0Z"/>
                        </svg>
                        <h3>Step 3. Placement Process</h3>
                        <p>Now for our Secret Sauce: Your Client Success Consultant will vet and interview top
                            candidates from our bench of nearly 2,000 U.S.-based Professionals. They’ll select the best
                            match for you—in an average of just <em><strong>one week.</strong></em></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                    <div class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                        <svg id="a svg-hiw-4" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 291.2 353.9">
                            <defs>
                                <style>.c {
                                        fill: url(#b);
                                    }</style>
                                <linearGradient id="b" x1="0" y1="156.55" x2="291.2" y2="156.55"
                                                gradientTransform="translate(0 333.5) scale(1 -1)"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fff"/>
                                    <stop offset="0" stop-color="#12d678"/>
                                    <stop offset="1" stop-color="#377da1"/>
                                </linearGradient>
                            </defs>
                            <path class="c"
                                  d="M271.6,0h-125c-10.9,0-19.7,8.8-19.7,19.7v11.5H24.9C11.2,31.2,0,42.4,0,56.1V329c0,13.7,11.2,24.9,24.9,24.9H188.1c13.8,0,24.9-11.2,24.9-24.9V115.2l5-3.1h53.5c10.9,0,19.7-8.8,19.7-19.7V19.7c.1-10.9-8.7-19.7-19.6-19.7Zm-78.2,329c0,2.9-2.4,5.3-5.3,5.3H24.9c-2.9,0-5.3-2.4-5.3-5.3V56.2c0-2.9,2.4-5.3,5.3-5.3H126.9v41.4c0,10.9,8.8,19.7,19.7,19.7h10v19.1c0,3.8,2.1,7.4,5.4,9.3l1.2,.6c2.2,.9,4.6,1,6.8,.4,.5-.1,.9-.3,1.4-.5s.9-.4,1.3-.7l20.5-12.7v201.5h.2ZM271.6,19.7V92.4h-56.3c-1.8,0-3.6,.5-5.2,1.5l-33.7,20.9v-12.6c0-5.4-4.4-9.8-9.8-9.8h-19.9V19.7h124.9Zm-115.1,178.3c-7.8-7.8-18.3-12.1-29.3-12.1h-41.3c-11.1,0-21.5,4.3-29.3,12.1s-12.1,18.2-12.1,29.3v38.6c0,6.1,5,11.1,11.1,11.1h102c6.1,0,11.1-5,11.1-11.1v-38.6c-.1-11.1-4.4-21.5-12.2-29.3Zm-.4,66.5h-11v-37c0-3.1-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6v37h-54.6v-37c0-3.1-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6v37h-11v-37.2c0-16,13-28.9,28.9-28.9h41.3c7.7,0,15,3,20.5,8.5s8.5,12.7,8.5,20.5v37.1h-.2ZM106.6,119.4c-17.3,0-31.4,14.1-31.4,31.4s14.1,31.4,31.4,31.4,31.4-14.1,31.4-31.4-14.1-31.4-31.4-31.4Zm0,50.3c-10.4,0-18.9-8.5-18.9-18.9s8.5-18.9,18.9-18.9,18.9,8.5,18.9,18.9c0,10.5-8.5,18.9-18.9,18.9Zm26.8,142.4h-53.8c-4,0-7.2-3.2-7.2-7.2s3.2-7.2,7.2-7.2h53.8c4,0,7.2,3.2,7.2,7.2s-3.2,7.2-7.2,7.2Zm30.8-170.8l-.9-.3,.9,.3Zm.5,.1c-.2,0-.3-.1-.5-.1,.2,0,.3,.1,.5,.1Zm4.2,.2c.4-.1,.8-.1,1.3-.3-.5,.2-.9,.2-1.3,.3Zm-3.3,0c-.2,0-.3-.1-.5-.1,.2,.1,.3,.1,.5,.1Zm3,.1h.3c-.1-.1-.2-.1-.3,0Zm-3.5-.2c-.1,0-.3-.1-.4-.1,.1,.1,.3,.1,.4,.1Zm2.2,.3h-.4c.1-.1,.2,0,.4,0Zm1.3-.1c-.4,.1-.8,.1-1.2,.1,.4-.1,.8-.1,1.2-.1Zm-1.7,0h0Zm-.4,0h0Zm-.5,0c-.1,0-.3,0-.4-.1,.1,0,.3,.1,.4,.1Z"/>
                        </svg>
                        <h3>Step 4. Kickoff Call</h3>
                        <p>You, your Client Success Consultant, and your new teammate will have a kickoff call—the
                            official start to your partnership—to meet each other, set initial goals, discuss
                            communication plans, and set yourselves up for success.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                    <div class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
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
                                    <stop offset="0" stop-color="#fff"/>
                                    <stop offset="0" stop-color="#12d678"/>
                                    <stop offset="1" stop-color="#377da1"/>
                                </linearGradient>
                                <linearGradient id="c" x1="2.64" y1="190.55" x2="411.36" y2="190.55"
                                                gradientTransform="translate(0 312.37) scale(1 -1)"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fff"/>
                                    <stop offset="0" stop-color="#12d678"/>
                                    <stop offset="1" stop-color="#377da1"/>
                                </linearGradient>
                            </defs>
                            <path class="d"
                                  d="M107.85,45.69l-.2,.8h0c0-.3,.1-.5,.2-.8Zm184.5,12.3c-.2-.5-.4-.9-.7-1.3l3.3,7.5-2.6-6.2Zm115,85.5c-1.6,4.2-4.9,7.7-9.3,9.7l-48.4,21.2c-4.4,1.9-9.2,1.9-13.4,.3-4.1-1.6-7.6-4.7-9.5-8.9-.9,.6-1.9,1.2-2.8,1.9-2.5,1.7-4.7,3.3-6.8,4.8,.3,.6,.6,1.1,.8,1.6,1.7,4.1,2.2,8.6,1.4,12.9-.8,4.2-2.8,8.1-6.1,11.2-3.2,3-7.5,5.2-12.9,5.8-3.2,.4-6.9,.2-10.9-.8,.1,3.5-.3,6.5-1.4,9.1-1.6,4.2-4.5,7.1-8,9-3.2,1.7-6.9,2.5-10.7,2.5-2.4,0-4.7-.3-7-.9-6.2,25.6-30.3,14-34.3,11.8-.6-.3-1.2-.7-1.8-1.2h0l-4.2-4.1h0c-6.4,2-13.2,3.9-19.7,4.6-8.5,1-16.4,.2-22.4-4.2-10.8-8-69.9-57.5-89.6-74-1.5,3.8-4.2,6.8-7.6,8.8-2.6,1.5-5.7,2.4-8.8,2.4-1.5,0-3-.2-4.5-.6l-51-13.7c-4.6-1.2-8.4-4.3-10.6-8.2h0c-2.2-3.9-3-8.6-1.8-13.3L36.55,17.39c1.2-4.7,4.3-8.4,8.2-10.6h0c3.9-2.3,8.6-3,13.3-1.8l51,13.7c4.7,1.2,8.4,4.3,10.6,8.2h0c2,3.4,2.8,7.6,2.1,11.7l.5-.2h0c.9-.3,1.9-.5,2.8-.3,32.5,1.2,49.2-.5,61.6-1.7,22.7-2.3,32-3.2,91.2,14.9-.1-2.4,.3-4.9,1.2-7.1,1.6-4.2,4.9-7.7,9.3-9.7l48.3-21.4c4.4-1.9,9.2-1.9,13.4-.3,4.2,1.6,7.7,4.9,9.7,9.3l47.3,108c1.9,4.4,1.9,9.3,.3,13.4ZM107.35,47.69l.3-1.1,.2-.8h0l2.4-8.7c.4-1.6,.1-3.2-.6-4.4-.8-1.3-2-2.3-3.6-2.7l-51-13.7c-1.6-.4-3.1-.2-4.4,.6h0c-1.3,.7-2.3,2-2.7,3.5l-30.6,113.7c-.4,1.6-.2,3.2,.6,4.4,.8,1.3,2,2.3,3.6,2.7l51,13.7c1.6,.4,3.2,.2,4.4-.6h0c1.3-.7,2.3-2,2.7-3.5l27.7-103.1Zm199.7,130.8c-4.5-10.4-44.1-51.1-48.1-55.2-.3-.2-.5-.5-.7-.8-33.1-41.8-51.3-28.4-67-16.8-11.1,8.2-21.3,15.7-34.6,10.2-.2-.1-.4-.1-.6-.2h0c-26-12.2-8.4-49.5,.9-65.8-8.6,.2-19,.2-31.7-.2l-7.2,2.8-23.8,91.5c14.6,12.3,81.3,68.2,92.5,76.4,3.3,2.4,8.4,2.7,14.2,2,3.7-.5,7.6-1.3,11.4-2.4l-16.1-15.7c-2.3-2.3-2.3-6-.1-8.2s6-2.4,8.2-.1l22.6,21.9,1.4,1.3,5.5,5.4c2.9,1.5,15,6.7,17.6-7.6l-42.2-39c-2.4-2.2-2.5-5.9-.3-8.2,2.2-2.4,5.9-2.5,8.2-.3l43,39.6c1.9,1.8,5.5,3,9.1,3,1.9,0,3.7-.3,5.1-1.1,1.2-.6,2.1-1.6,2.6-3,.9-2.3,.9-5.7-.6-10.5l-45.2-45.2c-2.3-2.3-2.3-6,0-8.3s6-2.3,8.3,0l45.5,45.5c5.6,2.5,10.2,3.3,13.8,2.8,2.6-.3,4.7-1.3,6.1-2.6,1.4-1.4,2.3-3.1,2.6-4.9,.6-2.3,.4-4.4-.4-6.3Zm14-23.1l-37.9-89.1-.7-1.7c-64.3-20-72.7-19.2-94.7-16.9-4.7,.5-10.1,1-16.7,1.4h0c-3.7,5.7-29.6,46.5-10.2,55.9h.1c.1,0,.1,.1,.2,.1,7.2,2.9,14.8-2.7,23.1-8.8,19.9-14.7,42.9-31.6,82.9,18.7,2.7,2.7,29.5,30.2,43.1,47.7,2.5-1.8,4.8-3.4,6.9-4.9,1.4-.7,2.7-1.5,3.9-2.4Zm75.3-20.6l-47.3-108c-.7-1.5-1.8-2.5-3.3-3.1-1.4-.6-3-.6-4.5,.1l-48.3,21.2c-1.5,.7-2.5,1.8-3.1,3.3-.6,1.4-.6,3,.1,4.5l1.7,4,3.3,7.5,.2,.5,42.1,96.1c.7,1.5,1.8,2.5,3.3,3.1,1.4,.6,3,.6,4.5-.1l48.4-21.2c1.5-.6,2.5-1.8,3.1-3.2,.4-1.6,.4-3.2-.2-4.7ZM54.85,98.59c-4.5,0-8.6,1.8-11.5,4.8-2.9,2.9-4.8,7-4.8,11.5s1.8,8.6,4.8,11.5c2.9,2.9,7,4.8,11.5,4.8s8.6-1.8,11.5-4.8c2.9-2.9,4.8-7,4.8-11.5s-1.8-8.6-4.8-11.5c-3-3-7.1-4.8-11.5-4.8h0Zm4.5,16.3c0,1.3-.5,2.4-1.3,3.2s-2,1.3-3.2,1.3c-1.3,0-2.4-.5-3.2-1.3-.8-.8-1.3-2-1.3-3.2,0-1.3,.5-2.4,1.3-3.2s2-1.3,3.2-1.3c1.3,0,2.4,.5,3.2,1.3,.8,.8,1.3,1.9,1.3,3.2Zm295.4,3.1c1.3-.2,2.5,.1,3.4,.8s1.6,1.7,1.8,3c.2,1.3-.1,2.5-.8,3.4-.7,.9-1.7,1.6-3,1.8s-2.5-.1-3.4-.8-1.6-1.7-1.8-3c-.2-1.3,.1-2.5,.8-3.4,.7-.9,1.8-1.6,3-1.8h0Zm-15.4,7c.7,4.4,3.1,8.2,6.5,10.7s7.6,3.7,12.1,3c4.4-.7,8.2-3.1,10.7-6.5s3.7-7.6,3-12.1c-.7-4.4-3.1-8.2-6.5-10.7s-7.6-3.7-12.1-3c-4.4,.7-8.2,3.1-10.7,6.5-2.5,3.3-3.7,7.6-3,12.1Z"/>
                        </svg>
                        <h3>Step 5. Onboarding</h3>
                        <p>Your Client Success Consultant stays close to provide our signature exceptional service and
                            guide you through our proven onboarding process</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                    <div class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
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
                                    <stop offset="0" stop-color="#12d678"/>
                                    <stop offset=".76" stop-color="#377da1"/>
                                </linearGradient>
                                <linearGradient id="c" x1="2.46" y1="149.36" x2="336.77" y2="149.36"
                                                gradientTransform="translate(0 322.1) scale(1 -1)"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#12d678"/>
                                    <stop offset=".76" stop-color="#377da1"/>
                                </linearGradient>
                            </defs>
                            <path class="d"
                                  d="M278.7,114.4c-2.4,.6-4.8-.9-5.4-3.4-11.2-47.5-53.1-80.6-101.8-80.6S80.8,63.5,69.7,111c-.5,2.1-2.4,3.5-4.4,3.5-.4,0-.7-.1-1.1-.1-2.4-.6-4-3-3.4-5.4,5.8-24.6,19.8-46.8,39.6-62.7,20-16.1,45.3-24.9,71.1-24.9s51,8.9,71,24.9c19.8,15.8,33.8,38.1,39.6,62.7,.6,2.4-.9,4.8-3.4,5.4ZM80,198.8c-2.8-7.1-5.7-14.4-7.8-21.9-3.5-12.3-5.3-26.4-5.3-41.8,0-2.5-2-4.5-4.5-4.5s-4.5,2-4.5,4.5c0,16.3,1.9,31.2,5.7,44.4,2.2,7.8,5.3,15.4,8.1,22.7,4.1,10.4,8.1,20.3,10,31.1,3.2,17.9,5.8,34.1,4.6,51.1-.7,9.1-3,16.4-6.7,21.5-1.5,2-1.1,4.8,.9,6.3,.8,.6,1.7,.9,2.7,.9,1.4,0,2.7-.6,3.7-1.9,4.8-6.5,7.6-15.3,8.4-26.1,1.4-18.1-1.4-35.6-4.7-53.4-2.1-11.8-6.4-22.5-10.6-32.9Zm67.8-71.4c1.2,.8,1.9,2.2,1.9,3.7s-.7,2.9-1.9,3.7l-19.5,13.6c-.7,.5-1.7,.8-2.6,.8-.7,0-1.4-.1-2.1-.5-1.4-.8-2.4-2.3-2.4-4v-9.4c-25.6-2-89.3-9.3-89.3-30.7,0-8,8.1-14.5,25-19.9,2.4-.8,4.9,.6,5.7,3,.7,2.4-.6,4.9-3,5.7-14.8,4.8-18.7,9.3-18.7,11.2,0,2.1,4.7,7.1,22,12.2,14.6,4.3,35.2,7.6,58.3,9.4v-8.7c0-1.7,.9-3.2,2.4-4s3.3-.6,4.7,.4l19.5,13.5Zm-10.5,3.6l-7.1-4.9v9.9l7.1-5Zm145.2,78.3c.4,0,.6,0,.9-.1,19.4-4.1,28.4-9,29.5-16,.6-4.7-2.7-8.4-6-10.3l-21.8-16.6v-31.3c0-2.5-2.1-4.5-4.5-4.5s-4.5,2-4.5,4.5v33.6c0,1.4,.6,2.7,1.8,3.6l23.8,18.1c.2,.1,.4,.3,.6,.4,.4,.2,1.2,.9,1.5,1.4-.6,.8-4.1,4.4-21.7,8.2h-2c-1.4,0-2.6,.6-3.5,1.5-7.2,8.4-3.7,16.1-.9,22.3,.9,1.9,1.7,3.8,2.3,5.7,.4,1,.7,1.9,1,2.8s.7,1.9,.9,2.7c-.1,0-.2,.1-.4,.1-12.4,3.5-19.5,3.1-31.2,2-2.5-.2-4.7,1.6-5,4.1-.2,2.4,1.7,4.7,4.1,4.9,5,.5,9.3,.8,13.5,.8,3.6,0,7.2-.2,11.1-.9,1.2-1.5,3.4-2.1,5.3-1.3q.1,.1,.3,.2c1.4-.4,2.8-.7,4.3-1.2,3-.9,5.1-2.4,6.2-4.5,1.7-3.4,.4-6.9-.6-10-.3-.8-.6-1.7-.8-2.4-.8-2.4-1.8-4.7-2.7-6.8-2.5-5.5-3.5-8.1-1.7-11.1h.2v.1Zm-4.8,36c-.1-.1-.2-.1-.3-.2-1.9-.8-4.1-.2-5.3,1.3-.3,.3-.5,.6-.6,1-2.8,6.4-4.5,13-6.2,19.4-1.7,6.3-3.2,12.2-5.7,17.9-4,9.2-15.8,8.5-30.8,6.6-2.5-.4-5-.6-7.1-.8-18-1.5-80.9-22.7-94-47.3-3.1-5.9-3.1-11.5,.1-17.1,1.2-2.2,.5-4.9-1.7-6.2-2.2-1.2-4.9-.4-6.1,1.7-4.7,8.3-4.8,17.2-.2,25.9,8.6,16.1,31.8,28.8,49.8,36.6,9.1,4,18.4,7.3,26.7,9.9v39.6c0,2.5,2,4.5,4.5,4.5s4.5-2,4.5-4.5v-37.1c6.6,1.7,12,2.7,15.6,3.1,2,.1,4.3,.4,6.8,.8,4.5,.6,9.9,1.2,15.1,1.2,10.2,0,20.4-2.5,25.1-13.1,2.8-6.3,4.5-12.9,6.1-19.2,1.7-6.3,3.2-12.3,5.8-18.1,.9-2.3-.1-4.8-2.1-5.9Zm8.6-159.4c-2.4-.9-5,.4-5.8,2.7-.9,2.4,.4,5,2.7,5.8,12.9,4.5,16.3,8.6,16.3,10.4,0,4.1-15.3,14.2-62,19.9v-8.6c0-1.7-.9-3.2-2.4-4s-3.3-.6-4.7,.3l-19.4,13.7c-1.2,.8-1.9,2.2-1.9,3.7s.7,2.9,1.9,3.7l19.5,13.7c.7,.5,1.7,.8,2.6,.8,.7,0,1.4-.1,2.1-.5,1.4-.8,2.4-2.3,2.4-4v-9.6c28.3-3.3,71-11.3,71-29,0-7.5-7.3-13.8-22.3-19Zm7.8-40.2l-3.6,15.7-2.5-15.9-15-3.7,15.2-2.7,3.6-15.7,2.5,15.9,15,3.7-15.2,2.7Zm14.2,30.2l-2.4,10.3-1.6-10.4-9.8-2.4,10-1.7,2.4-10.3,1.6,10.4,9.8,2.4-10,1.7ZM45.2,263.1l-4.1,17-2.9-17.3-17-4.1,17.3-2.9,4.1-17,2.9,17.3,17,4.1-17.3,2.9Zm16.2,32.9l-2.7,11.1-1.9-11.3-11.1-2.7,11.3-1.9,2.7-11.1,1.9,11.3,11.1,2.7-11.3,1.9Z"/>
                        </svg>
                        <h3>Step 6. Nurturing</h3>
                        <p>You will have ongoing check-ins to support both you and your {{ env('APP_NAME') }} Professional throughout
                            your partnership with {{ env('APP_NAME') }}.</p>
                    </div>
                </div>

            </div>
            <div class="row call-to-action-row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <a class="btn" href="{{ route('get_started') }}"><span>Hire {{ env('APP_NAME') }}</span></a>
                </div>
            </div>
        </div>
    </section>



    <section id="Full Banner CTA Section Title" class="full-banner-cta" style="background-color:#b4f7d4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 text-center">
                    <h2 class="text-center">Getting started is the easiest thing you’ll do today.</h2>
                    <a class="btn" href="{{ route('get_started') }}">Hire {{ env('APP_NAME') }}</a>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>


    <section id="talk-to-sales-steps-section-title" class="talk-to-sales-steps" style="background-color:#fff;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 left-column">
                    <h2 class="text-left">The {{ env('APP_NAME') }} Difference</h2>
                    <a class="btn" href="{{ route('get_started') }}"><span>Hire {{ env('APP_NAME') }}</span></a></div>
                <div class="col-sm-12 col-md-12 col-lg-8 right-column layout-2">
                    <div class="boxed-column boxed-hover-on">
                        <div class="boxed-column-inner gradient-icon-parent layout-center">
                            <svg id="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 441.04 291.37">
                                <defs>
                                    <style>.c {
                                            fill: url(#b);
                                        }</style>
                                    <linearGradient id="b" x1="0" y1="145.68" x2="441.04" y2="145.68"
                                                    gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#12d678"/>
                                        <stop offset="1" stop-color="#377da1"/>
                                    </linearGradient>
                                </defs>
                                <path class="c"
                                      d="M212.56,291.37c-1.5,0-3.07-.15-4.71-.45-10.11-1.86-22.52-9.56-25.87-22.09-3.96-14.81-7.54-19.48-8.87-20.79-4.85,2.53-14.23,4.62-25.77-6.55-4.69-4.54-9.49-10.97-14.27-19.09-1.46-2.47-2.26-3.17-2.46-3.32-1.2-.22-5.27,.72-8.56,1.48-1.4,.32-2.91,.67-4.55,1.03-17.19,3.73-50.04-3.59-60.2-21.36-2.62-4.58-3.85-4.3-8.42-3.26-1.84,.42-3.74,.85-5.85,.85-7.38,0-11.71-6.71-17.2-15.21-3.58-5.54-8.03-12.43-12.24-15.66C3.44,159.16,.86,136.67,.22,123.96c-1.04-20.83,1.63-40.95,7.34-55.21,3.67-9.18,5.42-18.66,7.1-27.82C17.98,22.9,21.4,4.27,41.23,.18c1.19-.25,2.42-.25,3.62,0,1.17,.24,117.36,23.84,186.37,25.06,20.74,.37,25.55,2.05,30.33,7.25,.42,.45,.44,.47,.52,.52,.37,.24,3.99,2.32,19.46,2.32,12.11,0,27.71,3.84,35.16,14.6,2.6,3.76,14.15,10.48,23.36,14.56,4.07,1.8,6.22,6.31,5.05,10.6l-4.3,15.77c2.04-1.48,3.97-3.21,5.4-5.16,.77-1.05,1.51-2.08,2.23-3.08,6.24-8.68,12.69-17.65,24.1-17.02,4.36-1.38,16.22-12.86,21.6-20.26,.67-.93,1.67-2.42,2.82-4.15,10.1-15.15,18.03-25.82,27.98-24.97,4.62,.39,8.47,3.32,10.57,8.04,4.73,10.63,10.73,40.58-2.46,51.58-1.81,1.51-3.69,2.89-5.51,4.23-5.82,4.29-9.36,7.13-9.36,10.3,0,11.55-1.13,17.65-8.14,25.54-1.67,1.95-3.29,10.88-3.41,16.54l.02,19.48c1.54,24.42-9.97,32.87-16.97,35.74-9.26,3.79-19.22,11.36-16.81,20.22l.7,2.54c2.09,7.61,6.45,23.44,9.5,37.63,5.34,24.83,4.73,33.65-2.6,37.74-2.91,1.62-8.85,3.2-15.94-4.44-5.59-6.03-10.95-13.7-16.12-21.11-5.16-7.4-10.5-15.05-15.36-19.89-3.8-3.79-6.22-4.78-7.13-4.49-3.83,1.22-7.34,2.67-10.73,4.07-10.26,4.23-21.88,9.02-32.57-.13-5.42-4.64-17.53-4.01-23.58,1.23-.22,.19-19.78,16.99-34.37,15.89-1.25,3.14-2.25,9.17,.4,13.98,4.17,7.57,1.32,12.96-.1,14.92-2.61,3.62-7,5.54-12.4,5.54Zm-3.16-11.57h0Zm-36.04-50.07c2.12,0,4.22,.42,6.23,1.27,8.38,3.53,14.66,14.07,19.77,33.17,.88,3.28,3.87,5.75,6.88,7.3-2.45-10.84,.6-22.58,6.24-28.66,4.57-4.92,9.96-5.26,13.78-3.85,3.06-.18,12.76-4.43,20.97-11.54,12.87-11.16,34.87-11.76,47.08-1.29,1.92,1.64,4.27,1.17,13.99-2.84,3.55-1.47,7.58-3.13,12.11-4.58,17.13-5.47,30.15,13.18,42.74,31.23,.9,1.29,1.81,2.59,2.71,3.88-1.84-8.71-4.85-21.08-9.68-38.63l-.71-2.58c-4.53-16.63,6.2-32.96,27.36-41.61,5.9-2.41,6.18-12.28,5.82-17.94-.04-.63-.06-1.09-.06-1.33v-19.37c0-.19,.09-19.56,7.95-28.41,2.91-3.27,3.59-4.39,3.59-13.58,0-12.5,9.64-19.61,16.68-24.79,1.65-1.21,3.21-2.36,4.59-3.51,2.06-2.54,2.3-14.02-.18-23.92-3.51,4.28-7.61,10.43-9.33,13.02-1.26,1.9-2.36,3.53-3.25,4.76-.2,.28-20.57,27.69-36.01,27.69-.35,0-.7-.01-1.04-.04-1.67-.15-5.66,5.46-8.6,9.55-.75,1.04-1.52,2.11-2.32,3.21-8.39,11.44-22.97,16.55-24.6,17.1-2.42,.81-5.06,.55-7.28-.71-2.22-1.26-3.8-3.39-4.35-5.88l-2.52-11.36c-.32-1.43-.28-2.91,.1-4.32l3.7-13.57c-7.71-3.93-19.1-10.54-23.87-17.43-3.11-4.49-12.6-6.85-20.36-6.85-14.72,0-23.75-1.62-29.31-5.25-1.98-1.29-3.19-2.61-3.92-3.4-.03-.03-.06-.06-.08-.09-1.1-.36-4.88-1.13-17.32-1.35-66.35-1.17-171.04-21.68-187.58-25-5.69,1.99-7.7,8.29-10.95,25.95-1.76,9.56-3.75,20.4-8.09,31.25-4.59,11.47-6.88,28.88-6.12,46.57,.81,19.01,4.75,28.99,6.45,30.69,6.68,5.13,12.05,13.46,16.37,20.15,1.36,2.1,3.06,4.75,4.35,6.47,5.85-1.32,18.61-3.8,27.62,11.97,4.33,7.57,26.94,15.71,40.75,12.71,1.56-.34,3-.67,4.33-.98,11.11-2.56,21.61-4.98,30.57,10.26,8.69,14.76,14.67,18.53,16.29,18.76,2.74-1.52,5.63-2.29,8.48-2.29Zm46.22,25.93h0Zm-47.02-8.09h0ZM24.62,152.71h0Zm-.09-.07h0Zm382.08-.91h0Zm-33.49-86.09h0Zm48.28-3.52h0ZM170.94,190.63c-.94,0-1.63-.16-2.3-.31-2.53-.58-4.66-2.1-6-4.28-1.82-2.96-3.4-5.54,4.39-40.52-2.9-2.38-6.88-5.69-10.83-9.17-13.8-12.15-19.07-18.4-15.98-25.66,2.56-6.03,8.83-8.27,27.91-9.99,5.08-.46,10.05-.76,13.71-.95,1.45-3.43,3.45-8.11,5.59-12.83,8.22-18.23,11.41-23.17,18.16-23.17,6.2,0,8.97,5.29,11.66,10.41,1.62,3.1,3.69,7.36,6.16,12.69,2.19,4.74,4.33,9.52,5.85,12.97,36.63,2.2,39.13,6.41,41.16,9.82,4,6.72-1.69,12.66-5.08,16.2-2.45,2.56-5.93,5.88-10.33,9.89-3.98,3.62-7.97,7.11-10.84,9.59,.86,3.67,2.02,8.8,3.1,14.03,1.2,5.8,2.06,10.53,2.54,14.04,.67,4.92,1.69,12.34-4.55,15.82-5.21,2.9-10.12,1.36-27.64-8.7-4.48-2.57-8.82-5.18-11.97-7.1-23.68,14.81-31.05,17.25-34.71,17.25Zm-6.88-71.43c5.17,4.77,12.23,10.75,18.57,15.77,2.72,2.15,3.96,5.68,3.19,9.06-1.74,7.61-3.53,16.14-4.83,23.04,6-3.39,13.34-7.81,19.77-11.9,2.93-1.87,6.67-1.88,9.62-.03,6.54,4.1,14.01,8.54,20.08,11.92-1.34-6.84-3.22-15.35-5.07-22.89-.81-3.32,.32-6.8,2.93-9.01,6.03-5.1,12.68-10.99,17.83-15.78-6.88-.82-15.63-1.53-23.37-1.92-3.42-.17-6.45-2.27-7.81-5.42-3.06-7.07-6.57-14.89-9.55-21.19-2.9,6.24-6.27,14.02-9.14,21.03-1.34,3.29-4.49,5.48-8.04,5.59-8.04,.26-17.23,.91-24.19,1.73Zm23.89-10.72h0Z"/>
                            </svg>
                            <h3>U.S.-Based Professionals</h3>
                            <p>Our Professionals are all based in the U.S. with vetted and proven experience.</p>
                        </div>
                    </div>
                    <div class="boxed-column boxed-hover-on">
                        <div class="boxed-column-inner gradient-icon-parent layout-center">
                            <svg id="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 402.76 264.76">
                                <defs>
                                    <style>.c {
                                            fill: url(#b);
                                        }</style>
                                    <linearGradient id="b" x1="0" y1="132.38" x2="402.76" y2="132.38"
                                                    gradientTransform="matrix(1, 0, 0, 1, 0, 0)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#12d678"/>
                                        <stop offset="1" stop-color="#377da1"/>
                                    </linearGradient>
                                </defs>
                                <path class="c"
                                      d="M401.23,209.93c-1.95-3.17-5.28-5-9.01-5h-20.02V21.02c0-11.57-9.45-21.02-21.02-21.02H52c-11.62,0-21.02,9.45-21.02,21.02V204.92H10.51c-3.5,0-6.73,1.67-8.68,4.56-1.95,2.84-2.39,6.51-1.11,9.73l9.68,25.02c4.73,12.29,16.74,20.52,29.92,20.52H359.02c12.12,0,23.02-6.67,28.58-17.41l13.96-27.14c1.72-3.28,1.56-7.12-.33-10.29ZM47.66,21.02c0-2.39,1.95-4.34,4.34-4.34H351.18c2.39,0,4.34,1.95,4.34,4.34V204.92H47.66V21.02ZM372.75,239.73c-2.67,5.12-7.9,8.34-13.74,8.34H40.32c-6.34,0-12.12-3.95-14.4-9.9l-6.4-16.57H382.1l-9.34,18.13ZM69.62,40.48V184.63H333.55V40.48H69.62Zm11.12,11.12h241.68v16.68H80.75v-16.68Zm241.68,121.9H80.75V79.41h241.68v94.09Z"/>
                            </svg>
                            <h3>No Overhead Costs</h3>
                            <p>Keep costs low by hiring someone remotely and skipping the overhead.</p>
                        </div>
                    </div>
                    <div class="boxed-column boxed-hover-on">
                        <div class="boxed-column-inner gradient-icon-parent layout-center">
                            <svg id="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 381.23 336.19">
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
                                        <stop offset="0" stop-color="#12d678"/>
                                        <stop offset="1" stop-color="#377da1"/>
                                    </linearGradient>
                                    <linearGradient id="c" x1="1.16" x2="380.07" xlink:href="#b"/>
                                </defs>
                                <path class="d"
                                      d="M376.86,127.04c-.69-1.45-1.94-2.55-3.47-3.04l-82.61-26.33s-.02,0-.03,0c-.3-.09-.61-.16-.93-.2-.09-.01-.19-.02-.28-.03-.24-.02-.47-.03-.71-.02-.09,0-.18,0-.26,0-.03,0-.05,0-.08,0l-35.73,3.31c3.99-10.64,5.97-19.37,5.97-26.3,0-38.55-31.36-69.91-69.91-69.91s-69.91,31.36-69.91,69.91c0,4.62,.88,10.04,2.65,16.29l-27.61-8.8c-2.84-.91-5.9,.49-7.07,3.23L4.29,277.49c-.63,1.47-.63,3.15,.02,4.62,.65,1.47,1.88,2.6,3.39,3.13l87.17,30.37s.03,0,.05,.01c.25,.09,.51,.15,.78,.2,.08,.02,.16,.03,.24,.04,.26,.04,.52,.06,.78,.07,.02,0,.04,0,.06,0,.06,0,.13-.01,.19-.01,.19,0,.38-.01,.57-.04h.1l108.2-14.44,85.87,29.91c.63,.22,1.27,.32,1.9,.32,2.31,0,4.48-1.39,5.38-3.65l78.02-196.37c.59-1.49,.54-3.16-.15-4.61Zm-246.38-52.6c0-32.22,26.12-58.34,58.34-58.34s58.34,26.12,58.34,58.34-58.34,115.84-58.34,115.84c0,0-58.34-83.62-58.34-115.84Zm128.02,85.17l-56.08,130.62-96.62,12.88,17.47-43.96,36.57-92.03c10.52,16.89,19.03,29.13,19.5,29.79l9.49,13.6,9.49-13.6c.61-.87,15.02-21.57,29.67-46.62,8.28-14.15,14.85-26.6,19.76-37.46l32.13-2.98-21.36,49.76Zm-108.84-9.32c.88,1.5,1.76,2.99,2.63,4.46l-58.85,148.11-76.07-26.5L95.43,94.54l30.86,9.84c5.1,12.7,12.86,27.93,23.37,45.9Zm64.54,141.82l78.06-181.81,71.7,22.85-73.69,185.46-76.07-26.5Zm-25.39-180.94c21.33,0,38.67-17.35,38.67-38.67s-17.35-38.67-38.67-38.67-38.67,17.35-38.67,38.67,17.35,38.67,38.67,38.67Zm0-65.78c14.97,0,27.1,12.14,27.1,27.1s-12.13,27.1-27.1,27.1-27.1-12.14-27.1-27.1,12.13-27.1,27.1-27.1Z"/>
                            </svg>
                            <h3>Fully Managed Onboarding & Support</h3>
                            <p>Our team guides you through every step of the process—as you onboard and beyond.</p>
                        </div>
                    </div>
                    <div class="boxed-column boxed-hover-on">
                        <div class="boxed-column-inner gradient-icon-parent layout-center">
                            <svg in="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 640 512">
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
                                        <stop offset="0" stop-color="#12d678"/>
                                        <stop offset=".76" stop-color="#377da1"/>
                                    </linearGradient>
                                    <linearGradient id="c" x1="3.97" y1="162.64" x2="351.23" y2="162.64"
                                                    xlink:href="#b"/>
                                </defs>
                                <path class="d"
                                      d="M384 64c0 29.8-20.4 54.9-48 62V480H528c8.8 0 16 7.2 16 16s-7.2 16-16 16H320 112c-8.8 0-16-7.2-16-16s7.2-16 16-16H304V126c-27.6-7.1-48-32.2-48-62H112c-8.8 0-16-7.2-16-16s7.2-16 16-16H264.6C275.6 12.9 296.3 0 320 0s44.4 12.9 55.4 32H512c8.8 0 16 7.2 16 16s-7.2 16-16 16H384zm56.7 298.3C457.8 375.1 482.9 384 512 384s54.2-8.9 71.3-21.7C600.4 349.5 608 334.2 608 320H416v-1.6l0 .1V320c0 14.2 7.6 29.5 24.7 42.3zm71.3-215L426.3 288H597.7L512 147.3zM384 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96s-128-43-128-96zM32 320c0 14.2 7.6 29.5 24.7 42.3C73.8 375.1 98.9 384 128 384s54.2-8.9 71.3-21.7C216.4 349.5 224 334.2 224 320H32v-1.6l0 .1V320zm10.3-32H213.7L128 147.3 42.3 288zM128 416C57.3 416 0 373 0 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96zM320 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                            </svg>
                            <h3>Flexible Service Plans</h3>
                            <p>Only pay for what you need. And if your needs change, so can your commitment.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="embed-full-screen">
        <a href="#" class="close-full-screen"><i class="bi bi-x-circle"></i></a>
        <div class="embed-container">
            <iframe id="belay-brand-story-video" width="560" height="315"
                    src="https://www.youtube.com/embed/8P-Ay8kUOqI" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </div>



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


    <section id="testimonials-boxed-section-title" class="testimonials-boxed" style="background-color: ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5 class="text-center">What They're Saying</h5>
                    <div class="hr"></div>
                    <i class="bi bi-quote"></i>
                </div>
            </div>
            <div class="row">
                <div class="testimonials-flexslider">
                    <ul class="slides">
                        <li class="testimonial-slide">
                            <p class="text-center">“I must admit that we were a little skeptical at first, but after
                                getting lectured by Michael Hyatt for a year, we finally decided we'd try a VA. Michael
                                was right – having Kaitie has been a godsend this month. She has helped tie up so many
                                loose ends and free up our time to concentrate on moving the business forward."</p>
                        </li>
                        <li class="testimonial-slide">
                            <p class="text-center">“I never realized how much time I was spending on scheduling and
                                admin tasks until I was able to see all that she has done and does daily. Having my
                                meetings spaced and strategically placed has been so incredibly helpful. She is
                                wonderful!”</p>
                        </li>
                        <li class="testimonial-slide">
                            <p class="text-center">"How have I run a business for 13 years without Michelle and all that
                                she does? She has opened my eyes to a lot of things and I really feel like I can start
                                serving my clients well again.”</p>
                        </li>
                        <li class="testimonial-slide">
                            <p class="text-center">“No other way to say it – VA Josephine is a superstar! She is the
                                missing piece to our organization and we’re are now asking ourselves, ‘What would we do
                                without Josephine?’"</p>
                        </li>
                        <li class="testimonial-slide">
                            <p class="text-center">“This is the best decision I ever made! My business is growing really
                                well and Allie has been hugely influential in aiding the growth and creating processes
                                that allow us to scale well.”</p>
                        </li>
                        <li class="testimonial-slide">
                            <p class="text-center">"Kelli is doing a great job. She is very proactive and has already
                                figured out how to stay one step ahead. I love that she is very resourceful and just
                                gets in there to figure things out. I was very nervous about not being able to interview
                                the candidates, but I'm so happy that I trusted the process. {{ env('APP_NAME') }} has found me the
                                perfect match!"</p>
                        </li>
                        <li class="testimonial-slide">
                            <p class="text-center">“Can you clone Camille? If so, we’d like two more, please! Camille is
                                everything. I recommend {{ env('APP_NAME') }} to anyone who will listen because of how much Camille has
                                changed my life for the better.”</p>
                        </li>
                        <li class="testimonial-slide">
                            <p class="text-center">“I want to thank you for helping us to figure out how best to use
                                VAs. Because of the quality of your work and responsiveness, you've helped me build
                                confidence with the team that they can let go of tasks and trust you to support them.
                                That's huge!”</p>
                        </li>
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



    <section id="talk-to-sales-banner-section-title" class="talk-to-sales-banner">
        <div class="container">
            <div class="row d-flex flex-row justify-content-center">
                <div class="col-sm-6 text-left">
                    <h2 class="text-left">Work can be stressful.<br>Hiring doesn't have to be.</h2>
                    <p>When you realize you need help, the last thing you want is to spend hundreds of hours trying to
                        find it.<br><br>{{ env('APP_NAME') }} takes the hassle out of hiring by intentionally matching you with
                        exceptional Virtual Assistants, Accounting Professionals, and Marketing Assistants.</p>
                </div>
                <div class="col-sm-6 text-right d-flex flex-column justify-content-center">
                    <div class="outter-button d-flex flex-row justify-content-end">
                        <a class="btn" href="{{ route('get_started') }}">Hire {{ env('APP_NAME') }}<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>


@endsection
