<?php
  $delstd = $_GET["delstd"];
  $delfname="";
  $dellname="";
  $delreg="";

  $delSQL="SELECT * FROM `std_manage_system`.`Teacher` WHERE teacher_ID='".$delstd."'";
  $delrecord=mysqli_query($dbconnect,$delSQL);

  if (mysqli_num_rows($delrecord)>0) {
    $delrow=mysqli_fetch_array($delrecord);
    if ($delstd==$delrow["teacher_ID"]) {
      $delfname=$delrow["teacherFirstName"];
      $dellname=$delrow["teacherLastName"];
      $delreg=$delrow["teacher_ID"];
    }
  }

  if (isset($_POST["delbtn"])) {
    $delSQL="DELETE FROM `std_manage_system`.`Teacher` WHERE teacher_ID ='".$delstd."'";
    $delrecord=mysqli_query($dbconnect,$delSQL);
    header("location:admin_panal.php?page=6");
  }

 ?>


<div class=" content">
    <h1>Confirm Delete</h1>
      <table class="bdtable">

        <tr>
          <th>First Name: </th>
          <td><?php echo "$delfname"; ?></td>
        </tr>

        <tr>
          <th>Last Name: </th>
          <td><?php echo "$dellname"; ?></td>
        </tr>

        <tr>
          <th>Teacher ID: </th>
          <td><?php echo "$delreg"; ?></td>
        </tr>

      </table>
      <form method="post">
        <input type="submit" class="delbtn" name="delbtn" value="Confirm Delete">
      </form>
</div>
