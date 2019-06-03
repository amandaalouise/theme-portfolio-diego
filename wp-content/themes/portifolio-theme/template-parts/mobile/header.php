<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        <div class="row pb-3 height-grow align-content-around">
            <div class="col-12">
                <?php 
                    wp_nav_menu(array(
                        'menu'           => 'social',
                        'theme_location' => 'sidenav',
                        'fallback_cb'    => false,
                        'menu_class'     => "social-menu",
                    ));                
                ?>
            </div>
        </div>
    </div>
</nav>