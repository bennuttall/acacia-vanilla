<?php if (!is_page()): ?>
<div class="date"><?php bn_date_crumbs(get_the_date()); ?></div>
<?php endif; ?>
<?php if (!is_front_page()): ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php endif;
