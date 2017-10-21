<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
      <div class="nav">
          @if (Route::has('login'))
              <div class="links">
                  @auth
                      <a class="title" href="{{ url('/home') }}">Into The Malt</a>
                  @else
                      <a class="title" href="{{ url('/home') }}">Into The Malt</a>
                      <a class="auth login" href="{{ route('login') }}">Login</a>
                      <a class="auth register" href="{{ route('register') }}">Register</a>
                  @endauth
              </div>
          @endif
      </div>
      <div id="mapContainer">
          <div id="map" style="height:450px; width:438px;"></div>
      </div>
        <svg version="1.1" class="biere-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 419.6 400.2" style="enable-background:new 0 0 419.6 400.2;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#B85601;}
                .st1{fill:#FFC603;}
                .st2{fill:#F9F8E5;}
                .st3{fill:#FDDB00;}
                .st4{fill:#F4CBCB;}
                .st5{fill:#EAE0DA;}
                .st6{fill:none;stroke:#F9F8E5;stroke-miterlimit:10;}
            </style>
            <circle class="st0" cx="213.9" cy="198.7" r="177.5"/>
            <g id="biere">
                <g>
                    <rect x="150.9" y="65.2" class="st1" width="129" height="288"/>
                </g>
                <g>
                    <path class="st2" d="M148.5,102.1h0.3c4-2.6,30.9-4.6,63.4-4.6c32.5,0,59.4,2,63.4,4.6h1c0,0,0.1,2.3,0.2,6.3
                        c-0.1-19.6-0.6-33.6-0.6-33.6h-1c-4-2.6-30.9-4.6-63.4-4.6c-32.5,0-59.4,2-63.4,4.6h-0.3c0,0,0,0.1,0,0.3
                        c-0.1,0.1-0.2,0.3-0.2,0.4c0,0.1,0.1,0.3,0.2,0.4c0,3.2,0.1,13.1,0.4,26.5c0,0,0,0,0,0C148.5,102.2,148.5,102.1,148.5,102.1z"/>
                    <path class="st2" d="M270.8,57.5c-1.5-3.5-8.5-4.3-13.4-3.1c-5.9,1.4-13.7-2.7-22.5-6.8c-6.8-3.2-13.1,1.9-20.1,6.8
                        c-0.8,0-1.6,0-2.4,0c-5.7,0-11.2,0.1-16.5,0.2c-2.6-2.5-6.1-5.5-11.9-8.4c-16.6-8.2-33.2,12-33.2,12c0,0,0,0,0,0
                        c-1.9,0.5-2.9,1.1-2.9,1.6v24.6c0,3,28.9,5.5,64.5,5.5s64.5-2.4,64.5-5.5V59.8C276.9,59,274.7,58.2,270.8,57.5z"/>
                </g>
            </g>
            <g>
                <path class="st3" d="M-48.3-16.3c0,0.1,0.1,0.2,0.2,0.3c0-0.2,0-0.4,0-0.6C-48.3-16.5-48.3-16.4-48.3-16.3z"/>
            </g>
            <g>
                <path class="st4" d="M-48.1-16c0,0.2,0,0.4,0,0.6C-48.1-15.7-48.1-15.8-48.1-16C-48.1-16-48.1-16-48.1-16z"/>
            </g>
            <g>
                <path class="st5" d="M213.5,323.9c-23.7,0-43.9-2.7-51.9-6.6c-0.7,4.7-1.5,9.6-2.4,14.6c-0.5,0.6-0.8,1.2-0.8,1.8
                    c0,0.4,0.1,0.8,0.4,1.2c3.1,5.1,26.6,9.1,55.2,9.1c21.3,0,39.8-2.2,49.1-5.4c4.1-1.4,6.4-3,6.4-4.8c0-0.5-0.2-1-0.6-1.5
                    c-0.5-2-1.7-7.2-3-15.1c-0.9,0.5-2,0.9-3.3,1.4C253.3,321.7,234.8,323.9,213.5,323.9z"/>
            </g>
            <path class="st0" d="M213.9,8.3c-104.9,0-190,85.1-190,190s85.1,190,190,190c104.9,0,190-85.1,190-190S318.9,8.3,213.9,8.3z
                M271.2,151.1c-25.1,102.5-11.3,171.9-9.2,181c0.4,0.5,0.5,1,0.5,1.5c0,1.7-2,3.3-5.6,4.8c-8.1,3.2-24.3,5.4-42.9,5.4
                c-24.9,0-45.5-4-48.2-9.1c-0.2-0.4-0.3-0.8-0.3-1.2c0-0.6,0.3-1.2,0.7-1.8c17.9-118.8-1-147.8-8-182.7c-6.5-32.6-7-93-7-93l0.7-6.8
                c0-0.5,1-1.1,2.8-1.6c0,0,0,0,0,0c0,0,16-19.4,31.9-11.6c5.6,2.7,9,5.6,11.4,8c5-0.1,10.3-0.2,15.8-0.2c0.8,0,1.5,0,2.3,0
                c6.7-4.8,12.7-9.6,19.3-6.6c8.5,3.9,16,7.9,21.6,6.6c4.7-1.1,11.4-0.4,12.9,3c3.8,0.7,5.9,1.4,5.9,2.2l0.3,6.8
                C276.2,56.1,279.4,117.9,271.2,151.1z"/>
            <path class="st6" d="M213.8,79.2c-27.6,0-51.4,1.5-62.4,3.7c0.1,1.8,0.1,3.7,0.2,5.6c0.9,19.1,2.6,42.8,6.2,60.7c7,35,26,64,8,182.7
                c-0.5,0.6-0.7,1.2-0.7,1.8c0,0.4,0.1,0.8,0.3,1.2c2.7,5.1,23.2,9.1,48.2,9.1c18.6,0,34.8-2.2,42.9-5.4c3.6-1.4,5.6-3,5.6-4.8
                c0-0.5-0.2-1-0.5-1.5c-2-9.1-15.9-78.5,9.2-181c4.3-17.4,5.4-42.7,5.6-62.8c0-1.9,0-3.7,0-5.5C265.5,80.7,241.6,79.2,213.8,79.2z"/>
        </svg>

      <div class="button">
          <a href="{{ url('/home') }}">
              <span class="fa fa-search loupe"></span>
          </a>
      </div>
    <script>
      var map;
      function initMap() {
          var mapOptions = {
          zoom: 12,
            center: new google.maps.LatLng(50.4167 , 4.4333),
            disableDefaultUI: true,
              styles: [
                    {
                        "featureType": "all",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": "0"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "color": "#efc337"
                            },
                            {
                                "lightness": "-15"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "saturation": "-100"
                            },
                            {
                                "lightness": "20"
                            },
                            {
                                "visibility": "simplified"
                            },
                            {
                                "gamma": ".5"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "lightness": "60"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#efc337"
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#efc337"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "lightness": "12"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "lightness": "100"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.landcover",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural.terrain",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#efc337"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "lightness": "-7"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "gamma": "6.14"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#efc337"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "lightness": "-18"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "lightness": "100"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            },
                            {
                                "invert_lightness": true
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "hue": "#ffc200"
                            },
                            {
                                "saturation": "100"
                            },
                            {
                                "gamma": "0.85"
                            },
                            {
                                "lightness": "17"
                            },
                            {
                                "weight": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "hue": "#ffc200"
                            },
                            {
                                "saturation": "-100"
                            },
                            {
                                "gamma": "0.5"
                            },
                            {
                                "weight": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": "80"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#efc337"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "lightness": "35"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    }
                ]
            };
            var infoWindow = new google.maps.InfoWindow({map: map});

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var locData = localStorage.getItem('biers');
            var locDataJson = JSON.parse(locData);
<<<<<<< HEAD
            console.log(locDataJson);
            locDataJson.feed.feed.map(function(res){
=======

            /*locDataJson.feed.feed.map(function(res){
>>>>>>> 42a1c28400753fc7be5647ae9d196dec17f9673d
                var infowindow = new google.maps.InfoWindow({
                  content: [res.name, res.gps]
                });
<<<<<<< HEAD
=======

>>>>>>> 42a1c28400753fc7be5647ae9d196dec17f9673d
                var locDataJsonSplitted = res.gps.split(",");

                var marker = new google.maps.Marker({
                  position: {lat:parseFloat(locDataJsonSplitted[0]), lng: parseFloat(locDataJsonSplitted[1])},
                  map: map,
                  data:locData,
                });
<<<<<<< HEAD
=======
            })*/

>>>>>>> 42a1c28400753fc7be5647ae9d196dec17f9673d

                marker.addListener("click", function(){
                    infowindow.open(map, marker);
                })
            })
      }
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV7PuDFpGBhrG79Aah4jlAXEI26ziN0_o&callback=initMap"></script>
    </body>
</html>
