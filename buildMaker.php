<?php
	include 'Masterpage.php';
	
	if(isset($_REQUEST['confirm']))	{
	  
	  echo 'frwfwfw';
	  //completeOrder();
	  header('Location: buildMaker.php');
	}
	
	if(isset($_REQUEST['save']))	{
		echo 'wdwd';
	}
	
	$controller = new Controller();
	
	$customBuildObj;
	
	
	
	if(isset($_POST['changePart']))	{
		
		saveBuild();
		
		header('Location: browseParts.php?edit='.$_POST['edit'].'&type='.$_POST['changePart']);
	}
	
	if(isset($_POST['saveBuild']))	{
		
		saveBuild();
		header('Location: CustomizeBuild.php');
	}
	
	function saveBuild()	{
		
		$controller1 = new Controller();
		
		$newName = $_POST['buildName'];
		$newComm = $_POST['buildDesc'];
		
		$buildObj = $controller1->getBuildFromId($_POST['edit']);
		
		$buildObj->setBuildName($newName);
		$buildObj->setBuildComment($newComm);
		
		if(isset($_POST['featured']) && $_POST['featured'] == 19786)	{
			
			$buildObj->setBuildFeatured(1);
		}
		
		else	{
			$buildObj->setBuildFeatured(0);
		}
		
		if(!$controller1->updateCustomBuild($buildObj))	{
		}
	}
	
	if(isset($_POST['orderBuild']))	{
		
		saveBuild();
		
		echo count($controller->getPresentPartTypesFromBuild($_POST['edit']));
		if(count($controller->getPresentPartTypesFromBuild($_POST['edit'])) == count($controller->getPartTypes()))	{
			
			header('Location: order.php?'.'order='.$_POST['edit']);
		}
	}
	
	if(isset($_GET['edit']))	{
		
		$customBuildObj = $controller->getBuildFromId($_GET['edit']);
	}
	
	else if(isset($_POST['edit']))	{
		
		$customBuildObj = $controller->getBuildFromId($_POST['edit']);
	}
	else	{
		
		//header('Location: Home.php');
	}
	
	$partTypes = $controller->getPartTypes();
	$typesPresentList = $controller->getPresentPartTypesFromBuild($customBuildObj->getId());

	if(($controller->accountAuthenticateAuto()->getRestricted() == 1) || ($controller->accountAuthenticateAuto()->getId() != $customBuildObj->getAccountId()))	{
		
		header('Location: Home.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Build Maker</title>
		
		<script type="text/javascript">
		$(document).ready(function(e){
			$("#saveButton").click(function(){
				
				console.log("frr")
				var name = document.getElementById("buildName").value;
				var desc = document.getElementById("commentTextarea").innerHTML;
			   
			   $.post("operations.php?save=0",
				  {
					nm: name,
					dc: desc
				  },
				  function(data, status){
					//alert("Data: " + data + "\nStatus: " + status);
				  });
			});
		});
		</script>
	</head>
	<body>
		
		<div class="reviewEl">
			<h3 style="margin-top: 70px;">Build Maker</h3>
		<form action=<?php echo '"'.'buildMaker.php?edit='.$customBuildObj->getId().'"'; ?> method="POST">
		<input type="hidden" name="edit" value=<?php echo '"'.$customBuildObj->getId().'"'; ?> /> 
			<div class="input-group mb-3" style="margin-top: 30px;">
				<input type="text" id="buildName" class="form-control" name="buildName" placeholder="Build Name" value=<?php echo '"'.$customBuildObj->getBuildName().'"' ?>>
			</div>
			
			
			
			<table class="table" id="partList" style="width:100%;margin-left: auto;margin-right: auto;">

				<thead>
					<tr>
						<th scope="col">Component</th>
						<th scope="col">Preview</th>
						<th scope="col">Name</th>
						<th scope="col">Description</th>
						<th scope="col">Wattage</th>
						<th scope="col">Price</th>
						<th scope="col"></th>

					</tr>
				</thead>

				<tbody id="menuOrderListBody">

					<?php 
					$ii = 0;
					foreach($partTypes as $partType)	{ 
						
						$pcPartsByType = $controller->getPCPartsByCustomBuildIdAndType($customBuildObj->getId(), $ii);
					
						if(!empty($pcPartsByType))	{
							
							
							foreach($pcPartsByType as $pcPart)	{
							
					?>
					<tr>
						<th scope="row" name="buildId"><?php echo strtoupper($partType); ?></th>
						
						<td><img width="50px" height="50px" src=<?php echo '"'.$pcPart->getPcPartImageLink().'"'; ?> class="img-fluid rounded"></td>
						<td><?php echo $pcPart->getPcPartName(); ?></td>
						<td><?php echo $pcPart->getPcPartDescription(); ?></td>
						<td><?php echo $pcPart->getPcPartWattage().'W'; ?></td>
						<td><?php echo $pcPart->getPcPartPrice().'$'; ?></td>
						
						<td Style="text-align: right;">
							<button type="submit" class="btn btn-primary" name="changePart" value=<?php echo '"'.$ii.'"'; ?> Style="background-color: gray;" >Change</button>
						</td>
						
					</tr>
					<?php 
								
							}
						}
						
						else	{
							?>
							
					<tr>
						<th scope="row" name="buildId"><?php echo strtoupper($partType); ?></th>
						
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
						<td Style="text-align: right;">
							<button type="submit" class="btn btn-primary" name="changePart" value=<?php echo '"'.$ii.'"'; ?> Style="background-color: black;" >Choose</button>
						</td>
						
					</tr>	
					
							
							<?php 
						}
						
						$ii += 1;
					}
					?>

				</tbody>
			</table>
			
			<!--Comment-->
			<div class="form-floating reviewEl" style="margin-top: 50px;">
			
				<textarea class="form-control" placeholder="Leave a comment here" name="buildDesc" id="commentTextarea" style="height: 100px"><?php echo $customBuildObj->getBuildComment() ?></textarea>

				<label for="commentTextarea">Comments</label>
			</div>
			
			<?php if($controller->accountAuthenticateAuto()->getAdmin() == 1)	{ ?>
			<div class="form-check" style="margin-top: 50px; margin-left: 50px; margin-right: 40px; margin-bottom: 50px;">
				<input class="form-check-input" name="featured" type="checkbox" value="19786" id="featuredCheck" <?php if($controller->getBuildFromId($_GET['edit'])->getBuildFeatured() == 1)	{echo 'checked="checked"';}?>>
				<label class="form-check-label" for="featuredCheck">
					Featured
				</label>
			</div>
			<?php } 

				  else	{ ?>
			
					<input type="hidden" name="featured" value=0 /> 
			<?php } ?>
				
			<div class="row" style="margin-top: 50px; margin-left: 40px; margin-right: 40px; margin-bottom: 50px;">
				<div class="col" style="text-align: left;">
					<button type="submit" name="saveBuild" class="btn btn-outline-success btn-lg" id="saveButton">Save Build</button>
				</div>
				
				<div style="text-align: right;" class="col">
					<form action="">	
					<button type="submit" name="orderBuild" class="btn btn-outline-primary btn-lg">Order Build</button>
					</form>
				</div>
				
			</div>
			
			</form>
		</div>
	</body>
</html>

