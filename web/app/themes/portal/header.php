<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body>
	<?php do_action('wp_body_open'); ?>
    <!-- Include header templaate -->
    <!-- Header component -->
    <header id="main-header" class="container--fluid main-header">
        <nav id="main-navbar" class="main-navbar">
            <div class="main-navbar__inner-container">
                <!-- Import navbar menu -->
                <!-- Header main navigation -->
                <?php // TODO: create navigation walker ?>
                <ul class="main-navbar__menu">
                    <li class="menu-item"><a href="/kategorija/vijesti/">Vijesti</a></li>
                    <li class="menu-item"><a href="/kategorija/sport/">Sport</a></li>
                    <li class="menu-item"><a href="/kategorija/zivot/">Život</a></li>
                    <li class="menu-item"><a href="/kategorija/hrvatska/">Hrvatska</a></li>
                    <li class="menu-item"><a href="/kategorija/video/">Video</a></li>
                    <li class="menu-item"><a href="/kategorija/hedonistika/">Hedonistika</a></li>
                    <li class="menu-item menu-item--has-children">
                        <a href="#">Ostale rubrike</a>
                        <ul class="submenu">
                            <li class="menu-item"><a href="/kategorija/energija-i-ekologija/">Energija i Ekologija</a></li>
                            <li class="menu-item"><a href="/kategorija/1-na-10/">1 na 10</a></li>
                            <li class="menu-item"><a href="/kategorija/vjencanje/">Vjenčanje</a></li>
                            <li class="menu-item"><a href="/kategorija/nekretnine">Nekretnine</a></li>
                            <li class="menu-item"><a href="/kategorija/sport-365/">Sport 365</a></li>
                            <li class="menu-item"><a href="/kategorija/turizam/">Turizam</a></li>
                            <li class="menu-item"><a href="/kategorija/svijet/">Svijet</a></li>
                            <li class="menu-item"><a href="/kategorija/zdravlje/">Zdravlje</a></li>
                            <li class="menu-item"><a href="/kategorija/gastro/">Gastro</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="/kategorija/kalendar/">Kalendar</a></li>
                </ul>

                <!-- Import search section (desktop) -->
                <!-- Header navigation search (desktop) -->
                <div class="main-navbar__search">
                    <form action="" role="search" method="get" class="main-navbar__search-form">
                        <label>
                            <input type="text" name="s" id="main_navbar_search_field" class="main-navbar__search__field" value="" />
                        </label>
                        <input type="submit" class="main-navbar__search-submit" value="Traži">
                    </form>
                </div>
            </div>
        </nav>

        <section class="header-brand-nav-container">
            <!-- Import header brand section -->
            <!-- Header brand container for mobile & tablet -->
            <a href="<?php echo home_url(); ?>" class="logo-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_svijetla.svg" alt="Dalmatinski portal" class="logo--small">
            </a>

            <!-- Import mobile menu open button -->
            <!-- Header navigation mobile open button -->
            <a href="#" class="hamburger-menu-toggle">
                <!-- Hamburger menu icon -->
                <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.38477H22" stroke="#ECF0F1" stroke-width="2"/>
                    <path d="M0 11.3848H22" stroke="#ECF0F1" stroke-width="2"/>
                    <path d="M0 21.3848H22" stroke="#ECF0F1" stroke-width="2"/>
                </svg>
            </a>
        </section>

        <section class="desktop-hero-section">
            <!-- Import desktop logo section -->
            <!-- Header brand container for desktop -->
            <a href="<?php echo home_url() ?>" class="logo-container--desktop">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_tamna.svg" alt="Dalmatinski portal" class="logo--big">
            </a>
            <!-- Import header hero section -->
            <!-- Header hero section -->
            <a href="#" class="header-hero-section">
                <img src="http://test001.skica.org/images/2023-04-14-23-56-320-.jpg.png" alt="Test ad banner">
            </a>
        </section>

        <!-- Import off-canvas section -->
        <!-- Off canvas menu -->
        <section class="off-canvas__container">

            <!-- Import off-canvas header -->
            <!-- Off-canvas menu header part with logo & close button -->
            <header class="off-canvas__header">
                <a href="<?php echo home_url(); ?>" class="off-canvas__logo-container">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_footer.svg" alt="Dalmatinski portal">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_svijetla.svg" class="off-canvas-logo--hover" alt="Dalmatinski portal">
                </a>
                <a href="#" class="off-canvas__close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path d="M1 1.38867L23 23.3849" stroke="#ECF0F1" stroke-width="2"/>
                        <path d="M1 23.2207L22.9027 1.38474" stroke="#ECF0F1" stroke-width="2"/>
                    </svg>
                </a>
            </header>

            <!-- Import search -->
            <!-- Off-canvas menu search part -->
            <div class="off-canvas__search-container">
                <input type="text" class="off-canvas__search-input" />
            </div>

            <!-- Import navigation -->
            <!-- Off-canvas menu navigation part -->
            <nav class="off-canvas__menu-container">
                <ul class="off-canvas__menu">
                    <li class="menu-item"><a href="#">Vijesti</a></li>
                    <li class="menu-item"><a href="#">Sport</a></li>
                    <li class="menu-item active"><a href="#">Život</a></li>
                    <li class="menu-item"><a href="#">Hrvatska</a></li>
                    <li class="menu-item"><a href="#">Video</a></li>
                    <li class="menu-item"><a href="#">Hedonistika</a></li>
                    <li class="menu-item"><a href="#">Energija i Ekologija</a></li>
                    <li class="menu-item"><a href="#">1 na 10</a></li>
                    <li class="menu-item"><a href="#">Vjenčanje</a></li>
                    <li class="menu-item"><a href="#">Nekretnine</a></li>
                    <li class="menu-item"><a href="#">Sport 365</a></li>
                    <li class="menu-item"><a href="#">Turizam</a></li>
                    <li class="menu-item"><a href="#">Svijet</a></li>
                    <li class="menu-item"><a href="#">Zdravlje</a></li>
                    <li class="menu-item"><a href="#">Gastro</a></li>
                    <li class="menu-item"><a href="#">-</a></li>
                    <li class="menu-item"><a href="#">Tjedni pregled</a></li>
                    <li class="menu-item"><a href="#">Dupli osvrt</a></li>
                    <li class="menu-item"><a href="#">Centar izvrsnosti</a></li>
                    <li class="menu-item"><a href="#">Timbar na libar</a></li>
                    <li class="menu-item"><a href="#">Komentar utakmice</a></li>
                    <li class="menu-item"><a href="#">SVE TEME</a></li>
                </ul>
            </nav>
        </section>

        <!-- Import sticky off-canvas toggler (on scroll) -->
        <!-- Sticky off-canvas toggler on scroll -->
        <a href="#" class="sticky-off-canvas-toggler" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                <circle cx="19.1015" cy="19.4184" r="9.47063" fill="#ECF0F1"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.0427 19.4188C38.0427 29.8798 29.5624 38.3601 19.1014 38.3601C8.64045 38.3601 0.160156 29.8798 0.160156 19.4188C0.160156 8.95783 8.64045 0.477539 19.1014 0.477539C29.5624 0.477539 38.0427 8.95783 38.0427 19.4188ZM19.1014 33.6247C26.9471 33.6247 33.3074 27.2645 33.3074 19.4188C33.3074 11.5731 26.9471 5.21285 19.1014 5.21285C11.2557 5.21285 4.89547 11.5731 4.89547 19.4188C4.89547 27.2645 11.2557 33.6247 19.1014 33.6247Z" fill="#D7D7D7"/>
            </svg>
        </a>
    </header>

