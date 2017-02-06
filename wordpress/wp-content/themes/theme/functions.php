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
function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr($haystack, -$length) === $needle);
}


//e.g. call can be put_into_responsive_grid(array("col1", "col2"), 4, 'sm'); so a row with <div class="col-sm-3">col1</div> etc. is created
function put_into_responsive_grid($array, $cols = 3, $breakpoint = 'md')
{
    $return_string = '';
    if (!empty($array)) {
        $add_row = true;
        $first = true;
        $counter = 0;
        $cols_width = 12 / $cols;
        foreach ($array as $a) :
            if ($add_row) {
                if ($first) {
                    $first = false;
                } else {
                    $return_string .= "</div>";
                }
                $return_string .= "<div class=\"row\">";
            }
            $return_string .= "<div class=\"col-" . $breakpoint . "-" . $cols_width . "\">";
            $return_string .= $a;
            $return_string .= "</div>";

            if (++$counter % $cols == 0)
                $add_row = true;
            else
                $add_row = false;
        endforeach;
        $return_string .= "</div>";
    }
    return $return_string;
}