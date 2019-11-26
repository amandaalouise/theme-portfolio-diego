<div class="container pb-5 pt-4">
    <div class="row">
        <div class="col-4">
            <span class="text-left">
                <a href="<?php echo get_permalink(get_previous_post()) ?>" class="previous-link">
                    <div class="row">
                        <div class="col-1" style="margin-top: 10px;">
                            <i class="material-icons previous-icon">
                                arrow_back
                            </i>
                        </div>
                        <div class="col-11">
                            <p class="p-0 m-0 previous-title">PREVIOUS PROJECT</p>
                            <p class="previous-project">Nome do Projeto</p>
                        </div>
                    </div>
                </a>
            </span>
        </div>
        <div class="col-4 text-center">
            <a href="<?php echo get_home_url(); ?>" class="previous-link home-icon">
                <i class="material-icons">
                    home
                </i>
            </a>
        </div>
        <div class="col-4">
            <span class="text-right">
                <a href="<?php echo get_permalink(get_next_post()) ?>" class="previous-link">
                    <div class="row">
                        <div class="col-11">
                            <p class="p-0 m-0 previous-title">NEXT PROJECT</p>
                            <p class="previous-project">Nome do Projeto</p>
                        </div>
                        <div class="col-1" style="margin-top: 10px;">
                            <i class="material-icons previous-icon">
                                arrow_forward
                            </i>
                        </div>
                    </div>
                </a>
            </span>
        </div>
    </div>
</div>
</div>