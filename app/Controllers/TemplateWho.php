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

  public function SupportersBlock(){

      return (object) array(
         'description'  =>   get_field('supporters_description'),
         'link'   =>   get_field('supporters_page_link'),
         'image'   =>   get_field('supporters_image'),
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

  use Partials\PressFunnel;

}
