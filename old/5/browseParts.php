<?php
	include 'Masterpage.php';
	$controlObj = new Controller();
	$account = $controlObj -> accountAuthenticateAuto();
	$parts;

	if(isset($_POST['choose'])) {
		$parts = new PCPart(0, $_POST['name'], $_POST['desc'], $_POST['price']);
	}

?>

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
		<title>Browse PC Parts</title>
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
			<h3 style="margin-top: 70px;">Browse PC Parts</h3>

			<div class="search-container search" style="text-align:right;">


				<form action="/browseParts.php">
					<input type="text" placeholder="Search.." name="search"/>
					<button>
						<i class="fa fa-search"></i>
					</button>
				</form>
			</div>

			<table class="table" id="menuOrderList" style="width:95%;margin-top:50px;">

				<thead>
					<tr>
						<th scope="col">Preview</th>
						<th scope="col">Name</th>
						<th scope="col">Description</th>
						<th scope="col">Price</th>
						<th scope="col"></th>

					</tr>
				</thead>

				<form action="browseParts.php" method="POST">
				<tbody>
					
					<tr>
						<td><img align="center" style="width: 100px; height: 100px;" name="img" src="Images/testImg.jpg" /></td>

						<td><label name="name"></label></td>
						<td><label name="desc"></label></td>
						<td Style="text-align: left;"><label name="price"></label></td>
						<td>
							<button class="btn btn-primary" name="choose" onclick="<?php echo "choosePart(".partObj->id.")" ?>" Style="background-color: gray; margin-top: 30px;">Choose</button>
						</td>
					</tr>

				</tbody>
				</form>

			</table>
		</div>
	</body>
</html>
