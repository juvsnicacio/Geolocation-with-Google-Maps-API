<?php

$lat = $_POST['latitude']; 
$long = $_POST['longitude'];
echo ("<br>latitude: ".$lat);
echo ("<br>longitude: ".$long);

if($address=file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$long&sensor=true")){
    $json_data=json_decode($address);
    $full_address=$json_data->results[0]->formatted_address;
    echo "<br>".$full_address;
}
else{
    echo "erro";
}
?>