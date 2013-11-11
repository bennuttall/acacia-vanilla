<?php if (is_single()): ?>
<footer>
    <div class="author">by <a href="<?php the_author_meta('user_url'); ?>" target="_blank" rel="author"><?php the_author(); ?></a></div>
    <div class="tags"><?php show_tag_list(get_the_ID(), ', ', 'Tags: '); ?></div>
    <a href="https://www.gittip.com/ben_nuttall" target="_blank" class="gittip-support">Support me on gittip</a>
    <a href="https://www.gittip.com/ben_nuttall" target="_blank" class="gittip-icon">&gt;3</a>
</footer>
<?php endif; ?>
