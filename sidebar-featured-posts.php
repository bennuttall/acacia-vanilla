<h3><a href="/category/featured/">Featured Posts</a></h3>
<ul>
<?php

$featured_args = array(
    'category_name' => 'featured',
    'orderby' => 'rand',
    'posts_per_page' => '5',
    'post__not_in' => array(get_the_ID()),
);

$featured = new WP_Query($featured_args);

while ($featured->have_posts()): $featured->the_post();

?>

    <li>- <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php endwhile; ?>
</ul>
<a href="/archive/">See the archive</a>
