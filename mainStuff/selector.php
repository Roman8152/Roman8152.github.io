<?php

include_once "../additional_code/dbh.inc.php";

$return_arr = array();

$searchTerm = $_GET["term"];

$sql = "SELECT user_uid FROM users WHERE user_uid LIKE '%" . $searchTerm . "%' ";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $return_arr[] =  $row['user_uid'];
}
echo json_encode($return_arr);