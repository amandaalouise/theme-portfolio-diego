<div class="col-12">
    <div class="fixed-top-left">
        <?php if ( !function_exists('custom_sidebars') || !dynamic_sidebar("featured_name") ) : ?>
        <?php endif ;?>
    </div>
    <div class="fixed-top-right">
        <a href="<?php echo getSocialUrl('Instagram'); ?>">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="<?php echo getSocialUrl('Linkedin'); ?>">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="<?php echo getSocialUrl('Dribble'); ?>">
            <i class="fab fa-dribbble"></i>
        </a>
    </div>
</div>