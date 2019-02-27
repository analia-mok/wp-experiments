<?php

use \CPT_Registrator\Base\CPT;
use \CPT_Registrator\Helpers\Dashicons;

function register_custom_post_types(){
    // Simple Book CPT.
    CPT::create( 'Book' )
        ->setArgs('dashicons-book-alt')
        ->setRewrite( 'book' )
        ->register();

    CPT::create( 'White Paper' )
        ->setArgs(Dashicons::$admin_page)
        ->register();
}

// add_action( 'init', 'register_custom_post_types', 10 );