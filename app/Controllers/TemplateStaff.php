<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateStaff extends Controller
{
  public function StaffList(){

    // Get Repeater
    $pressRepeater = get_field('staff_repeater');

   return array_map(function ($item) {

        return [
            'name'         => $item['name']  ?? null,
            'description'  => $item['description']  ?? null,
            'image'        => $item['image']['url']  ?? \App\asset_path('images/profile-placeholder.jpg'),
            'email'        => $item['email'] ?? null,
            'title'        => $item['title']  ?? null,
        ];
    }, $pressRepeater ?? [] );
  }
}
