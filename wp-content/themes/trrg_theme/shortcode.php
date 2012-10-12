<?php

    add_shortcode('video_embed', function($atts)    {
        $atts = shortcode_atts (
            array (
            'src' => '',
            'width' => 604,
            'height' => 320,
            'title' => ''
            ), $atts);


                return '<div class="video_image">
                <iframe width="' . $atts['width'] . '" height="' .$atts['height']. '" src="' . $atts['src'] . '" frameborder="0" allowfullscreen></iframe>
                <h4>' .$atts['title'] .'</h4>
            </div>';


    });
add_filter('widget_text', 'do_shortcode');