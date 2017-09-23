<?php

/**
 * Point converter library for converting point Lat/long to text
 * @author Masnad
 */
class Point_converter {
    private $CI;
    public function __construct()
    {
        // create instance variable
        $this->CI = &get_instance();

    }
    public function convert_point_to_text($results){
  		$empty_array = array();
  		$full_array = array();
  		foreach($results as $garage){
  			$empty_array['name'] = $garage->name;
  			$empty_array['garage_owner'] = $garage->garage_owner;
  			$empty_array['hourly_price'] = $garage->hourly_price;
  			$empty_array['currency'] = $garage->currency;
  			$empty_array['contact_email'] = $garage->contact_email;
  			$empty_array['garage_id'] = $garage->garage_id;
  			$empty_array['owner_id'] = $garage->owner_id;
  			$cordinates = unpack('x/x/x/x/corder/Ltype/dlat/dlon', $garage->point);
  			$lat = $cordinates['lat'];
  			$long = $cordinates['lon'];
  			$empty_array['point'] = strval($lat).' '.strval($long);
  			$empty_array['country'] = $garage->country;
  			$full_array[] = $empty_array;
  		 }
  		 return $full_array;
  	}
}
