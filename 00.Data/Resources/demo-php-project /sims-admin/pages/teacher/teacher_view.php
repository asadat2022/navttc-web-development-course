<?php
	$showad = "";
	$stdSQL="SELECT * FROM `std_manage_system`.`Teacher`";

	$stdrecord=mysqli_query($dbconnect,$stdSQL);
	if (mysqli_num_rows($stdrecord)>0) {
		while ($stdrow = mysqli_fetch_array($stdrecord)){
				$showad .='<tr>
							<td>'.$stdrow["teacher_ID"].'</td>
							<td>'.$stdrow["teacherFirstName"].'</td>
							<td>'.$stdrow["teacherLastName"].'</td>
							<td>'.$stdrow["DepartmentName"].'</td>
							<td><a href="admin_panal.php?page=8&delstd='.$stdrow["teacher_ID"].'"><button class="edtdelbtn" >Delete</button></a></td>
							<td><a href="admin_panal.php?page=9&editstd='.$stdrow["teacher_ID"].'"><button class="edtdelbtn" >Edit</button></a></td>
						</tr>';
		}
	}
	else{
		$showad ='<tr>
				<td colspan="6">No Record Found</td>
				</tr>';
	}
 ?>

<div class=" content">
		<h1>View Teacher</h1>
		<table class="viewad">
			<tr>
				<th>Teacher ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Department</th>
				<th colspan="2"><b>Action</b></th>
			</tr>
			<?php echo $showad; ?>
		</table>
		<a class="dbanc" href="admin_panal.php?page=7"><button class="dbbtn">ADD Teacher</button></a>

</div>
