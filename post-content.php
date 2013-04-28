<?php if (is_home()): ?>
<div class="extract-holder">
    <p class="extract">
    <?php custom_excerpt(); ?>
    </p>
    <?php get_template_part('post-footer'); ?>
</div>
<aside class="post-thumb">
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('home_thumb'); ?>
    </a>
</aside>
<?php
    else:
        the_content();
        get_template_part('post-footer');
    endif;
