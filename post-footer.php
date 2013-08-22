<?php if (is_single()): ?>
<footer>
    <div class="author">by <a href="<?php the_author_meta('user_url'); ?>" target="_blank" rel="author"><?php the_author(); ?></a></div>
    <div class="tags"><?php show_tag_list(get_the_ID(), ', ', 'Tags: '); ?></div>
</footer>
<?php endif; ?>
