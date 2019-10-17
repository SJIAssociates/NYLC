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
            'thumbnail' => get_the_post_thumbnail_url($post->ID) ?: \App\asset_path('imagesplaceholder-nylandmarks.png'),
        ];
    }, $news_loop);
  }

  public function advocacyLoopContinued()
  {

    $news_loop_continue = get_posts([
      'post_type' => 'post',
      'category_name' => 'advocacy',
      'posts_per_page' => 4,
      'offset'         => 3,
    ]);

   return array_map(function ($post) {

        return [
            'content'   => get_the_excerpt( $post->ID ),
            'time'      => get_the_time('F d, Y', $post->ID),
            'permalink' => get_permalink( $post->ID ),
            'title'     => get_the_title( $post->ID ),
            'thumbnail' => get_the_post_thumbnail_url($post->ID) ?: \App\asset_path('images/placeholder-nylandmarks.png'),
        ];
    }, $news_loop_continue);


  }

}
