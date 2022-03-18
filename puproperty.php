<?php
/*
Plugin Name: puProperty
Plugin URI: https://agbuda.by/
Description: First Plugin
Version: 1.0
Author: Vanvala
Author URI: https://agbuda.by/
Licence: GPLv2 or later
Text Domain: puproperty
 */

if(!defined(ABSPATH)){
    die;
}

class puProperty{
    
    static function activation(){
        flush_rewrite_rules();
    }

    static function deactivation(){
        flush_rewrite_rules();
    }
}
if(class_exists('puProperty')) {
    $puProperty = new puProperty();
}

register_activation_hook( __FILE__, array($puProperty, 'activation') );
register_deactivation_hook( __FILE__, array($puProperty, 'deactivation') );