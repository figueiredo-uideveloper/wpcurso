<article <?php post_class() ?>>
    <a href="<?php the_permalink(); ?>">
        <h2 class="title-post"><?php the_title(); ?></h2>
    </a>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    <p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <?php the_excerpt(); ?>
</article>