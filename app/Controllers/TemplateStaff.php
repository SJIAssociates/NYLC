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
     
     
        return [
            'name'         => $item['name'],          
            'description'  => $item['description'],
            'staff-pic'    => $item['image'],
            'title'        => $item['title'],
        ];
    }, $pressRepeater ?? [] );
    

  }
}
