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

    const fields = [
        { id: 'name', message: 'Please enter your name.' },
        { id: 'email', message: 'Please enter a valid email address.' },
        { id: 'subject', message: 'Please enter a subject.' },
        { id: 'message', message: 'Please enter your message.' }
    ];

    /* ========================================
       MESSAGE CHARACTER COUNTER
    ======================================== */

    const messageInput = document.getElementById('message');
    const messageCounter = document.getElementById('message-counter');
    const maxMessageLength = 500;

    function updateMessageCounter() {
        const currentLength = messageInput.value.length;

        messageCounter.textContent =
            `${currentLength} / ${maxMessageLength} characters`;

        messageCounter.classList.toggle(
            'is-near-limit',
            currentLength >= 450
        );
    }

    messageInput.addEventListener('input', updateMessageCounter);
    updateMessageCounter();

    /* ========================================
       FIELD ERROR HANDLING
    ======================================== */

    function clearFieldError(input) {
        const error = document.getElementById(input.id + '-error');

        input.classList.remove('invalid');
        input.setAttribute('aria-invalid', 'false');

        if (error) {
            error.textContent = '';
        }
    }

    function showFieldError(input, message) {
        const error = document.getElementById(input.id + '-error');

        input.classList.add('invalid');
        input.setAttribute('aria-invalid', 'true');

        if (error) {
            error.textContent = message;
        }
    }

    fields.forEach(function (field) {
        const input = document.getElementById(field.id);

        input.addEventListener('input', function () {
            clearFieldError(input);
            feedback.className = 'form-feedback';
            feedback.textContent = '';
        });
    });

    /* ========================================
       FORM SUBMISSION
    ======================================== */

    contactForm.addEventListener('submit', function (event) {
        event.preventDefault();

        let isValid = true;
        let firstInvalidField = null;

        fields.forEach(function (field) {
            const input = document.getElementById(field.id);

            clearFieldError(input);

            if (!input.value.trim()) {
                showFieldError(input, field.message);
                isValid = false;

                if (!firstInvalidField) {
                    firstInvalidField = input;
                }
            }
        });

        const email = document.getElementById('email');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email.value.trim() && !emailPattern.test(email.value.trim())) {
            showFieldError(email, 'Please enter a valid email address.');
            isValid = false;

            if (!firstInvalidField) {
                firstInvalidField = email;
            }
        }

        feedback.className = 'form-feedback';
        feedback.textContent = '';

        if (!isValid) {
            feedback.classList.add('error');
            feedback.textContent = 'Please check the highlighted fields.';

            if (firstInvalidField) {
                firstInvalidField.focus();
            }

            return;
        }

        feedback.classList.add('success');
        feedback.textContent =
            'Thank you! Your message has been prepared successfully.';

        contactForm.reset();
        updateMessageCounter();

        fields.forEach(function (field) {
            clearFieldError(document.getElementById(field.id));
        });
    });

});
