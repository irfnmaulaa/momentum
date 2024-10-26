<?php
add_action('wp', function () {
    if (is_front_page()) {
        show_admin_bar(false);
    }
});

add_action('wp_enqueue_scripts', function () {
    // jquery
    wp_enqueue_script('jquery');

    // video js
    // wp_enqueue_script('videojs-js', 'https://vjs.zencdn.net/8.16.1/video.min.js');
    // wp_enqueue_style('videojs-css', 'https://vjs.zencdn.net/8.16.1/video-js.css');
    // wp_enqueue_style('videojs-city-css', 'https://unpkg.com/video.js@7/dist/video-js.min.css');

    // tailwind
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries');
    wp_enqueue_script('tailwindcss-config', get_template_directory_uri() . '/js/tailwind.config.js', ['tailwindcss']);

    // AOS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js');
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@next/dist/aos.css');

    // font awesome
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');

    // momentum
    wp_enqueue_script('momentum-js', get_template_directory_uri() . '/js/momentum.js', ['jquery']);
    wp_enqueue_style('momentum', get_template_directory_uri() . '/style.css');
});

add_filter('use_code_block_editor', function () {
    return false;
});

add_action('init', function () {

    // Remove for post type 'page'
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'revisions');
    remove_post_type_support('page', 'page-attributes');

    register_post_type('partner', [
       'label' => 'Partners',
       'public' => true,
       'supports' => ['title',],
    ]);

    register_post_type('portfolio', [
        'label' => 'Portfolios',
        'public' => true,
        'supports' => ['title',],
    ]);

});

function youtubeUrlToEmbed($url) {
    $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
    preg_match($pattern, $url, $matches);

    if (isset($matches[1])) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }

    return false; // Return false if no valid YouTube ID is found
}

function extractSrcFromIframe($iframeString) {
    $pattern = '/src="([^"]+)"/';
    if (preg_match($pattern, $iframeString, $matches)) {
        return $matches[1];
    }
    return null;
}

function theme_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    add_theme_support('menus');
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'your-theme-textdomain' ),
        )
    );
}
add_action('after_setup_theme', 'theme_custom_logo_setup');

function get_logo()
{
    if (function_exists('the_custom_logo')) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        return $logo[0];
    }
    return null;
}

function disable_default_post_type_and_comments() {
    // Disable default post type
    remove_menu_page('edit.php');

    // Remove "New Post" from admin bar
    add_action('admin_bar_menu', function($wp_admin_bar) {
        $wp_admin_bar->remove_node('new-post');
    }, 999);

    // Redirect if someone tries to access post-related pages directly
    global $pagenow;
    if (!is_admin() && (
            $pagenow == 'edit.php' ||
            $pagenow == 'post-new.php' ||
            ($pagenow == 'post.php' && get_post_type($_GET['post']) == 'post')
        )) {
        wp_redirect(admin_url());
        exit;
    }

    // Disable comments
    // Remove comments menu item
    remove_menu_page('edit-comments.php');

    // Remove comments from admin bar
    add_action('admin_bar_menu', function($wp_admin_bar) {
        $wp_admin_bar->remove_node('comments');
    }, 999);

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }

    // Close comments on the front-end
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);

    // Hide existing comments
    add_filter('comments_array', '__return_empty_array', 10, 2);
}
add_action('admin_menu', 'disable_default_post_type_and_comments');

// Remove "Posts" and "Comments" from Dashboard "At a Glance" metabox
function remove_posts_and_comments_from_at_a_glance() {
    add_filter('dashboard_glance_items', function($items) {
        if (isset($items['post'])) {
            unset($items['post']);
        }
        if (isset($items['comment'])) {
            unset($items['comment']);
        }
        return $items;
    });
}
add_action('admin_init', 'remove_posts_and_comments_from_at_a_glance');

// Disable comment feeds
add_action('do_feed_rdf', 'disable_feeds', 1);
add_action('do_feed_rss', 'disable_feeds', 1);
add_action('do_feed_rss2', 'disable_feeds', 1);
add_action('do_feed_atom', 'disable_feeds', 1);
add_action('do_feed_rss2_comments', 'disable_feeds', 1);
add_action('do_feed_atom_comments', 'disable_feeds', 1);

function disable_feeds() {
    wp_die(__('No feed available, please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!'));
}

// Remove comment-related metadata from headers
function remove_comment_meta() {
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
}
add_action('init', 'remove_comment_meta');