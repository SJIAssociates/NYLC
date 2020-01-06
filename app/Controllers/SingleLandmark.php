<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleLandmark extends Controller
{
  public function tourVideo()
  {
      $output = '<div class="container"><div class="embed-container">';
      $output .= get_field('video_embed');
      $output .= '</div></div>';
      return $output;
  }

  use Partials\location;

  public function contact()
  {
    return (object) array(
       'email'  =>   get_field('location_email'),
       'phone'   =>   get_field('location_number')
    );
  }

  public function profile()
  {
    return (object) array(
       'facebook'  =>   get_field('landmark_facebook'),
       'twitter'   =>   get_field('landmark_twitter'),
       'website'   =>   get_field('website')
    );
  }

  public function prevLandmark()
  {

    $prevPost =  get_previous_post();

    //return $prevPost;
    if($prevPost != ''):
      return (object) array(
        'title'       => $prevPost->post_title,
        'permalink'   => get_the_permalink($prevPost->ID),
        'excerpt'     => get_the_excerpt($prevPost->ID),
        'thumb'       => get_the_post_thumbnail_url($prevPost->ID) ?: \App\asset_path('images/placeholder-nylandmarks.png'),
      );
    else:
      return false;
    endif;
  }

  public function nextLandmark()
  {

    $nextPost =  get_next_post();

    if($nextPost != ''):
      return (object) array(
        'title'       => $nextPost->post_title,
        'permalink'   => get_the_permalink($nextPost->ID),
        'excerpt'     => get_the_excerpt($nextPost->ID),
        'thumb'       => get_the_post_thumbnail_url($nextPost->ID) ?: \App\asset_path('images/placeholder-nylandmarks.png'),
      );
    else:
      return false;
    endif;      
  }

}
