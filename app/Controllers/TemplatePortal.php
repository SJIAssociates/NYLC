<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortal extends Controller
{

  protected $acf = true;

  public function portalCalendar()
  {

    $events = get_field('events_repeater');

    if(is_array($events) ):
      return array_map(function ($item) {

        $today = time();
        $past= false;
        $shortDate = Null;
        $comboFormat = Null;


        //Give us the YearMonthDate
        if($item['date']):
          $eventDate = strtotime($item['date']);
          $calendarDate = date_i18n( "Ymd", $eventDate );

          $shortDate = date('j M', $eventDate) . " <span class='font-bold text-4xl'>". date('Y', $eventDate) ."</span>";

          //Give us the Time in His
          $eventTime = "T" . $item['time'];

          //Combine
          $comboFormat = $calendarDate . $eventTime;

          if($today >= $eventDate):
            $past = TRUE;
          else:
            $past= false;
          endif;

        else:
          $eventDate = false;
        endif;

        return [
            'title'         => $item['name'],
            'date'          => $shortDate ?? Null,
            'time'          => date('h:i a', strtotime($item['time'])),
            'calendarButton'=> $comboFormat,
            'buttons'       => $item['buttons'],
            'description'   => $item['description'],
            'past'          => $past,
        ];
    }, $events ?? [] );
    else:
      return Null;
    endif;

  }

}
