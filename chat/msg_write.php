<?php

session_start();

include_once '../additional_code/dbh.inc.php';

$currentChat = $_SESSION["chat"];
$savedUid = $_SESSION["username"];
$msg = mysqli_real_escape_string($conn, $_POST["msg"]);
$findingErr = "";

if ($msg != "") {
    $sql = "INSERT INTO messages (msg, sender, getter) VALUES ('$msg', '$savedUid', '$currentChat');";
    mysqli_query($conn, $sql);
    header("location: chat.php");
}
else {
    $findingErr = "No message written";
    header("location: chat.php");
}