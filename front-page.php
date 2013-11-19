<?php get_header(); ?>

<section id="home-bio">
    <aside style="float:left;width:200px;">
        <img src="https://lh4.googleusercontent.com/-6jAMJy5RuYw/UU5TgtROXYI/AAAAAAAABfc/ACQFNFfJIqk/w500-h502-no/vlcsnap-2013-03-24-01h05m08s88.png" width="200" style="border-radius:100px;" />
        <div id="icons" style="text-align:center;">
            <a href="https://twitter.com/ben_nuttall" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter-bird-white-on-blue-32x32.png" alt="Twitter" /></a>
            <a href="https://www.github.com/bennuttall" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/GitHub-Mark-32px.png" alt="Github" /></a>
            <a href="https://www.gittip.com/ben_nuttall" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/gittip-32x32.png" alt="Gittip" /></a>
            <a href="https://plus.google.com/+BenNuttall" rel="publisher" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/gplus-32.png" alt="Google+" /></a>
        </div>
    </aside>

    <article style="float:left;width:700px;margin-left:60px;">
    <?php
        the_post();
        the_content();
    ?>
    </article>
</section>

<section id="home-blog">

    <aside class="home-posts">
        <h2><a href="/blog/">Latest posts</a></h2>
        <?php get_template_part('home', 'latest'); ?>
        <h2><a href="/category/featured/">Featured posts</a></h2>
        <?php get_template_part('home', 'featured'); ?>
    </aside>
</section>

<?php get_footer();
