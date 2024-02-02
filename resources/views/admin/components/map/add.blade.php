<style>
    /**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
    /*
     * Always set the map height explicitly to define the size of the div element
     * that contains the map.
     */
    #map {
        height: 100%;
    }

    /*
     * Optional: Makes the sample page fill the window.
     */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
    }

    #infowindow-content .title {
        font-weight: bold;
    }

    #infowindow-content {
        display: none;
    }

    #map #infowindow-content {
        display: inline;
    }

    .pac-card {
        background-color: #fff;
        border: 0;
        border-radius: 2px;
        box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
        margin: 10px;
        padding: 0 0.5em;
        font: 400 18px Roboto, Arial, sans-serif;
        overflow: hidden;
        font-family: Roboto;
        padding: 0;
    }

    #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
    }

    .pac-controls {
        display: inline-block;
        padding: 5px 11px;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
    }

    #target {
        width: 345px;
    }


</style>
<script>
    var iconUrl = "{{asset('assets/admin/images/marker.png')}}"
</script>

<script>

    lat = 24.7246242;
    lng = 46.8197233;

    var myLatlng = new google.maps.LatLng(lat, lng);
    var mapOptions = {
        zoom: 17,
        center: myLatlng
    }
    var geocoder = new google.maps.Geocoder;
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        animation: google.maps.Animation.DROP
    });

    // To add the marker to the map, call setMap();
    marker.setMap(map);

    google.maps.event.addListener(map, 'click', function (event) {
        placeMarker(event.latLng);
    });

    function placeMarker(location) {
        marker.setPosition(location);
        console.log(location)
        geocodeLatLng(geocoder, map, location);
        latLngLocation = location.toString().slice(1, -1); // remove ()
        $('#location').val(latLngLocation);
    }

    function geocodeLatLng(geocoder, map, latlng) {
        geocoder.geocode({'location': latlng}, function (results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    address = results[0].formatted_address;

                    $('#pac-input').val(address);
                } else {
                    window.alert('No results found');
                }
            } else {
                window.alert('Geocoder failed due to: ' + status);
            }
        });
    }

</script>
