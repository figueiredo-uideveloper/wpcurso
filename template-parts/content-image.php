<article <?php post_class()?>>
    <a href="<?php the_permalink(); ?>">
        <h2 class="title-post"><strong><?php the_title(); ?></strong></h2>
    </a>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    <?php the_excerpt(); ?>
</article>