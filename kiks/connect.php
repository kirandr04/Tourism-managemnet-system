<?php
function OpenCon(){
  $dbhost= "localhost";
  $dbuser="root";
  $dbpass="";
  $db="tables";
  $conn= new mysqli($dbhost, $dbuser,$dbpass,$db) or die ("connect failed: %s". $conn -> error);
  return $conn;
}
function CloseCon($conn)
{
  $conn->close();
}
?>