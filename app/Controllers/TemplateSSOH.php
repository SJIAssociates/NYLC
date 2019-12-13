<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSSOH extends Controller
{


  public function PhotoContest(){

      return (object) array(
         'description'  =>   get_field('contest_description'),
         'link'         =>   get_field('contest_link'),
         'subtitle'     =>   get_field('contest_subtitle'),
         'image'        =>   get_field('contest_cover_art'),
      );
  }

  public function CommonBond(){

      return (object) array(
         'description'  =>   get_field('common_description'),
         'link'         =>   get_field('common_link'),
         'subtitle'     =>   get_field('common_subtitle'),
         'image'        =>   get_field('common_cover_art'),
      );
  }

}
