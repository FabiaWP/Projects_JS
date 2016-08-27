<?php
/*
  Plugin Name: Fabia JScript
  Plugin URI:

 */
define('FO_JSCRIPT_PATH', dirname(__FILE__));
define('FO_JSCRIPT_FOLDER', basename(FO_JSCRIPT_PATH));
define('FO_JSCRIPT_URL', plugins_url() . '/' . FO_JSCRIPT_FOLDER);


add_action('init','enqueue_scripts_2');


function enqueue_scripts_2() {
        wp_register_script( 'jscript', FO_JSCRIPT_URL . '/res/js/main.js' );


        wp_enqueue_script('jscript');
    }

$post = isset($_GET['post']) ? $_GET['post'] : false;  // trovo l'id


if($post) {



    add_filter('wpt_field_options', 'fo_members_options', 10, 2);

}


