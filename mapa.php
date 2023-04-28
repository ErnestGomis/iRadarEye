<html>
  <head>
    <title>Mapa con Google Maps API</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbVzARrMmOUS63udv7X7i5iU5yqRLJtns"></script>
  </head>
  <body>
    <div id="map" style="width: 100%; height: 100%;"></div>
    <script>
      function initMap() {
        var uluru = {lat: 41.38879, lng: 2.15899};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbVzARrMmOUS63udv7X7i5iU5yqRLJtns&callback=initMap">
    </script>
  </body>
</html>
