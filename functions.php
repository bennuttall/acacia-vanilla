<?php

// Menus
register_nav_menu('nav_bar', 'Nav Bar');

// Post Type support

add_theme_support('post-thumbnails', array('post'));

add_post_type_support('post', array('excerpt', 'thumbnail'));

// Image sizes
add_image_size('home_thumb', 75, 75);

// Custom functions

function timestamped_stylesheet($stylesheet='style.css') {
    $stylesheet_url = get_bloginfo('template_url') . '/' . $stylesheet;
    $stylesheet_path = get_stylesheet_directory() . '/' . $stylesheet;
    echo $stylesheet_url . "?" . filemtime($stylesheet_path);
}

function show_tag_list ($id, $separator, $before) {
    $tags = wp_get_post_tags($id);

    if (!empty($tags)) {

        $tags_html = array();
        foreach ($tags as $tag) {
            $tags_html[] = "<a href='/tag/{$tag->slug}/'>{$tag->name}</a>";
        }

        echo $before . join($separator, $tags_html);
    }
}

function monthname($month_num) {
	$months = array(
		1 => 'January',
		2 => 'February',
		3 => 'March',
		4 => 'April',
		5 => 'May',
		6 => 'June',
		7 => 'July',
		8 => 'August',
		9 => 'September',
		10 => 'October',
		11 => 'November',
		12 => 'December',
	);

	$month = intval($month_num);

	return $months[$month];
}

// Site specific functions

function bn_meta_description() {
    if (is_single()) {
        echo str_replace('"', '', get_the_excerpt());
    }
    else {
        echo str_replace('&amp;', '&', strip_tags(get_the_author_meta('description', 1)));
    }
}

function bn_custom_excerpt($excerpt) {
    return "{$excerpt}... <a href='" . get_permalink() . "'>Continue reading</a>";
}
add_filter('get_the_excerpt', 'bn_custom_excerpt');

function bn_date_crumbs($date) {
    $date = new DateTime($date);

    $year = $date->format('Y');
    $month = $date->format('m');
    $monthname = $date->format('F');
    $day = $date->format('j');

    echo "<a href='/{$year}/'>{$year}</a> &gt; <a href='/{$year}/{$month}/'>{$monthname}</a> &gt; {$day}";
}
