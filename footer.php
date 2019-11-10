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
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html> 