<?php

/*
Plugin Name:    Nerdery Code Challenge v2.0
Plugin URI:     http://nerdpress.nerderylaps.com
Description:    Connect to an API to test applicant's WP development prowess.
Version:        1.0
Author:         Damion M Broadaway <dbroadaw@nerdery.com>
Author URI:     http://goo.gl/31tMc
License:        GPL2
*/

class ncc_v2_bootstrap
{


    function __construct()
    {

    }

    public function ncc_v2_activate()
    {
        define('NCC_V2_PLUGIN_DIR', plugin_dir_path(__FILE__));
    }
    public function ncc_v2_deactivate()
    {

    }

    public function w2c($stuff)
    {
        $console = '<script type="text/javascript">';
        $console .= 'console.log("' . $stuff . '");';
        $console .= '</script>';
        echo $console;
    }
}

$ncc_v2_bootstrap = new ncc_v2_bootstrap();