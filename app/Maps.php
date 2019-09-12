<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    public function initMaps()
    {
        $latitude = 2.9300; // YOUR LATITUDE VALUE
        $longitude = 101.7774; // YOUR LONGITUDE VALUE
            
        $myLatLng = array('lat'=> 'latitude', 
        'lng'=> 'longitude');

        // $map = new google.maps.Map(document.getElementbyId('map'), {
        //     'center' => $myLatLng
        // });
            
    }
}
