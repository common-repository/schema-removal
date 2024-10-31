<?php
/**
 * @package Schema Removal
 * @category Core
 * @author Hesham Zebida
 * @version 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'genesis_attr_head',					'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_site-header',				'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_site-title',				'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_site-description',		'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_search-form',				'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_nav-primary',				'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_nav-secondary',			'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_body',					'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_content',					'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_entry',					'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-author',			'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-author-name',		'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-author-link',		'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-image',				'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-image-widget',		'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-image-grid-loop',	'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-time',				'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-title',				'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-content',			'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_entry-comments',			'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_author',					'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_author-box',				'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_comment',					'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_comment-content',			'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_comment-author',			'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_comment-time-link',		'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_sidebar-primary',			'genesis_schema_attributes_removal', 20 );
add_filter( 'genesis_attr_sidebar-secondary',		'genesis_schema_attributes_removal', 20 );

add_filter( 'genesis_attr_site-footer',				'genesis_schema_attributes_removal', 20 );

/*
	Remove Genesis schema markups
	*/
function genesis_schema_attributes_removal( $attributes ) {
 	
	$attributes['role']			= '';
	$attributes['itemprop']		= '';
	$attributes['itemscope']	= '';
    $attributes['itemtype'] 	= ''; 
	
  return $attributes;

}