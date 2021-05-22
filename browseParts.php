<?php
	include 'Masterpage.php';
	$controlObj = new Controller();
	$account = $controlObj -> accountAuthenticateAuto();

	if(!isset($_GET['pageparts']) || !isset($_GET['search']))	{
		
		header("Location: browseParts.php?edit=".$_GET['edit'].'&type='.$_GET['type'].'&pageparts=1&search=');
	}

	if(isset($_POST['choose'])) {
		$controlObj->replacePartBuildIfTypeExistAddIfNot($_POST['edit'], $_POST['choose']);
		header("Location: buildMaker.php?edit=".$_POST['edit']);
	}
	
	if(!isset($_GET['edit']) && !isset($_POST['edit'])) {
		header('Location: Home.php');
	}
	
	$compatibility = $controlObj->getCompatibilityFromBuildAsideFrom($_GET['edit'], $_GET['type']);
	
	if($_GET['type'] > 1)	{
		$compatibility = 0;
	}
	
	//echo $compatibility;

	$array = $controlObj->getPCPartsByCompatibilityAndType($compatibility, $_GET['type']);
	
	if(isset($_POST['searchBtn'])) {
		$search = $_POST['search'];
		$controlObj->getPCPartsBySearch($search);
	}
	
	$customBuildObj = $controlObj->getBuildFromId($_GET['edit']);

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

		<div class="reviewEl">
			<h3 style="margin-top: 70px;">Browse PC Parts</h3>

			<div class="search-container search" style="text-align:right;">


				<form action="browseParts.php">
					<input type="hidden" name="edit" value=<?php echo '"'.$_GET['edit'].'"'; ?>>
					<input type="hidden" name="type" value=<?php echo '"'.$_GET['type'].'"'; ?>>
					<input type="hidden" name="pageparts" value=<?php echo '"'.'1'.'"'; ?>>
					<input type="text" placeholder="Search" name="search"/>
					<button>
						<i class="fa fa-search"></i>
					</button>
				</form>
			</div>

			<table class="table" id="menuOrderList" style="width:95%;margin-top:50px;margin-left: auto;margin-right: auto;">

				<thead>
					<tr>
						<th scope="col">Preview</th>
						<th scope="col">Name</th>
						<th scope="col">Description</th>
						<th scope="col">Price</th>
						<th scope="col">Wattage</th>
						<th scope="col"></th>

					</tr>
				</thead>
				<form action="browseParts.php" method="POST">
				<input type="hidden" id="buildId" name="edit" value=<?php echo '"'.$_GET['edit'].'"'; ?>>
				<?php
					if(isset($_GET['pageparts']) && isset($_GET['search']))	{
							
							$array = $controlObj->getPCPartsBySearchCompatibilityAndTypeLimit(15, $_GET['pageparts'], $_GET['search'], $compatibility, $_GET['type']);
					}
					
					else	{
								
						echo "problems";
					}
					
					
				
				
					foreach($array as $part)	{
				?>
				
				
				<tbody>
					
					<tr>
						<td><img align="center" style="width: 50px; height: 50px;" name="img" src=<?php echo '"'.$part->getPcPartImageLink().'"' ?> /></td>

						<td><label name="name"><?php echo $part->getPcPartName(); ?></label></td>
						<td><label name="desc"><?php echo $part->getPcPartDescription(); ?></label></td>
						<td><label name="price"></label><?php echo $part->getPcPartPrice().'$'; ?></td>
						<td><label name="wattage"></label><?php echo $part->getPcPartWattage().'W'; ?></td>
						<td>
							<button type="submit" class="btn btn-primary" name="choose" Style="background-color: gray; margin-top: 8px;" value=<?php echo '"'.$part->getId().'"' ?>>Choose</button>
						</td>
					</tr>

				</tbody>
				
				<?php
					}
				?>
				</form>
			</table>
			
			<?php //paginator debut
			if(count($controlObj->getPCPartsBySearchCompatibilityAndType($_GET['search'], $compatibility, $_GET['type'])) > 15)	{ 
			
				$count = count($controlObj->getPCPartsBySearchCompatibilityAndType($_GET['search'], $compatibility, $_GET['type']));
			?>
			<div class="position-relative" style="margin-bottom: 75px;margin-top: 50px;">
			<div class="pagination position-absolute top-0 start-50 translate-middle">
			  <a href=<?php echo '"?edit='.$_GET['edit'].'&type='.$_GET['type'].'&pageparts=1&search='.$_GET['search'].'"'; ?>>&laquo;</a>
			  
			  
			  <?php 
			  if(isset($_GET['pageparts']))	{
				foreach($controlObj->getIndexCuts($_GET['pageparts'], 15, count($controlObj->getPCPartsBySearchCompatibilityAndType($_GET['search'], $compatibility, $_GET['type'])), 15) as $number)	{ ?>
			  <a <?php if(isset($_GET['pageparts']))	{if($_GET['pageparts'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?edit='.$_GET['edit'].'&type='.$_GET['type'].'&pageparts='.$number.'&search='.$_GET['search'].'"'; ?>><?php echo $number; ?></a>
			  
			  <?php 
				}
			  } 
			  
			  else	{
				  
				  foreach($controlObj->getIndexCuts(1, 15, count($controlObj->getPCPartsBySearchCompatibilityAndType($_GET['search'], $compatibility, $_GET['type'])), 15) as $number)	{ ?>
				  
				  <a <?php if(isset($_GET['pageparts']))	{if($_GET['pageparts'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?edit='.$_GET['edit'].'&type='.$_GET['type'].'&pageparts='.$number.'&search='.$_GET['search'].'"'; ?>><?php echo $number; ?></a>
				  
			
			<?php
				  }
			  }// echo '"?edit='.$_GET['edit'].'&type='.$_GET['type'].'&pageparts='.$number.'&search='.$_GET['search'].'"';
			?>
			  
			  
			  <a href=<?php echo '"?edit='.$_GET['edit'].'&type='.$_GET['type'].'&pageparts='.ceil(count($controlObj->getPCPartsBySearchCompatibilityAndType($_GET['search'], $compatibility, $_GET['type'])) / 15).'&search='.$_GET['search'].'"'; ?>>&raquo;</a>
			</div>
			</div>
			<?php 
			} //paginator end ?>
			
			<div style="margin-top:50px;"></div>
			
		</div>
	</body>
</html>
