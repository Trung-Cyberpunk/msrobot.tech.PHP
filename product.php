<?php
   include 'db_connection.php';
   $sql_2 = "Select * from product ORDER BY id ASC";
   $r = mysqli_query($conn, $sql_2);         
?>