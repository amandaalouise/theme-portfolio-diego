<?php
get_header(); ?>
<div class="page__content">
    <div class="sidenav text-center">
        <div class="nav-open-btn w-100">
            <i class="material-icons menu-icon">
                menu
            </i>
        </div>
    </div>
    <div class="content">
        <div id="main" class="scroll-container">
            <section>
                <?php get_template_part( 'template-parts/landing' ); ?>
            </section>
            <section class="section2">
                <div>
                    <span>Section 2</span>
                </div>
            </section>
            <section class="section3">
                <div>
                    <span>Section 3</span>
                </div>
            </section>
            <section class="section4">
                <div>
                    <span>Section 4</span>
                </div>
            </section>
            <section class="section5">
                <div>
                    <span>Section 5</span>
                </div>
            </section>
        </div>
    </div>
</div>
<?php
get_footer(); ?>