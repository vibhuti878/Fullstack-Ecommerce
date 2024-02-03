<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Jost:wght@600&family=Roboto:wght@300&display=swap"
		rel="stylesheet">
</head>
<style type="text/css">
	.container {
		/* border: 2px solid black; */
		border-radius: 40px;
		margin-top: 40px;
		background-color: rgb(255,255,255);
		height: 88vh;
		box-shadow: 1px 1px 10px 10px rgb(205, 205, 205);
		display: flex;
		overflow: hidden;
		padding-right: 0;
	}
    .image img {
		width: 100%;
		margin-top: 60px;
		border-radius: 50px;
		/* border: 2px solid black; */
	}
    .text {
		background-color: rgb(55, 81, 126);
		color: white;
		/* margin-right: 0%; */
		flex-direction: end;
		/* border: 2px solid red; */
		width: 50%;
		font-family: 'Jost', sans-serif;
    }
    .text form {
		margin: 20px;
	}
    input {
		padding: 5px;
		background-color: rgb(243, 243, 246);
		border: none;
		border-radius: 10px;
		font-family: none;
	}
    input:hover {
		box-shadow: 2px 2px 2px 2px rgb(30, 44, 44);
	}
    button {
		border-radius: 20px;
		color: white;
		border: 10px solid rgb(0, 155, 217);
		background-color: rgb(0, 155, 217);
		float: right;
	}
    button:hover {
		background-color: rgb(15, 180, 246);
		border-color: rgb(15, 180, 246);
    }
    a{
    	text-decoration: none;
    	color: white;
    	background-color:rgb(0, 155, 217) ;
    	padding: 10px;
    	border-radius: 20px;
    }
    a:hover{
    	background-color: rgb(15, 180, 246);
    }
</style>

<body>
    <div class="container">
		<div class="image">
			<img src="login.png" alt="Image">
		</div>
		<div class="text">
			<form action="" method="post">
				<h1>Grow your business!</h1>
				<p>Get registered with us.</p>
				<div class="name">
					<label for="name">Name:</label> <br>
					<input type="text" name="name">
				</div><br>
				<div class="email">
					<label for="email">Email:</label> <br>
					<input type="text" name="email">
				</div><br>
				<div class="city">
					<label for="city">city:</label> <br>
					<select name="city">
						<option value="Delhi">Delhi</option>
						<option value="Noida">Noida</option>
						<option value="Gurugram">Gurugram</option>
						<option value="Lucknow">Lucknow</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Chennai">Chennai</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Pune">Pune</option>
					</select>
				</div><br>
				<div class="contact">
					<label for="contact">Contact No.:</label> <br>
					<input type="text" name="contact">
				</div><br>
				<div class="pass">
					<label for="psw">Password:</label><br>
					<input type="Password" name="psw">
				</div><br>
				<a href="login.php">Log In</a><br>
				<button type="submit" name="sbm">Register</button>
			</form>
		</div>
	</div>
	<?php 
       
       $con = mysqli_connect('localhost','root','','vibhuti') or die();


       if (isset($_REQUEST['sbm'])) {
       	// code...
       	$name = $_POST['name'];
       	$email = $_POST['email'];
       	$city = $_POST['city'];
       	$cont = $_POST['contact'];
       	$pass = $_POST['psw'];
 
 $query = mysqli_query($con,"INSERT INTO `regist_form`(`name`, `email`, `city`, `contact`, `pass`) VALUES ('$name','$email','$city','$cont','$pass')");


if ($query) {
	// code...
	echo "<script>alert('Registration Completed');window.location.href='login.php'</script>";
}else{
	echo "<script>alert('Couldn't complete the request')</script>";
}
 }
      
?>
</body>
</html>






	 

