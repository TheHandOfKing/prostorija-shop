<?php
//Site logo
function prostorija_logo_setup()
{
  $defaults = array(
    'height'      => 100,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'prostorija_logo_setup');

// Menu in header
function regular_menu()
{
  register_nav_menu('regular-menu', __('Header Menu'));
}
add_action('init', 'regular_menu');
