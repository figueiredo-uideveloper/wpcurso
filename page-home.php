<?php get_header(); ?>

<div class="content-area">
    <main>
        <section class="slide">
            <?php
                $design = get_theme_mod('set_slider_option');
                $limit = get_theme_mod('set_slider_limit');

                echo do_shortcode('[recent_post_slider design="design-' . $design . '" limit="' . $limit . '"]');
            ?>
        </section>
        <section class="services">
            <div class="container">
                <h1>Our Services</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php
                            if (is_active_sidebar('services-1')) {
                                dynamic_sidebar('services-1');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php
                            if (is_active_sidebar('services-2')) {
                                dynamic_sidebar('services-2');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php
                            if (is_active_sidebar('services-3')) {
                                dynamic_sidebar('services-3');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="meddle-area">
            <div class="container">
                <div class="row">
                    <?php get_sidebar('home'); ?>
                    <div class="news col-md-8">
                        <div class="container">
                            <div class="row">
                                <?php
                                    $featured = new WP_Query('post_typ=post&posts_per_page=1&cat=1');

                                    if($featured->have_posts()):
                                        while($featured->have_posts()):
                                            $featured->the_post();
                                ?>
                                    <div class="col-12">
                                        <?php
                                            get_template_part('template-parts/content', 'featured');
                                        ?>
                                    </div>
                                <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    
                                    // Loop Secundario
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 2,
                                        'category__not_in' => array(10),
                                        'category__in' => array(1),
                                        'offset' => 1
                                    );
                                    
                                    $secondary = new WP_Query($args);

                                        if($secondary->have_posts()):
                                            while($secondary->have_posts()):
                                                $secondary->the_post();
                                    ?>
                                        <div class="col-sm-6">
                                            <?php
                                                get_template_part('template-parts/content', 'secondary');
                                            ?>
                                        </div>
                                    <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map"></section>
    </main>
</div>

<?php get_footer(); ?>