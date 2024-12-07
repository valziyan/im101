<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "im101";

try {
    // create $conn and create a new connection similar mysql -u root -p
    $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $passdb_passwordword);
    
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}