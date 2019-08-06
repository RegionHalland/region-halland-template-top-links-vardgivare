<?php

	/**
	 * @package Region Halland Template Top Links Vardgivare
	 */
	/*
	Plugin Name: Region Halland Template Top Links Vardgivare
	Description: Topplänkar på en landningssida för vårdgivarwebben
	Version: 1.2.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa funktion om ACF är installerad & aktiverad
	add_action('acf/init', 'my_acf_add_template_top_links_vardgivare_field_groups');

	// Lägg till ett formulär
	function my_acf_add_template_top_links_vardgivare_field_groups() {

		if (function_exists('acf_add_local_field_group')):

			acf_add_local_field_group(array(
			    'key' => 'group_5accade8e6c07',
			    'title' => 'Topplänkar',
			    'fields' => array(
			        array(
			            'key' => 'field_5accaed3bef78',
			            'label' => 'Topplänkar',
			            'name' => 'top_links',
			            'type' => 'repeater',
			            'instructions' => '',
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'collapsed' => '',
			            'min' => 0,
			            'max' => 0,
			            'layout' => 'row',
			            'button_label' => '',
			            'sub_fields' => array(
			                array(
			                    'key' => 'field_5accaf5abef7b',
			                    'label' => 'Ska länken vara till en extern webbplats?',
			                    'name' => 'external_link_toggle',
			                    'type' => 'true_false',
			                    'instructions' => '',
			                    'required' => 0,
			                    'conditional_logic' => 0,
			                    'wrapper' => array(
			                        'width' => '',
			                        'class' => '',
			                        'id' => '',
			                    ),
			                    'message' => 'Länka till extern webbplats',
			                    'default_value' => 0,
			                    'ui' => 0,
			                    'ui_on_text' => '',
			                    'ui_off_text' => '',
			                ),
			                array(
			                    'key' => 'field_5acda8da64a3a',
			                    'label' => 'Extern länk',
			                    'name' => 'external_link',
			                    'type' => 'group',
			                    'instructions' => '',
			                    'required' => 0,
			                    'conditional_logic' => array(
			                        array(
			                            array(
			                                'field' => 'field_5accaf5abef7b',
			                                'operator' => '==',
			                                'value' => '1',
			                            ),
			                        ),
			                    ),
			                    'wrapper' => array(
			                        'width' => '',
			                        'class' => '',
			                        'id' => '',
			                    ),
			                    'layout' => 'block',
			                    'sub_fields' => array(
			                        array(
			                            'key' => 'field_5accc2bdc79dd',
			                            'label' => 'Länketikett',
			                            'name' => 'link_label',
			                            'type' => 'text',
			                            'instructions' => '',
			                            'required' => 0,
			                            'conditional_logic' => 0,
			                            'wrapper' => array(
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
			                        array(
			                            'key' => 'field_5accafb2bef7c',
			                            'label' => 'Extern länk',
			                            'name' => 'link',
			                            'type' => 'url',
			                            'instructions' => 'Ange en extern länk.',
			                            'required' => 0,
			                            'conditional_logic' => array(
			                                array(
			                                    array(
			                                        'field' => 'field_5accaf5abef7b',
			                                        'operator' => '==',
			                                        'value' => '1',
			                                    ),
			                                ),
			                            ),
			                            'wrapper' => array(
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
			                    ),
			                ),
			                array(
			                    'key' => 'field_5acda9e475abc',
			                    'label' => 'Intern länk',
			                    'name' => 'internal_link',
			                    'type' => 'group',
			                    'instructions' => '',
			                    'required' => 0,
			                    'conditional_logic' => array(
			                        array(
			                            array(
			                                'field' => 'field_5accaf5abef7b',
			                                'operator' => '!=',
			                                'value' => '1',
			                            ),
			                        ),
			                    ),
			                    'wrapper' => array(
			                        'width' => '',
			                        'class' => '',
			                        'id' => '',
			                    ),
			                    'layout' => 'block',
			                    'sub_fields' => array(
			                        array(
			                            'key' => 'field_5acdaa94c96de',
			                            'label' => 'Länketikett',
			                            'name' => 'link_label',
			                            'type' => 'text',
			                            'instructions' => '',
			                            'required' => 0,
			                            'conditional_logic' => 0,
			                            'wrapper' => array(
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
			                        array(
			                            'key' => 'field_5accaf10bef79',
			                            'label' => 'Länk till',
			                            'name' => 'link',
			                            'type' => 'relationship',
			                            'instructions' => '',
			                            'required' => 0,
			                            'conditional_logic' => array(
			                                array(
			                                    array(
			                                        'field' => 'field_5accaf5abef7b',
			                                        'operator' => '!=',
			                                        'value' => '1',
			                                    ),
			                                ),
			                            ),
			                            'wrapper' => array(
			                                'width' => '',
			                                'class' => '',
			                                'id' => '',
			                            ),
			                            'post_type' => array(
			                            ),
			                            'taxonomy' => array(
			                            ),
			                            'filters' => array(
			                                0 => 'search',
			                            ),
			                            'elements' => '',
			                            'min' => '',
			                            'max' => 1,
			                            'return_format' => 'object',
			                        ),
			                    ),
			                ),
			            ),
			        ),
			    ),
			    'location' => array(
			        array(
			            array(
			                'param' => 'post_template',
			                'operator' => '==',
			                'value' => 'views/template-section-landing.blade.php',
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

	}

	function get_region_halland_top_links_vardgivare()
	{
		return get_field('top_links');
	}

	function get_region_halland_news_category_vardgivare()
	{
		if(!get_field('show_news')) return null;
		$categories = get_field('news_categories');
		if(!is_array($categories)) return null;

		return get_term($categories[0]);
	}
	

	function get_region_halland_news_categories_vardgivare()
	{
		global $post;

		if(!get_field('show_news')) return array();
		$category_ids = get_field('news_categories');
		$tax_query = null;
		if($category_ids){
			$tax_query = array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_id',
					'terms'    => $category_ids
				)
			);
		}

		$args = array(
			'post_type' => 'news',
			'posts_per_page' => 3,
			'tax_query' => $tax_query
		);

		$pages = get_posts($args);
		
		foreach ($pages as $page) {

			// Lägg till sidans url 	
			$page->url 			= get_page_link($page->ID);
			
		}
		
		return $pages;
	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_template_top_links_vardgivare_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen av-aktiveras
	function region_halland_template_top_links_vardgivare_deactivate() {
		// Ingenting just nu...
	}

	// Aktivera pluginen och anropa metod
	register_activation_hook( __FILE__, 'region_halland_template_top_links_vardgivare_activate');

	// Av-aktivera pluginen och anropa metod
	register_deactivation_hook( __FILE__, 'region_halland_template_top_links_vardgivare_deactivate');
?>