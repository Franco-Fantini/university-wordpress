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
                <a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home"
                        aria-hidden="true"></i>Back to the Blog </a>
                <div class="author-post">
                    <address rel="author">
                        Posted By <?php the_author_posts_link() ?> on
                        <time><?php the_time('j/' . 'n/' . 'Y') ?></time>
                        in
                        <?php echo get_the_category_list(', '); ?>
                    </address>
                </div>
            </div>
            <h2 class="single-post-title">
                <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>
        </div>

    </section>
    <?php
}
get_footer();
?>