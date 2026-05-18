<?php
$servername = "localhost";
$username = "mitrasyn_sql2";
$password = "databaseandem987@";
$dbname = "mitrasyn_andema";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
 
?>