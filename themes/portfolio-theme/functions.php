<?php 

add_theme_support( 'customize-selective-refresh-widgets' );

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/dist/js/full-page-scroll.js', array(), null, true);
  wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/main.min.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  return $content;
});

remove_filter('widget_text_content', 'wpautop');

// Register Sidebars
function custom_sidebars() {

	register_sidebar( $args = array(
		'id'            => 'featured_name',
		'name'          => __( 'Featured name' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s">',
		'after_widget'  => '</span>'
	)); 
	
	register_sidebar( $args = array(
		'id'            => 'titulo_front',
		'name'          => __( 'Front page title' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="landing-title">',
		'after_widget'  => '</span>'
  	));
  
	register_sidebar( $args = array(
		'id'            => 'subtitulo_front',
		'name'          => __( 'Front page subtitle' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="landing-subtitle">',
		'after_widget'  => '</span>'
	));
  
	register_sidebar( $args = array(
		'id'            => 'description_front',
		'name'          => __( 'Front page description' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="landing-description">',
		'after_widget'  => '</span>'
	));

	register_sidebar( $args = array(
		'id'            => 'landing_image',
		'name'          => __( 'Landing page image' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="landing-img">',
		'after_widget'  => '</span>'
	  ));
	  
	  register_sidebar( $args = array(
		'id'            => 'contact_image',
		'name'          => __( 'Contact page image' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="contact-img">',
		'after_widget'  => '</span>'
	  ));  
	  
	  register_sidebar( $args = array(
		'id'            => 'contact_title',
		'name'          => __( 'Contact title' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="contact-text-1">',
		'after_widget'  => '</span>'
	  )); 
	  
	  register_sidebar( $args = array(
		'id'            => 'contact_subtitle',
		'name'          => __( 'Contact subtitle' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="contact-text-2">',
		'after_widget'  => '</span>'
	  )); 
	  
	  register_sidebar( $args = array(
		'id'            => 'contact_description',
		'name'          => __( 'Contact description' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%1$s" class="contact-text-3">',
		'after_widget'  => '</span>'
	  )); 	  
}
add_action( 'widgets_init', 'custom_sidebars' );

function my_acf_add_local_field_groups() {
	
		acf_add_local_field_group(array(
			'key' => 'group_5d022ba9010ed',
			'title' => 'Detalhes',
			'fields' => array(
				array(
					'key' => 'field_5d022bf265b9b',
					'label' => 'Seção 1',
					'name' => 'secao_1',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d022c2065b9c',
							'label' => 'Título',
							'name' => 'titulo',
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
							'key' => 'field_5d022c3365b9d',
							'label' => 'Conteúdo',
							'name' => 'conteudo',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 1,
						),
						array(
							'key' => 'field_5d022cb8037d9',
							'label' => 'Imagens',
							'name' => 'imagens',
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
							'min' => 1,
							'max' => 4,
							'layout' => 'table',
							'button_label' => 'Adicionar nova imagem',
							'sub_fields' => array(
								array(
									'key' => 'field_5d022cc4037da',
									'label' => 'Arquivo',
									'name' => 'arquivo',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
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
				),
				array(
					'key' => 'field_5d0230c98bca4',
					'label' => 'Seção 2',
					'name' => 'secao_2',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d0230ca8bca5',
							'label' => 'Título',
							'name' => 'titulo',
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
							'key' => 'field_5d0230ca8bca6',
							'label' => 'Conteúdo',
							'name' => 'conteudo',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 1,
						),
						array(
							'key' => 'field_5d0230ca8bca7',
							'label' => 'Imagens',
							'name' => 'imagens',
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
							'min' => 1,
							'max' => 4,
							'layout' => 'table',
							'button_label' => 'Adicionar nova imagem',
							'sub_fields' => array(
								array(
									'key' => 'field_5d0230ca8bca8',
									'label' => 'Arquivo',
									'name' => 'arquivo',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
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
				),
				array(
					'key' => 'field_5d0233eed81cc',
					'label' => 'Seção 3',
					'name' => 'secao_3',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d0233eed81cd',
							'label' => 'Título',
							'name' => 'titulo',
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
							'key' => 'field_5d0233eed81ce',
							'label' => 'Conteúdo',
							'name' => 'conteudo',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 1,
						),
						array(
							'key' => 'field_5d0233eed81cf',
							'label' => 'Imagens',
							'name' => 'imagens',
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
							'min' => 1,
							'max' => 4,
							'layout' => 'table',
							'button_label' => 'Adicionar nova imagem',
							'sub_fields' => array(
								array(
									'key' => 'field_5d0233eed81d0',
									'label' => 'Arquivo',
									'name' => 'arquivo',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
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
						array(
							'key' => 'field_5d023485b5c30',
							'label' => 'Passos do projeto',
							'name' => 'passos_do_projeto',
							'type' => 'repeater',
							'instructions' => 'Preencher em ordem crescente.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 1,
							'max' => 0,
							'layout' => 'table',
							'button_label' => '',
							'sub_fields' => array(
								array(
									'key' => 'field_5d038278e924d',
									'label' => 'Título',
									'name' => 'titulo',
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
									'key' => 'field_5d023492b5c31',
									'label' => 'Descrição',
									'name' => 'descricao',
									'type' => 'textarea',
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
									'maxlength' => '',
									'rows' => 2,
									'new_lines' => '',
								),
							),
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
			),
			'active' => true,
			'description' => '',
		));
		
		acf_add_local_field_group(array(
			'key' => 'group_5d0234f0893d0',
			'title' => 'Imagens destacadas',
			'fields' => array(
				array(
					'key' => 'field_5d0234f511156',
					'label' => 'Banner página inicial',
					'name' => 'banner_pagina_inicial',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
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
				array(
					'key' => 'field_5d02351411157',
					'label' => 'Banner página interna do post',
					'name' => 'banner_pagina_interna_do_post',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
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
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
				5 => 'page_attributes',
				6 => 'categories',
				7 => 'send-trackbacks',
			),
			'active' => true,
			'description' => '',
		));
		
		acf_add_local_field_group(array(
			'key' => 'group_5d0277daf1ecb',
			'title' => 'Informações do projeto',
			'fields' => array(
				array(
					'key' => 'field_5d0277e4386b5',
					'label' => 'Data',
					'name' => 'data',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd/m/Y',
					'return_format' => 'd/m/Y',
					'first_day' => 1,
				),
				array(
					'key' => 'field_5d0278118c4d9',
					'label' => 'Habilidades',
					'name' => 'habilidades',
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
					'key' => 'field_5d02781e57972',
					'label' => 'Cliente',
					'name' => 'cliente',
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
					'key' => 'field_5d02782a57973',
					'label' => 'Link do projeto',
					'name' => 'link_do_projeto',
					'type' => 'url',
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
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));
		
}

add_action('acf/init', 'my_acf_add_local_field_groups');

function getSocialUrl($param) {
	$social = wp_get_nav_menu_items("social"); 
        
	$array = json_decode(json_encode($social), true);

	$socialinfo = array();

	foreach($array as $a) {
		$newarr = array($a["post_title"] => $a["url"]);
		$socialinfo = array_merge($socialinfo, $newarr);
	}

	return $socialinfo[$param];
}