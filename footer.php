    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-content-area">
                    <?php
                        wp_nav_menu(
                            array('theme_location' => 'footer_menu')
                        );
                    ?>
                </div>
                <div class="copyright">
                    <p><?php echo get_theme_mod('set_copyright'); ?></p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script>
        jQuery(document).ready(function($){
            // Target your .container, .wrapper, .post, etc.
            $(".is-type-video").fitVids();
        });
    </script>
</body>
</html> 