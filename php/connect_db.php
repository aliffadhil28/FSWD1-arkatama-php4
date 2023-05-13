<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "arkatama_store";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}else{
    // echo "<h1>Data Pengguna</h1>";
}