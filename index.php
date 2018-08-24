<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K")
  {
    return ($miles * 1.609344);
  }
  else if ($unit == "N")
  {
    return ($miles * 0.8684);
  }
  else
  {
    return $miles;
  }
}

echo number_format(distance(23.0225, 72.5714, 22.3072, 73.1812, "K"), 3) . " KM<br>";
echo "<br><br>Dariyapur to Vasna <br>" ;

echo number_format(distance(23.0341, 72.5937, 23.0039, 72.5461, "K"), 3) . " KM<br>";

?>