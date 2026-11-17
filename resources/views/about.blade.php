
@extends('layouts.app')

@section('title', 'About Us | SnappyBoo Camera Rental')

@section('content')

<div class="about-page">

    <!-- ABOUT HERO -->
    <section class="about-hero" data-reveal>
        <div class="about-hero-content">
            <span class="about-eyebrow">GET TO KNOW US</span>
            <h1>
                A little nostalgia,
                <span>a lot of memories.</span>
            </h1>
            <p>
                Discover the charm of digital photography with SnappyBoo.<br>
                We make digicam rentals accessible for moments you want
                to capture and keep.
            </p>
        </div>

        <div class="about-hero-aside">
            <div class="about-slideshow" aria-hidden="true">
                <img
                    class="slideshow-image is-active"
                    src="{{ asset('images/slideshow/ss1.png') }}"
                    alt=""
                >
                <img
                    class="slideshow-image"
                    src="{{ asset('images/slideshow/ss2.png') }}"
                    alt=""
                >
            </div>

            <span class="aside-label">SNAPPYBOO<br>CAMERA RENTAL</span>
            <span class="aside-location">BASED IN <br>BUTUAN CITY</span>
        </div>
    </section>

    <!-- OUR STORY -->
    <section class="about-story" data-reveal>
        <div class="about-story-heading">
            <span class="about-eyebrow">OUR STORY</span>
            <h2>
                Photography should feel
                <span>simple.</span>
            </h2>
        </div>

        <div class="about-story-content">
            <p>
                SnappyBoo is a digital camera rental service based in
                Butuan City, created for people who enjoy the nostalgic
                look and feel of digital camera photography.
            </p>
            <p>
                We believe you shouldn't have to own a camera to enjoy
                capturing special moments. Through our rental service,
                customers can explore available cameras, choose a rental
                period, and bring a camera along for their everyday
                adventures and special occasions.
            </p>

            <div class="about-more-text" id="aboutMoreText" hidden>
                <p>
                    From casual outings and celebrations to trips with
                    friends and family, SnappyBoo aims to make digital
                    photography more accessible and enjoyable.
                </p>
                <p>
                    Our goal is to give more people the opportunity to
                    experience the distinct character of digicam
                    photography without the commitment of purchasing
                    their own camera.
                </p>
            </div>

            <button
                type="button"
                class="about-read-more"
                id="aboutReadMore"
                aria-expanded="false"
                aria-controls="aboutMoreText"
            >
                Read More <span aria-hidden="true">+</span>
            </button>
        </div>
    </section>

    <!-- MISSION AND VISION -->
    <section class="about-purpose" data-reveal>
        <div class="about-section-heading">
            <span class="about-eyebrow">WHAT WE STAND FOR</span>
            <h2>
                A purpose behind
                <span>every picture.</span>
            </h2>
            <p>
                More than renting a camera, we want to make every
                photography experience worth remembering.
            </p>
        </div>

        <div class="about-purpose-grid">
            <article class="about-purpose-card" data-reveal>
                <span class="purpose-label">OUR MISSION</span>
                <h3>Making memories accessible.</h3>
                <p>
                    Our mission is to provide an accessible and convenient
                    digital camera rental experience, allowing people
                    to capture meaningful moments through the unique
                    charm of digicam photography.
                </p>
            </article>

            <article class="about-purpose-card" data-reveal>
                <span class="purpose-label">OUR VISION</span>
                <h3>Inspiring more moments to capture.</h3>
                <p>
                    Our vision is to become a trusted local camera
                    rental choice in Butuan City, encouraging more
                    people to discover, enjoy, and preserve their
                    memories through digital photography.
                </p>
            </article>
        </div>
    </section>

    <!-- MEET THE TEAM -->
    <section class="about-team" data-reveal>
        <div class="about-section-heading">
            <span class="about-eyebrow">THE PEOPLE BEHIND THE PROJECT WEBSITE</span>
            <h2>
                Meet the SnappyBoo
                <span>team.</span>
            </h2>
        </div>

        <div class="about-team-grid">
            <article class="about-team-card" data-reveal>
                <img
                    class="team-photo"
                    src="{{ asset('images/team/elaine.png') }}"
                    alt="Elaine Mae M. Balbada"
                    loading="lazy"
                >
                <h3>Elaine Mae M. Balbada</h3>
                <span class="team-role">
                    Group Leader · Home Page Developer
                </span>
                <p>
                    Leads the project, manages the repository,
                    and develops the Home page and shared layout.
                </p>
            </article>

            <article class="about-team-card" data-reveal>
                <img
                    class="team-photo"
                    src="{{ asset('images/team/kiesha.png') }}"
                    alt="Kiesha Jae T. Calderon"
                    loading="lazy"
                >
                <h3>Kiesha Jae T. Calderon</h3>
                <span class="team-role">
                    About Page Developer
                </span>
                <p>
                    Develops the About page, presenting the
                    business background, mission, vision, and team.
                </p>
            </article>

            <article class="about-team-card" data-reveal>
                <img
                    class="team-photo"
                    src="{{ asset('images/team/peter.png') }}"
                    alt="Peter Paul S. Manatad Jr."
                    loading="lazy"
                >
                <h3>Peter Paul S. Manatad Jr.</h3>
                <span class="team-role">
                    Contact Page Developer
                </span>
                <p>
                    Develops the Contact page, including the
                    contact form and client-side validation.
                </p>
            </article>
        </div>
    </section>

    <!-- CLOSING CTA -->
    <section class="about-cta" data-reveal>
        <div>
            <span class="about-eyebrow">
                YOUR NEXT MEMORY STARTS HERE
            </span>
            <h2>
                Let's make it a
                <span>SnappyBoo moment.</span>
            </h2>
            <p>
                Discover our cameras and find the perfect companion
                for your next memorable experience.
            </p>
        </div>

        <a
            href="{{ url('/') }}#camera-collection"
            class="about-cta-button"
        >
            Explore Our Cameras <span aria-hidden="true">↗</span>
        </a>
    </section>

</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush
