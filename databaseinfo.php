<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "testuser";
 $dbpass = "password";
 $db = "household_solar2";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
 
?>