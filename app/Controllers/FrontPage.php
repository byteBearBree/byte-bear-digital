<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function blogPosts()
    {
        $blog_posts = collect(get_posts([
        'post_type' => 'post',
        'posts_per_page' => 10,
         ]))->map(function ($post) {
        
            return (object) [
            'categories' => get_the_category($post),
            'title'      => get_the_title($post),
            'url'        => get_permalink($post),
            'date'       => get_the_date('M d, Y', $post),
            'excerpt'    => substr_replace(get_the_excerpt($post), "", -16),
            'image'      => get_the_post_thumbnail_url($post)
            ];
         });
    }
}
