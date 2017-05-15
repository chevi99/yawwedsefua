<?php
/**
 * Created by PhpStorm.
 * User: WEBMOBILITY
 * Date: 5/1/2017
 * Time: 1:11 PM
 */
require_once 'config/connection.php';

//sql query to fetch all images
$sql = "SELECT * FROM gallery_t WHERE status = '1' ORDER BY date_uploaded DESC";
// getting images
$result = mysqli_query($con, $sql);

//response array
/*$response = array();
$response['error'] = false;
$response['images'] = array();

//traversing tru all rows
while ($row = mysqli_fetch_array($result)){
    $temp = array();
    $temp['id'] = $row['id'];
    $temp['url'] = $row['url'];
    $temp['name'] = $row['name'];
    array_push($response['images'],$temp);
}
// display images
echo json_encode($response);*/
if($result){
    while($row = mysqli_fetch_array($result)){
        $flag[] = $row;
    }
    print(json_encode($flag));
}
mysqli_close($con);