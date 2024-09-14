<?php
get_header(); ?>
<div class="header-on-single-posts">
</div>
<?php
while (have_posts()) {

    the_post(); ?>

    <div class="blog-banner">
        <div class="single-blog-banner__bg-image"
            style="background-image:url(<?php echo get_theme_file_uri('/images/blog-banner.jpg') ?>);">
        </div>
        <div class="page-banner__content container container--narrow">
            <h4 class="single-post-title">
                <?php single_cat_title(); ?>
            </h4>
        </div>
    </div>

    <section class="container blog--page-section">
        <div class="single-post-container">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <a class="metabox__blog-home-link" href="<?php echo site_url('/events') ?>"><i class="fa fa-home"
                        aria-hidden="true"></i>Back to the Events </a>
            </div>
            <h2 class="single-post-title">
                <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>

            <?php

            $relatedPrograms = get_field('related_programs');
            if ($relatedPrograms) {
                echo '<hr>';
                echo '<ul class="min-list">';
                echo '<h2>Related Programs</h2>';
                foreach ($relatedPrograms as $program) { ?>

                    <li><a class="text-white" href="<?php echo get_the_permalink($program); ?>">
                            <?php echo get_the_title($program); ?>
                        </a></li>

                <?php }
            }
            echo '</ul>'
                ?>
        </div>

    </section>
    <?php
}
get_footer();
?>