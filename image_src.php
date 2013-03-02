<?php 
/*
Plugin Name: image_src
Plugin URI: http://github.com/ryanve/image_src
Description: Add the "image_src" microformat.
Version: 1.0.1
Author: Ryan Van Etten
Author URI: http://ryanve.com
License: MIT
*/

add_action('wp_head', function () {
    $src = null;
    is_singular() # default usage applies only to singular contexts
        and ( $id = get_post_thumbnail_id() )
        and ( $src = wp_get_attachment_image_src( $id, 'thumbnail' ) )
        and ( $src = is_array( $src ) ? $src[0] : null );
        
    is_string( $src ) or $src = null;
    $src = apply_filters( '@image_src', $src ); # extendable to other contexts

    if ( $src && $src === strip_tags( $src ) && $src === esc_attr( $src ) ) # ensure valid markup
        echo "<link rel='image_src' href='$src' />\n";
});