<div class="page__content">
    <div class="content">
        <div id="main" class="scroll-container">
            <section class="bg-post">
                <?php get_template_part( 'template-parts/mobile/landing' ); ?>
            </section>

            <?php 

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );
            
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
            ?>

            <section class="bg-post">
                <?php get_template_part( 'template-parts/mobile/post' ); ?>
            </section>

            <?php                  
                }
            }            
            wp_reset_postdata();
            
            ?>

            <section class="bg-post">
                <?php get_template_part( 'template-parts/mobile/contact' ); ?>
            </section>
        </div>
    </div>
</div>