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

// Register Sidebars
function custom_sidebars() {
	
	register_sidebar( $args = array(
		'id'            => 'titulo_front',
		'name'          => __( 'Front page title', 'text_domain' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<div id="%1$s" class="landing-title">',
		'after_widget'  => '</div>',
  	));
  
	register_sidebar( $args = array(
		'id'            => 'subtitulo_front',
		'name'          => __( 'Front page subtitle', 'text_domain' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<div id="%2$s" class="landing-subtitle">',
		'after_widget'  => '</div>',
	));
  
	register_sidebar( $args = array(
		'id'            => 'description_front',
		'name'          => __( 'Front page description', 'text_domain' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<div id="%2$s" class="landing-description">',
		'after_widget'  => '</div>',
	));

	register_sidebar( $args = array(
		'id'            => 'landing_image',
		'name'          => __( 'Landing page image', 'text_domain' ),
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<span id="%4$s" class="landing-img">',
		'after_widget'  => '</span>',
  	));  
}
add_action( 'widgets_init', 'custom_sidebars' );