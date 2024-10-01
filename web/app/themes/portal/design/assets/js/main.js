/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/components/headerGalleryCarousel.js":
/*!*******************************************************!*\
  !*** ./assets/js/components/headerGalleryCarousel.js ***!
  \*******************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initializeHeaderGalleryCarousel: function() { return /* binding */ initializeHeaderGalleryCarousel; }
/* harmony export */ });
/**
 * Initialize the "Header gallery" carousel with Slick.js based on the provided settings.
 * This function initializes the carousel, handles responsive behavior, and manages navigation arrows.
 *
 * @param {string} carouselSelector - The selector of the "Header gallery" carousel container.
 */
function initializeHeaderGalleryCarousel(carouselSelector) {
  var $carousel = jQuery(carouselSelector);
  $carousel.slick({
    infinite: true,
    draggable: true,
    slidesToShow: 1,
    // Show one slide at a time
    slidesToScroll: 1,
    touchThreshold: 100,
    dots: true,
    // Show navigation dots
    arrows: false,
    // Hide arrows
    variableWidth: true,
    // Make each slide the width of the container
    centerMode: true // Center the current slide
  });
}

/***/ }),

/***/ "./assets/js/components/kauflandCarousel.js":
/*!**************************************************!*\
  !*** ./assets/js/components/kauflandCarousel.js ***!
  \**************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initializeKauflandCarousel: function() { return /* binding */ initializeKauflandCarousel; }
/* harmony export */ });
/**
 * Initialize the "Kaufland" carousel with Slick.js based on the provided settings.
 * This function initializes the carousel, handles responsive behavior, and manages navigation arrows.
 *
 * @param {string} carouselSelector - The selector of the "Kaufland" carousel container.
 */
function initializeKauflandCarousel(carouselSelector) {
  var $carousel = jQuery(carouselSelector);
  $carousel.slick({
    infinite: false,
    draggable: true,
    // Allow dragging
    swipe: true,
    // Allow swiping
    touchMove: true,
    // Allow touch move
    swipeToSlide: true,
    // Allow swipe to slide
    slidesToShow: 1,
    // Show one slide at a time
    slidesToScroll: 1,
    variableWidth: true,
    // Make each slide the width of the card
    prevArrow: $carousel.siblings().find(".kaufland-prev"),
    nextArrow: $carousel.siblings().find(".kaufland-next")
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
  var cardWidth = getCardWidth($carousel);
  var marginSize = getMarginSize($carousel);
  var totalWidth = $carousel.width();
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

/***/ }),

/***/ "./assets/js/components/offCanvas.js":
/*!*******************************************!*\
  !*** ./assets/js/components/offCanvas.js ***!
  \*******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   offCanvasToggler: function() { return /* binding */ offCanvasToggler; }
/* harmony export */ });
/**
 * Function for show/hidden the off-canvas menu with hamburger icon
 * 
 * @param HMTLElement hamburgerBtn The menu button (hamburger)
 * @param HTMLElement closeBtn The close button in off-canvas container
 * @param HTMLElement offCanvas The off-canvas container
 * @param HTMLElement stickyBtn The sticky button
 */
function offCanvasToggler(hamburgerBtn, closeBtn, offCanvas, stickyBtn) {
  // When the hamburger icon is clicked, with toggle() method we add or
  // remove the .off-canvas__container--opened class of the off canvas
  // container
  hamburgerBtn.addEventListener("click", function (e) {
    e.preventDefault();
    offCanvas.classList.toggle("off-canvas__container--opened");
    e.stopPropagation(); // Stop event propagation
  });

  // Close the off canvas menu (remove .off-canvas__container--opened class
  // from it) when the close button is clicked
  closeBtn.addEventListener("click", function (e) {
    e.preventDefault();
    offCanvas.classList.remove("off-canvas__container--opened");
  });

  // When the visitor press the ESC key on the keyboard, we close the off-canvas
  document.addEventListener("keyup", function (e) {
    if (e.key === 'Escape' && offCanvas.classList.contains("off-canvas__container--opened")) {
      offCanvas.classList.remove("off-canvas__container--opened");
    }
  });

  // Close the off-canvas, when visitor clicks outside of it
  document.addEventListener('click', function (e) {
    if (offCanvas.classList.contains('off-canvas__container--opened') && !offCanvas.contains(e.target) && e.target !== hamburgerBtn && e.target !== stickyBtn) {
      console.log("Clicked outside off-canvas");
      offCanvas.classList.remove('off-canvas__container--opened');
    }
  });
}

/***/ }),

/***/ "./assets/js/components/stickyToggler.js":
/*!***********************************************!*\
  !*** ./assets/js/components/stickyToggler.js ***!
  \***********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   showStickyToggler: function() { return /* binding */ showStickyToggler; },
/* harmony export */   stickyTogglerOpenOffCanvas: function() { return /* binding */ stickyTogglerOpenOffCanvas; }
/* harmony export */ });
/**
 * This function opens / hides the off-canvas menu with sticky button
 * 
 * @param HTMLElement btn The sticky button
 * @param HTMLElement offCanvas The off-canvas container
 * 
 * @return void
 */
function stickyTogglerOpenOffCanvas(btn, offCanvas) {
  // Handle the click event on the button
  btn.addEventListener("click", function (e) {
    e.preventDefault();
    offCanvas.classList.toggle("off-canvas__container--opened");
    e.stopPropagation(); // Stop event propagation
  });
}

/**
 * Function for show / hide the sticky navigation button,
 * when the visitor scrolls down on the page
 * 
 * @param HTMLElement btn The sticky button
 * @param int offset The offset from window's top
 * 
 * @return void
 */
function showStickyToggler(btn, offset) {
  var yOffset = window.scrollY;
  if (yOffset >= offset) {
    btn.classList.add("sticky-off-canvas-toggler--active");
  } else {
    btn.classList.remove("sticky-off-canvas-toggler--active");
  }
}

/***/ }),

/***/ "./assets/js/components/storyCarousel.js":
/*!***********************************************!*\
  !*** ./assets/js/components/storyCarousel.js ***!
  \***********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   storyCarousel: function() { return /* binding */ storyCarousel; }
/* harmony export */ });
/**
 * Story carousel is a simple horizontal scrollable container,
 * the JavaScript handles, when the visitor swipe left/right.
 */
function storyCarousel() {
  if (document.querySelector('.story-container')) {
    var beginMomentumTracking = function beginMomentumTracking() {
      cancelMomentumTracking();
      momentumID = requestAnimationFrame(momentumLoop);
    };
    var cancelMomentumTracking = function cancelMomentumTracking() {
      cancelAnimationFrame(momentumID);
    };
    var momentumLoop = function momentumLoop() {
      slider.scrollLeft += velX * 2;
      velX *= 0.95;
      if (Math.abs(velX) > 0.5) {
        momentumID = requestAnimationFrame(momentumLoop);
      }
    }; // Scroll
    var slider = document.querySelector('.story-container');
    var isDown = false;
    var startX;
    var scrollLeft;
    slider.addEventListener('mousedown', function (e) {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
      cancelMomentumTracking();
    });
    slider.addEventListener('mouseleave', function () {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', function () {
      isDown = false;
      slider.classList.remove('active');
      beginMomentumTracking();
    });
    slider.addEventListener('mousemove', function (e) {
      if (!isDown) return;
      e.preventDefault();
      var x = e.pageX - slider.offsetLeft;
      var walk = x - startX; //scroll-fast
      var prevScrollLeft = slider.scrollLeft;
      slider.scrollLeft = scrollLeft - walk;
      velX = slider.scrollLeft - prevScrollLeft;
    });

    // Momentum 
    var velX = 0;
    var momentumID;
    slider.addEventListener('wheel', function (e) {
      cancelMomentumTracking();
    });
    var scrollContainer = document.querySelector(".story-container");
    scrollContainer.addEventListener("wheel", function (evt) {
      evt.preventDefault();
      window.requestAnimationFrame(function () {
        scrollContainer.scrollTo({
          top: 0,
          left: scrollContainer.scrollLeft + evt.deltaY * 2,
          behavior: "smooth"
        });
      });
    });
  }
}

/***/ }),

/***/ "./assets/scss/index.scss":
/*!********************************!*\
  !*** ./assets/scss/index.scss ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!****************************!*\
  !*** ./assets/js/index.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/index.scss */ "./assets/scss/index.scss");
/* harmony import */ var _components_offCanvas_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/offCanvas.js */ "./assets/js/components/offCanvas.js");
/* harmony import */ var _components_stickyToggler_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/stickyToggler.js */ "./assets/js/components/stickyToggler.js");
/* harmony import */ var _components_storyCarousel_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/storyCarousel.js */ "./assets/js/components/storyCarousel.js");
/* harmony import */ var _components_kauflandCarousel_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/kauflandCarousel.js */ "./assets/js/components/kauflandCarousel.js");
/* harmony import */ var _components_headerGalleryCarousel_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/headerGalleryCarousel.js */ "./assets/js/components/headerGalleryCarousel.js");
/**
 * Main JavaScript file
 *
 * @package RootPixel
 * @subpackage DalmatinskiPortal
 * @since DalmatinskiPortal 1.0.0
 */







document.addEventListener("DOMContentLoaded", function () {
  // Sticky button for off-canvas open
  var stickyBtn = document.querySelector(".sticky-off-canvas-toggler");
  // Vertical offset, where the sticky button should displayed (in pixels)
  var offsetY = 80;
  // Off-canvas container
  var offCanvas = document.querySelector(".off-canvas__container");
  // Off-canvas open button (hamburger icon)
  var menuOpenBtn = document.querySelector(".hamburger-menu-toggle");
  // Off-canvas close button
  var menuCloseBtn = document.querySelector(".off-canvas__close-btn");

  // Open / close the off-canvas menu with hamburger button
  (0,_components_offCanvas_js__WEBPACK_IMPORTED_MODULE_1__.offCanvasToggler)(menuOpenBtn, menuCloseBtn, offCanvas, stickyBtn);

  /**
   * Show / hide the sticky button on scroll
   * 
   * UPDATE: Instead of attaching the scroll event listener to the window directly, 
   * we use event delegation on the document or a specific container element. This can 
   * improve performance, especially when there are multiple scroll listeners.
   */
  document.addEventListener("scroll", function (event) {
    if (event.target === document) {
      (0,_components_stickyToggler_js__WEBPACK_IMPORTED_MODULE_2__.showStickyToggler)(stickyBtn, offsetY);
    }
  });

  // Open / close the off-canvas menu with sticky button
  (0,_components_stickyToggler_js__WEBPACK_IMPORTED_MODULE_2__.stickyTogglerOpenOffCanvas)(stickyBtn, offCanvas);

  // Story carousel
  (0,_components_storyCarousel_js__WEBPACK_IMPORTED_MODULE_3__.storyCarousel)();

  // The Kaufland carousels on the actual page
  var kauflandCarousels = document.querySelectorAll(".kaufland-section__carousel");
  // The Story carousels on the actual page
  var storyCarousels = document.querySelectorAll(".story-container");
  // The Header gallery carousels on the actual page
  var headerGalleryCarousels = document.querySelectorAll(".header-gallery-container");

  // When there is Kaufland carousel on the page, initialize (all of them)
  if (kauflandCarousels) {
    kauflandCarousels.forEach(function (container) {
      var kauflandCarouselId = container.getAttribute("data-carousel-id");
      var kauflandCarouselSelector = ".kaufland-section__carousel[data-carousel-id=\"".concat(kauflandCarouselId, "\"]");
      (0,_components_kauflandCarousel_js__WEBPACK_IMPORTED_MODULE_4__.initializeKauflandCarousel)(kauflandCarouselSelector);
    });
  }

  // When there is Header gallery carousel on the page, initialize (all of them)
  if (headerGalleryCarousels) {
    headerGalleryCarousels.forEach(function (container) {
      var headerGalleryCarouselId = container.getAttribute("data-carousel-id");
      var headerGalleryCarouselSelector = ".header-gallery-container[data-carousel-id=\"".concat(headerGalleryCarouselId, "\"]");
      (0,_components_headerGalleryCarousel_js__WEBPACK_IMPORTED_MODULE_5__.initializeHeaderGalleryCarousel)(headerGalleryCarouselSelector);
    });
  }
});
}();
/******/ })()
;
//# sourceMappingURL=main.js.map