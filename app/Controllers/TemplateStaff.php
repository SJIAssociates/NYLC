<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateStaff extends Controller
{
  public function boardList(){


    return (object) array(
      'leaders'   =>  get_field('board_leaders'),
      'col1'      =>  get_field('board_members_column_1'),
      'col2'      =>  get_field('board_members_column_2'),
      'col3'      =>  get_field('board_members_column_3')
    );
  }

  public function advisorList(){


    return (object) array(
      'col1'      =>  get_field('advisor_members_column_1'),
      'col2'      =>  get_field('advisor_members_column_2'),
      'col3'      =>  get_field('advisor_members_column_3'),
      'col4'      =>  get_field('advisor_members_column_4')
    );
  }
}
