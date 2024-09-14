<?php
get_header(); ?>
<div class="header-on-single-posts">
</div>
<?php while (have_posts()) {
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
                <a class="metabox__blog-home-link" href="<?php echo site_url('/programs') ?>"><i class="fa fa-home"
                        aria-hidden="true"></i>All Programs</a>
            </div>
            <h2 class="single-post-title">
                <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>
            <?php
            $todayData = date('Ymd');
            $homeEvents = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'event',
                'orderby' => 'meta_value_num',
                'meta_key' => 'event_date',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $todayData,
                        'type' => 'numeric',
                    ),
                    array(
                        'key' => 'related_programs',
                        'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . ""

                    )
                ),
            ));

            if ($homeEvents->have_posts()) {
                echo '<hr>';
                echo '<ul class="min-list">';
                echo '<h2>Next ' . get_the_title() . ' Events</h2>';
                while ($homeEvents->have_posts()) {
                    $homeEvents->the_post();
                    $dateField = new DateTime(get_field('event_date')); ?>
                    <div class="event-summary">
                        <a class="event-summary__date event-summary__date--beige t-center" href="#">
                            <span class="event-summary__month">
                                <?php echo $dateField->format('M');
                                ?></span>
                            <span class="event-summary__day">
                                <?php echo $dateField->format('d');
                                ?>
                            </span>
                        </a>
                        <div class="event-summary__content">
                            <h5 class="headline headline--tiny"><a
                                    href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
                            </h5>
                            <p><?php echo wp_trim_words(get_the_content(), 20) ?> <a href="<?php the_permalink() ?>"
                                    class="nu gray">Read more</a></p>
                        </div>
                    </div>
                <?php }
            }

}

wp_reset_postdata();
?>



    </div>

</section>
<?php

get_footer();
?>