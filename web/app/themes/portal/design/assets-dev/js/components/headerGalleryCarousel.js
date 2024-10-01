/**
 * Initialize the "Header gallery" carousel with Slick.js based on the provided settings.
 * This function initializes the carousel, handles responsive behavior, and manages navigation arrows.
 *
 * @param {string} carouselSelector - The selector of the "Header gallery" carousel container.
 */
export function initializeHeaderGalleryCarousel(carouselSelector) {
    const $carousel = jQuery(carouselSelector);

    $carousel.slick({
        infinite: true,
        draggable: true,
        slidesToShow: 1, // Show one slide at a time
        slidesToScroll: 1,
        touchThreshold: 100,
        dots: true, // Show navigation dots
        arrows: false, // Hide arrows
        variableWidth: true, // Make each slide the width of the container
        centerMode: true, // Center the current slide
    });
}