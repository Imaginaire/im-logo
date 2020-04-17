<?php

// To show the logos on the front end

function show_logos( $atts ){

    // Get carousel 'type'

    $a = shortcode_atts( array (
        'type'  => '',
    ), $atts );

    $type = $a['type'];

    // Check if a type has been set and create query arguments

    if( $type ):

        $args = array(

            'post_type'         =>      array( 'im_logo' ),
            'logo_carousel'     =>      $type,
            'orderby'           =>      'menu_order'

        );

    else:

        $args = array(

            'post_type'         =>      array( 'im_logo' ),
            'orderby'           =>      'menu_order'

        );

    endif;

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ):

    $content = '<div class="logo-carousel">';

        while ( $query->have_posts() ):

            $query->the_post();

            $url = get_the_post_thumbnail_url('', 'large');

            $content .= '<div class="item">';

            $content .= '<img src="'. $url .'" class="img-responsive" />';

            $content .= '</div>';

        endwhile;

    $content .= '</div>';

    endif;

    return $content;

    // Restore original Post Data
    wp_reset_postdata();

}
add_shortcode( 'logos', 'show_logos' );
