<?php defined('ABSPATH') or die();
    $id = $atts['id'];
    $lat = $atts['lat'];
    $log = $atts['log'];
?>
 <!-- <div id ='map' style="height:100%">
                <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer>
                    let map;

                    function initMap() {
                    map = new google.maps.Map(document.getElementById("map"), {
                        center: { lat: -34.397, lng: 150.644 },
                        zoom: 8,
                    });
                    }

                    window.initMap = initMap;
                </script>
                </div> -->
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-core-legacy.js"
type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
type="text/javascript" charset="utf-8"></script>
<div style="width: 640px; height: 480px" id="mapContainer">
<br/>
    <div class='button_container'>
        <button onClick = "myfunction()">
            Random Map
        </button>
    </div>
</div>
<script>
    var lat = "<?php echo" $lat "?>";
    var log = "<?php echo" $log "?>";
    // console.log(lat,log);
      // Initialize the platform object
      var platform = new H.service.Platform({
        'apikey': '0ddChwxReJv6n1utD2-wxnX19jDfzwCJH5GvFtEdMWI'
      });

      // Obtain the default map types from the platform object
      var maptypes = platform.createDefaultLayers();

      // Instantiate (and display) the map
      var map = new H.Map(
        document.getElementById('mapContainer'),
        maptypes.vector.normal.map,
        {
          zoom: 10,
          center: { lng: log, lat: lat}
        });
//     var platform = new H.service.Platform({
//     apikey: '0ddChwxReJv6n1utD2-wxnX19jDfzwCJH5GvFtEdMWI'
//   });
// var defaultLayers = platform.createDefaultLayers();

// var map = new H.Map(document.getElementById('mapContainer'), defaultLayers.vector.normal.map, {
//     center: {lat: lat, lng: log},
//     zoom: 11,
//     pixelRatio: window.devicePixelRatio || 1
// });
// window.addEventListener('resize', () => map.getViewPort().resize());
// var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
        function Random_map(min, max,decimals){
            //alert('hi');
            const str = (Math.random() * (max - min) + min).toFixed(decimals);
            return parseFloat(str);
        }
        function myfunction(){
            var lat_min=-90;
            var lat_max=90;
            var log_min=0;
            var log_max=180;
            var decimals=3;
             
            var lat_number=Random_map(lat_min,lat_max, decimals);
            var log_number=Random_map(log_min,log_max,decimals)
            // return [lat_number,log_number];
            var map = new H.Map(
        document.getElementById('mapContainer'),
        maptypes.vector.normal.map,
        {
          zoom: 10,
          center: { lng: log_number, lat: lat_number}
        });
        }
</script> 