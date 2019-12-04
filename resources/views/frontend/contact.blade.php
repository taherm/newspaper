@extends('frontend.layouts.master')
@section('content')

<section class="block-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Contact</h1>
                <div class="breadcrumbs">
                    <ul>
                        <li><i class="pe-7s-home"></i> <a href="home-style-one.html" title="">Home</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="contact-title">
                <h2>Get In Touch</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="contact-address">
                <!-- Address -->
                <h3>Address</h3>
                <i class="pe-7s-map-2 top-icon"></i>
                <ul>
                    <li>14L.E Goulburn St, </li>
                    <li>Sydney 2000NSW</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-address">
                <!-- Phone -->
                <h3>Phone</h3>
                <i class="pe-7s-headphones top-icon"></i>
                <ul>
                    <li><i class="fa fa-mobile"></i> +8801620214460</li>
                    <li><i class="fa fa-mobile"></i> +8801821450144</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-address">
                <!-- Email -->
                <h3>Email</h3>
                <i class="pe-7s-global top-icon"></i>
                <ul>
                    <li><i class="fa fa-envelope-o"></i> <a href="http://news365htmllatest.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1476706075677f547379757d783a777b79">[email&#160;protected]</a></li>
                    <li><i class="fa fa-globe"></i> www.companyweb.com</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="contact-form-area">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="input">
                                <input class="input_field" type="text" id="input-1">
                                <label class="input_label" for="input-1">
                                    <span class="input_label_content" id="f_name" data-content="First Name">First Name</span>
                                </label>
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <span class="input">
                                <input class="input_field" type="text" id="input-2">
                                <label class="input_label" for="input-2">
                                    <span class="input_label_content" id="l_name" data-content="Last Name">Last Name</span>
                                </label>
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <span class="input">
                                <input class="input_field" type="text" id="input-3">
                                <label class="input_label" for="input-3">
                                    <span class="input_label_content" id="emai" data-content="Your Email">Your Email</span>
                                </label>
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <span class="input">
                                <input class="input_field" type="text" id="input-4">
                                <label class="input_label" for="input-4">
                                    <span class="input_label_content" id="subject" data-content="Subject">Subject</span>
                                </label>
                            </span>
                        </div>
                        <div class="col-sm-12">
                            <span class="input">
                                <textarea class="input_field" id="message"></textarea>
                                <label class="input_label" for="message">
                                    <span class="input_label_content" data-content="Your Email">Your Message</span>
                                </label>
                            </span>
                            <button type="button" class="btn btn-style">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div id="map"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-EEPxbay_aFpp3jcFXpjyPQcVQUJ2pp0"></script>


<!-- Google map start -->
<script>
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dedede"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#333333"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f2f2f2"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
        });
    }
</script>
@endsection