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
        // add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
        // add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);  
    }

}

?>