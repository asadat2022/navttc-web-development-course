<?php
  if (isset($_POST["btn-submit"])) {
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $user=$_POST["user"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $rpass=$_POST["rpass"];

    if ($pass===$rpass) {
      $SQL="INSERT INTO `std_manage_system`.`sys_admin`(admin_Username, admin_FirstName, admin_LastName, admin_Password, admin_Email)
      VALUES('$user','$fname', '$lname', '$pass', '$email')";
      $record=mysqli_query($dbconnect,$SQL);
      if ($record>0) {
        header("location:admin_panal.php?page=1");
      }
      else {
        echo '<script>
        alert("This Username is already taken. Please choose another name");
        </script>';
      }
    }
    else {
      echo '<script>
      alert("Password Not Matched");
      </script>';
    }
  }
 ?>



<div class="content">
    <h1>Add Admin</h1>
    <form method="post" name="addadmin">
      <table class="addtable">
        <tr>
          <td>First Name: </td>
          <td><input type="text" class="addinput" name="fname" required="required" pattern="([A-Z a-z]{3,})" placeholder="Enter First Name"/></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input type="text" class="addinput" name="lname" required="required" pattern="([A-Z a-z]{3,})" placeholder="Enter Last Name"/></td>
        </tr>
        <tr>
          <td>Username: </td>
          <td><input type="text" class="addinput" name="user" required="required" pattern="([A-Z a-z 0-9]{3,})" placeholder="Enter Username"/></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input type="email" class="addinput" name="email" required="required" pattern="([A-Z a-z 0-9 /./-]{3,})@([A-Z a-z]{3,}).com" placeholder="Enter Email"/></td>
        </tr>
        <tr>
          <td>Password: </td>
          <td><input type="password" class="addinput" name="pass" required="required" pattern=".{6,}" placeholder="Enter Password"/></td>
        </tr>
        <tr>
          <td>Confirm Password: </td>
          <td><input type="password" class="addinput" name="rpass" required="required" pattern=".{6,}" placeholder="Re-Enter Password"/></td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
            <input type="submit" class="add" name="btn-submit" value="Submit">
            <input type="reset" class="add" name="btn-reset" value="Clear">
            <center/>
          </td>
        </tr>
      </table>
      <br><br>
    </form>
</div>
