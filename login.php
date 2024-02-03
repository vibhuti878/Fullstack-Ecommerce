<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Jost:wght@600&family=Roboto:wght@300&display=swap"
		rel="stylesheet">
<style type="text/css">
body{
		background-color: rgb(227, 226, 226);
}
.container{
      border: 2px solid white;
	  border-radius: 40px;
	  background-color: white;
	  width: 40%;
	  height: 70vh;
	  margin-top: 60px;
	  box-shadow: 1px 1px 10px 10px rgb(137, 137, 137);
	  font-family: 'Jost', sans-serif
}
form{
	/* border: 2px solid black; */
	margin-top: 20px;
	margin-left: 150px;
}
input{
	width: 60%;
	padding: 8px;
	background-color: rgb(229, 229, 230);
	border: none;
	border-radius: 4px;
}
input:hover{
	box-shadow: 3px 3px 2px 2px rgb(155, 155, 155);
}
button{
 width: 60%;
}
</style>
</head>
<body>
 <div class="container">
 	<center class="mt-5"><h1>Hello, Welcome Back!</h1></center>
    <form action="log.php" method="post">
 	<label for="email">Email:</label><br>
 	<input type="text" name="email" placeholder="Enter Your email"><br><br>
 	<label for="psw">Password:</label><br>
 	<input type="password" name="psw" placeholder="Enter Your password"><br><br>
 	<button type="submit" class="btn btn-primary" name="login">Log In</button><br><br>
    <a href="#">Forgot Password?</a><br>
	<p>Don't have an account yet?<a href="regist_form.php">Get registered with us.</a></p>
</form>
 </div>
</body>
</html>