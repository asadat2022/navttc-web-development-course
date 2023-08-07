<?php
	$showad = "";
	$stdSQL="SELECT * FROM `std_manage_system`.`STUDENT`";
	$stdrecord=mysqli_query($dbconnect,$stdSQL);
	if (mysqli_num_rows($stdrecord)>0) {
		while ($stdrow = mysqli_fetch_array($stdrecord)){
				$showad .='<tr>
							<td>'.$stdrow["student_ID"].'</td>
							<td>'.$stdrow["studentFirstName"].'</td>
							<td>'.$stdrow["studentLastName"].'</td>
							<td>'.$stdrow["DepartmentName"].'</td>
							<td>'.$stdrow["studentProgram"].'</td>
							<td>'.$stdrow["studentSemester"].'</td>
							<td><a href="admin_panal.php?page=12&delstd='.$stdrow["student_ID"].'"><button class="edtdelbtn" >Delete</button></a></td>
							<td><a href="admin_panal.php?page=13&editstd='.$stdrow["student_ID"].'"><button class="edtdelbtn" >Edit</button></a></td>
						</tr>';
		}
	}
	else{
		$showad ='<tr>
				<td colspan="8">No Record Found</td>
				</tr>';
	}
 ?>

<div class=" content">
		<h1>View Student</h1>
		<table class="viewad">
			<tr>
				<th>Registration No.</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Department</th>
				<th>Program</th>
				<th>Semester</th>
				<th colspan="2"><b>Action</b></th>
			</tr>
			<?php echo $showad; ?>
		</table>
		<a class="dbanc" href="admin_panal.php?page=11"><button class="dbbtn">ADD Student</button></a>

</div>
