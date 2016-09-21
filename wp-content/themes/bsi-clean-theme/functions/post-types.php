<?php

add_theme_support( 'post-thumbnails' ); 
add_action('init', 'create_post_types');

function create_post_types() {

	register_post_type('careers', 
		array(
			'labels' => array(
				'name' => 'Careers',
				'singular_name' => 'Careers',
				'add_new' => 'New Careers',
				'add_new_item' => 'Add New Careers',
				'edit_item' => 'Edit Careers',
				'all_items' => 'All Careers'
			),
		'publicly_queryable' => true,
	  	'public' => true,
			'taxonomies' => array('post_tag', 'careers'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);

		register_post_type('ctas', 
		array(
			'labels' => array(
				'name' => 'CTAs',
				'singular_name' => 'CTAs',
				'add_new' => 'New CTA',
				'add_new_item' => 'Add New CTA',
				'edit_item' => 'Edit CTAs',
				'all_items' => 'All CTAs'
			),
		'publicly_queryable' => true,
	  	'public' => true,
			'taxonomies' => array('post_tag', 'ctas'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);

	register_post_type('landingpages', 
		array(
			'labels' => array(
				'name' => 'Landing Pages',
				'singular_name' => 'Landing Pages',
				'add_new' => 'New Landing Page',
				'add_new_item' => 'Add New Landing Page',
				'edit_item' => 'Edit Landing Pages',
				'all_items' => 'All Landing Pages'
			),
		'publicly_queryable' => true,
	  	'public' => true,
			'taxonomies' => array('post_tag', 'landingpages'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);

	register_post_type('inters', 
		array(
			'labels' => array(
				'name' => 'Interships',
				'singular_name' => 'Interships',
				'add_new' => 'New Intership',
				'add_new_item' => 'Add New Internship',
				'edit_item' => 'Edit Interships',
				'all_items' => 'All Interships'
			),
		'publicly_queryable' => true,
	  	'public' => true,
			'taxonomies' => array('post_tag', 'interships'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);

		register_post_type('portfolio', 
		array(
			'labels' => array(
				'name' => 'Portfolio',
				'singular_name' => 'Portfolio',
				'add_new' => 'New Portfolio',
				'add_new_item' => 'Add New Portfolio',
				'edit_item' => 'Edit Portfolio',
				'all_items' => 'All Portfolio'
			),
	  	'public' => true,
			'taxonomies' => array('post_tag', 'resources'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);
	register_post_type('faqs', 
		array(
			'labels' => array(
				'name' => 'FAQs',
				'singular_name' => 'FAQs',
				'add_new' => 'New FAQs',
				'add_new_item' => 'Add New FAQs',
				'edit_item' => 'Edit FAQs',
				'all_items' => 'All FAQs'
			),
	  	'public' => true,
			'taxonomies' => array('post_tag', 'faqs'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);
	register_post_type('resources', 
		array(
			'labels' => array(
				'name' => 'Resources',
				'singular_name' => 'Resources',
				'add_new' => 'New Resource',
				'add_new_item' => 'Add New Resource',
				'edit_item' => 'Edit Resource',
				'all_items' => 'All Resources'
			),
	  	'public' => true,
			'taxonomies' => array('post_tag', 'resources'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);

}
