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


<div class="page">
    <nav class="nav">
        <div class="nav__close"></div>
        <ul class="nav__list">
            <li class="nav__item">
                <a class="nav__link" href="#" title="Home">About</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#" title="About">Projects</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#" title="Tour">Contact</a>
            </li>
        </ul>
    </nav>