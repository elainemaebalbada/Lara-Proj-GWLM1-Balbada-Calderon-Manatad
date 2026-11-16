
document.addEventListener('DOMContentLoaded', function () {

    // READ MORE / READ LESS
    const readMoreButton = document.getElementById('aboutReadMore');
    const moreText = document.getElementById('aboutMoreText');

    if (readMoreButton && moreText) {
        readMoreButton.addEventListener('click', function () {
            const isExpanded =
                readMoreButton.getAttribute('aria-expanded') === 'true';

            moreText.hidden = isExpanded;

            readMoreButton.setAttribute(
                'aria-expanded',
                String(!isExpanded)
            );

            readMoreButton.innerHTML = isExpanded
                ? 'Read More <span aria-hidden="true">+</span>'
                : 'Read Less <span aria-hidden="true">−</span>';
        });
    }



    // HERO IMAGE SLIDESHOW - INFINITE AUTOPLAY
    const slideshow = document.querySelector('.about-slideshow');

    if (slideshow) {
        const images = slideshow.querySelectorAll('.slideshow-image');

        const imagePaths = [
            'ss1.png',
            'ss2.png',
            'ss3.png',
            'ss4.png',
            'ss5.png',
            'ss6.png',
            'ss7.png',
            'ss8.png',
            'ss9.png',
            'ss10.png',
            'ss11.png',
            'ss12.png',
            'ss13.png',
            'ss14.png'
        ];

        if (images.length === 2 && imagePaths.length > 0) {
            const imageFolder = '/images/slideshow/';
            let activeIndex = 0;
            let currentImageIndex = 0;

            const prefersReducedMotion =
                window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            // Load the first image.
            images[0].src = imageFolder + imagePaths[0];
            images[0].classList.add('is-active');

            // Preload all remaining images.
            imagePaths.forEach(function (fileName) {
                const preloadImage = new Image();
                preloadImage.src = imageFolder + fileName;
            });

            // Automatically transition every 3 seconds.
            if (!prefersReducedMotion) {
                window.setInterval(function () {

                    // Move to the next image.
                    // After the last image, return to the first.
                    currentImageIndex =
                        (currentImageIndex + 1) % imagePaths.length;

                    const nextLayer = 1 - activeIndex;
                    const activeLayer = images[activeIndex];
                    const nextLayerImage = images[nextLayer];

                    // Load the next image into the inactive layer.
                    nextLayerImage.onload = function () {

                        nextLayerImage.classList.add('is-active');
                        activeLayer.classList.remove('is-active');

                        activeIndex = nextLayer;

                        nextLayerImage.onload = null;
                    };

                    nextLayerImage.src =
                        imageFolder + imagePaths[currentImageIndex];

                }, 3000);
            }
        }
    }


    // SCROLL REVEAL
    const revealElements = document.querySelectorAll('[data-reveal]');

    if (revealElements.length > 0) {
        document.documentElement.classList.add('js-reveal');

        if ('IntersectionObserver' in window) {
            const revealObserver = new IntersectionObserver(
                function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    threshold: 0.12,
                    rootMargin: '0px 0px -40px 0px'
                }
            );

            revealElements.forEach(function (element) {
                revealObserver.observe(element);
            });
        } else {
            revealElements.forEach(function (element) {
                element.classList.add('is-visible');
            });
        }
    }

});
