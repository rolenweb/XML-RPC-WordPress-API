<?php
require __DIR__ . '/../vendor/autoload.php';

use Rolenweb\Wpapi\Wp;

$wp = new Wp('http://wordpress1/','rolenweb','gfhjkm21');


//https://wordpress.org/plugins-wp/google-maps-ve/
//map
$contentMap = [
	'post_type' => 'gmaps_map_ve',
    'post_content' => null,
    'post_title' => 'map',
    'post_status' => 'publish',
    'ping_status' => 'closed',
    'custom_fields' => [
    	[
    		'key' => 've_map_control_pan',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_control_zoom',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_control_map_type',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_control_scale',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_control_street_view',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_control_overview',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_layer_bicycling',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_layer_traffic',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_layer_transit',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_long',
    		'value' => '-87.773'
    	],
    	[
    		'key' => 've_map_lat',
    		'value' => '30.883'
    	],
    	[
    		'key' => 've_map_client_based_locatio',
    		'value' => 'no'
    	],
    	[
    		'key' => 've_map_zoom',
    		'value' => '10'
    	],
    	[
    		'key' => 've_map_height_type',
    		'value' => 'px'
    	],
    	[
    		'key' => 've_map_height',
    		'value' => '400'
    	],
    	[
    		'key' => 've_map_width_type',
    		'value' => '%'
    	],
    	[
    		'key' => 've_map_width',
    		'value' => '100'
    	],
    	[
    		'key' => 've_map_type',
    		'value' => 'ROADMAP'
    	],

    	
    ],

];

$map = $wp->newPost($contentMap);

var_dump($map);

if (empty($map['data']) === false) {
	//marker
	$contentMarker = [
		'post_type' => 'gmaps_marker_ve',
	    'post_content' => 'description',
	    'post_title' => 'test marker',
	    'post_status' => 'publish',
	    'ping_status' => 'closed',
	    'post_parent' => (int)$map['data'],
	    'custom_fields' => [
	    	[
	    		'key' => 'marker_animation',
	    		'value' => 'none'
	    	],
	    	[
	    		'key' => 'marker_long',
	    		'value' => '-87.7887'
	    	],
	    	[
	    		'key' => 'marker_lat',
	    		'value' => '30.8861'
	    	],
	    	[
	    		'key' => 'marker_description',
	    		'value' => null,
	    	],
	    	[
	    		'key' => 'marker_address',
	    		'value' => null
	    	],
	    	
	    	
	    ],
	    /*'terms' => [
	        'post_tag' => [],
	    ],*/
	];
}

$marker = $wp->newPost($contentMarker);
var_dump($marker);

?>