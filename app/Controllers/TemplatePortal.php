<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortal extends Controller
{

  protected $acf = true;

  public function portalCalendar()
  {

    $events = get_field('events_repeater');

    return array_map(function ($item) {

        $today = time();
        $eventDate = strtotime($item['date']);

        if($today >= $eventDate):
          $past = TRUE;
        else:
          $past= false;
        endif;

        return [
            'title'       => $item['name'],
            'date'        => $item['date'],
            'file'        => $item['file'],
            'description' => $item['description'],
            'past'        => $past,
        ];
    }, $events ?? [] );

  }

}
