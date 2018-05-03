<!DOCTYPE html>
<html>
<body onload="getLocation()">

<!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyAORA76NwTOp4dszWhsQokGG3nPnbfdHMk"></script> -->


<!-- <div id="geoarea"></div> -->


<form action="getLocation.php" method="POST" id="signfrm"  enctype="multipart/form-data">
    <input type="hidden" name="latitude" value="" id="lt" />
    <input type="hidden" name="longitude" value="" id="lg" />
    <button type="submit" class="btn btn-primary" id="sign-frm-input-btn">Mandar Coordenadas</button>
</form>

<script>

    // var area = document.getElementById("geoarea");

    function getLocation() {
        navigator.geolocation.getCurrentPosition(showPosition);
    }

    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;

        document.getElementById('lt').value = lat;
        document.getElementById('lg').value = lon;
        // document.getElementById("geoarea").innerHTML = "Latitude: " + position.coords.latitude + "<br /> Longitude: " + position.coords.longitude;
        }

</script>

</body>
</html>
