    </section>
<?php
if (!is_front_page()) {
    get_template_part('sidebar');
}
?>
</div>
<footer id="footer">
<?php get_template_part('footer', 'content'); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
