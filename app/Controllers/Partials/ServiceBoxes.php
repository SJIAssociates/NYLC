<?php
namespace App\Controllers\Partials;

trait ServiceBoxes
{
  public function ServiceBoxes(){

    $serviceRepeater = get_field( 'services', 'options' );  // false equals to current post

    //Maybe do something with a limit here
    return array_map(function ($item) {
        return [
            'description' => $item['description'],
            'link'        => get_the_permalink($item['link']),
            'title'       => get_the_title($item['link']),
            'classes'     => $item['class_names'],
            'buttonText'  => $item['call_to_action']
        ];
    }, $serviceRepeater ?? [] );
  }
}
