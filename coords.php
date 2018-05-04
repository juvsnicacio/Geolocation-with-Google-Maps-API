<!DOCTYPE html>
<html>
<body onload="getLocation()">

<form action="getLocation.php" method="POST" id="signfrm"  enctype="multipart/form-data">
    <input type="hidden" name="latitude" value="" id="lt" />
    <input type="hidden" name="longitude" value="" id="lg" />
    <button type="submit" class="btn btn-primary" id="sign-frm-input-btn">Mandar Coordenadas</button>
</form>

<script>
    function getLocation() {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;

        document.getElementById('lt').value = lat;
        document.getElementById('lg').value = lon;
    }

</script>

</body>
</html>