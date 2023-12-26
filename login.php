<?php session_start(); 
?>
<?php include('connect.php'); ?> 			


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>IS Login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>

<body>
	<div class="header" id="section1">
		<nav>
			<div class="logo">
				<a href="home.php"><img src="img/IS.png" width="20%"></a>
			</div>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="home.php" id="hm"><strong>HOME</strong></a></li>
					<li><a href="result.php"><strong>RESULTS</strong></a></li>
					<li><a href="contact.php"><strong>CONTACT US</strong></a></li>
					<li><a href="login.php"><strong>LOGIN</strong></a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
	</div>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>TU-DU</h1>
				<p>Welcome to the TU-DU summer school web development program</p>
				<span>
					<p>connect with us on social media</p>
					<a href="https://www.instagram.com/tongmyong_tu/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://twitter.com/tongmyong?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
				</span>
			</div>
		</div>


		<div class="right">
			<h2>Login</h2>
			<p>To continue the Survey, Fill in the following details, it takes less than a minute</p>
			<form action="action.php" id="formvalidate" method="post">
				<div class="inputs">
					<label for="name" class="label"><input type="text" placeholder="user name" id="name" class="form-control" name="name" required></label>
					<label for="mail" class="label"><input type="email" placeholder="user mail" id="mail" class="form-control" name="mail" required></label>
	
					<br><br>
					<span>University:</span>
					<label for="uni" class="label">
						<select name="uni" id="uni" >
							<option value="sel">Select a University</option>
							<option value="University of Delhi">University of Delhi</option>
							<option value="Tongmyong University">Tongmyong University</option>
						</select>
					</label>
	
					<br><br>
					<span>Profession:</span>
					<label for="pro" class="label">
						<select name="pro" id="pro">
							<option value="prof">Select Profession </option>
							<option value="Student">Student</option>
							<option value="Teacher">Teacher</option>
						</select>
					</label>
				</div>
				<br>
				<input type="submit" name="submit" id="submit" value="Submit"></input>
			</form>
		

		</div>

	</div>
</script>
<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>

</html>