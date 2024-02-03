<?php 

$con = mysqli_connect('localhost','root','','vibhuti') or die();

if (isset($_REQUEST['login'])) {
	// code...
	$email = $_POST['email'];
	$pass = $_POST['psw'];

	$query = mysqli_query($con,"SELECT * FROM `regist_form` WHERE email = '$email' and pass = '$pass' ");

	if ($query) {
		// code...

		while ($row = mysqli_fetch_array($query)) {
			// code...

			session_start();

			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['city'] = $row['city'];
            

            echo "<script>alert('Welcome Back!');window.location.href='homepage.php'</script>";
		}
	}else{
		echo "<script>alert('Something went wrong!');window.location.href='login.php'</script>";
	}
}

 ?>