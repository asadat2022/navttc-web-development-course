<?php

  if (isset($_POST["btn-submit"])) {
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $reg=$_POST["reg"];
    $dep=$_POST["dep"];
    $prog=$_POST["prog"];
    $seme=$_POST["seme"];
    $pass=$_POST["pass"];
    $rpass=$_POST["rpass"];
    if ($dep==='Choose Department') {
      echo '<script>
      alert("Must Choose Department");
      window.location.href="admin_panal.php?page=11";
      </script>';
    }
    if ($prog==='Choose Program') {
      echo '<script>
      alert("Must Choose Program");
      window.location.href="admin_panal.php?page=11";
      </script>';
    }
    if ($seme==='Choose Semester') {
      echo '<script>
      alert("Must Choose Semester");
      window.location.href="admin_panal.php?page=11";
      </script>';
    }

    if ($pass===$rpass) {
      $stdSQL="INSERT INTO `std_manage_system`.`STUDENT`(student_ID, studentFirstName, studentLastName, studentPassword, DepartmentName, studentProgram, studentSemester)
      VALUES('$reg', '$fname', '$lname', '$pass', '$dep','$prog' ,'$seme')";
      $stdrecord=mysqli_query($dbconnect,$stdSQL);
      if ($stdrecord>0) {
          header("location:admin_panal.php?page=10");
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
    <h1>Add Student</h1>
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
          <td>Registration No.: </td>
          <td><input type="text" class="addinput" name="reg" required="required" pattern="([A-Z]{3,6})-([0-9]{3})([A-Z]{1})([0-9]{2})-([0-9]{2,4})" placeholder="Enter Registration No."/></td>
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
          <td>Program: </td>
          <td>
            <select class="addinput" name="prog">
              <option>Choose Program</option>
              <option>BSCS</option>
              <option>BSIT</option>
              <option>MCS</option>
              <option>MIT</option>
              <option>MSCS</option>
              <option>MSIT</option>
              <option>BBA</option>
              <option>MBA</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Semester: </td>
          <td>
            <select class="addinput" name="seme">
              <option>Choose Semester</option>
              <option>Semester 1st</option>
              <option>Semester 2nd</option>
              <option>Semester 3rd</option>
              <option>Semester 4th</option>
              <option>Semester 5th</option>
              <option>Semester 6th</option>
              <option>Semester 7th</option>
              <option>Semester 8th</option>
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
