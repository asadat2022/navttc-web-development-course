<?php
  $editid = $_GET["editid"];
  $editfname="";
  $editlname="";
  $edituser="";
  $editemail="";

  $editSQL="SELECT * FROM `std_manage_system`.`sys_admin` WHERE admin_ID='".$editid."'";
  $editrecord=mysqli_query($dbconnect,$editSQL);
  $editrow=mysqli_fetch_array($editrecord);

  $edituser=$editrow["admin_Username"];
  $editfname=$editrow["admin_FirstName"];
  $editlname=$editrow["admin_LastName"];
  $editemail=$editrow["admin_Email"];
  $editpass=$editrow["admin_Password"];

  if (isset($_POST["btn-submit"])) {
    if ($_SESSION["pass"]===$_POST["cpass"]) {
      $edituser = $_POST["nadmin"];
      $editfname = $_POST["fname"];
      $editlname = $_POST["lname"];
      $editemail = $_POST["email"];

      $SQL="UPDATE `std_manage_system`.`sys_admin` SET admin_Username ='$edituser', admin_FirstName ='$editfname', admin_LastName='$editlname', admin_Email='$editemail' WHERE admin_ID='$editid'";
      $usertest = mysqli_query($dbconnect,$SQL);

      if ($usertest>0) {
        if (!empty($_POST["npass"])&&!empty($_POST["rpass"])) {
          if ($_POST["npass"]===$_POST["rpass"]) {
            $editpass=$_POST["npass"];
            $SQL="UPDATE `std_manage_system`.`sys_admin` SET admin_Password='$editpass' WHERE admin_ID='$editid'";
            mysqli_query($dbconnect,$SQL);
            echo '<script>
            alert("Admin Updated");
            window.location.href="admin_panal.php?page=1";
            </script>';
          }else {
            echo '<script>
            alert("PASSWORD DID NOT MATCH");
            window.location.href="admin_panal.php?page=5&editid='.$editid.'";
            </script>';
          }
        }else{
          echo '<script>
          alert("Admin Updated");
          window.location.href="admin_panal.php?page=1";
          </script>';
        }
      }else {
        echo '<script>
        alert("This Username is already taken. Please choose another name");
        window.location.href="admin_panal.php?page=5&editid='.$editid.'";
        </script>';
      }
  }else {
    echo '<script>
        alert("INVALID CURRENT PASSWORD");
        window.location.href="admin_panal.php?page=5&editid='.$editid.'";
        </script>';
      }
  }

 ?>


 <div class="content">
     <h1>Edit: <?php echo $edituser; ?></h1>
     <form method="post" name="editadmin">
       <table class="addtable">
         <tr>
           <td>Username: </td>
           <td><input type="text" class="addinput" name="nadmin" required="required" pattern="([A-Z a-z 0-9]{3,})" value="<?php echo $edituser; ?>" placeholder="Enter Username"/></td>
         </tr>
         <tr>
           <td>First Name: </td>
           <td><input type="text" class="addinput" name="fname" required="required" pattern="([A-Z a-z]{3,})" value="<?php echo $editfname; ?>" placeholder="Enter First Name"/></td>
         </tr>
         <tr>
           <td>Last Name: </td>
           <td><input type="text" class="addinput" name="lname" required="required" pattern="([A-Z a-z]{3,})" value="<?php echo $editlname; ?>" placeholder="Enter Last Name"/></td>
         </tr>
         <tr>
           <td>Email: </td>
           <td><input type="email" class="addinput" name="email" required="required" pattern="([A-Z a-z 0-9 /./-]{3,})@([A-Z a-z]{3,}).com" value="<?php echo $editemail; ?>" placeholder="Enter Email"/></td>
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
           <td>Password Current: </td>
           <td><input type="password" class="addinput" name="cpass" required="required" pattern=".{6,}" placeholder="Current Password"/></td>
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
