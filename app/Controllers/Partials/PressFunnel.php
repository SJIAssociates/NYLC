<?php
namespace App\Controllers\Partials;

trait PressFunnel
{
    public function PressFunnel() {
      // Get The Page ID;
      $pressId = get_the_ID();

      //If We Are not on the Press Page, lets go Find it and get that ID;
      if (get_the_title() !== 'Press') {
          $press = get_page_by_title( 'Press' );
          $pressId = $press->ID;
      }

        $pressRepeater = get_field( 'press_stories', $pressId );  // false equals to current post

        //Maybe do something with a limit here
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
