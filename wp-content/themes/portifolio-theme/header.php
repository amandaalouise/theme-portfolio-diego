<?php 

wp_head(); 

if(is_user_logged_in()) {
    ?>

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
            <span class="title">Place</span> 
        </div>
    </div>
    <div class="row mt-5 height-grow">
        <div class="col-12">
            <?php 
                    wp_nav_menu(array(
                        'menu'           => 'main', // Do not fall back to first non-empty menu.
                        'theme_location' => 'sidenav',
                        'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                        'menu_class'        => "main-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    ));                
                ?>
        </div>
    </div>
    <div class="row pb-3 height-grow align-content-around social-bottom">
        <div class="col-12">
            <?php 
                    wp_nav_menu(array(
                        'menu'           => 'social', // Do not fall back to first non-empty menu.
                        'theme_location' => 'sidenav',
                        'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                        'menu_class'        => "social-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    ));                
                ?>
        </div>
    </div>
</nav>


<!-- <div class="page">
    <nav class="nav">
        <div class="position-relative w-100 navdiv">
            <div class="row">
                <div class="col-6 height-grow">
                    <div class="close-btn ml-4 mt-1 pt-1">
                        <i class="material-icons menu-icon">close</i>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <span class="title">Place</span>
                </div>
            </div>
            <div class="row mt-5 height-grow">
                <div class="col-12">
                <?php 
                    /* wp_nav_menu(array(
                        'menu'           => 'main', // Do not fall back to first non-empty menu.
                        'theme_location' => 'sidenav',
                        'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                        'menu_class'        => "main-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    )); */               
                ?>
                </div>
            </div>
            <div class="row pb-3 height-grow align-content-around">
                <div class="col-12">
                <?php 
                    /* wp_nav_menu(array(
                        'menu'           => 'social', // Do not fall back to first non-empty menu.
                        'theme_location' => 'sidenav',
                        'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                        'menu_class'        => "social-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    )); */                
                ?>
                </div>
            </div>
        </div>
    </nav> -->