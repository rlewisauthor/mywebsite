<?php
function my_custom_theme_setup() {
    register_nav_menus( array(
        'header-menu' => 'Header Menu'
    ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );
?>
