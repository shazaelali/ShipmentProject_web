<?php
//MySQLi Procedural
$connect = mysqli_connect("localhost","root","","web3db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else /*echo "Success"*/;
?>