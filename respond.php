<?php
/**
 * Created by PhpStorm.
 * User: WEBMOBILITY
 * Date: 4/13/2017
 * Time: 1:17 PM
 */
require_once 'config/connection.php';
$response = mysqli_real_escape_string($con, $_POST['respond']);
//insert into db
$insertQuery = mysqli_query($con, "INSERT INTO response_t(browser, response) VALUES('MOBILE', '$response')") or die(mysqli_error($con));
if ($insertQuery) {
    echo '<div><img src="assets/images/ajaxLoader.gif" class="img-thumbnail"></div>';
    echo '<h5>THANK YOU FOR YOUR RESPONSE</h5>';
    echo '<script>
          var responseStatus = "Yes";
          localStorage.setItem("responseStatus", responseStatus);
</script>';
}