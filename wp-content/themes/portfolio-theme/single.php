<?php
/**
 * The Template for displaying all single posts.
 */

get_header();

if ( wp_is_mobile() ) {
    get_template_part("template-parts/mobile/single");
} else {
    get_template_part("template-parts/desktop/single");
}

get_footer() ?>