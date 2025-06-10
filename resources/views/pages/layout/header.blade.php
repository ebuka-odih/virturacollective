 <header class="header">

        <script>
            // When the user scrolls down 1px from the top of the document, change the navbar's background opacity and the swap the logo
            // Fade the post title as the user scrolls

            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if ((document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) && (document.getElementById("full-screen-menu-container").style.opacity == 0)) {
                    document.getElementById("navbar").style.background = 'rgba(2, 41, 61, 1)';
                    document.getElementById("logo").src = "https://resources.belaysolutions.com/hubfs/Belay Brand/BELAY Primary Logo Green + White.svg";
                    document.getElementById("blog-post-title").style.opacity = 50 / document.documentElement.scrollTop;
                } else {
                    document.getElementById("navbar").style.background = 'rgba(2, 41, 61, 0)';
                    document.getElementById("logo").src = "https://4611466.fs1.hubspotusercontent-na1.net/hubfs/4611466/Belay Brand/BELAY Primary Logo White.svg";
                    document.getElementById("blog-post-title").style.opacity = 1;
                }
            }
        </script>

        <script>
            // Event tracking - turning this off per TigerTrack's request******
            //		  const btn = document.querySelector("form input[type=submit]");
            // 		  if (btn && btn.addEventListener && window.location.href.indexOf("get-started") > -1) {
            // 		    btn.addEventListener("click",function() {
            // 		        window.lintrk('track', { conversion_id: tel:9718697 });
            // 		        fbq('track', 'HireBelay_FormSubmit', {content_category: 'Lead'});
            // 		    })
            // 		  }
            // 		  if (btn && btn.addEventListener && window.location.href.indexOf("are-you-fine") > -1) {
            // 		    btn.addEventListener("click",function() {
            // 				window.lintrk('track', { conversion_id: 9718705 });
            // 				fbq('track', 'ContentDownload, {content_category: 'CompleteRegistration'});
            // 		    })
            // 		  }
        </script>

        <style>
            #navbar {
                top: 55px;
            }

            #services-container, #resources-container {
                top: 100px;
            }

            #top-banner p {
                margin-bottom: 0;
            }

            @media only screen and (max-width: 1446px) {
                #navbar {
                    top: 55px;
                }

                #services-container, #resources-container {
                    top: 100px;
                }

                #hero {
                    padding-top: 20%;
                }

                #full-screen-menu-container {
                    padding-top: 10%;
                }
            }

            @media only screen and (max-width: 800px) {
                #navbar {
                    top: 50px;
                }

                #hero {
                    padding-top: 40%;
                }

                #full-screen-menu-container {
                    padding-top: 30%;
                }

                #top-banner {
                    font-size: 0.75rem;
                }
            }

            @media only screen and (max-width: 620px) {
                #navbar {
                    top: 50px;
                }
            }

            @media only screen and (max-width: 500px) {
                #navbar {
                    top: 50px;
                }
            }
        </style>
        <div id="top-banner" class="u-fade-type-up js-scroll-trigger">{{ env('APP_NAME') }} is Excited to Welcome Accountfully!<span
                style="background-color: #02293d; margin-left: 10px; padding-top: 2px; padding-bottom: 2px; padding-left: 6px; padding-right: 6px; border-radius: 4px; margin-top: auto; margin-bottom: auto;"><a
                    style="text-decoration: none; color: #ffffff;"
                    href="https://blog.belaysolutions.com/belay-acquires-accountfully-to-expand-accounting-services">Learn More</a></span>
        </div>
        <div id="navbar">
            <div id="navbar-left">
                <a href="{{ route('index') }}">
                    <h3 style="">{{ env('APP_NAME') }}</h3>
{{--                    <img--}}
{{--                        src="https://4611466.fs1.hubspotusercontent-na1.net/hubfs/4611466/Belay Brand/BELAY Primary Logo White.svg"--}}
{{--                        alt="BELAY Logo" id="logo"/>--}}
                </a>
            </div>
            <div id="navbar-middle">
                <div id="services-link-container">
                    <a href="#" class="header-link">SERVICES</a>

                    <div id="services-container">

                        <div class="service-box">
                            <div id="services-va" class="services-background">
                                <a href="{{ route('assistants') }}" class="service-link">
                                    <div class="services-link-wrapper">
                                        <div class="service-display">
                                            <div class="service-title">
                                                <div class="service-title-align">
                                                    Virtual<br/>Assistants
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="services-bk-margin service-box">
                            <div id="services-bk" class="services-background">
                                <a href="{{ route('accounting') }}" class="service-link">
                                    <div class="service-link-wrapper">
                                        <div class="service-display">
                                            <div class="service-title">
                                                <div class="service-title-align">
                                                    Accounting Services
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="service-box">
                            <div id="services-smm" class="services-background">
                                <a href="{{ route('marketing') }}" class="service-link">
                                    <div class="service-link-wrapper">
                                        <div class="service-display">
                                            <div class="service-title">
                                                <div class="service-title-align">
                                                    Marketing Assistants
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="resources-link-container">
                    <a href="#" id="nav-bar--resources" class="header-link">RESOURCES</a>

                    <div id="resources-container">
                        <div id="resources-blog" class="resource-box">
                            <a href="https://blog.belaysolutions.com/" class="resource-link">
                                <div class="resource-link-wrapper">
                                    <div class="resource-display">
                                        <img
                                            src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/blog-icon.svg"
                                            class="resource-icon"/>
                                        <div class="resource-blog-title">
                                            Blog
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div id="resources-blog-hover">
                                <a href="https://blog.belaysolutions.com/" class="resource-link">
                                    <div class="resource-link-hover-wrapper">
                                        <div class="resource-hover-display">
                                            <img
                                                src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/blog-icon.svg"
                                                class="resource-blog-hover-icon"/>
                                            <div class="resource-blog-hover-title">
                                                Blog
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="resources-case-studies" class="resource-box">
                            <a href="https://blog.belaysolutions.com/tag/client-success-story" class="resource-link">
                                <div class="resource-link-wrapper">
                                    <div class="resource-display">
                                        <img
                                            src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/case-studies-icon.svg"
                                            class="resource-icon"/>
                                        <div class="resource-case-studies-title">
                                            Case<br/ >Studies
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div id="resources-case-studies-hover">
                                <a href="https://blog.belaysolutions.com/tag/client-success-story"
                                   class="resource-link">
                                    <div class="resource-link-hover-wrapper">
                                        <div class="resource-hover-display">
                                            <img
                                                src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/case-studies-icon.svg"
                                                class="resource-case-studies-hover-icon"/>
                                            <div class="resource-case-studies-hover-title">
                                                Case<br/ >Studies
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="resources-ebooks" class="resource-box">
                            <a href="https://blog.belaysolutions.com/tag/ebooks-guides" class="resource-link">
                                <div class="resource-link-wrapper">
                                    <div class="resource-display">
                                        <img
                                            src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/ebooks-icon.svg"
                                            class="resource-icon"/>
                                        <div class="resource-ebooks-title">
                                            eBooks<br/ >&<br/>Guides
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div id="resources-ebooks-hover">
                                <a href="https://blog.belaysolutions.com/tag/ebooks-guides" class="resource-link">
                                    <div class="resource-link-hover-wrapper">
                                        <div class="resource-hover-display">
                                            <img
                                                src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/ebooks-icon.svg"
                                                class="resource-ebooks-hover-icon"/>
                                            <div class="resource-ebooks-hover-title">
                                                eBooks<br/ >&<br/>Guides
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="resources-courses" class="resource-box">
                            <a href="courses/index.html" class="resource-link">
                                <div class="resource-link-wrapper">
                                    <div class="resource-display">
                                        <img
                                            src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/courses-icon.svg"
                                            class="resource-icon"/>
                                        <div class="resource-courses-title">
                                            Courses
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div id="resources-courses-hover">
                                <a href="courses/index.html" class="resource-link">
                                    <div class="resource-link-hover-wrapper">
                                        <div class="resource-hover-display">
                                            <img
                                                src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/courses-icon.svg"
                                                class="resource-courses-hover-icon"/>
                                            <div class="resource-courses-hover-title">
                                                Courses
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="resources-podcast" class="resource-box">
                            <a href="podcast/index.html" class="resource-link">
                                <div class="resource-link-wrapper">
                                    <div class="resource-display">
                                        <img
                                            src="https://f.hubspotusercontent10.net/hubfs/4611466/Landing Page Template/podcast-icon.svg"
                                            class="resource-podcast-icon"/>
                                        <div class="resource-podcast-title">
                                            Podcast
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div id="resources-podcast-hover">
                                <a href="podcast/index.html" class="resource-link">
                                    <div class="resource-link-hover-wrapper">
                                        <div class="resource-hover-display">
                                            <img
                                                src="https://4611466.fs1.hubspotusercontent-na1.net/hubfs/4611466/Landing Page Template/podcast-color-icon.svg"
                                                class="resource-podcast-hover-icon"/>
                                            <div class="resource-podcast-hover-title">
                                                Podcast
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="work-with-us/index.html" class="header-link">JOBS</a>
            </div>
            <div id="navbar-right">
                <a id="belay-hire-btn" class="btn" href="get-started/index.html">Hire {{ env('APP_NAME') }}</a>

                <script>
                    function hamburgerMenu(x) {
                        x.classList.toggle("change");

                        var menu = $('#full-screen-menu-container');

                        var hamburger = $('.hamburger-icon-container');

                        if (menu.css('opacity') === '0') {
                            menu.css({
                                'height': '100vh',
                                'opacity': '1'
                            });

                            document.getElementById("logo").src = "https://4611466.fs1.hubspotusercontent-na1.net/hubfs/4611466/Belay Brand/BELAY Primary Logo White.svg";
                        } else {
                            menu.css({
                                'height': '0',
                                'opacity': '0'
                            });

                            if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
                                document.getElementById("logo").src = "https://4611466.fs1.hubspotusercontent-na1.net/hubfs/4611466/Belay Brand/BELAY Primary Logo Green + White.svg";
                            } else {
                                document.getElementById("logo").src = "https://4611466.fs1.hubspotusercontent-na1.net/hubfs/4611466/Belay Brand/BELAY Primary Logo White.svg";
                            }
                        }

                        /* Remove navy background from menu if present */
                        if ((document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) && (document.getElementById("full-screen-menu-container").style.opacity == 0)) {
                            document.getElementById("navbar").style.background = 'rgba(2, 41, 61, 1';
                        } else {
                            document.getElementById("navbar").style.background = 'rgba(2, 41, 61, 0)';
                        }

                    }

                    function fullScreenMenuLinkMouseOver(x) {
                        x.classList.toggle("underline");
                    }

                    function fullScreenMenuLinkMouseOut(x) {
                        x.classList.toggle("underline");
                    }

                </script>

                <div class="hamburger-icon-container" onclick="hamburgerMenu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    <div class="bar4"></div>
                    <div class="bar5"></div>
                </div>
            </div>
        </div>

        <div id="full-screen-menu-container">
            <div id="full-screen-menu-left-column">
                <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                    <div class="full-screen-menu-left-column-menu-item">
                        <a href="get-started/index.html" class="full-screen-menu-left-column-link">Hire {{ env('APP_NAME') }}
                            <div class="full-screen-menu-link-underline"></div>
                        </a>
                    </div>
                </div>
                <!-- Commenting out until dropdowns in full screen menu functionality built
			<div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
			<div class="full-screen-menu-left-column-menu-item">
				<a href="" class="full-screen-menu-left-column-link">Services<div class="full-screen-menu-link-underline"></div></a>
			</div>
			</div>
			-->
                <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                    <div class="full-screen-menu-left-column-menu-item">
                        <a href="services/assistants/index.html" class="full-screen-menu-left-column-link">Virtual
                            Assistants
                            <div class="full-screen-menu-link-underline"></div>
                        </a>
                    </div>
                </div>
                <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                    <div class="full-screen-menu-left-column-menu-item">
                        <a href="services/accounting/index.html" class="full-screen-menu-left-column-link">Accounting
                            Services
                            <div class="full-screen-menu-link-underline"></div>
                        </a>
                    </div>
                </div>
                <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                    <div class="full-screen-menu-left-column-menu-item">
                        <a href="services/marketing/index.html" class="full-screen-menu-left-column-link">Marketing
                            Assistants
                            <div class="full-screen-menu-link-underline"></div>
                        </a>
                    </div>
                </div>
                <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                    <div class="full-screen-menu-left-column-menu-item">
                        <a href="podcast/index.html" class="full-screen-menu-left-column-link">Podcast
                            <div class="full-screen-menu-link-underline"></div>
                        </a>
                    </div>
                </div>
                <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                    <div class="full-screen-menu-left-column-menu-item">
                        <a href="https://blog.belaysolutions.com/?_ga=2.238978884.590261100.1650486696-1271464968.1634319683"
                           class="full-screen-menu-left-column-link">Blog
                            <div class="full-screen-menu-link-underline"></div>
                        </a>
                    </div>
                </div>
                <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                    <div class="full-screen-menu-left-column-menu-item">
                        <a href="our-company/index.html" class="full-screen-menu-left-column-link">Our Company
                            <div class="full-screen-menu-link-underline"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="full-screen-menu-right-column">
                <div class="full-screen-menu-right-column-title">The Right Hire.<br/>Right Now.</div>
                <div class="full-screen-menu-right-column-subtitle">Everything you need to transform your work.</div>
                <div>
                    <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                        <div class="full-screen-menu-right-column-menu-item">
                            <a href="https://blog.belaysolutions.com/tag/ebooks-guides"
                               class="full-screen-menu-right-column-link">Resources
                                <div class="full-screen-menu-link-underline"></div>
                            </a>
                        </div>
                    </div>
                    <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                        <div class="full-screen-menu-right-column-menu-item">
                            <a href="work-with-us/index.html" class="full-screen-menu-right-column-link">Jobs
                                <div class="full-screen-menu-link-underline"></div>
                            </a>
                        </div>
                    </div>
                    <div onmouseover="fullScreenMenuLinkMouseOver(this)" onmouseout="fullScreenMenuLinkMouseOut(this)">
                        <div class="full-screen-menu-right-column-menu-item">
                            <a href="https://blog.belaysolutions.com/expert-insight-how-to-find-skilled-remote-workers-for-your-great-remote-jobs"
                               class="full-screen-menu-right-column-link">Diversity & Inclusion
                                <div class="full-screen-menu-link-underline"></div>
                            </a>
                        </div>
                    </div>
                </div>


                <ul class="social-icons-container">
                    <li><a target="_blank" href="https://twitter.com/belay_solutions/"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/belaysolutions/"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/belay-solutions/mycompany/"><i
                                class="fab fa-linkedin"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCyg-EUe8qjZUelkwcZMjNmQ"><i
                                class="fab fa-youtube"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/belay_solutions/"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://open.spotify.com/show/6fFH0NLdLvBe0rUVbBOk6c"><i
                                class="fab fa-spotify"></i></a></li>
                    <li><a target="_blank" href="tel:18555523529"><i class="fa fa-phone"></i></a></li>
                    <li><a target="_blank" href="get-started/index.html"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <p class="copyright-info">
                    &copy; <span id="current-year"></span> {{ env('APP_NAME') }}. Made with &hearts; from the {{ env('APP_NAME') }} team.
                </p>
            </div>

        </div>

        <script>
            // Set year in fullscreen menu
            const d = new Date();
            let year = d.getFullYear();
            document.getElementById("current-year").innerHTML = year;
        </script>
        <script>
            $(document).ready(function () {
                $("body").on("click", "#close-btn", function () {
                    $("#popup-overlay-div").remove();
                    $("#hire-belay-pop").remove();
                });
            });
        </script>

    </header>
