<footer class="site-footer">
    <div class="site-footer__inner container">
        <div class="group">
            <div class="site-footer__col-one">
                <h2 class="school-logo-text school-logo-text--alt-color">
                    <a href="<?php echo site_url() ?>"><?php bloginfo('name') ?></a>
                </h2>
                <p><a class="site-footer__link" href="#">555.555.5555</a></p>
            </div>

            <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Explore</h3>
                    <nav class="nav-list">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footerMenu'
                        )) ?>
                        <!-- this is the first hard code menu and its replaced with dinamyc php menu
                    <ul>
                        <li><a href="<?php echo site_url('/about-us/') ?>">About Us</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Campuses</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul> -->
                    </nav>
                </div>

                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Learn</h3>
                    <nav class="nav-list">
                        <ul>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav>
                    <ul class="min-list social-icons-list group">
                        <li>
                            <a href="https://www.facebook.com" class="social-color-facebook"><i
                                    class="fa-brands fa-square-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" class="social-color-twitter"><i
                                    class="fa-brands fa-square-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" class="social-color-youtube"><i
                                    class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/franco-fantini" class="social-color-linkedin"><i
                                    class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instegram.com" class="social-color-instagram"><i
                                    class="fa-brands fa-square-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>