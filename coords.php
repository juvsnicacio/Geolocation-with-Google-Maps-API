<!DOCTYPE html>
<html>
<body onLoad="getLocation()">

<script src="https://maps.google.com/maps/api/js?key=AIzaSyAORA76NwTOp4dszWhsQokGG3nPnbfdHMk"></script>


<script>
    function getLocation() {
    //navigator.geolocation.getCurrentPosition(showPosition, showError);
    x = navigator.geolocation.getCurrentPosition(showPosition);
    //document.write(x);
    }

    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        
        document.write(lat);
        document.write("  |  ");
        document.write(lon);
        }

</script>

</body>
</html>
