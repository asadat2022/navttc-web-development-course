<?php

  if (isset($_POST["btn-submit"])) {
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $reg=$_POST["reg"];
    $dep=$_POST["dep"];
    $pass=$_POST["pass"];
    $rpass=$_POST["rpass"];
    if ($dep==='Choose Department') {
      echo '<script>
      alert("Must Choose Department");
      window.location.href="admin_panal.php?page=7";
      </script>';
    }

    if ($pass===$rpass) {
      $stdSQL="INSERT INTO `std_manage_system`.`Teacher`(teacher_ID, teacherFirstName, teacherLastName, teacherPassword, DepartmentName)
      VALUES('$reg', '$fname', '$lname', '$pass', '$dep')";
      $stdrecord=mysqli_query($dbconnect,$stdSQL);
      if ($stdrecord>0) {
          header("location:admin_panal.php?page=6");
      }
      else {
        echo '<script>
        alert("This ID is already taken. Please choose Different");
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
    <h1>Add Teacher</h1>
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
          <td>Teacher ID.: </td>
          <td><input type="text" class="addinput" name="reg" required="required" pattern="([A-Z]{2,6})-([0-9]{3})([A-Z]{1})([0-9]{2})-([0-9]{2,4})" placeholder="Enter Registration No."/></td>
        </tr>
        <tr>
          <td>Department: </td>
          <td>
            <select class="addinput" name="dep">
              <option>Choose Department</option>
              <option>Computer Science</option>
              <option>Information Technology</option>
              <option>Business Administrator</option>
            </select>
          </td>
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
    </form>
</div>
