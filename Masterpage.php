<?php

	include('Models.php');
	
	$controllerObj = new Controller();
	$html;
	$logout;
	
	if(!is_null($controllerObj->accountAuthenticateAuto()))	{
		
		$html = '
		<li class="nav-item">
			<a class="nav-link" href="review.php">Review</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="CustomizeBuild.php">Customize</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="profile.php">Account</a>
		</li>';
		$logout = '<form method="POST" class="d-flex">
		<li class="nav-item">
		<input type="hidden" name="id" />
		<input
		  type="submit"
		  name="logout"
		  class="btn btn-secondary"
		  value="Logout"
		  style=""
		/>
		</li>
		</form>';
		if(isset($_POST['logout'])) {
			$controllerObj -> accountSignout();
			header('Location: Signup.php');
		}
	}
	
	else	{
		$logout = '';
		$html = '<li class="nav-item"><a class="nav-link" href="signup.php">Sign&nbspIn</a></li>';
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Edit.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
	
	<link href="CSS/fiveStar.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/ef216a6242.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>BuyYourPC</title>
  </head>
  <body style="background-color: #bec5d1">
		<!--navbar-->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="Home.php" style="">BuyYourPC</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
					<span class="navbar-toggler-icon"/>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="Home.php">Home</a>
						</li>
						<?php
							echo $html;
						?>
						<?php
						
						if(!is_null($controllerObj->accountAuthenticateAuto()))	{
							if($controllerObj->accountAuthenticateAuto()->getAdmin() == 1)	{
								
								echo '<li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>';
							}
						}
						?>
						
					</ul>
					<?php
							echo $logout;
						?>
				</div>
			</div>
		</nav>
		<div style="margin-bottom: 120px;"></div>
	</body>
</html>