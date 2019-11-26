<div class="row">
    <div class="col-12">
        <div class="row h-100vh index-content">
            <div class="d-block animated fadeInLeft mt-5 pt-5">
                <div id="typed2" class="d-inline-flex"></div>
                <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("titulo_front") ) : ?>
                <?php endif ;?>

                <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("subtitulo_front") ) : ?>
                <?php endif ;?>

                <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("description_front") ) : ?>
                <?php endif ;?>

                <div class="landing-social">
                    <?php 
                            wp_nav_menu(array(
                                'menu'           => 'social', // Do not fall back to first non-empty menu.
                                'theme_location' => 'Landing page',
                                'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                            ));                
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>