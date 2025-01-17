<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex">
                        <div class="social-media-icons">
                            <a class="link-social" href="">
                                <img class="icon-item" src="<?php echo get_template_directory_uri() . '/images/facebook.svg' ?>" alt="">
                            </a>
                            <a class="link-social" href="">
                                <img class="icon-item" src="<?php echo get_template_directory_uri() . '/images/instagram.svg' ?>" alt="">
                            </a>
                            <a class="link-social" href="">
                                <img class="icon-item" src="<?php echo get_template_directory_uri() . '/images/youtube.svg' ?>" alt="">
                            </a>
                        </div>
                    </div>                
                    <div class="col-sm-6 text-right">
                        <div class="search">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3 text-center">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="col-sm-9 menu-wrapper">
                        <nav>
                            <?php
                                wp_nav_menu(
                                    array('theme_location' => 'main_menu')
                                );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </header>