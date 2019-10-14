<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageJoin extends Controller
{
  public function membershipOptions()
  {
    $membership = get_field('membership_options');

    //Maybe do something with a limit here
    return array_map(function ($item) {
        return [
            'title'       => $item['membership_title'],
            'description' => $item['description'],
            'page'        => $item['membership_form_page'],
            'image'       => $item['membership_image'],
        ];
    }, $membership ?? [] );
  }


}
