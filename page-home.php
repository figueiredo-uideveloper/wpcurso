<?php get_header(); ?>

<div class="content-area">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row">Slide</div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="row">
                    Serviços
                </div>
            </div>
        </section>
        <section class="meddle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-4">Sidebar</aside>
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