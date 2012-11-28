<?php

/**
 * Satus Configuration and Constants
 * Thanks to Adam Nowak @link codehyperspatial.com
 * The about page and contact page ids are for @link schema.org see itemscope body tag towards the end of this file
*/
satus_define_constants(array(
  'WP_JQUERY'               => true,          // enables WordPress' jQuery
  'TOUCH_ICONS'             => true,          // enables touch icons for mobile devices
  'POSTS_NAV_PREV'          => '&larr;',      // index.php, etc. posts navigation indicator
  'POSTS_NAV_NEXT'          => '&rarr;',
  'POST_THUMB_CLASSES'      => 'image thumb', // used for index.php's etc. post thumbnails 
  'FIGURE_CLASSES'          => 'image',       // used for inserted images w/caption   
  'FIGCAPTION_CLASSES'      => 'caption',
  'GALLERY_CLASSES'         => 'image thumb', // used for default gallery
  'GALLERY_CAPTION_CLASSES' => 'caption',
  'ABOUT_PAGE_ID'           => '',            // about us page id for itemscope tag
  'CONTACE_PAGE_ID'         => '',            // contact us page id for typeof tag
  'POST_EXCERPT_LENGTH'     => 40,
  'GOOGLE_ANALYTICS_ID'     => '',            // UA-XXXXX-Y
));
// Define Constants:
function satus_define_constants($constants){
  foreach($constants as $key => $value){
    if(!defined($key)) define($key,$value);
  }
}

/**
 * Define which pages shouldn't have the sidebar @link github.com/retlehs/roots/
*/
function satus_sidebar() {
  if (is_404() || is_page_template('templates-page/page-full.php')) {
    return false;
  } else {
    return true;
  }
}

/**
 * Set the content width based on the theme's design and stylesheet.
*/
if ( ! isset( $content_width ) )
  $content_width = 1160; /* pixels */

/**
 * Opening body tag with @link rdfa lite 1.1 and schema.org php conditional
*/
if(!function_exists('satus_typeof')):
function satus_typeof(){
  if ( ABOUT_PAGE_ID !== '' && is_page( ABOUT_PAGE_ID ) ) echo 'vocab="http://schema.org/" typeof="AboutPage"';
  elseif ( CONTACE_PAGE_ID !== '' && is_page( CONTACE_PAGE_ID ) ) echo 'vocab="http://schema.org/" typeof="ContactPage"';
  elseif ( is_search() ) echo 'vocab="http://schema.org/" typeof="SearchResultsPage"';
  elseif ( is_author() ) echo 'vocab="http://schema.org/" typeof="ProfilePage"';
  elseif ( 'post' == get_post_type() ) echo 'vocab="http://schema.org/" typeof="Blog"';
  else echo 'vocab="http://schema.org/" typeof="WebPage"';
}
endif;

/**
* Change Password Protected Form
* @link wp.tutsplus.com/tutorials/customizing-and-styling-the-password-protected-form/
*/
add_filter( 'the_password_form', 'satus_password_form' );  
function satus_password_form() {  
  global $post;  
  $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );  
  $o = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post"><label class="pass-label" for="' . $label . '">' . __( "Password:", "satus" ) . ' </label><input id="' . $label . '"  name="post_password" type="password" placeholder="Password"><input class="button" type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '"></form>';  
  return $o;  
}

?>