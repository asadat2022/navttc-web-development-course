<?php
  $fnametemp="";
  $lnametemp="";
  $emailtemp="";
  $passtemp="";

  if (isset($_POST["btn-submit"])) {
    if ($_SESSION["pass"]===$_POST["cpass"]) {
      $_SESSION["fname"]=$fnametemp=$_POST["fname"];
      $_SESSION["lname"]=$lnametemp=$_POST["lname"];
      $_SESSION["email"]=$emailtemp=$_POST["email"];
      $_SESSION["pass"]=$passtemp=$_SESSION["pass"];

      $SQL="UPDATE `std_manage_system`.`sys_admin` SET admin_FirstName ='$fnametemp', admin_LastName='$lnametemp', admin_Email='$emailtemp' WHERE admin_ID='$id'";
      mysqli_query($dbconnect,$SQL);

      if (!empty($_POST["npass"])&&!empty($_POST["rpass"])) {
        if ($_POST["npass"]===$_POST["rpass"]) {
          $passtemp=$_POST["npass"];
          $SQL="UPDATE `std_manage_system`.`sys_admin` SET admin_Password='$passtemp' WHERE admin_ID='$id'";
          mysqli_query($dbconnect,$SQL);
          echo '<script>
          alert("Login With New Password");
          window.location.href="admin_login.php";
          </script>';
          SESSION_DESTROY();
        }else {
          echo '<script>
          alert("PASSWORD DID NOT MATCH");
          window.location.href="admin_panal.php?page=4";
          </script>';
        }
      }else{
        echo '<script>
        alert("Updated");
        window.location.href="admin_panal.php";
        </script>';
      }
    }
    else {
      echo '<script>
      alert("INVALID CURRENT PASSWORD");
      window.location.href="admin_panal.php?page=4";
      </script>';
    }
  }
 ?>



<div class="content">
    <h1>Edit: <?php echo $user; ?></h1>
    <form method="post" name="editadmin">
      <table class="addtable">
        <tr>
          <td>First Name: </td>
          <td><input type="text" class="addinput" name="fname" required="required" pattern="([A-Z a-z]{3,})" value="<?php echo $fname; ?>" placeholder="Enter First Name"/></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input type="text" class="addinput" name="lname" required="required" pattern="([A-Z a-z]{3,})" value="<?php echo $lname; ?>" placeholder="Enter Last Name"/></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input type="email" class="addinput" name="email" required="required" pattern="([A-Z a-z 0-9 /./-]{3,})@([A-Z a-z]{3,}).com" value="<?php echo $email; ?>" placeholder="Enter Email"/></td>
        </tr>
        <tr>
          <td>Password Current: </td>
          <td><input type="password" class="addinput" name="cpass" required="required" pattern=".{6,}" placeholder="Current Password"/></td>
        </tr>
        <tr>
          <td>Password New: </td>
          <td><input type="password" class="addinput" name="npass" pattern=".{6,}" placeholder="New Password"/></td>
        </tr>
        <tr>
          <td>Confirm Password: </td>
          <td><input type="password" class="addinput" name="rpass" pattern=".{6,}" placeholder="Re-Enter New Password"/></td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
            <input type="submit" onclick="return " class="add" name="btn-submit" value="Update">
            <input type="reset" class="add" name="btn-reset" value="Clear">
            <center/>
          </td>
        </tr>
      </table>
    </form>
</div>
