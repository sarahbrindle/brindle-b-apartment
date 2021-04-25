<?php
if ( ! function_exists( 'generate_base_css' ) ) {
	/**
	 * Generate the CSS in the <head> section using the Theme Customizer.
	 *
	 * @since 0.1
	 */
	function generate_base_css() {
		$settings = wp_parse_args(
			get_option( 'generate_settings', array() ),
			generate_get_defaults()
		);

		$css = new GeneratePress_CSS();

		$imp_common_text_color       = $settings['common_text_color'];
		$imp_common_primary_color    = $settings['common_primary_color'];
		$imp_common_secondary_color  = $settings['common_secondary_color'];
		$imp_common_button_color     = $settings['common_button_color'];

		$common_text_color       = $settings['common_text_color'];
		$common_primary_color    = $settings['common_primary_color'];
		$common_secondary_color  = $settings['common_secondary_color'];
		$common_button_color     = $settings['common_button_color'];
		
		//$common_text_color       = '#ffffff';
		//$common_primary_color    = '#bab9af';
		//$common_secondary_color  = '#1f313b';
		//$common_button_color     = '#bca664';
		
		$common_text_color       = $common_text_color." !important";
		$common_primary_color    = $common_primary_color." !important";
		$common_secondary_color  = $common_secondary_color." !important";
		$common_button_color     = $common_button_color." !important";

		


		$css->set_selector( 'body' );
		$css->add_property( 'background-color', $settings['background_color'] );
		$css->add_property( 'color', $common_secondary_color );	

		$css->set_selector( '.top-bar' );
		$css->add_property( 'background-color', $common_secondary_color );

		$css->set_selector( '.site-header' );
		$css->add_property( 'background-color', $common_primary_color );

		$css->set_selector( '.menu-top-bar-menu-container ul li a' );
		$css->add_property( 'color', $common_text_color );

		$css->set_selector( '.menu-top-bar-menu-container ul li a:hover' );
		$css->add_property( 'color', $common_button_color );

		$css->set_selector( '.top-bar .widget_nav_menu li.nav-bar-button a' );
		$css->add_property( 'color', $common_text_color );

		$css->set_selector( '.top-bar .widget_nav_menu li.nav-bar-button a' );
		$css->add_property( 'background-color', $common_button_color );

		$css->set_selector( '.top-bar .widget_nav_menu li.nav-bar-button a:hover' );
		$css->add_property( 'background-color', $common_primary_color );

		/*Primary Menu*/

		$css->set_selector( 'h1,.main-navigation .main-nav ul li a' );
		$css->add_property( 'color', $common_text_color );


		$css->set_selector( '.main-navigation .main-nav ul li.current_page_item > a,.main-navigation .main-nav ul li a:hover, .main-navigation .main-nav ul li[class*="current-menu-"] > a,.main-navigation .menu-bar-item:hover > a' );
		$css->add_property( 'color', $common_button_color );
		
		/*Banner Button*/
		$css->set_selector( '.wp-block-buttons.banner-btn-grp .wp-block-button a' );
		$css->add_property( 'color', $common_button_color );

		
		$css->set_selector( '.wp-block-buttons.banner-btn-grp .wp-block-button a:hover' );
		$css->add_property( 'border-bottom-color', $common_button_color );

		/*Normal Button*/
		$css->set_selector( '.gb-button-wrapper .gb-button-page-btn, .gb-button-wrapper .gb-button-page-btn:visited' );
		$css->add_property( 'background-color', $common_button_color );

		$css->set_selector( '.gb-button-wrapper .gb-button-page-btn:hover, .gb-button-wrapper .gb-button-page-btn:active, .gb-button-wrapper .gb-button-page-btn:focus' );
		$css->add_property( 'background-color', $common_primary_color );
		


		/*Primary Bg color*/
		$css->set_selector( '.outer-bg-primary' );
		$css->add_property( 'background-color', $common_primary_color );
		
		/*Secondary Text color*/
		$css->set_selector( 'h3,h4' );		
		$css->add_property( 'color', $imp_common_secondary_color );

		/*Button Text color*/
		$css->set_selector( 'h6' );		
		$css->add_property( 'color', $imp_common_button_color );

		
		/**Grafity Form Button And Tab Active Color*/
		$css->set_selector( '.contact-form input[type="submit"],.gform_footer input[type=submit],.resp-tab-active' );
		$css->add_property( 'background-color', $common_button_color );

		/**Grafity Form Button And Tab Active Hover*/
		$css->set_selector( '.contact-form input[type="submit"]:hover,.gform_footer input[type=submit]:hover,.resp-tab-item:hover' );
		$css->add_property( 'background-color', $common_primary_color );
		
		

		//Footer
		$css->set_selector( '.site-footer' );
		$css->add_property( 'background-color', $common_secondary_color );
		//Menu
		
		$css->set_selector( '#menu-footer-menu li a,.footer-address,.footer-address a,.textwidget,.widget-title' );
		$css->add_property( 'color', $common_text_color );

		$css->set_selector( '#menu-footer-menu li a:hover,#menu-footer-menu li.current_page_item a' );
		$css->add_property( 'color', $common_button_color );


		$css->set_selector( '.menu-footer-bar-menu-container ul li a' );
		$css->add_property( 'color', $common_text_color );

		$css->set_selector( '.menu-footer-bar-menu-container ul li a:hover,.menu-footer-bar-menu-container ul li.current_page_item a' );
		$css->add_property( 'color', $common_button_color );

		$css->set_selector( '.footer-widgets a:hover' );
		$css->add_property( 'color', $common_button_color );
		



		do_action( 'generate_base_css', $css );

		return apply_filters( 'generate_base_css_output', $css->css_output() );
	}
}