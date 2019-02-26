<?php

/**
 * The file that defines the core plugin class
 *
 * @since      1.0.0
 * @package    CPT_Registrator
 */

namespace CPT_Registrator;

use \CPT_Registrator\Base\CPT;

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
    public static function activate()
    {
        CPTRegistrator::register_cpts();
    }

    /**
     * Method to run on plugin deactivation.
     *
     * @return void
     * @since 1.0.0
     */
    public static function deactivate()
    {
        // Nothing...
    }

    public static function register_cpts()
    {
        // TODO: Take from a config file.
        $book_cpt = new CPT('Book');
        $book_cpt->setArgs()
                 ->setRewrite('book');
        add_action('init', array($book_cpt, 'register'), 0);
    }
}
