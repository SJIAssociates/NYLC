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

        //Give us the YearMonthDate
        $eventDate = strtotime($item['date']);
        $calendarDate = date_i18n( "Ymd", $eventDate );

        //Give us the Time in His
        $eventTime = "T" . $item['time'];

        //Combine
        $comboFormat = $calendarDate . $eventTime;



        if($today >= $eventDate):
          $past = TRUE;
        else:
          $past= false;
        endif;

        return [
            'title'         => $item['name'],
            'date'          => $item['date'],
            'time'          => $item['time'],
            'calendarButton'=> $comboFormat,
            'file'          => $item['file'],
            'description'   => $item['description'],
        ];
    }, $events ?? [] );

  }

}
