
document.addEventListener('DOMContentLoaded', function () {

    /* ========================================
       SCROLL REVEAL
    ======================================== */

    const revealElements = document.querySelectorAll(
        '.contact-info, .contact-details, .contact-note, .contact-form-wrapper'
    );

    revealElements.forEach(function (element, index) {
        element.classList.add('reveal');

        if (index === 1) {
            element.classList.add('reveal-delay-1');
        }

        if (index === 2) {
            element.classList.add('reveal-delay-2');
        }
    });

    if ('IntersectionObserver' in window) {

        const observer = new IntersectionObserver(function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }

            });

        }, {
            threshold: 0.15
        });

        revealElements.forEach(function (element) {
            observer.observe(element);
        });

    } else {

        revealElements.forEach(function (element) {
            element.classList.add('is-visible');
        });

    }


    /* ========================================
       CONTACT FORM VALIDATION
    ======================================== */

    const contactForm = document.getElementById('contact-form');
    const feedback = document.getElementById('form-feedback');

    if (!contactForm) return;

    contactForm.addEventListener('submit', function (event) {

        event.preventDefault();

        const fields = [
            { id: 'name', message: 'Please enter your name.' },
            { id: 'email', message: 'Please enter a valid email address.' },
            { id: 'subject', message: 'Please enter a subject.' },
            { id: 'message', message: 'Please enter your message.' }
        ];

        let isValid = true;

        fields.forEach(function (field) {

            const input = document.getElementById(field.id);
            const error = input.parentElement.querySelector('.error-message');

            input.classList.remove('invalid');
            error.textContent = '';

            if (!input.value.trim()) {
                input.classList.add('invalid');
                error.textContent = field.message;
                isValid = false;
            }

        });

        const email = document.getElementById('email');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email.value.trim() && !emailPattern.test(email.value.trim())) {

            const error = email.parentElement.querySelector('.error-message');

            email.classList.add('invalid');
            error.textContent = 'Please enter a valid email address.';
            isValid = false;

        }

        feedback.className = 'form-feedback';
        feedback.textContent = '';

        if (!isValid) {

            feedback.classList.add('error');
            feedback.textContent = 'Please check the highlighted fields.';
            return;

        }

        feedback.classList.add('success');
        feedback.textContent =
            'Thank you! Your message has been prepared successfully.';

        contactForm.reset();

        fields.forEach(function (field) {

            const input = document.getElementById(field.id);

            input.classList.remove('invalid');
            input.parentElement.querySelector('.error-message').textContent = '';

        });

    });

});