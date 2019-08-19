<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateStaff extends Controller
{
  public function StaffList(){

    // Get Repeater
    $pressRepeater = get_field('staff_repeater');

    //$i = count($pressRepeater);

    //Return an array
   return array_map(function ($item) {

        // if($item['image'] !== false):
        //   $pic = $item['image']['url'];
        // else:
        //   $pic = App\asset_path('images/logo.jpg');
        // endif;

        return [
            'name'         => $item['name'],
            'description'  => $item['description'],
            'image'        => $item['image'],
            'email'        => $item['email'] ?? null,
            'title'        => $item['title'],
        ];
    }, $pressRepeater ?? [] );


  }
}
