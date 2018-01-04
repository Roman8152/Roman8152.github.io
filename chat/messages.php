<?php

include_once '../additional_code/dbh.inc.php';

session_start();

$currentChat = $_SESSION["foundUser"];
$savedUid = $_SESSION["username"];

$sql = "SELECT * FROM messages WHERE sender = '$savedUid' AND getter = '$currentChat' OR sender = '$currentChat' AND getter = '$savedUid' ORDER BY id ASC LIMIT 20";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<div class='allMsg'>";
    while ($row = mysqli_fetch_assoc($result)) {
    	if ($savedUid == $row["sender"] && $currentChat !== $row["sender"]) {
    		echo "<p class='self chatMsg'>";
       		echo htmlspecialchars($row["sender"] . ": " . $row["msg"]);
       		echo "</p>";
    	}
    	elseif ($currentChat == $row["sender"] && $savedUid !== $row["sender"]) {
    		echo "<p class='friend chatMsg'>";
       		echo htmlspecialchars($row["sender"] . ": " . $row["msg"]);
       		echo "</p>";
    	}
    }
    echo "</div>";
}