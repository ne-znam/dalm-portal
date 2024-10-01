/**
 * Main JavaScript file
 *
 * @package RootPixel
 * @subpackage DalmatinskiPortal
 * @since DalmatinskiPortal 1.0.0
 */

import "../scss/index.scss";
import { offCanvasToggler } from "./components/offCanvas.js";
import {
    stickyTogglerOpenOffCanvas,
    showStickyToggler,
} from "./components/stickyToggler.js";
import { storyCarousel } from "./components/storyCarousel.js";
import { initializeKauflandCarousel } from "./components/kauflandCarousel.js";
import { initializeHeaderGalleryCarousel } from "./components/headerGalleryCarousel.js";

document.addEventListener("DOMContentLoaded", () => {
    // Sticky button for off-canvas open
    const stickyBtn = document.querySelector(".sticky-off-canvas-toggler");
    // Vertical offset, where the sticky button should displayed (in pixels)
    const offsetY = 80;
    // Off-canvas container
    const offCanvas = document.querySelector(".off-canvas__container");
    // Off-canvas open button (hamburger icon)
    const menuOpenBtn = document.querySelector(".hamburger-menu-toggle");
    // Off-canvas close button
    const menuCloseBtn = document.querySelector(".off-canvas__close-btn");

    // Open / close the off-canvas menu with hamburger button
    offCanvasToggler(menuOpenBtn, menuCloseBtn, offCanvas, stickyBtn);

    /**
     * Show / hide the sticky button on scroll
     * 
     * UPDATE: Instead of attaching the scroll event listener to the window directly, 
     * we use event delegation on the document or a specific container element. This can 
     * improve performance, especially when there are multiple scroll listeners.
     */
    document.addEventListener("scroll", (event) => {
        if (event.target === document) {
            showStickyToggler(stickyBtn, offsetY);
        }
    });

    // Open / close the off-canvas menu with sticky button
    stickyTogglerOpenOffCanvas(stickyBtn, offCanvas);

    // Story carousel
    storyCarousel();

    // The Kaufland carousels on the actual page
    const kauflandCarousels = document.querySelectorAll(".kaufland-section__carousel");
    // The Story carousels on the actual page
    const storyCarousels = document.querySelectorAll(".story-container");
    // The Header gallery carousels on the actual page
    const headerGalleryCarousels = document.querySelectorAll(".header-gallery-container");

    // When there is Kaufland carousel on the page, initialize (all of them)
    if (kauflandCarousels) {
        kauflandCarousels.forEach((container) => {
            const kauflandCarouselId = container.getAttribute("data-carousel-id");
            const kauflandCarouselSelector = `.kaufland-section__carousel[data-carousel-id="${kauflandCarouselId}"]`;
            initializeKauflandCarousel(kauflandCarouselSelector);
        });
    }

    // When there is Header gallery carousel on the page, initialize (all of them)
    if (headerGalleryCarousels) {
        headerGalleryCarousels.forEach((container) => {
            const headerGalleryCarouselId = container.getAttribute("data-carousel-id");
            const headerGalleryCarouselSelector = `.header-gallery-container[data-carousel-id="${headerGalleryCarouselId}"]`;
            initializeHeaderGalleryCarousel(headerGalleryCarouselSelector);
        });
    }
});
