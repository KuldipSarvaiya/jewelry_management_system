<?php
// Database credentials
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "jewellery";

// Create a database connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("MYSQL Connection failed");
