<?php
  $dboard="";
  include "database/config.php";

  SESSION_START();
  $id=$_SESSION["id"];
  $user=$_SESSION["username"];
  $fname=$_SESSION["fname"];
  $lname=$_SESSION["lname"];
  $pass=$_SESSION["pass"];
  $email=$_SESSION["email"];

  if (empty($_SESSION["id"])) {
    header("location:admin_login.php");
  }

  if ($id==1) {
    $dboard .='<a href="admin_panal.php?page=1"> <li>View Admin</li> </a>';
  }

 ?>


<html>
  <head>
    <title>Admin Panal</title>
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header>
      <label class="title">Student Information Management System</label>
      <a href="admin_panal.php" class="dboard">Admin Panal</a>
      <div class="right-div">
        <label class="adname"><?php echo "$fname $lname"; ?></label>
        <ul class="logoutul">
          <a href="admin_logout.php"><li>Log Out</li></a>
        </ul>
      </div>

    </header>
    <nav>
      <ul>
        <a href="admin_panal.php"> <li>Dashboard</li> </a>
        <?php echo $dboard ?>
        <a href="admin_panal.php?page=6"> <li>View Teacher</li> </a>
        <a href="admin_panal.php?page=10"> <li>View Student</li> </a>
      </ul>
    </nav>
