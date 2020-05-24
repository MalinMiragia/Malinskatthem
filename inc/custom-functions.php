<?php

function Katthemmet_the_custom_logo() {
    // get logo media id
    $custom_logo_id = get_theme_mod('custom_logo');

    // get URL to logo
    $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

    // Do we have custom logo?
    if  (has_custom_logo()) {
        // yes we have custom logo, pls display
        echo '<img src="' . $logo_url[0] . '" class="img-fluid" alt="Site Logo" title="' . get_bloginfo('name') . '">';
    }   else    {
        // we have no logo, show us the title instead
        bloginfo('name');
    }
}

function katthemmet_theme_setup() {
    // Add support for Featured Images
    add_theme_support('post-thumbnails');
    // Set Image Size for blog thumbnail
    set_post_thumbnail_size(100, 0, false);
    // Add support for custom logo
}