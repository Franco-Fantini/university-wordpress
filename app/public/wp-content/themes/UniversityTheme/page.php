<?php
get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image"
            style="background-image:url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
        </div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">
                <?php the_title(); ?>
            </h1>
            <div class="page-banner__intro">
                <p>Learn how the school of your dreams got started.</p>
            </div>
        </div>
    </div>

    <!--child and parents link navigator -->
    <div class="container container--narrow page-section">
        <?php
        $parentID = wp_get_post_parent_id(get_the_ID());
        if ($parentID) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <a class="metabox__blog-home-link" href="<?php echo get_permalink($parentID) ?>"><i class="fa fa-home"
                        aria-hidden="true"></i> Back to
                    <?php echo get_the_title($parentID) ?> </a>
                <ul class="min-list">
                    <?php
                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $parentID,
                    ));
                    ?>
                </ul>
            </div>
            <?php
        } else { ?>
            <?php
            $iAmParent = get_pages(array('child_of' => get_the_ID()));
            if ($iAmParent) { ?>
                <div class="metabox metabox--position-up metabox--with-home-link">
                    <a class="metabox__blog-home-link" href="<?php echo site_url() ?>"><i class="fa fa-home" aria-hidden="true"></i>
                        Back to Home</a>
                    <ul class="min-list">
                        <?php 
                        wp_list_pages(array(
                            'title_li' => NULL,
                            'child_of' => get_the_ID(),
                        ));
                        ?>
                    </ul>
                </div>
            <?php }
            ?>

        <?php }
        ?>
        <!--child and parents link navigator -->



        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="page-section page-section--beige">
        <div class="container container--narrow generic-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
                possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
                consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias
                atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad
                quod sed.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
                possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
                consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias
                atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad
                quod sed.</p>
        </div>
    </div>

    <div class="page-section page-section--white">
        <div class="container container--narrow">
            <h2 class="headline headline--medium">Biology Professors:</h2>

            <ul class="professor-cards">
                <li class="professor-card__list-item">
                    <a href="#" class="professor-card">
                        <img class="professor-card__image" src="images/barksalot.jpg" />
                        <span class="professor-card__name">Dr. Barksalot</span>
                    </a>
                </li>
                <li class="professor-card__list-item">
                    <a href="#" class="professor-card">
                        <img class="professor-card__image" src="images/meowsalot.jpg" />
                        <span class="professor-card__name">Dr. Meowsalot</span>
                    </a>
                </li>
            </ul>
            <hr class="section-break" />

            <div class="row group generic-content">
                <div class="one-third">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                        aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum
                        odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                        molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus
                        doloremque quibusdam quo, ea veniam, ad quod sed.</p>
                </div>

                <div class="one-third">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                        aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum
                        odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                        molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus
                        doloremque quibusdam quo, ea veniam, ad quod sed.</p>
                </div>

                <div class="one-third">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                        aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum
                        odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                        molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus
                        doloremque quibusdam quo, ea veniam, ad quod sed.</p>
                </div>
            </div>
        </div>
    </div>


    <?php
}
get_footer();
?>