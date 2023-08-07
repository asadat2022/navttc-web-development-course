<?php
  $editid = $_GET["editstd"];
  $editfname="";
  $editlname="";
  $edituser="";
  $editdep="";

  $editSQL="SELECT * FROM `std_manage_system`.`STUDENT` WHERE student_ID='".$editid."'";
  $editrecord=mysqli_query($dbconnect,$editSQL);
  $editrow=mysqli_fetch_array($editrecord);

  $edituser=$editrow["student_ID"];
  $editfname=$editrow["studentFirstName"];
  $editlname=$editrow["studentLastName"];
  $editdep=$editrow["DepartmentName"];
  $editprog=$editrow["studentProgram"];
  $editseme=$editrow["studentSemester"];



    if (isset($_POST["btn-submit"])) {
      if ($_SESSION["pass"]===$_POST["cpass"]) {
        $edituser = $_POST["stdid"];
        $editfname = $_POST["fname"];
        $editlname = $_POST["lname"];
        $editdep = $_POST["dep"];
        $editprog = $_POST["prog"];
        $editseme = $_POST["seme"];
        if ($editdep==='Choose Department') {
          echo '<script>
          alert("Must Choose Department");
          window.location.href="admin_panal.php?page=13&editstd='.$editid.'";
          </script>';
        }
        if ($editprog==='Choose Program') {
          echo '<script>
          alert("Must Choose Program");
          window.location.href="admin_panal.php?page=13&editstd='.$editid.'";
          </script>';
        }
        if ($editseme==='Choose Semester') {
          echo '<script>
          alert("Must Choose Semester");
          window.location.href="admin_panal.php?page=13&editstd='.$editid.'";
          </script>';
        }

        $SQL="UPDATE `std_manage_system`.`STUDENT` SET student_ID ='$edituser', studentFirstName ='$editfname', studentLastName='$editlname', DepartmentName='$editdep', studentProgram='$editprog', studentSemester='$editseme' WHERE student_ID='$editid'";
        $usertest = mysqli_query($dbconnect,$SQL);
        if ($usertest>0) {
          if (!empty($_POST["npass"])&&!empty($_POST["rpass"])) {
            if ($_POST["npass"]===$_POST["rpass"]) {
              $editpass=$_POST["npass"];
              $SQL="UPDATE `std_manage_system`.`STUDENT` SET studentPassword ='$editpass' WHERE student_ID='$editid'";
              mysqli_query($dbconnect,$SQL);
              echo '<script>
              alert("Student Updated");
              window.location.href="admin_panal.php?page=10";
              </script>';
            }else {
              echo '<script>
              alert("PASSWORD DID NOT MATCH");
              window.location.href="admin_panal.php?page=13&editstd='.$editid.'";
              </script>';
            }
          }else{
            echo '<script>
            alert("Student Updated");
            window.location.href="admin_panal.php?page=10";
            </script>';
          }
        }else {
          echo '<script>
          alert("This Registration No is already taken. Please choose Different.");
          window.location.href="admin_panal.php?page=13&editstd='.$editid.'";
          </script>';
        }
      }else {
        echo '<script>
            alert("INVALID CURRENT PASSWORD");
            window.location.href="admin_panal.php?page=13&editstd='.$editid.'";
            </script>';
          }
    }
 ?>







 <div class="content">
     <h1>Edit: <?php echo $edituser; ?></h1>
     <form method="post" name="editadmin">
       <table class="addtable">
         <tr>
           <td>Registration: </td>
           <td><input type="text" class="addinput" name="stdid" required="required" pattern="([A-Z]{3,})-([0-9]{3})([A-Z]{1})([0-9]{2})-([0-9]{1,})" value="<?php echo $edituser; ?>" placeholder="Enter Username"/></td>
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
           <td>Department: </td>
           <td>
             <select class="addinput" name="dep">
               <option><?php echo $editdep; ?></option>
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
               <option><?php echo $editprog; ?></option>
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
               <option><?php echo $editseme; ?></option>
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
             <center/>
           </td>
         </tr>
       </table>
     </form>
 </div>
