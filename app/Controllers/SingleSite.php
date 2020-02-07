<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleSite extends Controller
{
  protected $acf = true;

  use Partials\location;

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

      $location = get_field('location',$prevPost->ID);
      // Address, City, State zip
      $Fulladdress = $location['address'];

      $numberAddress = explode(",",$Fulladdress)[0];
      $city = explode(",",$Fulladdress)[1];
      $state = explode(",",$Fulladdress)[2];

      $formatAddress = $numberAddress . ",<br />" . $city . ", " . $state;

      return (object) array(
        'title'       => $prevPost->post_title,
        'permalink'   => get_the_permalink($prevPost->ID),
        'excerpt'     => $formatAddress,
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

      $location = get_field('location',$nextPost->ID);
      // Address, City, State zip
      $Fulladdress = $location['address'];

      $numberAddress = explode(",",$Fulladdress)[0];
      $city = explode(",",$Fulladdress)[1];
      $state = explode(",",$Fulladdress)[2];

      $formatAddress = $numberAddress . ",<br />" . $city . ", " . $state;

      return (object) array(
        'title'       => $nextPost->post_title,
        'permalink'   => get_the_permalink($nextPost->ID),
        'excerpt'     => $formatAddress,
        'thumb'       => get_the_post_thumbnail_url($nextPost->ID ,'news_thumb') ?: \App\asset_path('images/placeholder-nylandmarks.png'),
      );
    else:
      return false;
    endif;
  }

}
