<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateEvents extends Controller
{
  public function nearestEvent(){

    global $post;

    $Closest_Events = tribe_get_events( [
       'posts_per_page' => 1,
       'start_date'     => 'now',
    ] );

    return array_map(function ($post) {
       return [
         'title'      =>  get_the_title( $post->ID ),
         'date'       =>  tribe_get_start_date($post->ID),
         'image'      =>  get_the_post_thumbnail($post->ID),
         'excerpt'    =>  get_the_excerpt( $post->ID ),
         'link'       =>  get_the_permalink( $post->ID ),
       ];
    }, $Closest_Events);

  }

  public function annualEvents(){

    $annual_awards = get_field('annual_awards');

    return array_map(function ($item) {

        return [
            'title'         => $item->name,
            'description'   => $item->description,
            'permalink'     => '/calendar/category/' . $item->slug,
            'count'         => $item->count,
        ];
    }, $annual_awards ?? [] );
  }

  public function eventTypeList()
  {

    $annual_awards = get_field('featured_event_categories');

    return array_map(function ($item) {

        return [
            'title'         => $item->name,
            'description'   => $item->description,
            'permalink'     => '/calendar/category/' . $item->slug,
            'count'         => $item->count,
            'thumbnail'     => get_field('category_image','term_' . $item->term_id),
            'dump'          => $item
        ];
    }, $annual_awards ?? [] );
  }
}
