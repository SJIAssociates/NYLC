<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePress extends Controller
{
  public function PressList(){

    // Get Repeater
    $pressRepeater = get_field('press_stories');    
    
    
    
    //Return an array
   return array_map(function ($item) { 
        return [
            'title'       => $item['title'],          
            'description' => $item['description'],
            'link'        => $item['link'],
            'date'        => $item['date'],
        ];
    }, $pressRepeater ?? [] );

  }
}
