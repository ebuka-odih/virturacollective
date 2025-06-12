@extends('pages.layout.app')
@section('content')

    <div id="page" class="site">


        @include('pages.layout.header')

        <main id="primary" class="site-main">


            <article id="post-24446" class="post-24446 page type-page status-publish has-post-thumbnail hentry">

                <header id="hero" class="hero hero-type__content hero-template__service"
                        style="background-image: url('../../wp-content/uploads/2022/05/AdobeStock_244542502-2-scaled-e1649954683418.jpg');">
                    <div class="hero-overlay"></div>
                    <div class="container above-overlay" id="gf_3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Your Finances. <u>Done Right.</u><br></h1>
                                <h2 style="color: #ffffff">Scalable Accounting Solutions from {{ env('APP_NAME') }}
                                    .</h2>
                                <h5 class="secondary">From CFOs and Tax Services to Bookkeepers and Full-Service
                                    Payroll,<br>Your Outsourced, AI-Empowered Finance Department is Just One Click Away.
                                </h5>
                                <p></p>
                                <a class="btn" id="hero-cta-btn"
                                   href="{{ route('get_started') }}"><span>HIRE {{ env('APP_NAME') }}</span></a></div>
                        </div>
                        <div class="row hero-columns-below">
                            <div class="col-sm-12 col-md-4 col-lg-4 hero-column">
                                <p class="icon text-center"><i class="fa-thin fa-receipt"></i></p>
                                <h4 class="text-center">BOOKKEEPING SERVICES</h4>
                                <p class="text-center">Our Bookkeepers are experts at delivering transparent and
                                    accurate GAAP-compliant financial information, managing accounts payable and
                                    receivable, and generating precise monthly and annual reports.<br><br><a
                                        href="../bookkeeping/index.html"
                                        style="color: #12d678;font-weight: 900;letter-spacing: 0.2em;text-decoration: underline">LEARN
                                        MORE</a></p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 hero-column">
                                <p class="icon text-center"><i class="fa-thin fa-scale-balanced"></i></p>
                                <h4 class="text-center">CONTROLLER SERVICES</h4>
                                <p class="text-center">Our fractional Controllers serve as your integrated lead
                                    accountant, create your financial strategy, implement internal accounting
                                    procedures, and help you prepare accurate and timely reporting.<br><br><a
                                        href="../controller/index.html"
                                        style="color: #12d678;font-weight: 900;letter-spacing: 0.2em;text-decoration: underline">LEARN
                                        MORE</a></p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 hero-column">
                                <p class="icon text-center"><i class="fa-thin fa-money-bill-trend-up"></i></p>
                                <h4 class="text-center">CFO SERVICES</h4>
                                <p class="text-center">By partnering with you, your partners, or executives, our CFOs
                                    develop and drive the overall financial strategy of your organization by developing
                                    strategic plans with a deep understanding of underlying economics.<br><br><a
                                        href="../cfo-services/index.html"
                                        style="color: #12d678;font-weight: 900;letter-spacing: 0.2em;text-decoration: underline">LEARN
                                        MORE</a></p>
                            </div>
                        </div>
                    </div>
                </header>
            </article>
        </main>
    </div>

    <div class="entry-content">


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

        <section id="tiles_title" class="tiles" style="background-color:#ffffff ">
            <!-- Mobile only -->
            <div class="container services-module-mobile">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="text-center"><span
                                style="font-family: roboto condensed,sans-serif; text-transform: uppercase;">Maybe you need all the help.<br><em>Maybe you only need a little.</em></span>
                        </h2>
                        <p class="text-center tiles-title-sub">With {{ env('APP_NAME') }}’s customizable outsourced financial team, we
                            have just the right solution for you and your growing organization. </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div id="tiles-accordian" class="row">
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1551">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1551"
                                                aria-expanded="false" aria-controls="collapse-1551">
                                            <span>Bookkeeping</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1551" class="collapse" aria-labelledby="heading-1551"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-receipt"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Our Accounting
                                        Professionals are experts at delivering transparent, streamlined, and accurate
                                        GAAP-compliant financial information, managing accounts payable and receivable,
                                        and generating precise monthly and annual reports — supported by AI-enhanced
                                        tools for added accuracy and efficiency. This empowers you to steer your
                                        organization efficiently, enhance your ability to analyze operations, and make
                                        informed decisions for the growth of your organization.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../bookkeeping/index.html">Learn More About {{ env('APP_NAME') }}'s<br>Bookkeeping
                                        Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1552">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1552"
                                                aria-expanded="false" aria-controls="collapse-1552">
                                            <span>Outsourced Accounting Services</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1552" class="collapse" aria-labelledby="heading-1552"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-calculator"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">{{ env('APP_NAME') }}’s outsourced
                                        accounting services go beyond basic bookkeeping — think of us as your complete
                                        financial team. As your virtual accounting department, we handle everything from
                                        bank reconciliations and invoicing to payroll processing, sales tax filings, and
                                        financial reporting, enhanced by AI-powered tools for greater accuracy and
                                        efficiency.</p>
                                    <p>&nbsp;</p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">With a team of professional
                                        bookkeepers and CPAs, we offer a bundled, back-office solution to keep your
                                        finances in order so you can focus on growing your business. Let us take the
                                        stress out of accounting while you lead with confidence.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../outsourced-accounting-solutions/index.html">Learn
                                        More About {{ env('APP_NAME') }}'s<br>Outsourced Accounting Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1553">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1553"
                                                aria-expanded="false" aria-controls="collapse-1553">
                                            <span>Inventory Consulting Services</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1553" class="collapse" aria-labelledby="heading-1553"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-cart-flatbed"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">We support CPG companies
                                        and inventory-based businesses that manage, restock, and sell inventory. Our
                                        team streamlines processes — leveraging AI-powered insights — to create
                                        efficient, scalable operations.</p>
                                    <p>&nbsp;</p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">With regular financial and
                                        inventory reviews, we help you stay ahead on order fulfillment, sales channels,
                                        and restocking. Whether you need an inventory management system or support for
                                        an existing one, our experts handle implementation, consulting, technical
                                        support, and data maintenance — so you can focus on growth.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../inventory-consulting/index.html">Learn More
                                        About {{ env('APP_NAME') }}'s<br>Inventory Consulting Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1554">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1554"
                                                aria-expanded="false" aria-controls="collapse-1554">
                                            <span>Accounting Clerks</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1554" class="collapse" aria-labelledby="heading-1554"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i
                                            class="fa-classic fa-thin fa-file-invoice-dollar"
                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Accounting Clerks, adept
                                        financial professionals, wield their data-entry expertise to seamlessly support
                                        accounts payable, accounts receivable, and other vital transactional processes
                                        integral to the bookkeeping cycle. Leveraging AI-enhanced tools for greater
                                        accuracy and speed, they diligently organize documents and expertly apply
                                        incoming and outgoing payments with precision to ensure accurate account
                                        management.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../accounting-clerk/index.html">Learn More About
                                        {{ env('APP_NAME') }}'s<br>Accounting Clerk Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1555">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1555"
                                                aria-expanded="false" aria-controls="collapse-1555">
                                            <span>Full-Service Payroll</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1555" class="collapse" aria-labelledby="heading-1555"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i
                                            class="fa-classic fa-thin fa-clock-rotate-left"
                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Empower your business with
                                        a proactive {{ env('APP_NAME') }} Accounting Professional who skillfully manages every facet of
                                        payroll so you don’t have to.</p>
                                    <p>&nbsp;</p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">From efficiently processing
                                        payroll and facilitating direct deposits to conducting precise payroll
                                        calculations and generating comprehensive year-end tax reports, our Accounting
                                        Professionals — supported by AI-enhanced tools—handle quarterly and year-end tax
                                        filing and payments with precision, going above and beyond for your financial
                                        peace of mind.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../../payroll/index.html">Learn More About
                                        {{ env('APP_NAME') }}'s<br>Fully Managed Payroll Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1556">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1556"
                                                aria-expanded="false" aria-controls="collapse-1556">
                                            <span>Tax Services</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1556" class="collapse" aria-labelledby="heading-1556"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i
                                            class="fa-classic fa-thin fa-money-check-dollar-pen" aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Our expert CPAs handle
                                        business and personal tax preparation, ensuring compliance and minimizing
                                        stress. We review legal and tax structures for new and restructuring companies,
                                        offer strategic planning for future liabilities, and help resolve past filing
                                        issues—with the support of AI-enhanced tools for greater accuracy and
                                        insight.</p>
                                    <p>&nbsp;</p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Year-round, we provide tax
                                        advisory services, manage quarterly, sales, franchise, and personal property tax
                                        payments, and handle 1099 filings — so you can focus on what matters most.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../tax-services/index.html">Learn More About
                                        {{ env('APP_NAME') }}'s<br>Tax Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1557">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1557"
                                                aria-expanded="false" aria-controls="collapse-1557">
                                            <span>Controller</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1557" class="collapse" aria-labelledby="heading-1557"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-scale-balanced"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Our fractional Controllers
                                        serve as your integrated lead accountant, creating your financial strategy,
                                        implementing internal accounting procedures, and helping you navigate financial
                                        reporting—including preparing accurate and timely monthly financial reporting,
                                        supported by AI-driven insights.</p>
                                    <p>&nbsp;</p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">They also provide
                                        senior-level oversight for purchasing, invoicing, asset management, human
                                        capital management, and cash-flow analyses, the preparation of detailed budgets
                                        and forecasts, and the analyses of their performance and benchmarking.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../controller/index.html">Learn More About
                                        {{ env('APP_NAME') }}'s<br>Controller Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1558">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1558"
                                                aria-expanded="false" aria-controls="collapse-1558">
                                            <span>CFO Services</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1558" class="collapse" aria-labelledby="heading-1558"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i
                                            class="fa-classic fa-thin fa-money-bill-trend-up"
                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Our fractional CFOs act as
                                        your integrated financial executive. By partnering with you, your partners, or
                                        executives, they develop and drive the overall financial strategy of your
                                        organization by developing strategic plans with a deep understanding of
                                        underlying economics.</p>
                                    <p>&nbsp;</p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">They bring strategic
                                        knowledge and insight to provide a comprehensive service that includes
                                        conducting rigorous financial reviews, modeling, planning and analyses —
                                        supported by AI-powered forecasting tools — orchestrating strategic profit
                                        planning and execution, and actively serving as a liaison with seasoned tax
                                        experts, lenders, and investors to optimize your organization’s financial
                                        landscape.</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../cfo-services/index.html">Learn More About
                                        {{ env('APP_NAME') }}'s<br>CFO Services</a>
                                </div>
                            </div>
                            <div class="tile col-md-12">
                                <div class="tile-header" id="heading-1559">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-center collapsed tiles-btn"
                                                data-toggle="collapse" data-target="#collapse-1559"
                                                aria-expanded="false" aria-controls="collapse-1559">
                                            <span>Enterprise Solutions</span>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse-1559" class="collapse" aria-labelledby="heading-1559"
                                 data-parent="#tiles-accordian">
                                <div class="tile-body text-center">
                                    <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-business-time"
                                                                            aria-hidden="true"></i></span><br>
                                    <p class="caption-body"></p>
                                    <p style="text-align: left; width: 80%; margin: 0 auto;">Our Enterprise Accounting
                                        Solutions help larger businesses streamline their systems, identify growth
                                        opportunities, and make strategic financial decisions to take their
                                        organizations to the next level. With AI-supported insights and a team of
                                        experts at every level of the financial process, we build a unified financial
                                        strategy to help you lead your business with confidence.</p>
                                    <p>&nbsp;</p>
                                    <p></p>
                                    <a class="btn caption-btn" href="../enterprise-accounting/index.html">Learn More
                                        About {{ env('APP_NAME') }}'s<br>Enterprise Solutions</a>
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
                        <h2><span style="font-family: roboto condensed,sans-serif; text-transform: uppercase;">Maybe you need all the help.<br><em>Maybe you only need a little.</em></span>
                        </h2>
                        <p>With {{ env('APP_NAME') }}’s customizable outsourced financial team, we have just the right solution for you
                            and your growing organization. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <!-- Left column with buttons -->
                        <button class="btn service-btn selected" id="btn-1">Bookkeeping</button>
                        <button class="btn service-btn" id="btn-2">Outsourced Accounting Services</button>
                        <button class="btn service-btn" id="btn-3">Inventory Consulting Services</button>
                        <button class="btn service-btn" id="btn-4">Accounting Clerks</button>
                        <button class="btn service-btn" id="btn-5">Full-Service Payroll</button>
                        <button class="btn service-btn" id="btn-6">Tax Services</button>
                        <button class="btn service-btn" id="btn-7">Controller</button>
                        <button class="btn service-btn" id="btn-8">CFO Services</button>
                        <button class="btn service-btn" id="btn-9">Enterprise Solutions</button>
                    </div>
                    <div class="col-8">
                        <!-- Right column with content -->
                        <div class="content service-content active" id="content-1"
                             style="width: 776.656px; left: 0px; opacity: 1;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-receipt"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Our Accounting Professionals are
                                experts at delivering transparent, streamlined, and accurate GAAP-compliant financial
                                information, managing accounts payable and receivable, and generating precise monthly
                                and annual reports — supported by AI-enhanced tools for added accuracy and efficiency.
                                This empowers you to steer your organization efficiently, enhance your ability to
                                analyze operations, and make informed decisions for the growth of your organization.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../bookkeeping/index.html">Learn More About {{ env('APP_NAME') }}'s<br>Bookkeeping
                                Services</a>
                        </div>
                        <div class="content service-content active" id="content-2" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-calculator"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">{{ env('APP_NAME') }}’s outsourced accounting
                                services go beyond basic bookkeeping — think of us as your complete financial team. As
                                your virtual accounting department, we handle everything from bank reconciliations and
                                invoicing to payroll processing, sales tax filings, and financial reporting, enhanced by
                                AI-powered tools for greater accuracy and efficiency.</p>
                            <p>&nbsp;</p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">With a team of professional
                                bookkeepers and CPAs, we offer a bundled, back-office solution to keep your finances in
                                order so you can focus on growing your business. Let us take the stress out of
                                accounting while you lead with confidence.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../outsourced-accounting-solutions/index.html">Learn More
                                About {{ env('APP_NAME') }}'s<br>Outsourced Accounting Services</a>
                        </div>
                        <div class="content service-content active" id="content-3" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-cart-flatbed"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">We support CPG companies and
                                inventory-based businesses that manage, restock, and sell inventory. Our team
                                streamlines processes — leveraging AI-powered insights — to create efficient, scalable
                                operations.</p>
                            <p>&nbsp;</p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">With regular financial and
                                inventory reviews, we help you stay ahead on order fulfillment, sales channels, and
                                restocking. Whether you need an inventory management system or support for an existing
                                one, our experts handle implementation, consulting, technical support, and data
                                maintenance — so you can focus on growth.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../inventory-consulting/index.html">Learn More About
                                {{ env('APP_NAME') }}'s<br>Inventory Consulting Services</a>
                        </div>
                        <div class="content service-content active" id="content-4" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-file-invoice-dollar"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Accounting Clerks, adept financial
                                professionals, wield their data-entry expertise to seamlessly support accounts payable,
                                accounts receivable, and other vital transactional processes integral to the bookkeeping
                                cycle. Leveraging AI-enhanced tools for greater accuracy and speed, they diligently
                                organize documents and expertly apply incoming and outgoing payments with precision to
                                ensure accurate account management.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../accounting-clerk/index.html">Learn More About
                                {{ env('APP_NAME') }}'s<br>Accounting Clerk Services</a>
                        </div>
                        <div class="content service-content active" id="content-5" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-clock-rotate-left"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Empower your business with a
                                proactive {{ env('APP_NAME') }} Accounting Professional who skillfully manages every facet of payroll so
                                you don’t have to.</p>
                            <p>&nbsp;</p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">From efficiently processing payroll
                                and facilitating direct deposits to conducting precise payroll calculations and
                                generating comprehensive year-end tax reports, our Accounting Professionals — supported
                                by AI-enhanced tools—handle quarterly and year-end tax filing and payments with
                                precision, going above and beyond for your financial peace of mind.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../../payroll/index.html">Learn More About {{ env('APP_NAME') }}'s<br>Fully
                                Managed Payroll Services</a>
                        </div>
                        <div class="content service-content active" id="content-6" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-money-check-dollar-pen"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Our expert CPAs handle business and
                                personal tax preparation, ensuring compliance and minimizing stress. We review legal and
                                tax structures for new and restructuring companies, offer strategic planning for future
                                liabilities, and help resolve past filing issues—with the support of AI-enhanced tools
                                for greater accuracy and insight.</p>
                            <p>&nbsp;</p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Year-round, we provide tax advisory
                                services, manage quarterly, sales, franchise, and personal property tax payments, and
                                handle 1099 filings — so you can focus on what matters most.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../tax-services/index.html">Learn More About {{ env('APP_NAME') }}'s<br>Tax
                                Services</a>
                        </div>
                        <div class="content service-content active" id="content-7"
                             style="width: 776.656px; left: 100%; opacity: 0;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-scale-balanced"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Our fractional Controllers serve as
                                your integrated lead accountant, creating your financial strategy, implementing internal
                                accounting procedures, and helping you navigate financial reporting—including preparing
                                accurate and timely monthly financial reporting, supported by AI-driven insights.</p>
                            <p>&nbsp;</p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">They also provide senior-level
                                oversight for purchasing, invoicing, asset management, human capital management, and
                                cash-flow analyses, the preparation of detailed budgets and forecasts, and the analyses
                                of their performance and benchmarking.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../controller/index.html">Learn More About {{ env('APP_NAME') }}'s<br>Controller
                                Services</a>
                        </div>
                        <div class="content service-content active" id="content-8" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-money-bill-trend-up"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Our fractional CFOs act as your
                                integrated financial executive. By partnering with you, your partners, or executives,
                                they develop and drive the overall financial strategy of your organization by developing
                                strategic plans with a deep understanding of underlying economics.</p>
                            <p>&nbsp;</p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">They bring strategic knowledge and
                                insight to provide a comprehensive service that includes conducting rigorous financial
                                reviews, modeling, planning and analyses — supported by AI-powered forecasting tools —
                                orchestrating strategic profit planning and execution, and actively serving as a liaison
                                with seasoned tax experts, lenders, and investors to optimize your organization’s
                                financial landscape.</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../cfo-services/index.html">Learn More About {{ env('APP_NAME') }}'s<br>CFO
                                Services</a>
                        </div>
                        <div class="content service-content active" id="content-9" style="width: 776.656px;">
                            <!-- Content for button 1 -->
                            <span class="tile-icon caption-icon"><i class="fa-classic fa-thin fa-business-time"
                                                                    aria-hidden="true"></i></span>
                            <!-- Font awesome icon -->
                            <p></p>
                            <p style="text-align: left; width: 80%; margin: 0 auto;">Our Enterprise Accounting Solutions
                                help larger businesses streamline their systems, identify growth opportunities, and make
                                strategic financial decisions to take their organizations to the next level. With
                                AI-supported insights and a team of experts at every level of the financial process, we
                                build a unified financial strategy to help you lead your business with confidence.</p>
                            <p>&nbsp;</p>
                            <p></p> <!-- Paragraph -->
                            <a class="btn content-btn" href="../enterprise-accounting/index.html">Learn More About
                                {{ env('APP_NAME') }}'s<br>Enterprise Solutions</a>
                        </div>
                    </div>
                </div>
                <!-- Bottom right corner with arrows -->
                <div class="arrow-buttons">
                    <button class="arrow-btn" id="prev" style="background-color: rgb(216, 244, 223);"><i
                            class="fas fa-angle-left fa-2x"></i></button>
                    <button class="arrow-btn" id="next" style="background-color: rgb(18, 214, 120);"><i
                            class="fas fa-angle-right fa-2x"></i></button>
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


        <section id="cfo-graphic-container" class="code-content u-fade-type-down js-scroll-trigger is-active"
                 style="background-color: #f4f4f4;">
            <div class="container code-inner-content">
                <div class="row">
                    <div class="col-lg-12" style="padding: 5em 0;">
                        <div id="cfo-graphic-container">

                            <h3 style="text-align: center;">Your {{ env('APP_NAME') }} Outsourced Finance Department</h3>
                            <div class="cfo-graphic">
                                <div class="desktop-image">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="../../wp-content/uploads/2023/12/AS-controller-cfo-graphic-desktop.png.webp">
                                        <img
                                            src="../../wp-content/uploads/2023/12/AS-controller-cfo-graphic-desktop.png"
                                            width="100%">
                                    </picture>

                                </div>
                                <div class="mobile-image">
                                    <img src="../../wp-content/uploads/2023/12/AS-controller-cfo-graphic-mobile.png"
                                         width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="ai-banner" class="talk-to-sales-banner" style="background: #02293d;">
            <div class="container">
                <div class="row d-flex flex-row justify-content-center">
                    <div class="col-sm-6 text-left">
                        <h2 class="text-left">AI-Amplified Insights.<br>Human-Led Precision.</h2>
                        <p> Numbers don’t lie — but they don’t always explain themselves either.<br><br>That’s where
                            {{ env('APP_NAME') }}’s Accounting Services stand apart.<br><br>We pair vetted, U.S.-based Accounting
                            Professionals with AI systems that do more than automate — they illuminate. Our
                            professionals use proprietary, AI-enabled workflows to streamline reconciliations,
                            accelerate monthly closes, and surface real-time insights that support smarter business
                            decisions.<br><br>From organizing financial data and generating tailored reports to flagging
                            anomalies before they become issues, {{ env('APP_NAME') }}’s AI frameworks handle the repetition — so your
                            accountant can focus on interpretation and strategic guidance.<br><br>And because our AI is
                            trained on {{ env('APP_NAME') }}’s internal processes and best practices, it enhances — not replaces — the
                            judgment, discernment, and expertise of our team.<br><br>This is amplified financial support
                            that scales with you.</p>
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


        <section id="business-accounting-you-get-block" class="wysiwyg-content" style="background-color: #ffffff;">
            <div class="container wysiwyg-inner-content">
                <div class="row">
                    <div class="col-lg-12">
                        <p></p>
                        <h2 style="text-align: center;">Our nonprofit and business accounting services</h2>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><span
                                style="font-weight: 300;">With {{ env('APP_NAME') }}, you get a team of </span><i><span
                                    style="font-weight: 300;">real</span></i><span style="font-weight: 300;"> people – not a rotating team of faceless bots – but a team of seriously skilled, servant-hearted people to provide the </span><i><span
                                    style="font-weight: 300;">exact</span></i> AI-empowered <span
                                style="font-weight: 300;">nonprofit and business accounting services</span><span
                                style="font-weight: 300;"> you need.</span></p>
                        <p>&nbsp;</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>


        <section id="Three Up Boxed Steps Section Title" class="three-up-boxed-steps" style="background-color: ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>You get...</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <i class="fa-light fa-comments-dollar gradient-icon"></i>
                            <h3>An Accounting Professional</h3>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <i class="fa-light fa-trophy-star gradient-icon"></i>
                            <h3>A Talent Specialist</h3>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 boxed-column d-flex flex-column justify-content-flex-start">
                        <div
                            class="d-flex flex-column justify-content-flex-start boxed-column-inner gradient-icon-parent">
                            <i class=" fa-light fa-thumbs-up gradient-icon"></i>
                            <h3>A Client Success Consultant</h3>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="row call-to-action-row u-fade-type-down js-scroll-trigger">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <a class="btn" href="{{ route('get_started') }}"><span>HIRE {{ env('APP_NAME') }}</span></a>
                    </div>
                </div>
            </div>
        </section>


        <section id="business-accounting-info-block" class="wysiwyg-content" style="background-color: #f4f4f4;">
            <div class="container wysiwyg-inner-content">
                <div class="row">
                    <div class="col-lg-12">
                        <p></p>
                        <h2 style="text-align: center;">Business and Nonprofit Accounting Services from {{ env('APP_NAME') }}</h2>
                        <p>&nbsp;</p>
                        <div class="info-block-text">
                            <p style="text-align: center;">Everything you need for the peace of mind you deserve.</p>
                            <p style="text-align: center;">At {{ env('APP_NAME') }}, our mission is to equip you with the confidence to
                                climb higher and in order to do that, it’s important to note a few things that help us
                                do just that.</p>
                            <p>&nbsp;</p>
                            <div class="info-block-bullets">
                                <ul>
                                    <li>We serve clients <em>exclusively</em> on <strong>cloud-based accounting
                                            systems</strong>.
                                    </li>
                                    <li>Our services are a <strong>monthly subscription</strong> paid on the <strong>first
                                            of the month</strong>.
                                    </li>
                                    <li>We have a <em>minimum</em> monthly subscription of <strong>$525 per
                                            month</strong>.
                                    </li>
                                </ul>
                            </div>
                            <p>&nbsp;</p>
                            <p style="text-align: center;">Our fractional Accounting Services are expertly tailored to
                                meet your <em>exact</em> financial needs so you can get back to doing what only you can
                                do: growing your organization.</p>
                        </div>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><a class="btn" href="{{ route('get_started') }}">Hire {{ env('APP_NAME') }}</a>
                        </p>
                        <p></p>
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

        <section id="fancy-testimonial-slider"
                 class="testimonials-boxed testimonials-fancy u-fade-type-static js-scroll-trigger"
                 style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="testimonials-flexslider">

                        <div class="flex-viewport" style="overflow: hidden; position: relative; height: 800px;">
                            <ul class="slides"
                                style="width: 1200%; transition-duration: 0s; transform: translate3d(-2360px, 0px, 0px);">
                                <li class="testimonial-slide fancy-testimonial-slide clone" aria-hidden="true"
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">I’m easily getting 10-plus hours a week
                                        back to focus on other things that help move the business forward.<br>
                                        <br>
                                        We started with bookkeeping because when you start a small business, you can’t
                                        afford to hire a bookkeeper internally.<br>
                                        <br>
                                        We got paired with an incredible rock star.<br>
                                        <br>
                                        She’s never seen our business, she’s never been here, but she’s been phenomenal
                                        and super instrumental in our business for payroll and bookkeeping. <br>
                                        <br>
                                        We love her.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2022/09/JoeGarcia-Square-scaled.jpg"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Joe Garcia</h3>
                                            <h4 class="testimonial-title">Owner and co-founder of NoFo Brew Co</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide" data-thumb-alt=""
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">I’ve always struggled with trying to find
                                        an accountant to speak my language and to explain things to me in a common
                                        language.<br>
                                        <br>
                                        For me, as a creative and as a business owner with a growing company, it’s so
                                        beneficial. It’s been just a piece of cake from the beginning.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2022/09/Tamara-Gollob-opt-square.jpg"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Tamara Gollob</h3>
                                            <h4 class="testimonial-title">Owner of I Do Linens</h4>
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
                                    <p class="text-left testimonial-caption">Partnering with {{ env('APP_NAME') }} has been a wonderful
                                        process for us. <br>
                                        <br>
                                        We've instituted some great new procedures – record-keeping, greater
                                        accountability, online bill pay, better access to payroll info – which were long
                                        overdue. <br>
                                        <br>
                                        As we prepare for our financial review, I'm so glad that we are now in a
                                        stronger position because of their assistance, and {{ env('APP_NAME') }}'s commitment to our
                                        success.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2023/07/living-hope-logo-resized.png"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Jeff Renn</h3>
                                            <h4 class="testimonial-title">Living Hope Church</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide" data-thumb-alt=""
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">I did not retire to take on a level of
                                        stress and worry about money.<br>
                                        <br>
                                        [Our {{ env('APP_NAME') }} Accounting Professional] makes it easy to work with her. <br>
                                        <br>
                                        She’s a good fit for the church.<br>
                                        <br>
                                        She’s very timely and she’s very responsive.<br>
                                        <br>
                                        One of the biggest accomplishments of hers for me is that she gets me our
                                        financials on time.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2022/09/theresa-caden-square.jpg"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Theresa Caden</h3>
                                            <h4 class="testimonial-title">Administrator at GracePointe Forsyth
                                                Church</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide" data-thumb-alt=""
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">I’m easily getting 10-plus hours a week
                                        back to focus on other things that help move the business forward.<br>
                                        <br>
                                        We started with bookkeeping because when you start a small business, you can’t
                                        afford to hire a bookkeeper internally.<br>
                                        <br>
                                        We got paired with an incredible rock star.<br>
                                        <br>
                                        She’s never seen our business, she’s never been here, but she’s been phenomenal
                                        and super instrumental in our business for payroll and bookkeeping. <br>
                                        <br>
                                        We love her.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2022/09/JoeGarcia-Square-scaled.jpg"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Joe Garcia</h3>
                                            <h4 class="testimonial-title">Owner and co-founder of NoFo Brew Co</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                                <li class="testimonial-slide fancy-testimonial-slide clone" aria-hidden="true"
                                    style="width: 1180px; margin-right: 0px; float: left; display: block;">
                                    <img src="../../wp-content/uploads/2023/10/start-quotation.svg"
                                         class="testimonial-icon fa-quote-left" draggable="false">
                                    <p class="text-left testimonial-caption">I’ve always struggled with trying to find
                                        an accountant to speak my language and to explain things to me in a common
                                        language.<br>
                                        <br>
                                        For me, as a creative and as a business owner with a growing company, it’s so
                                        beneficial. It’s been just a piece of cake from the beginning.</p>
                                    <div class="row testimonial-attribution">
                                        <img src="../../wp-content/uploads/2022/09/Tamara-Gollob-opt-square.jpg"
                                             class="testimonial-photo" draggable="false">
                                        <div class="testimonial-attribution-text">
                                            <h3 class="testimonial-name">Tamara Gollob</h3>
                                            <h4 class="testimonial-title">Owner of I Do Linens</h4>
                                        </div>
                                    </div>
                                    <img src="../../wp-content/uploads/2023/10/end-quotation.svg"
                                         class="testimonial-icon fa-quote-right" draggable="false">
                                </li>
                            </ul>
                        </div>
                        <ol class="flex-control-nav flex-control-paging">
                            <li><a href="#" class="">1</a></li>
                            <li><a href="#" class="flex-active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
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


        <section id="Brands Grid Boxed Section Title" class="brands-grid-boxed" style="background-color:#f4f4f4 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4>THESE BRANDS TRUST OUR FLEXIBLE STAFFING. YOU CAN, TOO.</h4>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-1 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/chik-fil-a-logo-greyscale.png" alt="">
                    </div>
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-2 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/beverly-hills-publishing-logo-greyscale.png" alt="">
                    </div>
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-3 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/creature-comforts.png" alt="">
                    </div>
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-4 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/michael-myatt-logo-greyscale.png"
                             alt="Michael Hyatt &amp; Co.">
                    </div>
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-5 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/lighthouse-logo-greyscale.png" alt="">
                    </div>
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-6 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/maui-jim-logo-greyscale.png" alt="">
                    </div>
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-7 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/grace-community-church-logo-greyscale.png" alt="">
                    </div>
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center logo-block u-fade-type-static delay-8 js-scroll-trigger">
                        <img src="../../wp-content/uploads/2022/04/nsa-logo-greyscale.png" alt="">
                    </div>

                </div>
            </div>
        </section>


        <section id="how-it-works-section" class="three-up-boxed-steps" style="background-color: ">
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
                        <a class="btn" href="{{ route('get_started') }}"><span>Hire {{ env('APP_NAME') }}</span></a>
                    </div>
                </div>
            </div>
        </section>


        <section id="Book Release Boxed Section Title" class="book-release-boxed">
            <div class="container">
                <div class="row">
                    <div
                        class="col-sm-12 col-md-12 col-lg-6 left-column d-flex justify-content-center u-fade-type-static js-scroll-trigger">
                        <h5 class="text-left">&nbsp;</h5>
                        <h2 class="text-left">Top 10 Things You Can Delegate to a Bookkeeper Today</h2>
                        <h3 class="text-left">&nbsp;</h3>
                        <p class="text-left">Here are some of the top tasks you can delegate to a bookkeeper so you can
                            have financial peace of mind and spend time focusing on what only you can do.</p>
                        <a class="btn"
                           href="https://resources.belaysolutions.com/top-10-things-you-can-delegate-to-a-bookkeeper-today"
                           target="_blank"><span>DOWNLOAD</span></a>
                    </div>
                    <div
                        class="col-sm-12 col-md-12 col-lg-6 right-column d-flex justify-content-center u-fade-type-right delay-3 js-scroll-trigger">
                        <p class="text-center d-flex justify-content-center">
                            <picture>
                                <source type="image/webp"
                                        srcset="https://belaysolutions.com/wp-content/uploads/2023/09/Top-10-BK-Icon.png.webp">
                                <img src="../../wp-content/uploads/2023/09/Top-10-BK-Icon.png"
                                     alt="Top 10 Things You Can Delegate to a Bookkeeper">
                            </picture>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <div class="embed-full-screen">
            <a href="#" class="close-full-screen"><i class="bi bi-x-circle"></i></a>
            <div class="embed-container">
                <iframe id="belay-brand-story-video" width="560" height="315"
                        src="https://www.youtube.com/embed/bGOkswxdgJE" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
            </div>
        </div>

        <section id="vid-testimonial" class="video-full-width">
            <div class="vid-background-image zoom-out-animation js-scroll-trigger"
                 style="background-image: url('../../wp-content/uploads/2022/09/Accounting-Ad-Thumbnail.jpg');"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-flex-center">
                        <h4></h4>
                        <h2>Meet Courtney</h2>
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


        <section id="faqs-section-title" class="faqs" style="background-color:#f8f9fa ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5 left-column">
                        <h2 class="text-left">Got a question? No problem.</h2>
                        <p class="text-left">We've covered a lot so far. But you might still have unanswered questions
                            about how {{ env('APP_NAME') }}'s personalized matching process works. Allow us to ease any hesitations or
                            concerns you may have before jumping into the process of hiring an Accounting
                            Professional.</p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7 right-column">
                        <div id="faq-accordion">
                            <div class="card">
                                <div class="card-header" id="heading-5311">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5311" aria-expanded="false"
                                                aria-controls="collapse-5311">
                                            <span>What accounting services do you offer?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5311" class="collapse" aria-labelledby="heading-5311"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>We are a full-service staffing solution providing fractional Bookkeepers,
                                            Accounting Clerks, Controllers, and CFOs for businesses, nonprofits, and
                                            churches.<br><br>In addition to the day-to-day accounting and financial
                                            strategy those roles provide, we also offer full-service payroll, inventory
                                            consulting, tax services, and more.<br><br>{{ env('APP_NAME') }} will help you build the
                                            perfect financial team to fit your needs so you only pay for what you need.
                                            And if your needs change, so can our services and support!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5312">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5312" aria-expanded="false"
                                                aria-controls="collapse-5312">
                                            <span>I’m new to the remote concept and have no idea how this will work for me. Is there help?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5312" class="collapse" aria-labelledby="heading-5312"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Of course! You’ll be assigned a Client Success Consultant who will walk
                                            through onboarding with you and who is there as a coach and resource for
                                            your entire time here at {{ env('APP_NAME') }}.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5313">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5313" aria-expanded="false"
                                                aria-controls="collapse-5313">
                                            <span>What security measures are in place to protect us?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5313" class="collapse" aria-labelledby="heading-5313"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>{{ env('APP_NAME') }} understands the importance of protecting you and your sensitive
                                            financial information.<br><br>In addition to our secure third-party payment
                                            system with BILL and our read-only access to bank accounts, we also have
                                            processes in place to properly vet each Accounting Professional, including
                                            conducting background checks and talking with their references to be sure we
                                            are placing a trustworthy contractor with your organization.<br><br>We have
                                            internal checks for compliance ensuring everything remains above
                                            board.<br><br>Additionally, all our contractors sign a Confidentiality
                                            Agreement to protect you and your organization. We highly recommend strong
                                            passwords and using a password manager to keep your accounts secure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5314">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5314" aria-expanded="false"
                                                aria-controls="collapse-5314">
                                            <span>How long does it take for me to be matched?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5314" class="collapse" aria-labelledby="heading-5314"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>On average, our clients are matched within one week.<br><br>Your Client
                                            Success Consultant will meet with your Placement Team to discuss, vet, and
                                            select 2-3 top candidates from our bench of nearly 2,000 U.S.-based talent,
                                            and then interview and select the best match for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5315">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5315" aria-expanded="false"
                                                aria-controls="collapse-5315">
                                            <span>Can I talk to my Accounting Professional?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5315" class="collapse" aria-labelledby="heading-5315"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, {{ env('APP_NAME') }} wants to be an engaged member of your team.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5316">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5316" aria-expanded="false"
                                                aria-controls="collapse-5316">
                                            <span>I only need part of this service (i.e. reconciliation only). Is there an hourly rate for that?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5316" class="collapse" aria-labelledby="heading-5316"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>{{ env('APP_NAME') }} can customize a solution if you only need reporting and
                                            reconciliation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5317">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5317" aria-expanded="false"
                                                aria-controls="collapse-5317">
                                            <span>Will I be able to interview the candidate you pick for me?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5317" class="collapse" aria-labelledby="heading-5317"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Handing over the decision on who will work with you can be tough. But we know
                                            you donʼt have time to devote to screening and setting up interviews. We
                                            have a proven system to intentionally match you with someone equipped to
                                            handle everything you need accomplished.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5318">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5318" aria-expanded="false"
                                                aria-controls="collapse-5318">
                                            <span>Do I get a team of Accounting Professionals that rotate?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5318" class="collapse" aria-labelledby="heading-5318"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>You will have one dedicated Accounting Professional that we match you with
                                            based on your needs, industry, personality, and working style.<br><br>If,
                                            however, you work with a CFO and Bookkeeper or a CFO and an Accounting
                                            Clerk, you will work with more than one professional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5319">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-5319" aria-expanded="false"
                                                aria-controls="collapse-5319">
                                            <span>What’s the difference between an Accounting Professional and an accountant?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-5319" class="collapse" aria-labelledby="heading-5319"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>An Accounting Professional is more focused on tracking the day-to-day
                                            transactions that include paying bills, monitoring your cash flow,
                                            reconciling accounts, and preparing reports. An accountant can provide tax
                                            advice, certified audits, and a more high-level analysis of your
                                            organization's overall financial health.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-53110">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-53110" aria-expanded="false"
                                                aria-controls="collapse-53110">
                                            <span>Will my Accounting Professional help me shop for services and get quotes for me?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-53110" class="collapse" aria-labelledby="heading-53110"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Your Accounting Professional is focused on the transactional side of your
                                            needs. That responsibility is best supported by an admin team member. They
                                            can certainly provide the reports needed to show you what you spend with a
                                            particular vendor, but they will not help you shop vendors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-53111">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-53111" aria-expanded="false"
                                                aria-controls="collapse-53111">
                                            <span>Can my Accounting Professional use AI?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-53111" class="collapse" aria-labelledby="heading-53111"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Absolutely – in fact, we encourage it! Our clients often hire our
                                            Professionals to utilize AI to help maximize productivity and increase
                                            efficiency.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-53112">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-left" data-toggle="collapse"
                                                data-target="#collapse-53112" aria-expanded="false"
                                                aria-controls="collapse-53112">
                                            <span>Is your question not listed here? We’re happy to answer them for you!</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-53112" class="collapse" aria-labelledby="heading-53112"
                                     data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Just schedule a call with a {{ env('APP_NAME') }} Solutions Consultant today!</p>
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
