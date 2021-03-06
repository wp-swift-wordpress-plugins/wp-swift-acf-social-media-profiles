<?php

/*
Plugin Name: WP Swift: ACF Social Media Profiles
Plugin URI: 
Description: Placeholder description
Version: 1
Author: Gary Swift
Author URI: https://github.com/wp-swift-wordpress-plugins
License: GPL2
*/

if( function_exists('acf_add_options_page') ) {

	// acf_add_options_page('Theme Settings');
	// acf_add_options_page('More Theme Settings');

}

$slug = 'wp-swift-acf-social-media-profiles';

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'WP SWift: Social Media Profiles',
		'menu_title' 	=> 'Social Media',
		'menu_slug' 	=> $slug,
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false,
		'icon_url' => 'dashicons-networking'
	));
 
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_590c3e47e8cdf',
	'title' => 'Social Media',
	'fields' => array (
		array (
			'key' => 'field_590c4318e1259',
			'label' => 'Notes',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Icons and images are optional and usually are not required as the system automatically looks for a suitable icon/image.
If a URL link is not given, a # will be used as a placeholder.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array (
			'key' => 'field_590c3e564dbbc',
			'label' => 'Social Media Links',
			'name' => 'social_media_links',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_590c3e864dbbd',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Social Media Link',
			'sub_fields' => array (
				array (
					'key' => 'field_590c3e864dbbd',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'facebook' => 'Facebook',
						'twitter' => 'Twitter',
						'google' => 'Google+',
						'youtube' => 'YouTube',
						'linkedin' => 'Linkedin',
						'instagram' => 'Instagram',
						'pinterest' => 'Pinterest',
					),
					'default_value' => array (
						0 => 'facebook',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'array',
					'placeholder' => '',
				),
				array (
					'key' => 'field_590c3ff34dbbe',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_590c44a5e125b',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'text',
					'instructions' => 'Font Awesome class',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'fa-font-awesome',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_590c422ed7f79',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
		array (
			'key' => 'field_590c421dd7f78',
			'label' => 'Custom Links',
			'name' => 'custom_links',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_590c4270d7f7a',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Custom Link',
			'sub_fields' => array (
				array (
					'key' => 'field_590c4270d7f7a',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_590c429cd7f7b',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_590c443be125a',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'text',
					'instructions' => 'Font Awesome class',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'fa-font-awesome',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_590c42a5d7f7c',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => $slug,
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ae6dd0be03df',
	'title' => 'Font Awesome',
	'fields' => array(
		array(
			'key' => 'field_5ae6e48f39c70',
			'label' => 'Font Awesome Version',
			'name' => 'font_awesome_version',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				4 => '4',
				5 => '5',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 5,
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5ae6dd1cb5326',
			'label' => 'Font Awesome (WordPress Enqueue Scripts)',
			'name' => 'font_awesome',
			'type' => 'select',
			'instructions' => 'Use this if your theme does not support Font Awesome.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'none' => 'None',
				'fa4' => 'Font Awesome 4',
				'fa5css' => 'Font Awesome 5 (CSS)',
				'fa5js' => 'Font Awesome 5 (JavaScript)',
			),
			'default_value' => array(
				0 => 'none',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'wp-swift-acf-social-media-profiles',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

function wp_swift_get_social_media_array()  {
	$links = false;
	$custom_links = false;
	$social_media_links = false;

	if ( get_field('social_media_links', 'option') ){
		$social_media_links = get_field('social_media_links', 'option');
	} 
	if ( get_field('custom_links', 'option') ){
		$custom_links = get_field('custom_links', 'option');
	}
	if ($social_media_links && $custom_links) {
		$links = array_merge($social_media_links, $custom_links);
	}
	elseif($social_media_links) {
		$links = $social_media_links;
	}
	elseif($custom_links) {
		$links = $custom_links;
	}
	
	if ($links) {
		for ($i=0; $i < count($links); $i++) { 
			if (isset($links[$i]["name"]["value"])) {
				$name = $links[$i]["name"]["label"];
				$slug = $links[$i]["name"]["value"];
				$links[$i]["name"] = $name;
				$links[$i]["slug"] = $slug;
			}
			else {
				# Lower case everything
				$name = strtolower($links[$i]["name"]);
				# Make alphanumeric (removes all other characters)
				$name = preg_replace("/[^a-z0-9_\s-]/", "", $name);
				# Clean up multiple dashes or whitespaces
				$name = preg_replace("/[\s-]+/", " ", $name);
				# Convert whitespaces and underscore to dash
				$name = preg_replace("/[\s_]/", "-", $name);			
				$links[$i]["slug"] = strtolower($name);
			}
			$links[$i]["hex"] = '';
			if ($links[$i]["link"]=='') {
				$links[$i]["link"] = '#';
			}
			if ($links[$i]["icon"] == '') {
				switch ($links[$i]["slug"]) {
				    case "facebook":
				    	$links[$i]["icon"] = "fa-facebook";
				    	$links[$i]["hex"] = "#3b5998";
				    	break;
				    case "twitter":
				    	$links[$i]["icon"] = "fa-twitter";
				    	$links[$i]["hex"] = "#55acee";
				    	break;
				    case "google":
				    	$links[$i]["icon"] = "fa-google-plus-official";
				    	$links[$i]["hex"] = "#dd4b39";
				    	break;
				    case "youtube":
				    	$links[$i]["icon"] = "fa-youtube";
				    	$links[$i]["hex"] = "#bb0000";
				    	break;
				    case "linkedin":
				    	$links[$i]["icon"] = "fa-linkedin-square";
				    	$links[$i]["hex"] = "#007bb5";
				    	break;
				    case "instagram":
				    	$links[$i]["icon"] = "fa-instagram";
				    	$links[$i]["hex"] = "#8a3ab9";
				    	break;
				    case "pinterest":
				    	$links[$i]["icon"] = "fa-pinterest";
				    	$links[$i]["hex"] = "#bd081c";
				    	break;				    	
				    default:
				    	$links[$i]["icon"] = "fa-font-awesome";
				    	$links[$i]["hex"] = "#1fa67a";
				    	break;
				}
			}
		}
	}
	return $links;
}

function wp_swift_get_font_awesome_class() {
	$font_awesome_class = 'fab';
	if ( get_field('font_awesome_version', 'option') ) {
		$font_awesome_version = get_field('font_awesome_version', 'option');
		if ($font_awesome_version == '4') {
			$font_awesome_class = 'fa';
		}
	}
	return $font_awesome_class;	
}
function wp_swift_get_social_media() {
	$font_awesome_class = wp_swift_get_font_awesome_class();
	$social_media_links = wp_swift_get_social_media_array();
	ob_start();
	if ( count($social_media_links) ) : ?>		     
	   	<ul class="menu">
	   		<?php foreach ($social_media_links as $key => $link): 
	   		?><li><a href="<?php echo $link['link']; ?>" class="icon-link" target="_blank">
	        		<i class="<?php echo $font_awesome_class; ?> <?php echo $link['icon'].' '. $link['slug']; ?>" aria-hidden="true"></i>
	        		<span class="hide">Social Media Link <?php echo $link['name']; ?></span>
	        	</a></li><?php 
	        endforeach ?>
	   	</ul>
	<?php endif;
	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
function wp_swift_get_social_media_simple() {
	$font_awesome_class = wp_swift_get_font_awesome_class();
	$social_media_links = wp_swift_get_social_media_array();
	ob_start();
	if ( count($social_media_links) ) : ?>		     
	   	<div class="social-media">
	   		<?php foreach ($social_media_links as $key => $link): 
	   		?><a href="<?php echo $link['link']; ?>" class="icon-link" target="_blank">
	        		<i class="<?php echo $font_awesome_class; ?> <?php echo $link['icon'].' '. $link['slug']; ?>" aria-hidden="true"></i>
	        	</a><?php 
	        endforeach ?>
	   	</div>
	<?php endif;
	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
function wp_swift_acf_social_media_profiles() {
	if ( get_field('font_awesome', 'option') ){
		$font_awesome = get_field('font_awesome', 'option');
		switch ($font_awesome) {
			case 'fa4':
				wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );
				break;
			case 'fa5css':
				wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css', array(), '5.0.10', 'all' );
				break;	
			case 'fa5js':
				wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/js/all.js', array(), '5.0.10', true );
				break;						
		}	
	}
}
add_action( 'wp_enqueue_scripts', 'wp_swift_acf_social_media_profiles' ); 