<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso WordPress</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="social-media-icons"></div>
            <div class="search"></div>
        </section>
        <section class="menu-area">
            <section class="logo"></section>
            <nav class="menu"><?php wp_nav_menu(array('theme_location' => 'my_main_menu')); ?></nav>
        </section>
    </header>