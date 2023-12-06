<?php
get_header();

?>
    <article id="content-section" class="container--fluid content-section content-section--article-details">
        <div class="row-1__landscape-banner">
            <!-- Landscape banner component -->
            <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/1aafcc976ef7d8c780139326d6c12432.png" alt="">
            </a>
        </div>
        <div class="row-1__square-banner">
            <!-- Square banner - variation 1 -->
            <a href="#" class="square-banner">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Image.png" alt="" />
            </a>
        </div>

        <div class="row-2__article m-20">
            <?php
            while (have_posts()) {
                the_post();
                $the_category = get_the_category()[0];
                $promo_tag = get_field('promo_tag');
                ?>
                <?php if (wp_is_mobile()) { ?>
            <!-- Main news box - content above image -->
            <div class="main-news-box main-news-box--content-above-image main-news-box--only-mobile">
                <div class="content">
                    <!-- Tag(s) and publishing date -->
                    <div class="meta-container">
                        <a href="<?php echo get_category_link($the_category) ?>" class="aras-tag"><?php echo $the_category->name ?></a>
                        <div class="aras-label--red"><?php the_time(); ?></div>
                    </div>

                    <!-- Article title -->
                    <h2><?php the_title() ?></h2>

                    <!-- Subtitle -->
                    <h3><?php the_field('subtitle') ?></h3>
                </div>
                <div class="featured-image-container">
		            <?php the_post_thumbnail();  ?>
		            <?php if ($promo_tag) { ?>
                        <div class="aras-promo--big"><?php echo $promo_tag ?></div>
		            <?php } ?>
                </div>
            </div>
                <?php } else { ?>
            <!-- Main news box - content above image -->
            <div class="main-news-box main-news-box--content-above-image main-news-box--only-tablet">
                <div class="content">
                    <!-- Tag(s) and publishing date -->
                    <div class="meta-container">
                        <a href="<?php echo get_category_link($the_category) ?>" class="aras-tag"><?php echo $the_category->name ?></a>
                        <div class="aras-label--red"><?php the_time(); ?></div>
                    </div>

                    <!-- Article title -->
                    <h2><?php the_title() ?></h2>

                    <!-- Subtitle -->
                    <h3><?php the_field('subtitle') ?></h3>
                </div>
                <div class="featured-image-container">
                    <?php the_post_thumbnail();  ?>
                    <?php if ($promo_tag) { ?>
                        <div class="aras-promo--big"><?php echo $promo_tag ?></div>
                    <?php } ?>
                </div>
            </div>
                <?php } ?>
            <section class="author-box--header">
                <div class="author">
                    <?php $author = get_coauthors()[0]; ?>
                    <div class="avatar-container hide-on-desktop">
                        <?php coauthors_get_avatar($author) ?>
                    </div>
                    <div class="author-name">Piše <a href="<?php echo get_author_posts_url($author) ?>" class="author-link"><?php echo $author->display_name ?></a></div>
                </div>
                <div class="action-bar">
                    <a href="#komentari" class="comment-link">Komentirajte</a>
                    <div class="social-media-links">
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Social-icon--facebook.svg" alt=""></a>
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/twitter-new.svg" alt=""></a>
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Social-icon--whatsapp.svg" alt=""></a>
                    </div>
                </div>
            </section>

            <main class="article-content">
                <?php the_content(); ?>
            </main>

            <!-- Author box after article -->
            <section class="author-box--footer">
                <div class="share-link"><a href="#">PODIJELI</a></div>
                <div class="social-media-links">
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Social-icon--facebook.svg" alt=""></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/twitter-new.svg" alt=""></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Social-icon--whatsapp.svg" alt=""></a>
                </div>
            </section>

            <!-- Comment form with comment list -->

            <section id="komentari" class="comment-container">
                <header class="tags-header">
                    <div class="aras-tag">Vaša reakcija na temu</div>
                </header>

                <!-- Create the emotion rating the same as before, that customer can continue to use their voting system -->
                <!-- New: when the visitor votes, the container (a.vote_for_your_emotion) should become an extra
                class: "vote_for_your_emotion--voted", it set the color of image and texts -->
                <div class="emotion-voting-container">
                    <a href="#" class="vote_for_your_emotion vote_for_your_emotion--voted" data-emotion="emotion_1">
                        <div class="emotion">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
                                <circle cx="22" cy="22.5" r="20" stroke="currentColor" stroke-width="4"/>
                                <path d="M30 31.5C28.8355 34.9956 25.6934 37.5 22 37.5C19.7235 37.5 17.6565 36.5485 16.1328 35" stroke="currentColor" stroke-width="4"/>
                                <path d="M23 18.5H36L34.5709 24.4362C34.1383 26.2334 32.5305 27.5 30.682 27.5H27C24.7909 27.5 23 25.7091 23 23.5V18.5Z" fill="currentColor"/>
                                <path d="M20 18.5H7L8.42909 24.4362C8.86174 26.2334 10.4695 27.5 12.318 27.5H16C18.2091 27.5 20 25.7091 20 23.5V18.5Z" fill="currentColor"/>
                                <rect x="8.99997" y="18.5" width="32" height="2" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="description">Ludilo</div>
                        <div class="count">4</div>
                    </a>
                    <a href="#" class="vote_for_your_emotion" data-emotion="emotion_2">
                        <div class="emotion">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
                                <circle cx="21.9999" cy="22.5" r="20" stroke="currentColor" stroke-width="4"/>
                                <circle cx="28.9999" cy="21.5" r="3" fill="currentColor"/>
                                <circle cx="3" cy="3" r="3" transform="matrix(-1 0 0 1 16.9999 18.5)" fill="currentColor"/>
                                <path d="M31.9999 32.5H11.9999" stroke="currentColor" stroke-width="4"/>
                                <path d="M19.9999 30.5H27.9999V36.5C27.9999 38.7091 26.2091 40.5 23.9999 40.5C21.7908 40.5 19.9999 38.7091 19.9999 36.5V30.5Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="description">Baza</div>
                        <div class="count">2</div>
                    </a>
                    <a href="#" class="vote_for_your_emotion" data-emotion="emotion_3">
                        <div class="emotion">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
                                <circle cx="22" cy="22.5" r="20" stroke="currentColor" stroke-width="4"/>
                                <circle cx="29" cy="17.5" r="3" fill="currentColor"/>
                                <circle cx="3" cy="3" r="3" transform="matrix(-1 0 0 1 18 14.5)" fill="currentColor"/>
                                <path d="M32 27.5L13 32.5" stroke="currentColor" stroke-width="4"/>
                            </svg>
                        </div>
                        <div class="description">Svašta</div>
                        <div class="count">0</div>
                    </a>
                    <a href="#" class="vote_for_your_emotion" data-emotion="emotion_4">
                        <div class="emotion">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
                                <circle cx="22" cy="22.5" r="20" stroke="currentColor" stroke-width="4"/>
                                <circle cx="29" cy="17.5" r="3" fill="currentColor"/>
                                <circle cx="3" cy="3" r="3" transform="matrix(-1 0 0 1 18 14.5)" fill="currentColor"/>
                                <path d="M14 33.5C15.1645 30.0044 18.3066 27.5 22 27.5C25.6934 27.5 28.8355 30.0044 30 33.5" stroke="currentColor" stroke-width="4"/>
                            </svg>
                        </div>
                        <div class="description">Ah</div>
                        <div class="count">0</div>
                    </a>
                    <a href="#" class="vote_for_your_emotion" data-emotion="emotion_5">
                        <div class="emotion">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
                                <circle cx="22" cy="22.5" r="20" stroke="currentColor" stroke-width="4"/>
                                <circle cx="29" cy="19.5" r="3" fill="currentColor"/>
                                <path d="M26 20C26 17.5147 28 16.5 30.5 15.5C34.25 14 33 14.5 34.5 14" stroke="currentColor" stroke-width="4"/>
                                <circle cx="3" cy="3" r="3" transform="matrix(-1 0 0 1 18 16)" fill="currentColor"/>
                                <path d="M18 19.5C18 17.0147 16 16 13.5 15C9.75 13.5 11 14 9.5 13.5" stroke="currentColor" stroke-width="4"/>
                                <path d="M14 33.5C15.1645 30.0044 18.3066 27.5 22 27.5C25.6934 27.5 28.8355 30.0044 30 33.5" stroke="currentColor" stroke-width="4"/>
                            </svg>
                        </div>
                        <div class="description">Užas</div>
                        <div class="count">0</div>
                    </a>
                </div>

                <!-- The new comment system - form -->
                <form action="" class="comment-form">
                    <textarea name="comment_text" id="comment-text" class="comment-text" cols="30" rows="10" placeholder="Ostavite komentar"></textarea>
                    <input type="submit" value="Komentiraj" class="comment-submit">
                    <p>Komentiranje na Indexu dozvoljeno je samo registriranim korisnicima. U redu je ne slagati se s drugim komentatorima ili autorom teksta, ali nije u redu vrijeđati, diskriminirati, trolati, kršiti <a href="#">Pravila komentiranja i odredbe stavka 2. članka 94. Zakona o elektroničkim medijima.</a> Korisnik je odgovoran za sve napisano u komentaru. Budite normalni, nemojte se bezveze dovoditi u probleme.</p>
                </form>

                <!-- The new comment system - comment listing -->
                <div class="comment-listing-container">
                    <h2>Komentari (<span class="comment-count">2</span>)</h2>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="avatar-container">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/ab8e3e19862253870a522c159ffd4df1.jpg" alt="">
                            </div>
                            <div class="comment-content">
                                <header class="comment-content__header">
                                    <a href="#" class="comment-content__header__name">Berlusconi</a>
                                    <div class="comment-content__header__time">Prije 15 min</div>
                                </header>
                                <section class="comment-content__content">
                                    <p>Hi everyone!</p>
                                </section>
                                <footer class="comment-content__footer">
                                    <div class="comment-content__reactions">
                                        <a href="#" class="comment-content__reactions__like">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                                <path d="M13.3457 5.36377C13.3457 4.6409 12.7569 4.04245 12.0328 4.04245H8.15866L8.81808 1.67237C9.01237 0.973198 8.60612 0.244398 7.91137 0.0488661C7.21663 -0.146666 6.49244 0.262173 6.29815 0.961347L5.06174 4.04245H3.87242V12H9.84842C10.5667 12 11.1614 11.4075 11.1614 10.6787C11.1614 10.4831 11.1143 10.2995 11.0436 10.1336C11.5382 9.94395 11.8914 9.46401 11.8914 8.90704C11.8914 8.71151 11.8443 8.52783 11.7737 8.36193C12.2683 8.17232 12.6215 7.69238 12.6215 7.13541C12.6215 6.93988 12.5744 6.7562 12.5038 6.59029C12.9866 6.40068 13.3457 5.92667 13.3457 5.36377ZM1.21708 12H2.84797V4.04245H1.21708C0.73429 4.04245 0.345703 4.43944 0.345703 4.91938V11.1231C0.345703 11.6089 0.73429 12 1.21708 12Z" fill="#D7D7D7"/>
                                            </svg>
                                            <span>2</span>
                                        </a>
                                        <a href="#" class="comment-content__reactions__dislike">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                                <path d="M0.345703 6.63623C0.345703 7.3591 0.934471 7.95755 1.65865 7.95755L5.53275 7.95755L4.87333 10.3276C4.67904 11.0268 5.08529 11.7556 5.78003 11.9511C6.47478 12.1467 7.19896 11.7378 7.39326 11.0387L8.62967 7.95755L9.81898 7.95755L9.81898 1.26199e-06L3.84299 1.78443e-06C3.12469 1.84722e-06 2.53003 0.592522 2.53003 1.32132C2.53003 1.51685 2.57713 1.70053 2.64779 1.86644C2.15322 2.05605 1.79996 2.53599 1.79996 3.09296C1.79996 3.28849 1.84706 3.47217 1.91771 3.63808C1.42315 3.82768 1.06989 4.30762 1.06989 4.86459C1.06989 5.06012 1.11699 5.24381 1.18764 5.40971C0.704852 5.59932 0.345703 6.07333 0.345703 6.63623ZM12.4743 1.02985e-06L10.8434 1.17243e-06L10.8434 7.95755L12.4743 7.95755C12.9571 7.95755 13.3457 7.56056 13.3457 7.08062L13.3457 0.87693C13.3457 0.391064 12.9571 9.87646e-07 12.4743 1.02985e-06Z" fill="#D7D7D7"/>
                                            </svg>
                                            <span>2</span>
                                        </a>
                                    </div>
                                    <div class="comment-content__footer__answers">
                                        <a href="#" class="show-comment-answers">
                                            <div>Prikaži <span class="comment-content-answers-count">2</span> odgovora</div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                                <ellipse cx="7.3457" cy="7" rx="7" ry="7" transform="rotate(-90 7.3457 7)" fill="#D7D7D7"/>
                                                <path d="M10.1465 6.29975L7.42426 9.02197L4.70204 6.29975" stroke="#ECF0F1" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <?php } ?>
        </div>

        <aside class="row-2__article-sidebar-area--1">
            <!-- middle sidebar -->
            <?php get_sidebar(); ?>
        </aside>

        <aside class="row-2__article-sidebar-area--2">
            <!-- second sidebar -->
            <?php get_sidebar('right'); ?>
        </aside>
    </article>

<?php
get_footer();
