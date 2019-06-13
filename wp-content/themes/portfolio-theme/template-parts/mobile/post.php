<?php 

$imgArray;
    
if( have_rows('secao_1') ):

    while( have_rows('secao_1') ) : the_row();
        if( have_rows('imagens') ):
            while( have_rows('imagens') ): the_row(); 
                $images1[] = get_sub_field('arquivo');
            endwhile;                 
        endif;   
    endwhile;

endif;    

if( have_rows('secao_2') ):

    while( have_rows('secao_2') ) : the_row();
        if( have_rows('imagens') ):
            while( have_rows('imagens') ): the_row(); 
                $images2[] = get_sub_field('arquivo');
            endwhile;                 
        endif;   
    endwhile;

endif;    

if( have_rows('secao_3') ):

    while( have_rows('secao_3') ) : the_row();
        if( have_rows('imagens') ):
            while( have_rows('imagens') ): the_row(); 
                $images3[] = get_sub_field('arquivo');
            endwhile;                 
        endif;   
    endwhile;

endif;    

$imgArray = array_merge($images1, $images2, $images3);

?>

<div class="row">
    <div class="col-12">
        <div class="row h-100vh w-100vw post-content">
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
                <a href="<?php the_permalink(); ?>" class="post-link mt-4">View project <i
                        class="material-icons">add</i></a>

                <div class="owl-carousel owl-theme mt-4">
                    <?php foreach($imgArray as $img) {
                        ?>
                    <div class="mr-2">
                        <img class="img-fluid" src="<?php echo $img['url'] ?>">
                    </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>