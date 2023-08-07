<?php
  $servername="localhost";
  $username="root";
  $password="root";
  $dbname="std_manage_system";

  $dbconnect=mysqli_connect($servername,$username,$password,$dbname);

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 ?>
