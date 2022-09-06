<?php 

add_action('rest_api_init', function () {
	register_rest_route('wp/v2', 'get-project-home', array(
		'methods' => 'GET',
		'callback' => 'callback_get_project_home',
        'permission_callback' => '__return_true'
	));
});