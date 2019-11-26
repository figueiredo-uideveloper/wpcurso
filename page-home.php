<?php get_header(); ?>

<div class="content-area">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row">
                    <div class="col-12">Slide</div>
                </div>
            </div>
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
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                ?>

                                <p>pagina home</p>

                            <?php
                                endwhile;
                            else :
                                ?>

                            <p>There's nothing yet to be displayed...</p>

                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="map"></section>
    </main>
</div>

<?php get_footer(); ?>