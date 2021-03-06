<?php

if(! function_exists('shaman_media_setup')) {
	function shaman_media_setup(){
		// Добавляем пользовательский логотип
		add_theme_support( 'custom-logo',[
			'height'      => 50,
			'width'       => 130,
			'flex-width'  => false,
			'flex-height' => false,
			'header-text' => '',
			'unlink-homepage-logo' => false, // WP 5.5
		]);
		// Добавляем динамический titel
		add_theme_support( 'title-tag');
		//Добавляем миниатюры к постам
		add_theme_support( 'post-thumbnails');
		set_post_thumbnail_size( 730, 480, true); //размер миниатюр поста по умолчанию
	}
	
	add_action( "after_setup_theme", 'shaman_media_setup');
}

add_action( 'wp_enqueue_scripts', 'shaman_media_scripts');

function shaman_media_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.css',  array('main') );
	// Icofont Css
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/plugins/fontawesome/css/all.css',  array('main') );
	// animate.css
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/plugins/animate-css/animate.css',  array('main') );
	// Icofont
	wp_enqueue_style( 'icofont', get_template_directory_uri() . '/plugins/icofont/icofont.css',  array('main') );
    wp_enqueue_style( 'shaman-media', get_template_directory_uri() . '/css/style.css',  array('icofont') );
	// переподключаем jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js');
	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'popper', get_template_directory_uri() . '/plugins/bootstrap/js/popper.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/plugins/counterup/wow.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/plugins/counterup/jquery.easing.1.3.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/plugins/counterup/jquery.waypoints.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/plugins/counterup/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'google-map', get_template_directory_uri() . '/plugins/google-map/gmap3.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/plugins/jquery/contact.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
}

/**
 * Регестрируем сразу несколько областей меню
 */
function shaman_media_menus() {
	// Собираем несколько областей меню
	$locations = array(
		'header'  => __( 'Header Menu', 'twentytwenty' ),
		'footer' => __( 'Footer Menu', 'twentytwenty' ),
	);
	// Регестрируем области меню, которые лежат в перемнной $locations
	register_nav_menus( $locations );
}

add_action( 'init', 'shaman_media_menus');
class bootstrap_4_walker_nav_menu extends Walker_Nav_menu {
    
    function start_lvl( &$output, $depth = 0, $args = array() ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
        
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    
    $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }
        
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
}
## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){'
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}
// выводим пагинацию
the_posts_pagination( array(
	'end_size' => 2,
) ); 
?>
