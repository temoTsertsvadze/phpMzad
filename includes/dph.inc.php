<?php

$dtbaservername ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "exam";
$conn = mysqli_connect($dtbaservername, $dbUsername, $dbPassword, $dbName);
$conn -> set_charset("utf8");