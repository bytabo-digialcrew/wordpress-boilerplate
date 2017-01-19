<?php


add_filter('show_admin_bar', '__return_false');

function get_the_slug($id='') {
    if(empty($id)) {
        $id = get_the_ID();
    }
    $page = get_post($id);
    if(is_object($page)) {
        return $page->post_name;
    }
}

function the_slug($id='') {
    echo get_the_slug($id);
}

function get_page_by_slug($slug='') {
    $page = get_posts(
        array(
            'name'      => $slug,
            'post_type' => 'page'
        )
    );
    return array_pop($page);
}