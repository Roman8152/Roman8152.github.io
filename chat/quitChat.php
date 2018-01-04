<?php

session_start();

unset($_SESSION["chat"]);

header("location: ../mainPage/corePage.php");

exit;