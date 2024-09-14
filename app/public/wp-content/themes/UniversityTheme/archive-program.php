<?php get_header(); ?>
<div class="header-on-single-posts">
</div>

<section class="events-on-archive">

    <div class="all-events-banner">
        <div class="content">
            <h2 class="headline--medium ">Programs </h2>
            <img src="<?php echo get_theme_file_uri('/images/event.png') ?>" alt="event-img">
        </div>

        <div class="all-events-banner-poligon-1"></div>
        <div class="all-events-banner-poligon-2"></div>
    </div>

    <div class="container">
        <ul class="link-list min-list">
            <?php
            while (have_posts()) {
                 the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

            <?php }

            ?>
        </ul>
    </div>
    <div class="pagination_events container">
        <div class="pagination-event-box">
            <?php echo paginate_links(); ?>
        </div>
</section>

<?php get_footer();
?>