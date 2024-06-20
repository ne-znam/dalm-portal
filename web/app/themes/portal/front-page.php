<?php
get_header();
?>

    <article id="content-section" class="container--fluid content-section content-section--homepage-1">
<?php if (!wp_is_mobile()) : ?>
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
                    <?php
                    $q = z_get_zone_query('featured');
                    while ($q->have_posts()) {
                        $q->the_post();
                        get_template_part('templates/articles/featured-image-slider');
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

        <div class="row-2__news-2">
            <a href="#" class="main-article">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/c845fb3f406735a8e44ed14f0d26b4f1.png" alt="">
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
        <!--<div class="row-2__news-5"></div>-->
        <?php get_template_part('templates/widgets/najnovije') ?>
<?php endif ?>
        <?php get_template_part('templates/widgets/news-3', null, ['title' => 'Aktualno', 'zone' => 'aktualno', 'container_class' => 'row-3__news-3--1']) ?>
        <?php get_template_part('templates/widgets/news-3', null, ['category' => 'sport', 'zone' => 'sport', 'container_class' => 'row-3__news-3--2']) ?>
        <?php get_template_part('templates/widgets/news-3', null, ['category' => 'zivot','zone' => 'zivot', 'container_class' => 'row-3__news-3--3']) ?>
        <div class="row-3__news-4">
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

        <?php get_template_part('templates/widgets/shop-widget', null, ['row' => 4]) ?>
        <div class="mod-hp-1-1__news-with-image-and-list">
            <div class="tag-container">
                <a href="#" class="aras-tag ">Vijesti</a>
                <a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najnovije</a>
                <a href="#" class="aras-tag aras-tag--red-outline hide-on-tablet">Najčitanije</a>
            </div>
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container"><?php
	                    $q = new WP_Query([
		                    'posts_per_page' => 5,
		                    'post_type' => 'post',
		                    'post_status' => 'publish',
		                    'ignore_sticky_posts' => true,
		                    'no_found_rows' => true,
		                    'offset' => 1,
	                    ]);
                        while($q->have_posts()) {
                            $q->the_post();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="extra-small-article">
                                	<?php the_post_thumbnail(); ?>
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <?php
                    $q = new WP_Query([
                    'posts_per_page' => 1,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => true,
                    'no_found_rows' => true,
                    ]);
                    while($q->have_posts()) {
                    $q->the_post();
                    the_post_thumbnail();
                    ?>
                        <div class="overlay-helper">
	                    <?php if ($promo_tag = get_field('promo_tag')) : ?>
                        <a class="tags-header">
                            <a href="<?php the_permalink(); ?>" class="aras-tag "><?php echo $promo_tag ?></a>
	                    <?php endif; ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <a href="<?php the_permalink(); ?>">Piše <span><?php echo get_coauthors()[0]->display_name ?></span></a>
                        </div><?php
                    }
                    ?>

                </div>
            </div>
        </div>

        <div class="mod-hp-1-2__portrait-banner--1">
            <!-- "Vijesti" News 3 article module with featured articles -->
            <a href="#" class="news-3-big-article">
                <header>
                    <div class="aras-promo--medium">Promo</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
                </header>
                <h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
                <p>Promet u Solinskoj ulici blokiran već sat vremena</p>
            </a>
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 1.png" alt=""/>
            </a>
        </div>
        <div class="mod-hp-1-2__portrait-banner--2">
            <!-- "Vijesti" News 3 article module with featured articles -->
            <a href="#" class="news-3-big-article">
                <header>
                    <div class="aras-promo--medium">Promo</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
                </header>
                <h3><span>KAOS KOD OPĆINE</span> Dvije prometne u pola sata, ozljeđeni motociklisti</h3>
                <p>Promet u Solinskoj ulici blokiran već sat vremena</p>
            </a>
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 2.png" alt=""/>
            </a>
        </div>
        <div class="mod-hp-1-2__portrait-banner--3">
            <!-- Square banner - variation 1 -->
            <a href="#" class="square-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/square-banner.png" alt=""/>
            </a>
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 3.png" alt=""/>
            </a>
        </div>

        <div class="mod-hp-1-3__news-with-image-and-list">
            <div class="tag-container">
                <a href="#" class="aras-tag ">Kolumne</a>
            </div>
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right small">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
	    <?php get_template_part('templates/widgets/news-3', null, ['category' => 'zivot', 'container_class' => 'mod-hp-1-3__news-3 news-3-container']) ?>
<?php if (wp_is_mobile()) : ?>
        <div class="row--only-mobile">
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

        <div class="row--only-mobile m-20">
            <!-- Square banner - variation 1 -->
            <a href="#" class="square-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Image.png" alt=""/>
            </a>
        </div>
<?php endif; ?>
	    <?php get_template_part('templates/widgets/news-3', null, ['category' => 'vijesti', 'container_class' => 'row-5__news-3--1', 'banner' => 1]) ?>
	    <?php get_template_part('templates/widgets/news-3', null, ['category' => 'sport', 'container_class' => 'row-5__news-3--2', 'banner' => 1]) ?>
	    <?php get_template_part('templates/widgets/news-3', null, ['category' => 'zivot', 'container_class' => 'row-5__news-3--3', 'banner' => 1]) ?>

<?php if (wp_is_mobile()) : ?>
        <div class="row--only-mobile without-border">
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
            <div class="story-container" data-carousel-id="111">
                <?php
                $q = new WP_Query([
                        'posts_per_page' => 6,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => true,
                    'no_found_rows' => true,
                ]);
                while ($q->have_posts()) {
                    $q->the_post();
                    ?>
                    <div class="story-card">
                        <div class="story-card__image-container">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <p><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
                        <!--<div class="bottom-meta"><span class="story-views-count">34K</span> <span class="story-views-label">views</span>
                        </div>-->
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
<?php if (!wp_is_mobile()) : ?>
        <div class="row-7__portrait-banner--1">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 1.png" alt=""/>
            </a>
        </div>
        <div class="row-7__portrait-banner--2">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 2.png" alt=""/>
            </a>
        </div>
        <div class="row-7__portrait-banner--3">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 3.png" alt=""/>
            </a>
        </div>
<?php endif; ?>
	    <?php get_template_part('templates/widgets/news-3', null, ['category' => 'vijesti', 'container_class' => 'row-8__news-3--1', 'banner' => 1]) ?>
	    <?php get_template_part('templates/widgets/news-3', null, ['category' => 'vijesti', 'container_class' => 'row-8__news-3--2', 'banner' => 1]) ?>
	    <?php get_template_part('templates/widgets/news-3', null, ['category' => 'vijesti', 'container_class' => 'row-8__news-3--2', 'banner' => 1]) ?>

<?php if (!wp_is_mobile()) : ?>
        <div class="row-9__column--1">
            <!-- Column - variation 1 -->
            <div class="column-box column-box--without-border">
                <div class="column-box__content">
                    <div class="column-box__avatar-container">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/9ff71418a187666c6418d519771f3092.png" alt="">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/e8ce00c934db2b8556226d400cf507fa.png" alt="">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/2d3ab2ea55b8653b46357545ebf6ef3d.png" alt="">
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
        <?php if (wp_is_mobile()) : ?>
        <div class="news-3-container row--only-mobile m-20">
            <div class="tag-container">
                <a href="#" class="aras-tag ">Vijesti</a>
            </div>
	        <?php
	        $q = new WP_Query([
		        'posts_per_page' => 3,
		        'post_type' => 'post',
		        'post_status' => 'publish',
		        'ignore_sticky_posts' => true,
		        'no_found_rows' => true,
		        'category_name' => 'zivot',
	        ]);
	        $open = false;
	        while ($q->have_posts()) {
		        $q->the_post();
		        if ($q->current_post == 0) {
			        get_template_part('templates/articles/news-3-big-article');
			        echo ' <div class="featured-article-container">';
			        $open = true;
		        } else {
			        get_template_part('templates/articles/small-left-image');
		        }
	        }
	        if ($open) {
		        echo '</div>';
	        }
	        wp_reset_postdata();
	        ?>

            <!-- Square banner - variation 1 -->
            <a href="#" class="square-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/square-banner.png" alt=""/>
            </a>
        </div>

        <div class="news-3-container row--only-mobile m-20">
            <div class="tag-container">
                <a href="#" class="aras-tag ">Vijesti</a>
            </div>
	        <?php
	        $q = new WP_Query([
		        'posts_per_page' => 3,
		        'post_type' => 'post',
		        'post_status' => 'publish',
		        'ignore_sticky_posts' => true,
		        'no_found_rows' => true,
		        'category_name' => 'zivot',
	        ]);
	        $open = false;
	        while ($q->have_posts()) {
		        $q->the_post();
		        if ($q->current_post == 0) {
			        get_template_part('templates/articles/news-3-big-article');
			        echo ' <div class="featured-article-container">';
			        $open = true;
		        } else {
			        get_template_part('templates/articles/small-left-image');
		        }
	        }
	        if ($open) {
		        echo '</div>';
	        }
	        wp_reset_postdata();
	        ?>

            <!-- Square banner - variation 1 -->
            <a href="#" class="square-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/square-banner.png" alt=""/>
            </a>
        </div>

        <div class="news-3-container row--only-mobile m-20">
            <div class="tag-container">
                <a href="#" class="aras-tag ">Vijesti</a>
            </div>
	        <?php
	        $q = new WP_Query([
		        'posts_per_page' => 3,
		        'post_type' => 'post',
		        'post_status' => 'publish',
		        'ignore_sticky_posts' => true,
		        'no_found_rows' => true,
		        'category_name' => 'zivot',
	        ]);
	        $open = false;
	        while ($q->have_posts()) {
		        $q->the_post();
		        if ($q->current_post == 0) {
			        get_template_part('templates/articles/news-3-big-article');
			        echo ' <div class="featured-article-container">';
			        $open = true;
		        } else {
			        get_template_part('templates/articles/small-left-image');
		        }
	        }
	        if ($open) {
		        echo '</div>';
	        }
	        wp_reset_postdata();
	        ?>

            <!-- Square banner - variation 1 -->
            <a href="#" class="square-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/square-banner.png" alt=""/>
            </a>
        </div>

        <div class="news-3-container row--only-mobile m-20">
            <div class="tag-container">
                <a href="#" class="aras-tag ">Vijesti</a>
            </div>
	        <?php
	        $q = new WP_Query([
		        'posts_per_page' => 3,
		        'post_type' => 'post',
		        'post_status' => 'publish',
		        'ignore_sticky_posts' => true,
		        'no_found_rows' => true,
		        'category_name' => 'zivot',
	        ]);
	        $open = false;
	        while ($q->have_posts()) {
		        $q->the_post();
		        if ($q->current_post == 0) {
			        get_template_part('templates/articles/news-3-big-article');
			        echo ' <div class="featured-article-container">';
			        $open = true;
		        } else {
			        get_template_part('templates/articles/small-left-image');
		        }
	        }
	        if ($open) {
		        echo '</div>';
	        }
	        wp_reset_postdata();
	        ?>

            <!-- Square banner - variation 1 -->
            <a href="#" class="square-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/square-banner.png" alt=""/>
            </a>
        </div>

        <div class="row--only-mobile">
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/8cdaaaa168668307f7bae5dbafab1f8b.png" alt=""/>
            </a>
        </div>
        <div class="row--only-mobile">
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/86df9d8fa2c4da794ff281c80b7fce9d.png" alt=""/>
            </a>
        </div>
        <div class="row--only-mobile without-border">
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/056a05cf649736726d6f993a7a12dbed.png" alt=""/>
            </a>
        </div>
        <div class="row--only-mobile without-border">
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/f010c8b9a1cdc01c8c2c8c09e832c28d.png" alt=""/>
            </a>
        </div>
        <div class="row--only-mobile without-border">
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/170aa2e5760f98e54379b398117b4e11.png" alt=""/>
            </a>
        </div>
        <div class="row--only-mobile without-border">
            <!-- News with image and list module -->
            <div class="news-with-image-and-list">
                <div class="article-list-left">
                    <div class="article-list-container">
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/aedd2ae5bb758652e2ea2ff57430c124.png" alt="">
                            <h4>Hajduk, Stari plac i juniori u propovijedi za svetoga ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f846cb0df9ae62d7f36b0a1470ebb3c2.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/13f76e1597b2b596f3ccc03da30517c1.jpg" alt="">
                            <h4>Tijekom prvog svjetskog rata mladost se okupljala ...</h4>
                        </a>
                        <a href="#" class="extra-small-article">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/241bb50787b1079d29ae93101f42015f.jpg" alt="">
                            <h4>Znate li koje obitelji su se prve kupale na Bačvicama?</h4>
                        </a>
                    </div>
                    <a href="#" class="aras-btn">Više iz kolumne</a>
                </div>
                <div class="big-article-container-right">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/cd1933346a8cb0e1e2d93865227b10d2.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/0111755a4ba85e6351bd62e406a89cc7.png" alt=""/>
            </a>
        </div>
        <?php endif; ?>
        <?php if (!wp_is_mobile()) : ?>
        <div class="row-10__deco-line">
            <!-- Horizontal line for decoration -->
            <hr class="deco-line"/>
        </div>

        <div class="row-11__portrait-banner--1">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 1.png" alt=""/>
            </a>
        </div>
        <div class="row-11__portrait-banner--2">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 2.png" alt=""/>
            </a>
        </div>
        <div class="row-11__portrait-banner--3">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 3.png" alt=""/>
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
            </div>
        </div>
            <?php get_template_part('templates/widgets/shop-widget', null, ['row' => 13]) ?>
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
            </div>
        </div>

        <div class="row-15__portrait-banner--1">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 1.png" alt=""/>
            </a>
        </div>
        <div class="row-15__portrait-banner--2">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 2.png" alt=""/>
            </a>
        </div>
        <div class="row-15__portrait-banner--3">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 3.png" alt=""/>
            </a>
        </div>

        <div class="row-16__categories-title-tag">
            <a href="#" class="aras-tag ">Teme</a>
        </div>

        <div class="row-17__category-card--1">
            <!-- Category card -->
            <a href="#" class="category-card">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
                <h3>Domovinski rat</h3>
            </a>
        </div>
        <div class="row-17__category-card--2">
            <!-- Category card -->
            <a href="#" class="category-card">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
                <h3>Domovinski rat</h3>
            </a>
        </div>
        <div class="row-17__category-card--3">
            <!-- Category card -->
            <a href="#" class="category-card">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
                <h3>Domovinski rat</h3>
            </a>
        </div>

        <div class="row-18__category-card--1">
            <!-- Category card -->
            <a href="#" class="category-card">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
                <h3>Domovinski rat</h3>
            </a>
        </div>
        <div class="row-18__category-card--2">
            <!-- Category card -->
            <a href="#" class="category-card">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
                <h3>Domovinski rat</h3>
            </a>
        </div>
        <div class="row-18__category-card--3">
            <!-- Category card -->
            <a href="#" class="category-card">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/6bec3e8e556dffdddb213f07092d8f70.jpg" alt="">
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
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 1.png" alt=""/>
            </a>
        </div>
        <div class="row-20__portrait-banner--2">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 2.png" alt=""/>
            </a>
        </div>
        <div class="row-20__portrait-banner--3">
            <!-- Portrait banner -->
            <a href="#" class="portrait-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Banner 3.png" alt=""/>
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/f8985eb021e28a9abdaedcabde65fd50.jpg" alt="Article title">
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
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
                    </header>
                    <h3>Hajduk, Stari plac i juniori u propovijedi za svetoga Dujma nadbiskupa ...</h3>
                </a>
                <!-- Featured article -->
                <a href="#" class="featured-article ">
                    <!-- header element for fitting the image in the specified dimension -->
                    <header>
                        <div class="aras-promo--small">Promo</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/content/thumbs/1c5fc4e702f7d1292eb68aa4c631c43b.jpg" alt="Article title">
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

