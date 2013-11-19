<?php global $latest_ids;

$args = array(
    'category_name' => 'featured',
    'orderby' => 'rand',
    'posts_per_page' => 2,
    'post__not_in' => $latest_ids,
);

$featured = new WP_Query($args);

while ($featured->have_posts()): $featured->the_post(); ?>

<article class="post">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <a href="<?php the_permalink(); ?>" class="mini-thumb"><?php the_post_thumbnail('home-thumb'); ?></a>
    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>
</article>

<?php endwhile;
