<!-- Include footer template -->
<!-- Footer container -->
<footer  id="main-footer" class="container--fluid main-footer">
    <div class="main-footer__inner-container">

        <!-- Import footer logo container template -->
        <a href="<?php echo home_url(); ?>" class="main-footer__logo-container">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/logo/logo_footer.svg" alt="Dalmatinski portal">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/logo/images/logo_svijetla.svg" class="footer-logo--hover" alt="Dalmatinski portal">
        </a>

        <!-- Import footer navbar container template -->
        <!-- Footer search & navbar section -->
        <section class="footer-navbar-container">

            <!-- Footer search -->
            <div class="footer-navbar__search">
                <form action="" role="search" method="get" class="footer-navbar__search-form">
                    <label>
                        <input type="text" name="footer_navbar_search_field" id="footer_navbar_search_field" class="footer-navbar__search__field" value="" />
                    </label>
                    <input type="submit" class="footer-navbar__search-submit" value="Traži">
                </form>
            </div>

            <!-- Footer navigation -->
            <nav class="footer-navbar__menu-container">
                <ul class="footer-navbar__menu">
                    <li class="menu-item"><a href="#">Twitter</a></li>
                    <li class="menu-item"><a href="#">Facebook</a></li>
                    <li class="menu-item"><a href="#">Marketing</a></li>
                    <li class="menu-item"><a href="#">Kontakt</a></li>
                    <li class="menu-item"><a href="#">Impressum</a></li>
                    <li class="menu-item"><a href="#">Pravila privatnosti</a></li>
                </ul>
            </nav>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
