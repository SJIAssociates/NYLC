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
              'index'               => $i,
              'section_description'   => $block['section_description'],
              'section_title'         => $block['section_title'],
              'right_image'           => $block['right_image'],
              'description'           => $block['description'],
              'left_link'             => $block['left_link'] ?? null,
              'left_link_text'        => $block['left_link_text'] ?? null,
              'left_archive_link'     => $block['left_archive_link'] ?? null,
              'left_archive_link_text'     => $block['left_archive_link_text'] ?? null,
              'background'              => $block['section_background']
            ];

            array_push($data, $this_block);

          } elseif($block['acf_fc_layout'] == 'contact') {

            $this_block = (object) [
              'index'           => $i,
              'block_type'      => $block['acf_fc_layout'],
              'contact_form'    => $block['contact_form'],
            ];

            array_push($data, $this_block);

          } elseif($block['acf_fc_layout'] == 'news') {

            $this_block = (object) [
              'index'           => $i,
              'block_type'      => $block['acf_fc_layout'],
              'category'    => $block['category'],
            ];

            array_push($data, $this_block);

          } elseif($block['acf_fc_layout'] == 'featured_site') {


            $featured_blocks = array_map(function ($item) {
                return [
                    'title'       => $item->post_title,
                    'excerpt'     => get_the_excerpt( $item->ID),
                    'permalink'   => get_the_permalink($item->ID),
                    'thumbnail'   => get_the_post_thumbnail_url( $item->ID) ?: \App\asset_path('images/placeholder-nylandmarks.png')
                ];
            }, $block['sacred_sites']);


            $this_block = (object) [
              'index'        => $i,
              'block_type'   => $block['acf_fc_layout'],
              'sites'        => $featured_blocks,
            ];

            array_push($data, $this_block);
          } elseif($block['acf_fc_layout'] == 'intro') {


            $this_block = (object) [
              'index'        => $i,
              'block_type'   => $block['acf_fc_layout'],
              'intro'        => $block['intro_text'],
              'background'   => $block['background']
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
