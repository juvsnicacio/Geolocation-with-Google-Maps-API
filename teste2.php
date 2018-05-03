<!DOCTYPE html>
<html>
<body onLoad="getLocation()">


<div id="mapholder"></div>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyAORA76NwTOp4dszWhsQokGG3nPnbfdHMk"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<?php
$teste = "<script>document.write(lat);</script>";
?>


<!-- <form action="testeAjax.php" method="POST" id="signfrm"  enctype="multipart/form-data">
  <input type="text" class="form-control" name="nome" ><br>
  <button type="submit" class="btn btn-primary" id="sign-frm-input-btn">Mandar Localização</button>
</form>
 -->




<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}





function showPosition(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
   
    //document.write(testeLat);
    //document.write(" / ");
    //document.write(lon);
    

    



    var latlon = new google.maps.LatLng(lat, lon)
    var mapholder = document.getElementById('mapholder')
    mapholder.style.height = '400px';
    mapholder.style.width = '700px';

    var myOptions = {
    center:latlon,zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP,
    mapTypeControl:false,
    navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
    var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>



<?php
    $latlat = "<script>document.write(lat)</script>";
    $lonlon = "<script>document.write(lon)</script>";
    echo $latlat;
    ?>

</body>
</html>
