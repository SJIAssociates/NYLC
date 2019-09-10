<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateAdvocacy extends Controller
{
  public function advocacyLoop(){

    $news_loop = get_posts([
      'post_type' => 'post',
      'category_name' => 'advocacy',
      'posts_per_page' => 3
    ]);

   return array_map(function ($post) {
        return [
            'content'   => get_the_excerpt( $post->ID ),
            'time'      => get_the_time('F d, Y', $post->ID),
            'permalink' => get_permalink( $post->ID ),
            'title'     => get_the_title( $post->ID ),
            'thumbnail' => get_the_post_thumbnail($post->ID),
        ];
    }, $news_loop);
  }


}