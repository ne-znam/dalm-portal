<?php
get_header();
?>

	<article id="content-section" class="container--fluid content-section content-section--homepage-1">
<?php if (!wp_is_mobile()): ?>
		<div class="row-1__landscape-banner">
			<!-- Landscape banner component -->
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/1aafcc976ef7d8c780139326d6c12432.png" alt="">
			</a>
		</div>
		<div class="row-1__square-banner">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Image.png" alt=""/>
			</a>
		</div>

		<div class="row-2__main-news">
			<!-- Main news box - content under image -->
			<div class="main-news-box main-news-box--content-under-image">
				<!-- Article's featured image or gallery -->
				<!-- We have to define a unique ID for each same carousel, that slick can handle them separately
				when there is more on the same page (data-carousel-id="" attribute) -->
				<div class="header-gallery-container" data-carousel-id="1">

					<div class="featured-image-container">
						<div class="slider-article-img">
							<img src="/content/thumbs/58c49ec107f507eb1c15e7ad75e74bd8.jpg" alt="Article title">
							<div class="aras-promo--big">Promo</div>
						</div>

						<div class="slider-article-title">
							<a href="#" class="content">
								<div class="meta-container">
									<div class="aras-tag">Život</div>
									<div href="#" class="aras-label--red">23/05/23 · 18:53</div>
								</div>

								<h2>KAOS KOD OPĆINE Dvije prometne u pola sata, ozlijeđeni motociklisti</h2>

								<h3>Promet u Solinskoj ulici blokiran već sat vremena</h3>
							</a>
						</div>
					</div>

					<div class="featured-image-container">
						<div class="slider-article-img">
							<img src="/content/thumbs/58c49ec107f507eb1c15e7ad75e74bd8.jpg" alt="Article title">
							<div class="aras-promo--big">Promo</div>
						</div>

						<div class="slider-article-title">
							<a href="#" class="content">
								<!-- Tag(s) and publishing date -->
								<div class="meta-container">
									<div class="aras-tag">Život</div>
									<div href="#" class="aras-label--red">23/05/23 · 18:53</div>
								</div>

								<!-- Article title -->
								<h2>KAOS KOD OPĆINE Dvije prometne u pola sata, ozlijeđeni motociklisti</h2>

								<!-- Subtitle -->
								<h3>Promet u Solinskoj ulici blokiran već sat vremena</h3>
							</a>
						</div>
					</div>

					<div class="featured-image-container">
						<div class="slider-article-img">
							<img src="/content/thumbs/58c49ec107f507eb1c15e7ad75e74bd8.jpg" alt="Article title">
							<div class="aras-promo--big">Promo</div>
						</div>

						<div class="slider-article-title">
							<a href="#" class="content">
								<!-- Tag(s) and publishing date -->
								<div class="meta-container">
									<div class="aras-tag">Život</div>
									<div href="#" class="aras-label--red">23/05/23 · 18:53</div>
								</div>

								<!-- Article title -->
								<h2>KAOS KOD OPĆINE Dvije prometne u pola sata, ozlijeđeni motociklisti</h2>

								<!-- Subtitle -->
								<h3>Promet u Solinskoj ulici blokiran već sat vremena</h3>
							</a>
						</div>
					</div>

					<div class="featured-image-container">
						<div class="slider-article-img">
							<img src="/content/thumbs/58c49ec107f507eb1c15e7ad75e74bd8.jpg" alt="Article title">
							<div class="aras-promo--big">Promo</div>
						</div>

						<div class="slider-article-title">
							<a href="#" class="content">
								<!-- Tag(s) and publishing date -->
								<div class="meta-container">
									<div class="aras-tag">Život</div>
									<div href="#" class="aras-label--red">23/05/23 · 18:53</div>
								</div>

								<!-- Article title -->
								<h2>KAOS KOD OPĆINE Dvije prometne u pola sata, ozlijeđeni motociklisti</h2>

								<!-- Subtitle -->
								<h3>Promet u Solinskoj ulici blokiran već sat vremena</h3>
							</a>
						</div>
					</div>

					<div class="featured-image-container">
						<div class="slider-article-img">
							<img src="/content/thumbs/58c49ec107f507eb1c15e7ad75e74bd8.jpg" alt="Article title">
							<div class="aras-promo--big">Promo</div>
						</div>

						<div class="slider-article-title">
							<a href="#" class="content">
								<!-- Tag(s) and publishing date -->
								<div class="meta-container">
									<div class="aras-tag">Život</div>
									<div href="#" class="aras-label--red">23/05/23 · 18:53</div>
								</div>

								<!-- Article title -->
								<h2>KAOS KOD OPĆINE Dvije prometne u pola sata, ozlijeđeni motociklisti</h2>

								<!-- Subtitle -->
								<h3>Promet u Solinskoj ulici blokiran već sat vremena</h3>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row-2__news-2">
			<a href="#" class="main-article">
				<img src="/content/thumbs/c845fb3f406735a8e44ed14f0d26b4f1.png" alt="">
				<div class="overlay-helper">
					<div class="tags-header">
						<div class="aras-tag">Pregled dana</div>
					</div>
					<h3>Puljkova nervoza</h3>
					<p>Piše <span>Damir Petranović</span></p>
				</div>
			</a>
			<div class="article-list">
				<a href="#" class="article-list__item">
					<div class="tags-header">
						<div class="aras-tag">Komentar dana</div>
						<div class="aras-label--red">23/05/23 · 18:53</div>
					</div>
					<h3>Treba li smijeniti Valdasa Dambrausaska?</h3>
				</a>
				<a href="#" class="article-list__item">
					<div class="tags-header">
						<div class="aras-tag">Tema dana</div>
						<div class="aras-label--red">23/05/23 · 18:53</div>
					</div>
					<h3>Ovo je način na koji Hajduk treba igrati...</h3>
				</a>
			</div>
		</div>
		<!--<div class="row-2__news-5">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline">Najčitanije</a>
			</div>
			<div class="news-5-container">
				<?php

                ?>
			</div>
			<a href="#" class="aras-btn aras-btn--disabled">Učitaj više</a>
		</div>-->
        <?php get_template_part('templates/widgets/najnovije') ?>
<?php endif ?>
		<div class="row-3__news-3--1 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Aktualno</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-3__news-3--2 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Sport</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-3__news-3--3 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Život</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-3__news-4">
			<!-- News 4 article -->
			<div class="news-4-article">
				<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
				<div class="overlay-helper">
					<div class="tags-header">
						<a href="#" class="aras-tag ">Stara Splitska kupališta</a>
					</div>
					<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
					<a href="#">Piše <span>Goran Borčić</span></a>
				</div>
			</div>
		</div>

        <!-- TODO: shop widget -->
		<div class="row-4__kaufland-banners">
			<!-- Kaufland section -->
			<div class="kaufland-section">
				<header class="kaufland-section__header">
					<a href="" class="kaufland-logo-container">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/kaufland-logo.svg" alt="" class="kaufland-logo" width="175" height="48">
					</a>
					<div class="kaufland-section__header__navigation">
						<a href="#" class="kaufland-prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
								<path
									d="M29 15C29 22.732 22.732 29 15 29C7.26802 29 1 22.732 1 15C1 7.26801 7.26801 0.999999 15 0.999997C22.732 0.999996 29 7.26801 29 15Z"
									stroke="#E44D42" stroke-width="2"/>
								<path d="M16.5003 21L10.667 15.1667L16.5003 9.33333" stroke="#E44D42" stroke-width="2"
								      stroke-miterlimit="3.8637" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="kaufland-next">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
								<path
									d="M1 15C1 7.26801 7.26801 1 15 0.999999C22.732 0.999999 29 7.26801 29 15C29 22.732 22.732 29 15 29C7.26801 29 1 22.732 1 15Z"
									stroke="#E44D42" stroke-width="2"/>
								<path d="M13.4997 9L19.333 14.8333L13.4997 20.6667" stroke="#E44D42" stroke-width="2"
								      stroke-miterlimit="3.8637" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</header>
				<div class="kaufland-section__carousel" data-carousel-id="1">
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/2e820390d739902fd0d3b4f1c62b7436.png" alt="">
					</a>
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/988d0fb181d2a487b477c1168f31cef8.png" alt="">
					</a>
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/2e820390d739902fd0d3b4f1c62b7436.png" alt="">
					</a>
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/06764c24457796a61761582e024c9a1f.png" alt="">
					</a>
				</div>
			</div>
		</div>
        <!-- end shop widget -->
		<div class="mod-hp-1-1__news-with-image-and-list">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="mod-hp-1-2__portrait-banner--1">
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 1.png" alt=""/>
			</a>
		</div>
		<div class="mod-hp-1-2__portrait-banner--2">
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 2.png" alt=""/>
			</a>
		</div>
		<div class="mod-hp-1-2__portrait-banner--3">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 3.png" alt=""/>
			</a>
		</div>

		<div class="mod-hp-1-3__news-with-image-and-list">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Kolumne</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right small">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="mod-hp-1-3__news-3 news-3-container">
			<a href="#" class="main-article">
				<img src="/content/thumbs/c845fb3f406735a8e44ed14f0d26b4f1.png" alt="">
				<div class="overlay-helper">
					<div class="tags-header">
						<div class="aras-tag">Pregled dana</div>
					</div>
					<h3>Puljkova nervoza</h3>
					<p>Piše <span>Damir Petranović</span></p>
				</div>
			</a>
			<div class="article-list">
				<a href="#" class="article-list__item">
					<div class="tags-header">
						<div class="aras-tag">Komentar dana</div>
						<div class="aras-label--red">23/05/23 · 18:53</div>
					</div>
					<h3>Treba li smijeniti Valdasa Dambrausaska?</h3>
				</a>
				<a href="#" class="article-list__item">
					<div class="tags-header">
						<div class="aras-tag">Tema dana</div>
						<div class="aras-label--red">23/05/23 · 18:53</div>
					</div>
					<h3>Ovo je način na koji Hajduk treba igrati...</h3>
				</a>
			</div>
			<div class="tag-container">
				<a href="#" class="aras-tag ">Život</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Život" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f1415ba1db135ae47a3c062ddff121fa.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
<?php if (wp_is_mobile()): ?>
		<div class="row--only-mobile">
			<!-- News 4 article -->
			<div class="news-4-article">
				<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
				<div class="overlay-helper">
					<div class="tags-header">
						<a href="#" class="aras-tag ">Stara Splitska kupališta</a>
					</div>
					<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
					<a href="#">Piše <span>Goran Borčić</span></a>
				</div>
			</div>
		</div>

		<div class="row--only-mobile m-20">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/Image.png" alt=""/>
			</a>
		</div>
<?php endif; ?>
		<div class="row-5__news-3--1 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>
		<div class="row-5__news-3--2 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Sport</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>
		<div class="row-5__news-3--3 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Život</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>
<?php if (wp_is_mobile()): ?>
		<div class="row--only-mobile without-border">
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>
<?php endif; ?>
		<div class="row-6__story-module">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Priče</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- Story module -->
			<div class="story-container" data-carousel-id="1">
				<div class="story-card">
					<div class="story-card__image-container"><img src="/content/thumbs/56bae130b20a3c53a1fb7118631bb658.jpg"
					                                              alt=""></div>
					<p><a href="#">Hajdučka pisma na planini Mont Blanc</a></p>
					<div class="bottom-meta"><span class="story-views-count">34K</span> <span class="story-views-label">views</span>
					</div>
				</div>
				<div class="story-card">
					<div class="story-card__image-container"><img src="/images/e33a04a9dc2a2967b6ed188b163984dc.jpg" alt="">
					</div>
					<p><a href="#">Fešta na tribinama u Ženevi</a></p>
					<div class="bottom-meta"><span class="story-views-count">22K</span> <span class="story-views-label">views</span>
					</div>
				</div>
				<div class="story-card">
					<div class="story-card__image-container"><img src="/content/thumbs/6d59e190a6ad9b1e26e33668d09e69f6.jpg"
					                                              alt=""></div>
					<p><a href="#">Reakcije jednog navijača Rijeke na prolaz Hajduka</a></p>
					<div class="bottom-meta"><span class="story-views-count">52K</span> <span class="story-views-label">views</span>
					</div>
				</div>
				<div class="story-card">
					<div class="story-card__image-container"><img src="/content/thumbs/4fd7daddc79af2d83c1e01774c57beb1.jpg"
					                                              alt=""></div>
					<p><a href="#">Zabava u restoranu Rusulica</a></p>
					<div class="bottom-meta"><span class="story-views-count">52K</span> <span class="story-views-label">views</span>
					</div>
				</div>
				<div class="story-card">
					<div class="story-card__image-container"><img src="/content/thumbs/9e3719b65aca5c776e5673c88dfeb398.jpg"
					                                              alt=""></div>
					<p><a href="#">Gol Hajduka protiv Dinama s 30 metara</a></p>
					<div class="bottom-meta"><span class="story-views-count">213K</span> <span class="story-views-label">views</span>
					</div>
				</div>
			</div>
		</div>
<?php if (!wp_is_mobile()): ?>
		<div class="row-7__portrait-banner--1">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 1.png" alt=""/>
			</a>
		</div>
		<div class="row-7__portrait-banner--2">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 2.png" alt=""/>
			</a>
		</div>
		<div class="row-7__portrait-banner--3">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 3.png" alt=""/>
			</a>
		</div>
<?php endif; ?>
		<div class="row-8__news-3--1 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>

			<div class="row--only-mobile columns-on-mobile">
				<!-- Column - variation 1 -->
				<div class="column-box column-box--without-border">
					<div class="column-box__content">
						<div class="column-box__avatar-container">
							<img src="/images/9ff71418a187666c6418d519771f3092.png" alt="">
						</div>
						<div class="name-container">
							<a href="#" class="aras-tag aras-tag--white-outline">Tomislav Pili</a>
						</div>
						<div class="news-5-container">
							<a href="#" class="news-5-article">
								<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Ubojstvo u Zagrebu: Policija otkrila što se događalo u klubu Ritz</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Grad Trogir osigurava maturantima besplatne e-pripreme za državnu ...</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
							</a>
						</div>
						<a href="#" class="aras-btn">Učitaj više</a>
					</div>
				</div>
			</div>

			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>
		<div class="row-8__news-3--2 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>

			<div class="row--only-mobile columns-on-mobile">
				<!-- Column - variation 2 -->
				<div class="column-box column-box--without-border">
					<div class="column-box__content">
						<div class="column-box__avatar-container">
							<img src="/images/e8ce00c934db2b8556226d400cf507fa.png" alt="">
						</div>
						<div class="name-container">
							<a href="#" class="aras-tag aras-tag--white-outline">Marinko Jurasić</a>
						</div>
						<div class="news-5-container">
							<a href="#" class="news-5-article">
								<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Ubojstvo u Zagrebu: Policija otkrila što se događalo u klubu Ritz</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Grad Trogir osigurava maturantima besplatne e-pripreme za državnu ...</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
							</a>
						</div>
						<a href="#" class="aras-btn">Učitaj više</a>
					</div>
				</div>
			</div>

			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>
		<div class="row-8__news-3--3 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>

			<div class="row--only-mobile columns-on-mobile">
				<!-- Column - variation 3 -->
				<div class="column-box column-box--last-with-border">
					<div class="column-box__content">
						<div class="column-box__avatar-container">
							<img src="/images/2d3ab2ea55b8653b46357545ebf6ef3d.png" alt="">
						</div>
						<div class="name-container">
							<a href="#" class="aras-tag aras-tag--white-outline">Jozo Pavković</a>
						</div>
						<div class="news-5-container">
							<a href="#" class="news-5-article">
								<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Ubojstvo u Zagrebu: Policija otkrila što se događalo u klubu Ritz</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Grad Trogir osigurava maturantima besplatne e-pripreme za državnu ...</h4>
							</a>
							<a href="#" class="news-5-article">
								<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
							</a>
						</div>
						<a href="#" class="aras-btn">Učitaj više</a>
					</div>
				</div>
			</div>

			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/639bf5b56dbf441b2f6e6955dac7ed89.png" alt=""/>
			</a>
		</div>
<?php if (!wp_is_mobile()): ?>
		<div class="row-9__column--1">
			<!-- Column - variation 1 -->
			<div class="column-box column-box--without-border">
				<div class="column-box__content">
					<div class="column-box__avatar-container">
						<img src="/images/9ff71418a187666c6418d519771f3092.png" alt="">
					</div>
					<div class="name-container">
						<a href="#" class="aras-tag aras-tag--white-outline">Tomislav Pili</a>
					</div>
					<div class="news-5-container">
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Ubojstvo u Zagrebu: Policija otkrila što se događalo u klubu Ritz</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Grad Trogir osigurava maturantima besplatne e-pripreme za državnu ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Učitaj više</a>
				</div>
			</div>
		</div>
		<div class="row-9__column--2">
			<!-- Column - variation 2 -->
			<div class="column-box column-box--without-border">
				<div class="column-box__content">
					<div class="column-box__avatar-container">
						<img src="/images/e8ce00c934db2b8556226d400cf507fa.png" alt="">
					</div>
					<div class="name-container">
						<a href="#" class="aras-tag aras-tag--white-outline">Marinko Jurasić</a>
					</div>
					<div class="news-5-container">
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Ubojstvo u Zagrebu: Policija otkrila što se događalo u klubu Ritz</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Grad Trogir osigurava maturantima besplatne e-pripreme za državnu ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Učitaj više</a>
				</div>
			</div>
		</div>
		<div class="row-9__column--3">
			<!-- Column - variation 3 -->
			<div class="column-box column-box--last-with-border">
				<div class="column-box__content">
					<div class="column-box__avatar-container">
						<img src="/images/2d3ab2ea55b8653b46357545ebf6ef3d.png" alt="">
					</div>
					<div class="name-container">
						<a href="#" class="aras-tag aras-tag--white-outline">Jozo Pavković</a>
					</div>
					<div class="news-5-container">
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Ubojstvo u Zagrebu: Policija otkrila što se događalo u klubu Ritz</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Grad Trogir osigurava maturantima besplatne e-pripreme za državnu ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Učitaj više</a>
				</div>
			</div>
		</div>
<?php endif; ?>
		<?php if (wp_is_mobile()): ?>
		<div class="news-3-container row--only-mobile m-20">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>

			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>

		<div class="news-3-container row--only-mobile m-20">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>

			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>

		<div class="news-3-container row--only-mobile m-20">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>

			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>

		<div class="news-3-container row--only-mobile m-20">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article only-mobile">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>

			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/square-banner.png" alt=""/>
			</a>
		</div>

		<div class="row--only-mobile">
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row--only-mobile m-20">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/8cdaaaa168668307f7bae5dbafab1f8b.png" alt=""/>
			</a>
		</div>
		<div class="row--only-mobile">
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row--only-mobile m-20">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/86df9d8fa2c4da794ff281c80b7fce9d.png" alt=""/>
			</a>
		</div>
		<div class="row--only-mobile without-border">
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row--only-mobile m-20">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/056a05cf649736726d6f993a7a12dbed.png" alt=""/>
			</a>
		</div>
		<div class="row--only-mobile without-border">
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row--only-mobile m-20">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/f010c8b9a1cdc01c8c2c8c09e832c28d.png" alt=""/>
			</a>
		</div>
		<div class="row--only-mobile without-border">
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row--only-mobile m-20">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/170aa2e5760f98e54379b398117b4e11.png" alt=""/>
			</a>
		</div>
		<div class="row--only-mobile without-border">
			<!-- News with image and list module -->
			<div class="news-with-image-and-list">
				<div class="article-list-left">
					<div class="article-list-container">
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
							<h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
							<h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
						</a>
						<a href="#" class="extra-small-article">
							<img src="/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
							<h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Više iz kolumne</a>
				</div>
				<div class="big-article-container-right">
					<img src="/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
					<div class="overlay-helper">
						<div class="tags-header">
							<a href="#" class="aras-tag ">Stara Splitaska kupališta</a>
						</div>
						<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
						<a href="#">Piše <span>Goran Borčić</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row--only-mobile row--only-mobile--last-section m-20">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="/images/0111755a4ba85e6351bd62e406a89cc7.png" alt=""/>
			</a>
		</div>
        <?php endif; ?>
        <?php if (!wp_is_mobile()): ?>
		<div class="row-10__deco-line">
			<!-- Horizontal line for decoration -->
			<hr class="deco-line"/>
		</div>

		<div class="row-11__portrait-banner--1">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 1.png" alt=""/>
			</a>
		</div>
		<div class="row-11__portrait-banner--2">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 2.png" alt=""/>
			</a>
		</div>
		<div class="row-11__portrait-banner--3">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 3.png" alt=""/>
			</a>
		</div>

		<div class="row-12__news-3--1 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-12__news-3--2 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-12__news-3--3 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
        <!-- TODO: second kauland section -->
		<div class="row-13__kaufland-banners">
			<!-- Kaufland section -->
			<div class="kaufland-section">
				<header class="kaufland-section__header">
					<a href="" class="kaufland-logo-container">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/kaufland-logo.svg" alt="" class="kaufland-logo" width="175" height="48">
					</a>
					<div class="kaufland-section__header__navigation">
						<a href="#" class="kaufland-prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
								<path
									d="M29 15C29 22.732 22.732 29 15 29C7.26802 29 1 22.732 1 15C1 7.26801 7.26801 0.999999 15 0.999997C22.732 0.999996 29 7.26801 29 15Z"
									stroke="#E44D42" stroke-width="2"/>
								<path d="M16.5003 21L10.667 15.1667L16.5003 9.33333" stroke="#E44D42" stroke-width="2"
								      stroke-miterlimit="3.8637" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="kaufland-next">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
								<path
									d="M1 15C1 7.26801 7.26801 1 15 0.999999C22.732 0.999999 29 7.26801 29 15C29 22.732 22.732 29 15 29C7.26801 29 1 22.732 1 15Z"
									stroke="#E44D42" stroke-width="2"/>
								<path d="M13.4997 9L19.333 14.8333L13.4997 20.6667" stroke="#E44D42" stroke-width="2"
								      stroke-miterlimit="3.8637" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</header>
				<div class="kaufland-section__carousel" data-carousel-id="2">
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/2e820390d739902fd0d3b4f1c62b7436.png" alt="">
					</a>
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/988d0fb181d2a487b477c1168f31cef8.png" alt="">
					</a>
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/2e820390d739902fd0d3b4f1c62b7436.png" alt="">
					</a>
					<a href="#" class="kaufland-banner">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/06764c24457796a61761582e024c9a1f.png" alt="">
					</a>
				</div>
			</div>
		</div>
        <!-- end of second kaufland section -->
		<div class="row-14__news-3--1 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-14__news-3--2 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-14__news-3--3 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>

		<div class="row-15__portrait-banner--1">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 1.png" alt=""/>
			</a>
		</div>
		<div class="row-15__portrait-banner--2">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 2.png" alt=""/>
			</a>
		</div>
		<div class="row-15__portrait-banner--3">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 3.png" alt=""/>
			</a>
		</div>

		<div class="row-16__categories-title-tag">
			<a href="#" class="aras-tag ">Teme</a>
		</div>

		<div class="row-17__category-card--1">
			<!-- Category card -->
			<a href="#" class="category-card">
				<img src="/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
				<h3>Domovinski rat</h3>
			</a>
		</div>
		<div class="row-17__category-card--2">
			<!-- Category card -->
			<a href="#" class="category-card">
				<img src="/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
				<h3>Domovinski rat</h3>
			</a>
		</div>
		<div class="row-17__category-card--3">
			<!-- Category card -->
			<a href="#" class="category-card">
				<img src="/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
				<h3>Domovinski rat</h3>
			</a>
		</div>

		<div class="row-18__category-card--1">
			<!-- Category card -->
			<a href="#" class="category-card">
				<img src="/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
				<h3>Domovinski rat</h3>
			</a>
		</div>
		<div class="row-18__category-card--2">
			<!-- Category card -->
			<a href="#" class="category-card">
				<img src="/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
				<h3>Domovinski rat</h3>
			</a>
		</div>
		<div class="row-18__category-card--3">
			<!-- Category card -->
			<a href="#" class="category-card">
				<img src="/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
				<h3>Domovinski rat</h3>
			</a>
		</div>

		<div class="row-19__deco-line">
			<!-- Horizontal line for decoration -->
			<hr class="deco-line"/>
		</div>

		<div class="row-20__portrait-banner--1">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 1.png" alt=""/>
			</a>
		</div>
		<div class="row-20__portrait-banner--2">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 2.png" alt=""/>
			</a>
		</div>
		<div class="row-20__portrait-banner--3">
			<!-- Portrait banner -->
			<a href="#" class="portrait-banner">
				<img src="/images/Banner 3.png" alt=""/>
			</a>
		</div>

		<div class="row-21__news-3--1 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-21__news-3--2 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>
		<div class="row-21__news-3--3 news-3-container">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
				<a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
			</div>
			<!-- "Vijesti" News 3 article module with featured articles -->
			<a href="#" class="news-3-big-article">
				<header>
					<div class="aras-promo--medium">Promo</div>
					<img src="/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
				</header>
				<h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
				<p>Promet u Solinskoj ulici blokiran već sat vremena</p>
			</a>
			<div class="featured-article-container">
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
				<!-- Featured article -->
				<a href="#" class="featured-article ">
					<!-- header element for fitting the image in the specified dimension -->
					<header>
						<div class="aras-promo--small">Promo</div>
						<img src="/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
					</header>
					<h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
				</a>
			</div>
		</div>

        <!-- TODO: sidebar -->
		<div class="sidebar-area">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/639bf5b56dbf441b2f6e6955dac7ed89.png" alt=""/>
			</a>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/8cdaaaa168668307f7bae5dbafab1f8b.png" alt=""/>
			</a>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/86df9d8fa2c4da794ff281c80b7fce9d.png" alt=""/>
			</a>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/056a05cf649736726d6f993a7a12dbed.png" alt=""/>
			</a>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/f010c8b9a1cdc01c8c2c8c09e832c28d.png" alt=""/>
			</a>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/170aa2e5760f98e54379b398117b4e11.png" alt=""/>
			</a>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/0111755a4ba85e6351bd62e406a89cc7.png" alt=""/>
			</a>
			<!-- News 4 article -->
			<div class="news-4-article">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
				<div class="overlay-helper">
					<div class="tags-header">
						<a href="#" class="aras-tag ">Stara Splitska kupališta</a>
					</div>
					<h3><a href="#">Ovčice su se počele uređivati pedesetih godina prošlog stoljeća</a></h3>
					<a href="#">Piše <span>Goran Borčić</span></a>
				</div>
			</div>
		</div>
        <?php endif; ?>
	</article>

<?php
get_footer();

