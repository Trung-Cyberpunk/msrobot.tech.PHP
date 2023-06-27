<?php
$servername = "127.0.0.1:4306";
$serveruser = "root";
$serverpass = "";
$dbname = "msrobot";


$conn = mysqli_connect($servername,$serveruser,$serverpass,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

?>