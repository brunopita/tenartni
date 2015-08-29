<?php 
function gray_chalk_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Coming Soon, translate this to 'off'. Do not translate
    * into your own language.
    */
    $coming_soon = _x( 'on', 'Coming Soonfont: on or off', 'gray-chalk' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'gray-chalk' );
 
    if ( 'off' !== $coming_soon || 'off' !== $open_sans ) {
        $font_families = array();
 
        if ( 'off' !== $coming_soon ) {
            $font_families[] = 'Coming Soon:400,700,400cursive';
        }
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:700italic,400,800,600';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
 
    return $fonts_url;
}

function gray_chalk_scripts_styles() {
    wp_enqueue_style( 'gray-chalk-fonts', gray_chalk_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'gray_chalk_scripts_styles' );

function gray_chalk_editor_styles() {
    add_editor_style( array( 'editor-style.css', gray_chalk_fonts_url() ) );
}
add_action( 'after_setup_theme', 'gray_chalk_editor_styles' );

function gray_chalk_custom_header_fonts() {
    wp_enqueue_style( 'gray-chalk-fonts', gray_chalk_fonts_url(), array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'gray_chalk_scripts_styles' );
 ?>