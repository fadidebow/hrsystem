<?php

ob_start();



?>

<!DOCTYPE html>

<html>

<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="utf-8">

	<title>test db</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" 

	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">



		

			html {

  position: relative;

  min-height: 100%;

}



.footer{

	position: fixed;

	width: 100%;

	left: 0;

	bottom: 0;



}



	</style>

</head>

<body style="background-color: #003b64">





	<div class="container" style="height: 100%;">

		<div class="alert alert-warning">

			<h1 class="text-center"><i class="fa fa-heart"></i> HR BACT <i class="fa fa-heart"></i></h1>

		</div>

		

		<div class="row">



			<div class="col-md-3"></div>



			<div class="col-md-6">

				<div class="panel panel-warning">

			<div class="panel-heading">

				<h1 class="text-center text-uppercase">Log In </h1>

			</div>



			<div class="panel-body">

		<form action="au.php" method="post">
			<input type="text" placeholder="enter name" class="form-control" name="n"><br>

		<input type="email" placeholder="enter email" class="form-control" name="e"><br>









		<input type="password" placeholder="enter password"  class="form-control" name="p"><br>





		<input type="submit" value="create new account" class="btn btn-warning btn-lg" name="bt">

		

		</form>

			</div>



			<div class="panel-footer"></div>



		</div>

			</div>



			<div class="col-md-3"></div>

			









		</div>





	<div class="footer" style="border:solid 1px #ffdb00;">

		<h2 style="color: #ffdb00;" class="text-center text-uppercase">HR BACT</h2>

		<h4 style="color: #ffdb00;" class="text-uppercase text-center"> Fadi Debow &copy;</h4>

	</div>



	</div>













<script type="text/javascript" src="js/jQuery.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>

<?php

include'conn.php';


$n=isset($_POST['n'])?$_POST['n']:'';
$x=isset($_POST['e'])?$_POST['e']:'';


$y=isset($_POST['p'])?$_POST['p']:'';






if(isset($_POST['bt']))

{

	$result=mysqli_query($con,"insert into users(name,email,password)values('$n', '$x','$y' )");





	if(isset($result))

	{

	echo'<h1 class="alert alert-danger">add success</h1>';



		

	}

	else{

		echo'<h1 class="alert alert-danger">add failed</h1>';



	}







}

ob_end_flush();




?>