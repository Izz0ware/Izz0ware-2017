<?php
/**
* Custom template tags for this theme
*
* Eventually, some of the functionality here could be replaced by core features.
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
*/

/**
* Display a front page section.
*
* @param $partial WP_Customize_Partial Partial associated with a selective refresh request.
* @param $id integer Front page section to display.
*/
function twentyseventeen_front_page_section_template_safe( $partial = null, $id = 0 ) {
    if ( is_a( $partial, 'WP_Customize_Partial' ) ) {
        // Find out the id and set it up during a selective refresh.
        global $twentyseventeencounter;
        $id = str_replace( 'panel_', '', $partial->id );
        $twentyseventeencounter = $id;
    }
    
    global $post; // Modify the global post object before setting up post data.
    if ( get_theme_mod( 'panel_' . $id ) ) {
        global $post;
        $post = get_post( get_theme_mod( 'panel_' . $id ) );
        setup_postdata( $post );
        set_query_var( 'panel', $id );
        
        $template = get_page_template_slug($post->ID);
        if( !empty( $template ) ) {
            if(substr($template, count($template)-5) == '.php') {
                $template = substr($template, 0, count($template)-5);
            }
            get_template_part( $template );
        }else{
            get_template_part( 'template-parts/page/content', 'front-page-panels' );
        }
        
        wp_reset_postdata();
    } elseif ( is_customize_preview() ) {
        // The output placeholder anchor.
        echo '<article class="panel-placeholder panel twentyseventeen-panel twentyseventeen-panel' . $id . '" id="panel' . $id . '"><span class="twentyseventeen-panel-title">' . sprintf( __( 'Front Page Section %1$s Placeholder', 'twentyseventeen' ), $id ) . '</span></article>';
    }
}