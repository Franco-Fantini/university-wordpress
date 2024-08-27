<?php get_header(); ?>

<div class="blog-banner">
    <div class="blog-banner__bg-image"
        style="background-image:url(<?php echo get_theme_file_uri('/images/university-cafe.jpg') ?>);">
    </div>
    <div class="page-banner__content container container--narrow">
        <h3 class="page-banner__title">
            Every opinion matters, let's help each other.
        </h3>
    </div>
</div>
<section class="blog">
    <div class="container blog-container">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <article>
                <div class="post-card ">
                    <h5 class="title-blog-post headline--small  ">
                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                    </h5>
                    <div class="author-post">
                        <address rel="author">
                            Posted By <?php the_author_posts_link() ?> on
                            <time><?php the_time('j/' . 'n/' . 'Y') ?></time>
                            in
                            <?php echo get_the_category_list(', '); ?>
                        </address>
                    </div>
                    <div class="content-blog-box">
                        <?php echo wp_trim_words(get_the_content(), 30) ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="blog-btn">Read More</a>
                </div>
            </article>

        <?php } ?>

        <div class="pagination-link"><?php echo paginate_links(); ?> </div>
    </div>
</section>
<?php get_footer();
?>