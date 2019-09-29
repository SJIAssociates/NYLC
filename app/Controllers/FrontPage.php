<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function newsLoop(){

    $news_loop = get_posts([
      'post_type' => 'post',
      'posts_per_page' => 3
    ]);

   return array_map(function ($post) {
        return [
            'content'   => get_the_excerpt( $post->ID ),
            'time'      => get_the_time('F d, Y', $post->ID),
            'permalink' => get_permalink( $post->ID),
            'title'     => get_the_title( $post->ID ),
            'thumbnail' => get_the_post_thumbnail_url($post->ID,'news_thumb') ?: \App\asset_path('images/profile-placeholder.jpg'),
        ];
    }, $news_loop);
  }

  public function featuredSuccess() {
  $featured_story = get_field('featured_success_story',false, false);

      return (object) array(
        'title'   =>   get_the_title($featured_story),
        'link'    =>   get_the_permalink( $featured_story),
        'image'   =>   get_the_post_thumbnail_url( $featured_story),
      );
}
  public function landmark(){

    $newest_landmark = get_posts([
      'post_type'       => 'landmark',
      'posts_per_page'  => 1
    ]);

    return array_map( function($post){
      return [
          'excerpt'   => get_the_excerpt( $post->ID ),
          'permalink' => get_permalink( $post->ID ),
          'title'     => get_the_title( $post->ID ),
          'image' => get_the_post_thumbnail_url($post->ID),
      ];
    }, $newest_landmark);
  }
  use Partials\ServiceBoxes;

}
