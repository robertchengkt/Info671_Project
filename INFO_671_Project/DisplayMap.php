<html>
    <head>
        
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <style>
        #map {
          height: 100%;
        }
        
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVBCYmr5045H4rYmjaKybJBcg10_vmVHc&libraries=places"></script>
    <script>
        var map;    
        var image = {
            url: 'http://www.iconsdb.com/icons/preview/royal-blue/map-marker-2-xxl.png',
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(40, 40)
        };
        function initMap() {
          var pyrmont = {lat: 39.9537552, lng: -75.1876767};
          var uluru = {lat: 39.9568713, lng: -75.1837215};
          map = new google.maps.Map(document.getElementById('map'), {
            center: pyrmont,
            zoom: 17
          });

         var marker = new google.maps.Marker({
          position: uluru,
          map: map
         });
         
         var current = new google.maps.Marker({
          position: pyrmont,
          map: map,
          title:"Current Location",
          icon:image
         });
        }        
    </script>
    
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Find a Clinic</a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Hospital</a></li>
                <li><a href="#">Pharmaceutical</a></li>
                <li><a href="#">Specialist</a></li>
                </ul>
            </div>
        </nav>
        <div id="map"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVBCYmr5045H4rYmjaKybJBcg10_vmVHc&libraries=places&callback=initMap" async defer></script>
<!--            <div>

                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12232.96504960305!2d-75.1953933!3d39.9583583!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1495660609021" 
                    width="1350" 
                    height="600" 
                    frameborder="0" 
                    style="border:0" 
                    allowfullscreen>
                </iframe>
            </div>-->

    </body>
<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
</html>

