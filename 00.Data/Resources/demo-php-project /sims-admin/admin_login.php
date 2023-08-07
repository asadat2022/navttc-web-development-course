<?php
  include "database/config.php";
  $html="";
  if (isset($_POST["subbtn"])) {

    $uname=$_POST["uname"];
    $pass=$_POST["upass"];

    $SQL="SELECT * FROM `std_manage_system`.`sys_admin`";
    $record=mysqli_query($dbconnect,$SQL);
    if (mysqli_num_rows($record)>0) {
      $SQL="SELECT * FROM `std_manage_system`.`sys_admin` WHERE admin_Username= '$uname' AND admin_Password= '$pass'";
      $record=mysqli_query($dbconnect,$SQL);
      if (mysqli_num_rows($record)>0) {
        $data = mysqli_fetch_array($record);
        SESSION_START();
        $_SESSION["id"] = $data["admin_ID"];
        $_SESSION["username"] = $data["admin_Username"];
        $_SESSION["fname"] = $data["admin_FirstName"];
        $_SESSION["lname"] = $data["admin_LastName"];
        $_SESSION["pass"] = $data["admin_Password"];
        $_SESSION["email"] = $data["admin_Email"];
        header("location:admin_panal.php");
        }
        else {
          echo '<script>
            alert("INVALID USERNAME OR PASSWORD");
            window.location.href="admin_login.php";
            </script>';
        }
    }
    else {
      echo '<script>
    		alert("No Admin Found !!!!!!!!!!!");
    		window.location.href="admin_login.php";
    		</script>';
    }
  }
 ?>

<html>
  <head>
    <title>Admin LogIn</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <header>
      <label>Student Information Management System</label>
    </header>
    <table>
      <form method="post">
        <tr>
          <th colspan=4 class="titletext">Admin LogIn</th>
        </tr>
        <tr>
          <td class="headingtext">Username:</td>
          <td><input type="text" name="uname"  placeholder="Enter Username" class="testbox"></td>
          <td class="headingtext">Password:</td>
          <td><input type="password" name="upass"  placeholder="Enter Password" class="testbox"></td>
        </tr>
        <tr>
          <td colspan=4><input type="submit" name="subbtn" value="LogIn" class="button"/></td>
        </tr>
        <tr>
          <td colspan=4 class="errortext">
          </td>
        </tr>
      </form>
    </table>
  </body>
</html>
