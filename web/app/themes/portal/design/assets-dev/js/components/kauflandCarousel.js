/**
 * Initialize the "Kaufland" carousel with Slick.js based on the provided settings.
 * This function initializes the carousel, handles responsive behavior, and manages navigation arrows.
 *
 * @param {string} carouselSelector - The selector of the "Kaufland" carousel container.
 */
export function initializeKauflandCarousel(carouselSelector) {
    const $carousel = jQuery(carouselSelector);
    
    $carousel.slick({
        infinite: false,
        draggable: true, // Allow dragging
        swipe: true, // Allow swiping
        touchMove: true, // Allow touch move
        swipeToSlide: true, // Allow swipe to slide
        slidesToShow: 1, // Show one slide at a time
        slidesToScroll: 1,
        variableWidth: true, // Make each slide the width of the card
        prevArrow: $carousel.siblings().find(".kaufland-prev"),
        nextArrow: $carousel.siblings().find(".kaufland-next"),
    });
}

/**
 * Calculate the number of slides to show in the "Kaufland" carousel based on screen size and carousel layout.
 * On larger screens, calculates the maximum number of banners that can fit with margin.
 * On smaller screens, displays a single banner at a time.
 *
 * @param {string} carousel - The selector of the "Kaufland" carousel container.
 * @returns {number} The number of banners to show in the carousel.
 */
function calculateSlidesToShow($carousel) {
    const cardWidth = getCardWidth($carousel);
    const marginSize = getMarginSize($carousel);
    const totalWidth = $carousel.width();
    
    if (window.innerWidth >= 1024) {
        return Math.floor((totalWidth + marginSize) / (cardWidth + marginSize));
    } else {
        return Math.floor(totalWidth / (cardWidth + marginSize));
    }
}

/**
 * Get the appropriate card width based on screen size and carousel.
 * (small screens: 240px, bigger screens: 300px)
 * 
 * @param {string} carousel - The selector of the carousel container.
 * @returns {number} The width of the banner.
 */
function getCardWidth($carousel) {
    return window.innerWidth >= 1024 ? 300 : 240;
}

/**
 * Get the appropriate margin size based on screen size and carousel.
 * (small screens: 20px, bigger screens: 32px)
 * 
 * @param {string} carousel - The selector of the carousel container.
 * @returns {number} Margin size between two banners.
 */
function getMarginSize($carousel) {
    return window.innerWidth >= 1024 ? 32 : 20;
}