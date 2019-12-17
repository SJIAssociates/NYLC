<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSsoh extends Controller
{
  protected $acf = true;

  public function FlexGenerator()
  {
    $page_builder = get_field('ssoh_flex');
    $data = [];


    if ($page_builder) {


        $i = 0;

        foreach($page_builder as $block) {

          if($block['acf_fc_layout'] == 'logo') {

            $this_block = (object) [
              'index'               => $i,
              'block_type'          => $block['acf_fc_layout'],
              'section_description' => $block['section_description'],
              'section_title'       => $block['section_title'],
              'logos'               => $block['logo_repeater'],
            ];

            array_push($data, $this_block);

          } elseif($block['acf_fc_layout'] == 'image_block_right') {

            $this_block = (object) [
              'block_type'            => $block['acf_fc_layout'],
              'section_description'   => $block['section_description'],
              'section_title'         => $block['section_title'],
              'right_image'           => $block['right_image'],
              'description'           => $block['description'],
              'left_link'             => $block['left_link'],
              'left_link_text'        => $block['left_link_text'],
              'left_archive_link'     => $block['left_archive_link'],
              'left_archive_link_text'     => $block['left_archive_link_text']
            ];

            array_push($data, $this_block);
          }

        $i++;



      }
      $data = (object) $data;
      return $data;
    }
  }






}
