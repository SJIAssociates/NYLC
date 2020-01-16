<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleSite extends Controller
{
  protected $acf = true;

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

  public function activitiesList()
  {
      $activities = get_field('activities');

      return $activities;
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
        'thumb'       => get_the_post_thumbnail_url($prevPost->ID,'news_thumb') ?: \App\asset_path('images/placeholder-nylandmarks.png'),
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
        'thumb'       => get_the_post_thumbnail_url($nextPost->ID ,'news_thumb') ?: \App\asset_path('images/placeholder-nylandmarks.png'),
      );
    else:
      return false;
    endif;
  }

}
