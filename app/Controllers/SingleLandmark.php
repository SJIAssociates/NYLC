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

}
