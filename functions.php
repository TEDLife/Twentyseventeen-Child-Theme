<?php
// Prevent direct script access
if ( !defined( 'ABSPATH' ) )
	die ( 'No direct script access allowed' );

/**
* Child Theme Setup
*
* Always use child theme if you want to make some custom modifications.
* This way theme updates will be a lot easier.
*/
function twentyseventeen_child_setup() {

	// 去除头部冗余代码 2016.8.29 更新
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    // 隐藏WP版本号
    remove_action( 'wp_head', 'wp_generator' );

    add_image_size( 'twentyseventeen-child-featured-image', 700, 500, true );

}

add_action( 'after_setup_theme', 'twentyseventeen_child_setup' );