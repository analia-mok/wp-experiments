<?php

use \CPT_Registrator\Base\CPT;
use \CPT_Registrator\Helpers\Dashicons;

CPT::setPrefix( '_foo_' );

CPT::create( 'Call To Action' )
    ->setArgs('dashicons-book-alt')
    ->setRewrite( 'book' )
    ->register();