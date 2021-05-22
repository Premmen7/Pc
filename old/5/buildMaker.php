<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="Edit.css" rel="stylesheet" />
		<link href="CSS/fiveStar.css" rel="stylesheet" />
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
    >
		</script>
		<script src="https://kit.fontawesome.com/ef216a6242.js" crossorigin="anonymous"></script>
		<title>Build Maker</title>
	</head>
	<body>
		<!--navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
					<span class="navbar-toggler-icon"/>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="Home.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="second.html">Second</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="third.html">Third</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="fourth.html">Fourth</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Signup.html">Account</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		
		<div class="reviewEl">
			<h3 style="margin-top: 70px;">Build Maker</h3>
		
			<div class="input-group mb-3" style="margin-top: 30px;">
				<input type="text" class="form-control" placeholder="Build Name">
			</div>
			
			<div class="container" style="margin-top: 50px;">
				<div class="row">
					<div class="col" style="text-align: left;">
						<td><img align="center" style="width: 100px; height: 100px;" src="Images/testImg.jpg" /></td>
					</div>
					<div class="col">
						
						<h5>test0</h5>
					
					</div>
					<div style="text-align: right;" class="col">
						
						<button type="button" class="btn btn-light btn-lg">Choose</button>
					
					</div>
				</div>
			</div>
			<hr/>
			
			<div class="container" style="margin-top: 50px;">
				<div class="row">
					<div class="col" style="text-align: left;">
						<img align="center" style="width: 100px; height: 100px;" src="Images/testImg.jpg" />
					</div>
					<div class="col">
						
						<h5>test1</h5>
					
					</div>
					<div style="text-align: right;" class="col">
						
						<button type="button" class="btn btn-light btn-lg">Change</button>
					
					</div>
				</div>
			</div>
			<hr/>
			
			<div class="form-floating reviewEl" style="margin-top: 50px;">
			
				<textarea class="form-control" placeholder="Leave a comment here" id="commentTextarea" style="height: 100px"></textarea>

				<label for="commentTextarea">Special Requests</label>
			</div>
			
			<div class="form-check" style="margin-top: 50px; margin-left: 50px; margin-right: 40px; margin-bottom: 50px;">
				<input class="form-check-input" type="checkbox" value="" id="featuredCheck">
				<label class="form-check-label" for="featuredCheck">
					Featured
				</label>
			</div>
			
			<div class="row" style="margin-top: 50px; margin-left: 40px; margin-right: 40px; margin-bottom: 50px;">
				<div class="col" style="text-align: left;">
					<button type="button" class="btn btn-outline-success btn-lg">Save Build</button>
				</div>
				
				<div style="text-align: right;" class="col">
						
					<button type="button" class="btn btn-outline-primary btn-lg">Order Build</button>
					
				</div>
			</div>
			
			
		</div>
	</body>
</html>

<?php
	
	if(isset($_REQUEST['confirm']))	{
	  
	  echo 'frwfwfw';
	  //completeOrder();
	  header('Location: buildMaker.php');
	}

?>