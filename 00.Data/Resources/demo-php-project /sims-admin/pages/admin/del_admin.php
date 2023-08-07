<?php
  $delaid = $_GET["delaid"];
  $delfname="";
  $dellname="";
  $deluser="";
  $delemail="";

  $delSQL="SELECT * FROM `std_manage_system`.`sys_admin` WHERE admin_ID='".$delaid."'";
  $delrecord=mysqli_query($dbconnect,$delSQL);

  if (mysqli_num_rows($delrecord)>0) {
    $delrow=mysqli_fetch_array($delrecord);
    if ($delaid==$delrow["admin_ID"]) {
      $delfname=$delrow["admin_FirstName"];
      $dellname=$delrow["admin_LastName"];
      $deluser=$delrow["admin_Username"];
      $delemail=$delrow["admin_Email"];
    }
  }
  if (isset($_POST["delbtn"])) {
    $delSQL="DELETE FROM `std_manage_system`.`sys_admin` WHERE admin_ID='".$delaid."'";
    $delrecord=mysqli_query($dbconnect,$delSQL);
    $delaid="";
    header("location:admin_panal.php?page=1");
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
          <th>Username: </th>
          <td><?php echo "$deluser"; ?></td>
        </tr>

        <tr>
          <th>Email: </th>
          <td><?php echo "$delemail"; ?></td>
        </tr>

      </table>
      <form method="post">
        <input type="submit" class="delbtn" name="delbtn" value="Confirm Delete">
      </form>
</div>
