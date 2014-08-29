<?php

/*
Plugin Name: Wepesi Zopim
Plugin URI: http://wepesi.com
Description: Wepesi Zopim.
Author: David Njuguna
Version: 0.1
Author URI: http://davidnjuguna.com
*/

add_action('admin_enqueue_scripts', 'wepesi_zopim_script');
function wepesi_zopim_script() {
    wp_enqueue_script('wepesi-zopim-script', plugins_url('js/zopim.js', __FILE__));
}

