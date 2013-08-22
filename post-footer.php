<footer>
    <div class="author">by <a href="https://plus.google.com/109819740851612778825?rel=author" target="_blank">Ben Nuttall</a></div>
    <?php if (!is_page()): ?>
    <div class="tags"><?php show_tag_list(get_the_ID(), ', ', 'Tags: '); ?></div>
    <?php endif; ?>
</footer>
