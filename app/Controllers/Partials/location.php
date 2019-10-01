<?php
namespace App\Controllers\Partials;

trait location
{
    public function location() {

      $location = get_field('location');
      // Address, City, State zip
      $Fulladdress = $location['address'];

      $numberAddress = explode(",",$Fulladdress)[0];
      $city = explode(",",$Fulladdress)[1];
      $state = explode(",",$Fulladdress)[2];

      return (object) array(
        'properAddress' => $numberAddress . ",<br />" . $city . ", " . $state,
        'lat' => $location['lat'],
        'lng' => $location['lng']
      );

    }
}
