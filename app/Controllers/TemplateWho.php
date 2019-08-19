<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateWho extends Controller
{
  public function StaffBlock(){
  
      return (object) array(
         'description'  =>   get_field('board_staff_description'),
         'link'   =>   get_field('staff_page_link'),      
         'image'   =>   get_field('staff_image'), 
      );
  }

  public function AnnualReport(){
  
      return (object) array(
         'description'  =>   get_field('annual_report_description'),
         'link'   =>   get_field('annual_report_link'),
         'archive_link'   =>   get_field('annual_report_archive_link'),         
         'image'   =>   get_field('annual_report_image'), 
      );
  }
  public function PressFunnel(){
    
    //Get Press Page ID
    $press = get_page_by_title( 'Press' ); //as an e.g.

    // Get Repeater
    $pressRepeater = get_field('press_stories',$press->ID);    

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
