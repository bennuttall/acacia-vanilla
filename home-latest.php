<?php global $latest_ids;

$latest_ids = array();

$latest = new WP_Query('posts_per_page=2');

while ($latest->have_posts()): $latest->the_post(); ?>

<article class="post">
    <div class="mini-thumb">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home_thumb'); ?></a>
    </div>
    <div class="excerpt">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
    </div>
</article>

<?php $latest_ids[] = get_the_ID();

endwhile;
