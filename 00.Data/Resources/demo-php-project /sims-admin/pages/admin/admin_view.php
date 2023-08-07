<?php
	$showad = "";
	$SQL="SELECT * FROM `std_manage_system`.`sys_admin`";
	$record=mysqli_query($dbconnect,$SQL);
  if (mysqli_num_rows($record)>0) {
    while ($row=mysqli_fetch_array($record)){
      if ($row["admin_ID"]!=1) {
        $showad .= '<tr>
              <td>'.$row["admin_Username"].'</td>
              <td>'.$row["admin_FirstName"].'</td>
							<td>'.$row["admin_LastName"].'</td>
							<td>'.$row["admin_Email"].'</td>
  						<td><a href="admin_panal.php?page=3&delaid='.$row["admin_ID"].'"><button class="edtdelbtn" >Delete</button></a></td>
              <td><a href="admin_panal.php?page=5&editid='.$row["admin_ID"].'"><button class="edtdelbtn" >Edit</button></a></td>
            </tr>';
      }
    }
  }
  if (mysqli_num_rows($record)==1) {
    $showad .='<tr>
        <td colspan="6">No Record Found</td>
        </tr>';
  }
 ?>

<div class=" content">
		<h1>View Admin</h1>
		<table class="viewad">
			<tr>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th colspan="2"><b>Action</b></th>
			</tr>
			<?php echo $showad; ?>
		</table>
		<a class="dbanc" href="admin_panal.php?page=2"><button class="dbbtn">ADD Admin</button></a>

</div>
