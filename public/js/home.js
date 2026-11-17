// HOME PAGE INTERACTIONS
document.addEventListener('DOMContentLoaded', function () {

    // 1. SMOOTH SCROLL TO CAMERA COLLECTION
    const cameraLink = document.querySelector(
        '.hero-actions a[href="#camera-collection"]'
    );

    const cameraCollection = document.getElementById('camera-collection');

    if (cameraLink && cameraCollection) {
        cameraLink.addEventListener('click', function (event) {
            event.preventDefault();

            cameraCollection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    }

    // 2. SELECT ELEMENTS FOR SCROLL REVEAL
    const revealElements = document.querySelectorAll(
        '.hero-content, .hero-visual, .intro-section, ' +
        '.camera-card, .camera-collection-cta, .process-card'
    );


    // 3. INITIALIZE SCROLL REVEAL
    if ('IntersectionObserver' in window) {
        try {
            const revealObserver = new IntersectionObserver(
                function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.15 }
            );

            revealElements.forEach(function (element) {
                element.classList.add('reveal');
                revealObserver.observe(element);
            });

        } catch {
            revealElements.forEach(function (element) {
                element.classList.add('is-visible');
            });
        }
    } else {
        // Fallback for browsers without IntersectionObserver
        revealElements.forEach(function (element) {
            element.classList.add('is-visible');
        });
    }
});
