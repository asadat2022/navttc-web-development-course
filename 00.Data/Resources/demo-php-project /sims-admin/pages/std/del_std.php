<?php
  $delstd = $_GET["delstd"];
  $delfname="";
  $dellname="";
  $delreg="";

  $delSQL="SELECT * FROM `std_manage_system`.`STUDENT` WHERE student_ID='".$delstd."'";
  $delrecord=mysqli_query($dbconnect,$delSQL);

  if (mysqli_num_rows($delrecord)>0) {
    $delrow=mysqli_fetch_array($delrecord);
    if ($delstd==$delrow["student_ID"]) {
      $delreg=$delrow["student_ID"];
      $delfname=$delrow["studentFirstName"];
      $dellname=$delrow["studentLastName"];
      $deldep=$delrow["DepartmentName"];
      $delprog=$delrow["studentProgram"];
      $delseme=$delrow["studentSemester"];
    }
  }

  if (isset($_POST["delbtn"])) {
    $delSQL="DELETE FROM `std_manage_system`.`STUDENT` WHERE student_ID ='".$delstd."'";
    $delrecord=mysqli_query($dbconnect,$delSQL);
    header("location:admin_panal.php?page=10");
  }

 ?>


<div class=" content">
    <h1>Confirm Delete</h1>
      <table class="bdtable">

        <tr>
          <th>Registration: </th>
          <td><?php echo "$delreg"; ?></td>
        </tr>

        <tr>
          <th>First Name: </th>
          <td><?php echo "$delfname"; ?></td>
        </tr>

        <tr>
          <th>Last Name: </th>
          <td><?php echo "$dellname"; ?></td>
        </tr>

        <tr>
          <th>Department: </th>
          <td><?php echo "$deldep"; ?></td>
        </tr>

        <tr>
          <th>Program: </th>
          <td><?php echo "$delprog"; ?></td>
        </tr>

        <tr>
          <th>Semester: </th>
          <td><?php echo "$delseme"; ?></td>
        </tr>



      </table>
      <form method="post">
        <input type="submit" class="delbtn" name="delbtn" value="Confirm Delete">
      </form>
</div>
