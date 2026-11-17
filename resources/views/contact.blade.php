
@extends('layouts.app')

@section('title', 'Contact | Snappyboo Camera Rental')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

<section class="contact-page">

    <div class="contact-container">

        <!-- LEFT: CONTACT INFORMATION -->
        <div class="contact-info">

            <span class="eyebrow">GET IN TOUCH</span>

            <h1>
                Let's make something
                <span>memorable.</span>
            </h1>

            <p class="contact-intro">
                Have questions about renting a camera or want to know
                more about our collection? We'd love to hear from you.
                Send us a message and let's talk.
            </p>

            <div class="contact-details">

                <div class="contact-detail">
                    <span class="detail-label">OUR LOCATION</span>
                    <h3>Butuan City</h3>
                    <p>Agusan del Norte, Philippines</p>
                </div>

                <div class="contact-detail">
                    <span class="detail-label">FOLLOW OUR JOURNEY</span>
                    <h3>Instagram</h3>
                    <a href="https://www.instagram.com/snappyboo.bxu/"
                       target="_blank"
                       rel="noopener noreferrer">
                        @snappyboo.bxu ↗
                    </a>
                </div>

            </div>

            <div class="contact-note">
                <span>SnappyBoo.</span>
                <p>Little cameras, lasting memories.</p>
            </div>

        </div>


        <!-- RIGHT: CONTACT FORM -->
        <div class="contact-form-wrapper">

            <div class="form-heading">
                <span class="eyebrow">SEND AN INQUIRY</span>
                <h2>We'd love to hear from you.</h2>
                <p>Fill out the form below to get in touch with us.</p>
            </div>

            <form id="contact-form" class="contact-form" novalidate>

                <div class="form-row">

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                            aria-describedby="name-error"
                            aria-invalid="false"
                            required>
                        <small class="error-message"></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            aria-describedby="email-error"
                            required>
                        <small class="error-message"></small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        placeholder="What is your inquiry about?"
                        aria-describedby="subject-error"
                         aria-invalid="false"
                        required>
                    <small class="error-message" id="subject-error"></small>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                   <textarea
                    id="message"
                    name="message"
                    rows="6"
                    maxlength="500"
                    placeholder="Write your message here..."
                    aria-describedby="message-error message-counter"
                    aria-invalid="false"
                    required></textarea>
                <small class="error-message" id="message-error"></small>
                <div class="message-counter" id="message-counter" aria-live="polite">
                    0 / 500 characters
                </div>
                    <small class="error-message" id="message-error"></small>
                </div>



                <button type="submit" class="contact-submit">
                    Send Message <span>↗</span>
                </button>

                <p class="form-feedback" id="form-feedback" role="status"></p>

            </form>

        </div>

    </div>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush


