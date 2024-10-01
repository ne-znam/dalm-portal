/**
 * This function opens / hides the off-canvas menu with sticky button
 * 
 * @param HTMLElement btn The sticky button
 * @param HTMLElement offCanvas The off-canvas container
 * 
 * @return void
 */
export function stickyTogglerOpenOffCanvas(btn, offCanvas) {

    // Handle the click event on the button
    btn.addEventListener("click", (e) => {
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
export function showStickyToggler(btn, offset) {
    let yOffset = window.scrollY;

    if (yOffset >= offset) {
        btn.classList.add("sticky-off-canvas-toggler--active");
    } else {
        btn.classList.remove("sticky-off-canvas-toggler--active");
    }
}
