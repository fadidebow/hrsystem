<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Admin DashBoard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
</head>
<body style="background-color: #dedede">
	<?php
include'adminnav.php';
	?> 

<div class="container">
	<div class="alert alert-warning">
			<h3 class="text-center"><i class="fa fa-user"></i> Manage Vacations </h3>
		</div>

<div class="table-responsive">
		<table class="table" id="xx">
		<thead>
			<tr>
				<th>Name</th>
				<th>Total</th>
				<th>Taked</th>
				<th>Remine</th>
				
				<th>Start Date</th>
				<th>End Date</th>
				<th>Type</th>

				<th>Delete</th>
				<th>Update</th>
				
			</tr>
		</thead>

		<tbody>
			<?php
			include'conn.php';
			$e=mysqli_query($con,"select * from vacation");

			while($row=mysqli_fetch_array($e))
			{
				echo'
				<tr>
					
					
					<td>'.$row['name'].'</td>
					<td>'.$row['total'].'</td>
					<td>'.$row['taked'].'</td>
					<td>'.$row['remin'].'</td>
					<td>'.$row['sd'].'</td>
					<td>'.$row['ed'].'</td>
					<td>'.$row['type'].'</td>
					
					


<td> <a href="mv.php?fadi='.$row['id'].'" class="btn btn-danger">Delete <i class="fa fa-trash"></i>   </a> </td>


<td> <a href="editvac.php?fadi='.$row['id'].'" class="btn btn-primary">Update <i class="fa fa-trash"></i>   </a> </td>

 


				';
			}

// <td> <a href="editvac.php?fadi='.$row['id'].'" class="btn btn-primary">Update <i class="fa fa-trash"></i>   </a> </td>

		if(isset($_GET['fadi']))
		{
			$x=$_GET['fadi'];

			$t=mysqli_query($con,"delete from vacation where id='$x'");
			if(isset($t)){
				header("Location: mv.php");
			}
		}

			?>
		</tbody>



		
	</table>

</div>


</div>









<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#xx').DataTable();
} );
</script>
</body>
</html>
<?php
ob_end_flush();
?>