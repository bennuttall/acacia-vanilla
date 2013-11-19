<?php global $latest_ids;

$latest_ids = array();

$latest = new WP_Query('posts_per_page=2');

while ($latest->have_posts()): $latest->the_post(); ?>

<article class="post">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <a href="<?php the_permalink(); ?>" class="mini-thumb"><?php the_post_thumbnail('home-thumb'); ?></a>
    <?php the_excerpt(); ?>
</article>

<?php $latest_ids[] = get_the_ID();

endwhile;
