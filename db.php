<?php
$servername=$_SERVER['HTTP_HOST'];
$username="root";
$password="password";;

$dbname="urlshorterner";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die("Connection failed");
 ?>
