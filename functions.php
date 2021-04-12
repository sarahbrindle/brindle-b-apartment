<?php 
// Starts the engine.
add_action( 'wp_enqueue_scripts', 'brindle_enqueue_styles' );
function brindle_enqueue_styles() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 

} 

function brindle_enqueue_scripts() {
        wp_enqueue_script( 'easy-responsive-tabs', get_stylesheet_directory_uri() . '/assets/js/easy-responsive-tabs.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_script( 'jquery-scrolltofixed', get_stylesheet_directory_uri() . '/assets/js/jquery-scrolltofixed-min.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0', true );
        wp_register_script('custom_script', get_stylesheet_directory_uri() . '/assets/js/all.min.js', array('jquery'),'1.0',true);
}
add_action( 'wp_enqueue_scripts', 'your_theme_js' );

// Includes color stuff
require_once get_stylesheet_directory() . '/inc/defaults-child.php';
require_once get_stylesheet_directory() . '/inc/customizer-child.php';
require_once get_stylesheet_directory() . '/inc/css-output-child.php';





add_theme_support('editor-styles');
add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'brindle-tierra', get_stylesheet_directory_uri() . "/block-editor.css", false, '1.0', 'all' );
} );


add_action('wp_body_open', function() {
	?>
	<div class="generatepress-body-wrapper">
	<?php
});
add_action('generate_after_footer', function() {
	?>
	</div>
	<?php
});









function year_shortcode () {
$year = date_i18n ('Y');
return $year;
}
add_shortcode ('year', 'year_shortcode');

require 'vendor/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/sarahbrindle/brindle-pinetop/',
  __FILE__,
  'brindle-pinetop'
);

// Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');