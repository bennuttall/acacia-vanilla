<?php

get_header();

$args = array(
    'orderby' => 'date',
);

$posts = new WP_Query($args);

$archive = array();

while ($posts->have_posts()) {
    $posts->the_post();

    $date = get_the_date('Y-m-d');
    $year = substr($date, 0, 4);
    $month = substr($date, 5, 2);

    $archive[$year][$month][] = array('title' => get_the_title(), 'link' => get_permalink(get_the_ID()));

}

?>

<h2>Archive</h2>

<ul id="archive">

<?php

foreach ($archive as $year => $months) {
    echo "<li><h3><a href='/{$year}/'>{$year}</a></h3><ul>";
    foreach ($months as $month => $posts) {
        echo "<li><h4><a href='/{$year}/{$month}/'>" . monthname($month) . "</h4><ul>";
        foreach ($posts as $post) {
            echo "<li><a href='{$post['link']}'>{$post['title']}</a></li>";
        }
        echo "</ul></li>";
    }
    echo "</ul></li>";
}

?>

</ul>

<?php get_footer();
