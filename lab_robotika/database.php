<?php
$servername ='localhost';
$username ='root';
$password ='';
$dbname = "invent_alat";
$koneksi = mysqli_connect($servername, $username, $password, "$dbname");
if(!$koneksi){
   die('Could not Connect My Sql:' .mysql_error());
}
?>