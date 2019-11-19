<article <?php post_class()?>>
    <h2 class="title-post"><strong><?php the_title(); ?></strong></h2>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
</article>