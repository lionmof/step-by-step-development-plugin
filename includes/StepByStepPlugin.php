<?php

/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 16.01.17
 * Time: 6:53 PM
 */
namespace includes;

class StepByStepPlugin
{
    private static $instance = null;
    private function __construct() {
    }
    public static function getInstance() {

        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;

    }


}
StepByStepPlugin::getInstance();