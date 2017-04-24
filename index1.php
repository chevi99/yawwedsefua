<?php
/**
 * Created by PhpStorm.
 * User: WEBMOBILITY
 * Date: 3/28/2017
 * Time: 10:24 AM
 */
include 'config/connection.php';
$responseStatus = $_GET['send'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/my_style.css">
    <!--    font awesome-->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
<!--    google fonts-->
    <link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <title>Yaw Weds Efua</title>
</head>

<script>

    function getResponse() {
        var responseStatus = localStorage.getItem("responseStatus");
        console.log(responseStatus);
        window.location.href = "index1.php?send=" + responseStatus;
    }
</script>
<body data-spy="scroll" data-target="#my-navbar">
<div class="fontie">
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
            <a href="#" class="navbar-brand" style="color: #C5B358;">Yaw &amp; Efua</a>
        </div><!--End navbar-head-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <a href="#" class="btn btn-info navbar-btn navbar-right" style="font-family: Aclonica;">Download Now</a>
            <ul class="nav navbar-nav">
                <li><a href="#gallery" style="color: #C5B358;">Gallery</a></li>
                <li><a href="#respond" style="color: #C5B358;">Respond to Invitation</a></li>
                <li><a href="#contact" style="color: #C5B358;">Contact Us</a></li>
                <li><a href="#venue" style="color: #C5B358;">Venue</a></li>
            </ul>
        </div>
    </div><!--End Container -->
</nav>
<!--End Navbar-->
<!--jumbotron-->
<div class="jumbotron">
    <div class="container text-center" style="color: #ff6a7d;">
        <h1>Yaw Weds Efua</h1>
        <p>Please join us as we tie the knot on 20<sup>th</sup>May, 2017 9:00am @ Christ the King Cathedral Sunyani.</p>
        <div class="btn-group">
            <a href="#" class="btn btn-lg btn-info" style="font-family: Aclonica;">Download App</a>
        </div>
    </div><!--End Container-->
</div>
<!--End jumbotron-->
<div class="container">
    <section>
        <div class="page-header" id="gallery" style="color: #C5B358;">
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
                    <img src="assets/images/slide3.jpeg" alt="gallery pics">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/slide1.jpeg" alt="gallery pics">
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
    <div class="container" id="venue" style="color: #C5B358;">
        <div class="page-header">
            <h2>Venue.<small>Hope you'll be there <i class="fa fa-thumbs-up"></i> </small></h2>
        </div>
        <div id="map-container" class="col-md-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.209836621907!2d-2.3255946356106643!3d7.330314444709885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdacf38c78123f3%3A0xdf6e1b6136f1f3fc!2sChrist+The+King+Cathedral%2C+Kumasi-Sunyani+Rd%2C+Sunyani!5e0!3m2!1sen!2sgh!4v1492980022001" frameborder="0" style="border:0; width: 100%; height: 300px;"></iframe>
        </div>
    </div>
</section>

<section>
    <div class="well" id="my-well">
        <div class="container text-center" id="respond" style="color: #C5B358;">
            <?php
            if ($responseStatus == 'Yes') {
                echo '<div><img src="assets/images/ajaxLoader.gif" class="img-thumbnail"></div>';
                echo '<h5>THANK YOU FOR YOUR RESPONSE</h5>';
            }else{
                echo '<h3>Are you coming?</h3>
            <form action="" class="form-inline">
                <div class="form-group">
                    <ul class="list-unstyled list-inline">
                        <li><input type="radio" class="form-control" onclick="respondInvite();" name="respond" id="respond" value="Yes"><label>Yes</label></li>
                        <li><input type="radio" class="form-control" onclick="respondInvite();" name="respond" id="respond" value="May be"> <label>May be</label></li>
                        <li><input type="radio" class="form-control" onclick="respondInvite();" name="respond" id="respond" value="No"><label>No</label></li>
                    </ul>
                </div>
            </form>';
            }
            ?>
        </div>
    </div>
</section>
    </div>
<footer>
    <div class="container text-center">
        <p class="text-danger">&copy;Copyright <?php echo date('Y'); ?> All rights reserved</p>
    </div>
</footer>
<script src="assets/jquery/jquery-3.1.0.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyB7mzO1X7Fly4Ul68LrohescKnsVnxfGsY"></script>
<script>
    function respondInvite(){
        $.ajax({
            url: "respond.php",
            method: "post",
            data: $('form').serialize(),
            dataType:"html",
            success: function(mms){
                $('#respond').html(mms)
            }
        })
    }
</script>
<!--<script>
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
                '<h3>Christ the King Cathedral Church</h3>' + '<div class="info-content">'+ '<p>Please contact 0208342557 for directions. THANK YOU</p>'+
                '</div>'+
                '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 400
            });
            marker.addListener('click', function(){
                infowindow.open(map, marker);
            });
            $(document).ready(function(){
                window.onload = infowindow.open(map, marker)
            })

        }


        google.maps.event.addDomListener(window, 'load', initMap);
    });
</script>-->
</body>
</html>
