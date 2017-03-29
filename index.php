<?php
/**
 * Created by PhpStorm.
 * User: WEBMOBILITY
 * Date: 3/28/2017
 * Time: 10:24 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/my_style.css">
<!--    font awesome-->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
    <title>Yaw Weds Efua</title>
</head>
<body data-spy="scroll" data-target="#my-navbar">
<!--Navbaar-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar" style="background-color: #fff9f5!important;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Yaw &amp; Efua</a>
        </div><!--End navbar-head-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <a href="#" class="btn btn-info navbar-btn navbar-right">Download Now</a>
            <ul class="nav navbar-nav">
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#respond">Respond to Invitation</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#venue">Venue</a></li>
            </ul>
        </div>
    </div><!--End Container -->
</nav>
<!--End Navbar-->
<!--jumbotron-->
<div class="jumbotron">
    <div class="container text-center">
        <h1>Yaw Weds Efua</h1>
        <p>Please join us as we tie the knot on 25<sup>th</sup>May, 2017 @ Christ the King Cathedral Sunyani.</p>
        <div class="btn-group">
            <a href="#" class="btn btn-lg btn-info">Download App</a>
        </div>
    </div><!--End Container-->
</div>
<!--End jumbotron-->
<div class="container">
    <section>
        <div class="page-header" id="gallery">
            <h2>Gallery.<small>Check out our awesome gallery</small></h2>
        </div>
        <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                <li data-target="#screenshot-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="assets/images/slide1.jpeg" alt="gallery pics">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/slide2.jpeg" alt="gallery pics">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/slide1.jpeg" alt="gallery pics">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/slide2.jpeg" alt="gallery pics">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
            <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </section>
</div>

<section>
    <div class="container" id="venue">
        <div class="page-header">
            <h2>Venue.<small>Hope you'll be there<i class="fa fa-thumbs-up"></i> </small></h2>
        </div>
        <div id="map-container" class="col-md-10"></div>
    </div>
</section>

<section>
    <div class="well" id="my-well">
        <div class="container text-center" id="respond">
            <h3>Are you coming?</h3>
            <form action="" class="form-inline">
                <div class="form-group">
                    <ul class="list-unstyled list-inline">
                        <li><input type="radio" class="form-control" name="respond" id="respond" value="Yes"><label>Yes</label></li>
                        <li><input type="radio" class="form-control" name="respond" id="respond" value="May be"> <label>May be</label></li>
                        <li><input type="radio" class="form-control" name="respond" id="respond" value="No"><label>No</label></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="assets/jquery/jquery-3.1.0.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyB7mzO1X7Fly4Ul68LrohescKnsVnxfGsY"></script>
<script>
    $(function () {

        function initMap() {

            var location = new google.maps.LatLng(7.330485, -2.323503);

            var mapCanvas = document.getElementById('map-container');
            var mapOptions = {
                center: location,
                zoom: 16,
                panControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var markerImage = 'marker.png';
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: markerImage
            });

            var contentString = '<div class="info-window">+' +
                '<h3>Info Window Content</h3>' + '<div class="info-content">'+ '<p>Hello Meet Us On Saturday</p>'+
                    '</div>'+
                    '</div>';
             var infowindow = new google.maps.InfoWindow({
                 content: contentString,
                 maxWidth: 400
             });
            marker.addListener('click', function(){
                infowindow.open(map, marker);
            });

        }
        

        google.maps.event.addDomListener(window, 'load', initMap);
    });
</script>
</body>
</html>
