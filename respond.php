<?php
/**
 * Created by PhpStorm.
 * User: WEBMOBILITY
 * Date: 4/13/2017
 * Time: 1:17 PM
 */
require_once 'config/connection.php';
$response = mysqli_real_escape_string($con, $_POST['respond']);
//get users ip
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
//get country of visitor
$myIP = getUserIP();
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$myIP"));
$status = $geo['geoplugin_status'];
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];

//insert into db
$insertQuery = mysqli_query($con, "INSERT INTO response_t(country, city, response) VALUES('$country','$city', '$response')") or die(mysqli_error($con));
if ($insertQuery) {
    echo '<div><img src="assets/images/ajaxLoader.gif" class="img-thumbnail"></div>';
    echo '<h5>THANK YOU FOR YOUR RESPONSE</h5>';
    echo '<script>
          var responseStatus = "Yes";
          localStorage.setItem("responseStatus", responseStatus);
</script>';
}