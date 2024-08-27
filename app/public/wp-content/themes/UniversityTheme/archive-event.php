<?php get_header(); ?>
<div class="header-on-single-posts">
</div>

<section class="events-on-archive">

    <div class="all-events-banner">
        <div class="content">
            <h2 class="headline--medium ">Upcoming Events</h2>
            <img src="<?php echo get_theme_file_uri('/images/event.png') ?>" alt="event-img">
        </div>

        <div class="all-events-banner-poligon-1"></div>
        <div class="all-events-banner-poligon-2"></div>
    </div>


    <?php


    while (have_posts()) {
        the_post(); ?>
        <div class="event-on-archive-box container  ">
            <div class="event-summary-data">
                <a class="" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month">
                        <?php $dateField = new DateTime(get_field('event_date'));
                        echo $dateField->format('M');
                        ?></span>
                    <span class="event-summary__day">
                        <?php echo $dateField->format('d');
                        ?>
                    </span>
                </a>
            </div>

            <div class="event-summary-box">
                <h5 class="event-summary__title headline headline--tiny"><a
                        href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
                </h5>
                <p><?php echo wp_trim_words(get_the_content(), 20) ?> <a href="<?php the_permalink() ?>"
                        class="nu gray">Read more</a></p>
            </div>
        </div>
    <?php }
    wp_reset_postdata();
    ?>

    <div class="pagination-link"><?php echo paginate_links(); ?> </div>
</section>

<?php get_footer();
?>