
<?php

get_header();

if ( wp_is_mobile() ) {
    get_template_part("template-parts/mobile/front-content");
} else {
    get_template_part("template-parts/desktop/front-content");
}

get_footer(); ?>