<?php
/**
 * majolika functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package majolika
 */

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);