<?php


//Menu
require("php/wp_bootstrap_navwalker.php");
register_nav_menus(array(
    'primary' => __('Primary Menu', 'THEMENAME'),
));


add_filter('show_admin_bar', '__return_false');

function get_the_slug($id = '')
{
    if (empty($id)) {
        $id = get_the_ID();
    }
    $page = get_post($id);
    if (is_object($page)) {
        return $page->post_name;
    }
}

function the_slug($id = '')
{
    echo get_the_slug($id);
}

function get_page_by_slug($slug = '')
{
    $page = get_posts(
        array(
            'name' => $slug,
            'post_type' => 'page'
        )
    );
    return array_pop($page);
}

//check if string starts or ends with substring
function starts_with($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function ends_with($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr($haystack, -$length) === $needle);
}