<div class="row bg-post">
    <div class="col-6">
        <div class="h-100vh">
            <div class="row h-100vh post-content align-items-center">
                <div class="d-block">
                    <?php 
                    $posttags = get_the_tags();
                        if ($posttags) {
                        foreach($posttags as $tag) {
                            ?>
                            <span class="post-tags">
                                <?php echo $tag->name; ?>
                            </span>
                            <?php
                        }
                    } ?>                    
                    <h1 class="post-title">
                        <?php the_title() ?>
                    </h1>
                    <a href="<?php the_permalink(); ?>" class="post-link">View project <i
                            class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-6 col-sm-6">
        <div class="featured-img">
            <img src="http://placehold.it/920x980" alt="">
        </div>
    </div>
</div>