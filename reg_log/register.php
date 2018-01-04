<?php

include_once "../additional_code/dbh.inc.php";

if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    header("location: welcome.php");
    exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first = trim(mysqli_real_escape_string($conn, $_POST["first"]));
    $last = trim(mysqli_real_escape_string($conn, $_POST["last"]));
    $email = trim(mysqli_real_escape_string($conn, $_POST["email"]));
    $uid = trim(mysqli_real_escape_string($conn, $_POST["uid"]));
    $pwd = trim(mysqli_real_escape_string($conn, $_POST["pwd"]));

    $sql = "SELECT user_uid, user_email FROM users";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        echo "Oops... Looks like something is missing";
    }
    elseif (!empty($first) && !empty($last) && !empty($email) && !empty($uid) && !empty($pwd)) {

        if ($email == $row["user_email"]) {
            echo "This email is already bind to an account";
        }
        elseif ($email !== $row["user_email"]) {

            if ($uid == $row["user_uid"]) {
                echo "This username is already taken";
            }
            elseif ($uid !== $row["user_uid"]) {
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                mysqli_query($conn, $sql);
                //header("firstPage.php");
            }
        }
    }
}