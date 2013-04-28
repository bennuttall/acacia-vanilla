<?php if (!is_page()): ?>
<div class="date"><?php echo get_the_date(); ?></div>
<?php endif; ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
