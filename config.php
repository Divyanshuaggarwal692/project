<?php
$servername="localhost";
$username="root";
$password="";
$dbname="shop_db";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
 die('connection failed:' .mysqli_connect_error());

?>