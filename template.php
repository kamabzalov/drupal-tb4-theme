<?php
function simple_blog_links__system_main_menu($variables) {
    $html = '<ul class="navbar-nav ml-auto">';
    foreach ($variables['links'] as $link) {
        $link['attributes']['class'][] = 'nav-item';
        $link['class'] = 'nav-link';
        $html .= "<li class='nav-item'>".l($link['title'], $link['href'], $link)."</li>";
    }
    $html .= "</ul>";
    return $html;
}

