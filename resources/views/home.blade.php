
@extends('layouts.app')

@section('title', 'Home | SnappyBoo Camera Rental')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <span class="eyebrow">YOUR LITTLE CAMERA RENTAL SPOT</span>

            <h1>
                Capture the moments.
                <span>Keep the memories.</span>
            </h1>

            <p>
                Bring your moments to life with a digital camera.<br>
                Find your next camera companion with SnappyBoo.
            </p>

            <div class="hero-actions">
                <a href="#camera-collection" class="btn-primary">
                     Explore Cameras
                </a>

                <a href="{{ url('/about') }}" class="btn-secondary">
                    Get to Know Us
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-image-placeholder">
                <span>SnappyBoo.</span>
                <p>Your next memory starts here.</p>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="intro-section">
        <span class="eyebrow">A LITTLE INTRODUCTION</span>

        <h2>Make every moment worth remembering.</h2>

        <p>
            SnappyBoo is a digital camera rental service based in
            Butuan City, making it easier to enjoy the charm of
            capturing everyday moments through a camera.
        </p>
    </section>

    <!-- Featured Camera Collection -->
    <section class="featured-section" id="camera-collection">
        <div class="section-heading">
            <div>
                <span class="eyebrow">THE SNAPPYBOO COLLECTION</span>
                <h2>Find your camera companion.</h2>
            </div>
        </div>

        <div class="camera-grid">

            <!-- Canon 4000D -->
            <div class="camera-card">
                <div class="camera-image">
                    <img src="{{ asset('images/canon-4000d.png') }}"
                        alt="Canon 4000D camera">
                </div>

                <div class="camera-info">
                    <span class="camera-category">DIGITAL CAMERA</span>
                    <h3>Canon 4000D</h3>

                    <h4>What's included</h4>
                    <ul>
                        <li>Camera bag / camera strap</li>
                        <li>Charger / battery</li>
                        <li>Card reader / Wi-Fi transfer</li>
                    </ul>

                    <h4>Rental Rates</h4>
                    <div class="rental-rates">
                        <div><span>1–2 Days</span><strong>₱400</strong></div>
                        <div><span>3–5 Days</span><strong>₱350</strong></div>
                        <div><span>6–8 Days</span><strong>₱300</strong></div>
                    </div>
                </div>
            </div>

            <!-- Canon IXUS 60 -->
            <div class="camera-card">
                <div class="camera-image">
                    <img src="{{ asset('images/canon-ixus-60.png') }}"
                        alt="Canon IXUS 60 camera">
                </div>

                <div class="camera-info">
                    <span class="camera-category">COMPACT DIGICAM</span>
                    <h3>Canon IXUS 60</h3>

                    <h4>What's included</h4>
                    <ul>
                        <li>Digicam pocket</li>
                        <li>Charger / battery</li>
                        <li>Card reader</li>
                    </ul>

                    <h4>Rental Rates</h4>
                    <div class="rental-rates">
                        <div><span>1–2 Days</span><strong>₱250</strong></div>
                        <div><span>3–5 Days</span><strong>₱200</strong></div>
                        <div><span>6–8 Days</span><strong>₱150</strong></div>
                    </div>
                </div>
            </div>

            <!-- Lumix Panasonic DMC F5 -->
            <div class="camera-card">
                <div class="camera-image">
                    <img src="{{ asset('images/lumix-panasonic-dmc-f5.png') }}"
                        alt="Lumix Panasonic DMC F5 camera">
                </div>

                <div class="camera-info">
                    <span class="camera-category">COMPACT DIGICAM</span>
                    <h3>Lumix Panasonic DMC F5</h3>

                    <h4>What's included</h4>
                    <ul>
                        <li>Digicam pocket</li>
                        <li>Charger / battery</li>
                        <li>Card reader</li>
                    </ul>

                    <h4>Rental Rates</h4>
                    <div class="rental-rates">
                        <div><span>1–2 Days</span><strong>₱250</strong></div>
                        <div><span>3–5 Days</span><strong>₱200</strong></div>
                        <div><span>6–8 Days</span><strong>₱150</strong></div>
                    </div>
                </div>
            </div>

        </div>


        <div class="camera-collection-cta">
            <p>
                See photos taken with our rental cameras on Instagram.
            </p>

            <a href="https://www.instagram.com/snappyboo.bxu/"
            target="_blank"
            rel="noopener noreferrer"
            class="btn-primary">
                Explore Our Instagram
            </a>
        </div>
    </section>


    <!-- Rental Process -->
    <section class="process-section">
        <div class="section-heading centered">
            <span class="eyebrow">GETTING STARTED</span>
            <h2>Three simple steps.</h2>
            <p>Getting started with SnappyBoo is easy.</p>
        </div>

        <div class="process-grid">
            <div class="process-card">
                <span class="process-number">01</span>
                <h3>Explore</h3>
                <p>
                    Browse our camera collection and discover
                    the camera you'd love to try.
                </p>
            </div>

            <div class="process-card">
                <span class="process-number">02</span>
                <h3>Inquire</h3>
                <p>
                    Visit our <a href="{{ url('/contact') }}">Contact page</a>
                    to ask about availability and rental details.
                </p>
            </div>

            <div class="process-card">
                <span class="process-number">03</span>
                <h3>Capture</h3>
                <p>
                    Coordinate your rental with us and get
                    ready to capture your favorite moments.
                </p>
            </div>
        </div>

        <!-- Contact Inquiry -->
        <div class="camera-collection-cta">
            <h3>Interested in renting a camera?</h3>
            <p>
                Get in touch with us through our Contact page.
            </p>

            <a href="{{ url('/contact') }}" class="btn-primary">
                Contact Us
            </a>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
