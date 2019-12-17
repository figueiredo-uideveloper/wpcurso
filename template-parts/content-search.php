<article <?php post_class()?>>
    <a href="<?php the_permalink(); ?>">
        <h2 class="title-post"><strong><?php the_title(); ?></strong></h2>
    </a>
    <?php if(has_category()): ?>
        <p>Categories: <?php the_category(' '); ?></p>
    <?php endif; ?>
    <?php the_excerpt(); ?>
</article>