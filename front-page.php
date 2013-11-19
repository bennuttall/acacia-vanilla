<?php get_header(); ?>

<section id="home-bio">
    <aside class="bio-picture">
        <img src="<?php bloginfo('template_url'); ?>/images/ben-nuttall.png" width="200" />
        <div id="icons">
            <a href="https://twitter.com/ben_nuttall" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter-bird-white-on-blue-32x32.png" alt="Twitter" /></a>
            <a href="https://www.github.com/bennuttall" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/GitHub-Mark-32px.png" alt="Github" /></a>
            <a href="https://www.gittip.com/ben_nuttall" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/gittip-32x32.png" alt="Gittip" /></a>
            <a href="https://plus.google.com/+BenNuttall" rel="publisher" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/gplus-32.png" alt="Google+" /></a>
        </div>
    </aside>

    <article class="bio">
    <?php
        the_post();
        the_content();
    ?>
    </article>
</section>

<section id="home-blog">
    <aside class="posts">
        <h2><a href="/blog/">Latest posts</a></h2>
        <?php get_template_part('home', 'latest'); ?>
        <h2><a href="/category/featured/">Featured posts</a></h2>
        <?php get_template_part('home', 'featured'); ?>
    </aside>
</section>

<?php get_footer();
