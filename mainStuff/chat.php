<?php

include_once "../additional_code/dbh.inc.php";

session_start();

if(isset($_SESSION["username"])) {
    $savedUsername = $_SESSION["username"];

    if(isset($_SESSION["foundUser"])) {
        $foundUid = $_SESSION["foundUser"];
    }
    else {
        header("location: ../mainPage/corePage.php");
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

        <title>Chat</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" href="../additional_code/styles/mainPage.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="../additional_code/styles/chatStyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous">
        </script>
        <script src="../chat/manage.js"></script>
    </head>
    <body>
        <div id="navbars"></div>
        <script>
            $(function() {
                $("#navbars").load("navigation.php");
            });
        </script>
        <main>
            <div id="header">
                <a id= href="quitChat.php"><img id="backImg" src="http://cdn.onlinewebfonts.com/svg/img_233998.png"> Back</a>
            </div>
            <p id="chatWith">Chat with <b><?php echo $foundUid ?></b></p>
            <div id="getMsg"></div>
            <form action="../chat/msg_write.php" method="POST" autocomplete="off">
                <input type="text" name="msg" placeholder="Message">
                <input type="submit" value="Send">
            </form>
        </main>
        <script>
            getMessages();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous">
        </script>
    </body>
</html>