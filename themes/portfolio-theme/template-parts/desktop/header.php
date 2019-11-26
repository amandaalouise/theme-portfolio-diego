<?php


if((is_user_logged_in()) && !(is_customize_preview())){ ?>

<style type="text/css" media="screen">
html {
    margin-top: 32px !important;
}

* html body {
    margin-top: 32px !important;
}

.ui-nav-mobile.is-active {
    padding-top: 50px !important;
}

@media screen and (max-width: 782px) {
    html {
        margin-top: 46px !important;
    }

    * html body {
        margin-top: 46px !important;
    }
}
</style>

<?php } else { ?>

<style type="text/css" media="screen">
html {
    margin-top: 0px !important;
}

* html body {
    margin-top: 0px !important;
}

@media screen and (max-width: 782px) {
    html {
        margin-top: 0px !important;
    }

    * html body {
        margin-top: 0px !important;
    }
}
</style>

<?php } ?>

<nav class="ui-nav ui-nav-mobile">
    <div class="row">
        <div class="col-6 height-grow">
            <div class="close-btn ui-btn ui-menu-close ml-4 mt-1 pt-1">
                <i class="material-icons menu-icon">close</i>
            </div>
        </div>
        <div class="col-6 text-right">
            <span class="title">
                <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("featured_name") ) : ?>
                <?php endif ;?>
            </span>
        </div>
    </div>
    <div class="row mt-5 height-grow">
        <div class="col-12">
            <?php 
                    wp_nav_menu(array(
                        'menu'           => 'main',
                        'theme_location' => 'sidenav',
                        'fallback_cb'    => false,
                        'menu_class'        => "main-menu",
                    ));                
                ?>
        </div>
    </div>
    <div class="row pb-3 height-grow align-content-around social-bottom">
        <div class="col-12">
            <?php 
                    wp_nav_menu(array(
                        'menu'           => 'social',
                        'theme_location' => 'sidenav',
                        'fallback_cb'    => false,
                        'menu_class'        => "social-menu",
                    ));                
                ?>
        </div>
    </div>
</nav>