<?php
    add_action( 'admin_menu', 'portfolio_remove_admin_menus' );
	function portfolio_remove_admin_menus() {
	    remove_menu_page( 'edit-comments.php' );
	}

	// Removes from post and pages
	add_action('init', 'portfolio_remove_comment_support', 100);
 	function portfolio_remove_comment_support() {
	   remove_post_type_support( 'post', 'comments' );
	   remove_post_type_support( 'page', 'comments' );
	}
 
	// Removes from admin bar
	add_action( 'wp_before_admin_bar_render', 'portfolio_remove_comments_admin_bar' );
	function portfolio_remove_comments_admin_bar() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}