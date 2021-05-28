<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- STYLES -->

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/dashboard">CryptoAddress</a>
			</div>
			<?php
				if(isset($_SESSION['email'])){
					echo "<ul class='nav navbar-nav navbar-right'>
						<li><a href='/logout'><span class='glyphicon glyphicon-log-out'></span> Log out</a></li>
					</ul>";
				}
				else{
					echo "<ul class='nav navbar-nav navbar-right'>
						<li><a href='/signup'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
						<li><a href='/login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
					</ul>";
				}

			?>
			<!-- <ul class="nav navbar-nav navbar-right">
				<li><a href="/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul> -->
		</div>
	</nav>
</body>
</html>