<?php


/**
*Trigger this file on plugin uninstall
*
*@package wp-site-portfolio
*/

if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ){

	die;
}

//Clear Database stored data

global $wpdb;

$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'sites'" );
$wpdb->query("DELETE FROM wp_postmata WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
$wpdb->query("DELETE FROM wp_term_relationship WHERE object_id NOT IN (SELECT id FROM wp_posts)" );