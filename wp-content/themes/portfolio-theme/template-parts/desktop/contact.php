<div class="row" id="contact">
    <?php get_template_part("template-parts/desktop/title-nav"); ?>
    <div class="col-6">
        <div class="h-100vh">
            <div class="row h-100vh index-content align-items-center">
                <div class="col-12 align-self-end">
                    <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("contact_title") ) : ?>
                    <?php endif ;?>
                    <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("contact_subtitle") ) : ?>
                    <?php endif ;?>
                    <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("contact_description") ) : ?>
                    <?php endif ;?>
                </div>
                <div class="col-12 align-self-stretch">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-6 col-sm-6">
        <div class="featured-img">
            <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("contact_image") ) : ?>
            <?php endif ;?>
        </div>
    </div>
</div>