<div class="row">
    <div class="col-6">
        <div class="h-100vh">
            <div class="row h-100vh post-content align-items-center">
                <div class="d-block animated fadeInLeft">
                    <div class="typewriter d-inline-flex"></div>
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
    <div class="col-6 col-md-6 col-sm-6">
        <div class="featured-img animated fadeInRight">
            <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("landing_image") ) : ?>
            <?php endif ;?>
        </div>
    </div>
</div>