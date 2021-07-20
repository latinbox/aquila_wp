<?php
/**
 * Add function of scripts
 *
 * @package Aquila
 *   
 */ 
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    protected function __construct()
    {
        // load .class
        Assets::get_instance();
        $this->setup_hooks();
    }
    protected function setup_hooks(){
        /**
         * Actions.
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
        // add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
        // add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);  
    }
    public function setup_theme() {

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Custom logo.
		 *
		 * @see Adding custom logo
		 * @link https://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
		 */
		add_theme_support(
			'custom-logo',
			[
				'header-text' => [
					'site-title',
					'site-description',
				],
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			]
		);


}
}
?>