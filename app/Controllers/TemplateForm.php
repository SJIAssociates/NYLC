<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateForm extends Controller
{
  public function introText() {

      $intro = get_field('intro_text');

      return $intro;
  }
  public function formCode()
  {

    $code = get_field('form_shortcode');

    return do_shortcode($code);
  }

}
