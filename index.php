<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('post');
    }
    get_template_part('prevnext');
}
else {
    get_template_part('part', '404');
}

get_footer();
