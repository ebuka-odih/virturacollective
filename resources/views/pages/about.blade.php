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
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>


            </header>
        </article>
    </main>


 <div class="entry-content">

    <section id="four-up-wide-section-title" class="four-up-wide">
        <div>
           <!-- ====== About Section ====== -->
<div class="container py-5">
  <div class="row align-items-center g-4">
    <!-- Left column: Image placeholder -->
    <div class="col-12 col-md-6">
      <div class=" rounded-3 d-flex justify-content-center align-items-center">
        <!-- Replace the SVG / placeholder with your own image -->
          <img width="500" height="400" src="{{ asset('img/about.png') }}" alt="">
      </div>
    </div>

    <!-- Right column: Content -->
    <div class="col-12 col-md-6">
      <h3 class="fw-bold mb-3">About Virtura Collective</h3>
      <p>
        <strong>Virtura Collective</strong> is a cutting-edge job application and staffing platform that connects top-tier
        virtual talent with forward-thinking companies around the globe. We specialize in placing highly skilled
        professionals in remote roles across administration, finance, marketing, customer support, and beyond — powered
        by intelligent, AI-driven matching tools that ensure the right fit, every time.
      </p>
      <p>
        Born out of a need for smarter, more accessible work solutions, Virtura Collective is more than just a job board —
        we’re a digital ecosystem for career growth and business efficiency. Whether you’re a job seeker looking to start
        or elevate your remote career, or a company in need of flexible, on-demand staffing, we simplify the process with
        transparency, speed, and care.
      </p>

      <!-- Mission -->
      <h5 class="fw-semibold mt-4">Our Mission</h5>
      <p class="mb-2">To empower professionals and businesses with flexible work solutions that fuel productivity, freedom, and growth.</p>

      <!-- Vision -->
      <h5 class="fw-semibold mt-3">Our Vision</h5>
      <p class="mb-2">A future where remote work isn’t just an option — it’s the norm. Virtura Collective aims to be the go-to platform for discovering, hiring, and growing with virtual talent across every industry.</p>

      <!-- What We Offer -->
      <h5 class="fw-semibold mt-3">What We Offer</h5>
      <ul class="list-unstyled ps-3">
        <li class="mb-1">📄 <strong>Smart Job Matching:</strong> AI-powered tools that pair candidates with roles aligned to their skills and preferences.</li>
        <li class="mb-1">🌍 <strong>Remote-First Opportunities:</strong> We support global hiring, offering roles that prioritize flexibility and work-life balance.</li>
        <li class="mb-1">🤝 <strong>Employer Solutions:</strong> A streamlined system for businesses to post jobs, source talent, and manage virtual teams.</li>
        <li>📚 <strong>Career Resources:</strong> From résumé tips to virtual interview coaching, we help applicants stand out and succeed.</li>
      </ul>
    </div>
  </div>
</div>

        </div>
    </section>


</div>


@endsection
