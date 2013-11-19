<?php if (get_post_type() == 'post' && !is_single()): ?>
<div class="excerpt">
    <?php the_excerpt(); ?>
</div>
<aside class="post-thumb">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('thumbnail'); ?>
    </a>
</aside>
<?php else:
        the_content();
        get_template_part('post-footer');
endif;
