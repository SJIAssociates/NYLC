<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateWhat extends Controller
{
  public function SuccessStoriesLoop(){

    $latest_success = get_posts([
        'post_type'       => 'success_stories',
        'posts_per_page'  => 3,
      ]);


      return array_map(function ($post) {
         return [
           'title'       => get_the_title( $post->ID ),
           'permalink'   => get_permalink( $post->ID ),
           'image'       => get_the_post_thumbnail($post->ID, 'large'),
         ];
     }, $latest_success);
  }

    use Partials\ServiceBoxes;
}
