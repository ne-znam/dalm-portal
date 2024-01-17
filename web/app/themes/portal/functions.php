<?php

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once dirname( __FILE__ ) . '/cli.php';
}

add_action('after_setup_theme', 'portal_setup');

function portal_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('automatic-feed-links');

    set_post_thumbnail_size(1200, 675, true);
	add_image_size('small-image', 88, 56);
}

add_action('wp_enqueue_scripts', 'portal_enqueue_styles');

function portal_enqueue_styles()
{
    wp_register_style('portal-fonts', get_stylesheet_directory_uri() . '/design/assets/fonts/font-face-imports.css', null, '202310206');
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@1,8..60,500&display=swap');
    wp_register_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_style('portal-style', get_stylesheet_directory_uri() . '/design/assets/css/style.css', ['google-fonts', 'portal-fonts', 'slick'], '202310206');

    wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '202310206', true);
    wp_enqueue_script('portal-script', get_stylesheet_directory_uri() . '/design/assets/js/main.js', array('jquery', 'slick'), '202310206', true);
}

function dn_time_from()
{
    $time = get_the_time('U');
    $now = current_time('timestamp');
    $diff = $now - $time;
    $day_diff = floor($diff / 86400);

    if ($day_diff == 0) {
        if ($diff < 60) {
            return 'prije manje od minute';
        } elseif ($diff < 120) {
            return 'prije jedne minute';
        } elseif ($diff < 3600) {
            return 'prije ' . floor($diff / 60) . ' minuta';
        } elseif ($diff < 7200) {
            return 'prije jednog sata';
        } elseif ($diff < 86400) {
            return 'prije ' . floor($diff / 3600) . ' sati';
        }
    } elseif ($day_diff == 1) {
        return 'jučer';
    } elseif ($day_diff < 7) {
        return 'prije ' . $day_diff . ' dana';
    } elseif ($day_diff < 31) {
        return 'prije ' . ceil($day_diff / 7) . ' tjedana';
    } elseif ($day_diff < 60) {
        return 'prošli mjesec';
    } else {
        return 'prije ' . ceil($day_diff / 30) . ' mjeseci';
    }
}


add_filter( 'post_thumbnail_id', 'portal_get_featured_image_id', 10, 2 );

function portal_get_featured_image_id( $image_id, $post_id ) {
	if (!$image_id) {
		return 9;
	}
	return $image_id;
}
