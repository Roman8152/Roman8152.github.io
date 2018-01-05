<?php

include_once "../additional_code/dbh.inc.php";

session_start();

if(isset($_SESSION["username"])) {
	$savedUsername = $_SESSION["username"];
	$_SESSION["foundUser"] = $savedUsername;
	$foundUid = $_SESSION["foundUser"];

	if(isset($_POST["findUser"])) {
		$foundUid = mysqli_real_escape_string($conn, $_POST["findUser"]);
		$_SESSION["foundUser"] = $foundUid;
	}
}
else {
	header("location: ../reg_log/firstPage.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<title>Profile Page</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
	    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	    <link rel="stylesheet" href="../additional_code/styles/mainPage.css" type="text/css">
	    <link rel="stylesheet" href="../additional_code/styles/profileStyle.css" type="text/css">
	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
	    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
	    </script>
	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
	    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous">
	    </script>
	</head>
	<body>
		<div id="navbars"></div>
		<script type="text/javascript">
	    	$(function() {
	        	$("#navbars").load("navigation.php");
	    	});
	    </script>
	    <main>
			<div class="starter-template">
				<div id="profPic"></div>
				<p><?php echo $foundUid; ?></p>
				<a href="chat.php">Start chat with <?php echo $foundUid; ?></a>
			</div>
		</main>
	</body>
</html>