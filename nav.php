<nav id="nav">
    <div class="nav-holder">
        <header id="header">
            <h1><a href="/"><?php bloginfo('title'); ?></a></h1>
        </header>
        <?php get_search_form(); ?>
        <?php wp_nav_menu(array('theme_location' => 'nav_bar', 'container' => false)); ?>
        <div class="break">&nbsp;</div>
    </div>
</nav>
