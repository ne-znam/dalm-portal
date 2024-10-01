/**
 * Function for show/hidden the off-canvas menu with hamburger icon
 * 
 * @param HMTLElement hamburgerBtn The menu button (hamburger)
 * @param HTMLElement closeBtn The close button in off-canvas container
 * @param HTMLElement offCanvas The off-canvas container
 * @param HTMLElement stickyBtn The sticky button
 */
export function offCanvasToggler(hamburgerBtn, closeBtn, offCanvas, stickyBtn) {

    // When the hamburger icon is clicked, with toggle() method we add or
    // remove the .off-canvas__container--opened class of the off canvas
    // container
    hamburgerBtn.addEventListener("click", (e) => {
        e.preventDefault();
        offCanvas.classList.toggle("off-canvas__container--opened");
        e.stopPropagation(); // Stop event propagation
    });

    // Close the off canvas menu (remove .off-canvas__container--opened class
    // from it) when the close button is clicked
    closeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        offCanvas.classList.remove("off-canvas__container--opened");
    });

    // When the visitor press the ESC key on the keyboard, we close the off-canvas
    document.addEventListener("keyup", (e) => {
        if (e.key === 'Escape' && offCanvas.classList.contains("off-canvas__container--opened")) {
            offCanvas.classList.remove("off-canvas__container--opened");
        }
    });

    // Close the off-canvas, when visitor clicks outside of it
    document.addEventListener('click', (e) => {
        if (offCanvas.classList.contains('off-canvas__container--opened') && 
            !offCanvas.contains(e.target) && e.target !== hamburgerBtn && e.target !== stickyBtn) {
                console.log("Clicked outside off-canvas");
            offCanvas.classList.remove('off-canvas__container--opened');
        }
    });   
}