<?php
namespace App\Controllers\Partials;

trait location
{
    public static function locationAddress()
    {

      $location = get_field('location');
      // Address, City, State zip
      $Fulladdress = $location['address'];

      $numberAddress = explode(",",$Fulladdress)[0];
      $city = explode(",",$Fulladdress)[1];
      $state = explode(",",$Fulladdress)[2];

      return  $numberAddress . ",<br />" . $city . ", " . $state;
    }

    public static function lat()
    {
      $location = get_field('location');

      return $location['lat'];
      // 'lng' => $location['lng']
    }
    public static function lng()
    {
      $location = get_field('location');

      return $location['lng'];
    }
}
