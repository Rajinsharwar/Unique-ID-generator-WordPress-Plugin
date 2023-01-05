<?php

/*
* Plugin Name:       Unique Customer ID Generator & Displayer
* Plugin URI:        https://example.com
* Description:       Dsiplay Unique Custpomer IDs for every user. Use it to display anywhere using a simple shortcode/function. refer to the readme.txt attached for more information on how to use the plugin.
* Version:           1.0.0
* Author:            Rajin Sharwar
* Author URI:        https://linkedin.com/in/rajinsharwar
*/


function customer_id() {
	if ( is_user_logged_in() ) {
		return get_current_user_id();
	}
	else {}
}
add_shortcode( 'customer-id', 'customer_id' );
