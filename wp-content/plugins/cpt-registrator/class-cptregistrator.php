<?php

/**
 * The file that defines the core plugin class
 *
 * @since      1.0.0
 * @package    CPT_Registrator
 */

namespace CPT_Registrator;

use \CPT_Registrator\Base\CPT;
use \CPT_Registrator\Helpers\Dashicons; // TODO: Remove. For testing only

/**
 * The core plugin class.
 *
 * @since      1.0.0
 * @package    CPT_Registrator
 * @author     Analia Mok
 */
class CPTRegistrator
{
    /**
     * Method to run on plugin activation.
     *
     * @return void
     * @since 1.0.0
     */
    public static function activate() {
        CPTRegistrator::register_cpts();
    }

    /**
     * Method to run on plugin deactivation.
     *
     * @return void
     * @since 1.0.0
     */
    public static function deactivate() {
        // Nothing...
    }

    public static function defineCPTS() {
        // Simple Book Type.
        CPT::create( 'Book' )
            ->setArgs()
            ->setRewrite( 'book' )
            ->register();
    }

    public static function register_cpts() {
        // TODO: Take from a config file. OR a filter
        // Simple Book Type.
        // CPT::create( 'Book' )
        //     ->setArgs('dashicons-book-alt')
        //     ->setRewrite( 'book' )
        //     ->register();

        // CPT::create( 'Recipe' )
        //     ->setArgs( Dashicons::$admin_appearance , array(
        //         'supports'  => array( 'title', 'excerpt' ),
        //     ))
        //     ->setRewrite( 'recipe' )
        //     ->register();
    }
}
