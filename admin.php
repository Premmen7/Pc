<?php
  include 'Masterpage.php';

  $controlObj = new Controller();

  $account = $controlObj->accountAuthenticateAuto();
  
  $htmlTextEmailError = '';
  
  if(isset($_POST['unrestrict']))	{
	  $accountEdit = $controlObj->getAccountFromEmail($_POST['email']);
	  
	  if(IS_NULL($accountEdit))	{
		  $htmlTextEmailError = 'Account Not Found';
	  }
	  
	  else	{
		  $accountEdit->setRestricted(0);
		  if($controlObj->updateAccount($accountEdit))	{
			  
			  $htmlTextEmailError = 'Unrestrict Successful';
		  }
		  
		  else	{
			  $htmlTextEmailError = 'Unrestrict Couldn\'nt happen';
		  }
	  }
  }
  
  else if(isset($_POST['restrict']))	{
	  $accountEdit = $controlObj->getAccountFromEmail($_POST['email']);
	  
	  if(IS_NULL($accountEdit))	{
		  $htmlTextEmailError = 'Account Not Found';
	  }
	  
	  else	{
		  $accountEdit->setRestricted(1);
		  if($controlObj->updateAccount($accountEdit))	{
			  
			  $htmlTextEmailError = 'Restrict Successful';
		  }
		  
		  else	{
			  $htmlTextEmailError = 'Restrict Couldn\'nt happen';
		  }
	  }
  }
  
  else if(isset($_POST['admin']))	{
	  $accountEdit = $controlObj->getAccountFromEmail($_POST['email']);
	  
	  if(IS_NULL($accountEdit))	{
		  $htmlTextEmailError = 'Account Not Found';
	  }
	  
	  else	{
		  $accountEdit->setAdmin(1);
		  if($controlObj->updateAccount($accountEdit))	{
			  
			  $htmlTextEmailError = 'Admin Successful';
		  }
		  
		  else	{
			  $htmlTextEmailError = 'Admin Couldn\'nt happen';
		  }
	  }
  }
  
  else if(isset($_POST['unadmin']))	{
	  $accountEdit = $controlObj->getAccountFromEmail($_POST['email']);
	  
	  if(IS_NULL($accountEdit))	{
		  $htmlTextEmailError = 'Account Not Found';
	  }
	  
	  else	{
		  $accountEdit->setAdmin(0);
		  if($controlObj->updateAccount($accountEdit))	{
			  
			  $htmlTextEmailError = 'Admin Successful';
		  }
		  
		  else	{
			  $htmlTextEmailError = 'Admin Couldn\'nt happen';
		  }
	  }
  }
  
  $idInput = $nameInput = $imageLinkInput = $descInput = $priceInput = $inventoryInput = $typeInput = $wattageInput = $compatibilityInput = '';
  
  if(isset($_POST['edit']))	{
	  
	  $pcPartObj = $controlObj->getPCPartById($_POST['edit']);
	  
	  $idInput = $pcPartObj->getId();
	  $nameInput = $pcPartObj->getPcPartName();
	  $imageLinkInput = $pcPartObj->getPcPartImageLink();
	  $descInput = $pcPartObj->getPcPartDescription();
	  $priceInput = $pcPartObj->getPcPartPrice();
	  $inventoryInput = $pcPartObj->getPcPartInventory();
	  $typeInput = $pcPartObj->getPcPartType();
	  $wattageInput = $pcPartObj->getPcPartWattage();
	  $compatibilityInput = $pcPartObj->getPcPartCompatibility();
  }
  
  else if(isset($_POST['delete']))	{
	  
	  $controlObj -> AdminDeletePcPart($_POST['delete']);
  }
  
  if(isset($_POST['dismiss']))	{
	  
	  $build = $controlObj -> getBuildFromId($_POST['dismiss']);
	  $build->setBuildOrdered(0);
	  $controlObj -> updateCustomBuild($build);
  }
  
  else if(isset($_POST['process']))	{
	  
	  $build = $controlObj->getBuildFromId($_POST['process']);
	  
	  $pcParts = $controlObj->getPCPartsByCustomBuildId($_POST['process']);
	  
	  foreach($pcParts as $pcPart)	{
		  
		  $pcPart.incrementOrderedTimes();
		  $pcPart.decrementInventory();
		  
		  $controlObj->updatePcPart($pcPart);
	  }
	  
	  $build->setBuildOrdered(0);
	  $controlObj -> updateCustomBuild($build);
  }
  
  $mostOrderedParts = $controlObj->getMostOrderedParts();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Admin Tools</title>
	
	<script type="text/javascript" src="Scripts2.js"></script>
  </head>
  <body>
    
	<div class="card text-center" style="padding: 15px; margin-left: 50px; margin-right: 50px; margin-top: 50px; background-color: #29251b; color: white;">
      <h4>Admin Tools</h4>
    </div>
	
	<div class="row justify-content-around" style="margin-top: 50px;">
	
		<div class="col-4">
            <form action="admin.php" method="post">
				<div class="mb-3" style="margin-left: 20px;">
					<label for="emailInput" class="form-label"><h5>Email address</h5></label>
					<input type="email" class="form-control" name="email" id="emailInput">
				</div>
				<div>
					<button type="submit" style="margin-left: 20px;" name="unrestrict" type="submit" class="btn btn-primary">Unrestrict</button>
					<button type="submit" style="margin-left: 20px;" name="admin"      type="submit" class="btn btn-primary">Give Admin Rights</button>
				</div>
				<div style="margin-top: 5px; ">
					<button type="submit" style="margin-left: 20px;" name="restrict" type="submit" class="btn btn-danger">Restrict</button>
					<button type="submit" style="margin-left: 37px;" name="unadmin"  type="submit" class="btn btn-danger">Remove Admin Rights</button>
				</div>
				<div style="margin-top: 5px;">
					<?php echo $htmlTextEmailError; ?>
				</div>
			</form>
        </div>
		
		<div class="col-4">
            
			<h5 style="margin-bottom:15px;">Most Ordered Parts</h5>
			<table class="table">
			  <thead class="table-dark">
				<tr>
				  <th scope="col">Rank</th>
				  <th scope="col">PC Part</th>
				  <th scope="col">Ordered Times</th>
				</tr>
			  </thead>
			  <tbody>
				<?php 
				$i = 0;
				
				foreach($mostOrderedParts as $pcPart)	{ 
					$i += 1;
				?>
				<tr>
				  <th scope="row"><?php echo $i;?></th>
				  <td><?php echo $pcPart->getPcPartName();?></td>
				  <td><?php echo $pcPart->getPcPartOrderedTimes();?></td>
				</tr>
				<?php 
				} ?>
			  </tbody>
			</table>
			
        </div>
	</div>
	<hr/>
	<div class="row justify-content-around" style="margin-top: 50px;">
		<div class="col-5">
			<form action="admin.php" method="post">
				<h5 style="margin-bottom:15px;">Edit PC Parts</h5>
				<table class="table">
					<thead>
						<tr>
						  <th scope="col">ID</th>
						  <th scope="col">PC Part</th>
						  <th scope="col"></th>
						  <th scope="col"></th>
						</tr>
					</thead>
					<tbody>
					
					<?php 
					$partsDisplay;
					
					if(isset($_GET['pageparts']))	{
						$partsDisplay = $controlObj->getPCPartsLimit(12, $_GET['pageparts']);
					}
					
					else	{
						
						$partsDisplay = $controlObj->getPCPartsLimit(12, 1);
					}
					
					
					foreach($partsDisplay as $pcPart)	{ ?>
						<tr>
						  <th scope="row"><?php echo $pcPart->getId(); ?></th>
						  <td><?php echo $pcPart->getPcPartName(); ?></td>
						  <td><button type="submit" name="edit"   type="submit" class="btn btn-warning" value=<?php echo '"'.$pcPart->getId().'"'; ?>>Edit</button></td>
						  <td><button type="submit" name="delete" type="submit" class="btn btn-danger"  value=<?php echo '"'.$pcPart->getId().'"'; ?>>Delete</button></td>
						</tr>
					<?php 
					
					} ?>
					</tbody>
				</table>
			</form>
			
			<?php 
			if(count($controlObj->getPCParts()) > 12)	{ 
			
				$count = count($controlObj->getPCParts());
			?>
			<div class="pagination">
			  <a href="?pageparts=1">&laquo;</a>
			  
			  
			  <?php 
			  if(isset($_GET['pageparts']))	{
				foreach($controlObj->getIndexCuts($_GET['pageparts'], 12, count($controlObj->getPCParts()), 9) as $number)	{ ?>
			  <a <?php if(isset($_GET['pageparts']))	{if($_GET['pageparts'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?pageparts='.$number.'"'; ?>><?php echo $number; ?></a>
			  
			  <?php 
				}
			  } 
			  
			  else	{
				  
				  foreach($controlObj->getIndexCuts(1, 12, count($controlObj->getPCParts()), 9) as $number)	{ ?>
				  
				  <a <?php if(isset($_GET['pageparts']))	{if($_GET['pageparts'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?pageparts='.$number.'"'; ?>><?php echo $number; ?></a>
				  
			
			<?php
				  }
			  }
			?>
			  
			  
			  <a href=<?php echo '"?pageparts='.ceil(count($controlObj->getPCParts()) / 12).'"'; ?>>&raquo;</a>
			</div>
			<?php 
			} ?>
		</div>
		
		<div class="col-3">
		
			<h5 style="margin-bottom:15px;">Insert or Edit</h5>
			<form action="admin.php" method="post" enctype="multipart/form-data" id="changeParts">
                <div class="mb-3">
                    <label for="idInput" class="form-label">ID</label>
                    <input type="number" value=<?php echo '"'.$idInput.'"'; ?> class="form-control" name="id" id="idInput" required>
                </div>
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Name</label>
                    <input type="text" value=<?php echo '"'.$nameInput.'"'; ?> class="form-control" name="name" id="nameInput" required>
                </div>
                <div class="mb-3">
                    <label for="imageInput" class="form-label">Image Link</label>
					<input type="file" class="form-control" name="image" id="imageInput" required><?php echo $imageLinkInput; ?></input>
					<input type="hidden" id="lastImage" name="lastImage" value=<?php echo '"'.$imageLinkInput.'"'; ?>>
                </div>
				
				<div class="mb-3">
                    <label for="descInput" class="form-label">Description</label>
                    <textArea type="text" class="form-control" name="desc" id="descInput" required><?php echo $descInput; ?></textArea>
                </div>
				<div class="mb-3">
                    <label for="priceInput" class="form-label">Price</label>
                    <input type="number" value=<?php echo '"'.$priceInput.'"'; ?> class="form-control" name="price" id="priceInput" step=".01" required>
                </div>
				<div class="mb-3">
                    <label for="inventory" class="form-label">Inventory</label>
                    <input type="number" value=<?php echo '"'.$inventoryInput.'"'; ?> class="form-control" name="inventory" id="idInput" required>
                </div>
				<div class="mb-3">
                    <label for="partTypeInput" class="form-label">Type</label>
                    <select class="form-select" name="type" id="partTypeInput">
					<?php 
					$k = 0;
					foreach($controlObj->getPartTypes() as $type)	{?>
					  <option value=<?php echo '"'.$k.'"'; ?> <?php if($typeInput == $k) {echo 'selected';} ?>><?php echo ucwords($type);?></option>
					<?php 
						$k += 1;
					}?>
					</select>
                </div>
				<div class="mb-3">
                    <label for="wattageInput" class="form-label">Wattage</label>
                    <input type="number" value=<?php echo '"'.$wattageInput.'"'; ?> class="form-control" name="wattage" id="wattageInput" required>
                </div>
				<div class="mb-3">
                    <label for="compatibilityInput" class="form-label">Manufacturer for CPUs and Mobos</label>
                    <select class="form-select" name="compatibility" id="compatibilityInput">
					  <option value="0" <?php if($compatibilityInput == 0) {echo 'selected';} ?>>Doesn't Apply</option>
					  <option value="1" <?php if($compatibilityInput == 1) {echo 'selected';} ?>>Intel</option>
					  <option value="2" <?php if($compatibilityInput == 2) {echo 'selected';} ?>>AMD</option>
					</select>
                </div>
                <button type="submit" style="margin-right: 20px;" value="insert" name="insert" type="submit" id="insertPart" class="btn btn-info">Insert</button>
				<button type="submit" style="margin-right: 20px;" value="update" name="update" type="submit" id="updatePart" class="btn btn-success">Update</button>
				<h4 id='loading'></h4>
				<div id="message"></div>
				<div style="margin-top: 5px;">
				
				</div>
            </form>
			
			
		</div>
	</div>
	
	<hr/>
	
	<div class="row justify-content-around" style="margin-top: 50px;">
	
		<div class="col-6">
		
			<h5 style="margin-bottom:15px;">Manage Orders</h5>
			<table class="table">
				<thead>
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">Customer</th>
					  <th scope="col">Comment</th>
					  <th scope="col"></th>
					  <th scope="col"></th>
					  <th scope="col"></th>
					</tr>
				</thead>
				<form action="admin.php" method="POST">
				<tbody>
				
				<?php //limit
				if(isset($_GET['pagebuilds']))	{
					
					$buildsDisplay = $controlObj->getBuildsOrderedLimit(5, $_GET['pagebuilds']);
				}
					
				else	{
						
					$buildsDisplay = $controlObj->getBuildsOrderedLimit(5, 1);
				}
				
				?>
				
				<?php foreach($buildsDisplay as $customBuild)	{?>
					<tr>
					  <th scope="row"><?php echo $customBuild->getId(); ?></th>
					  <td><?php echo $controlObj->getAccount($customBuild->getAccountId())->getUsername(); ?></td>
					  <td><?php echo $customBuild->getBuildComment(); ?></td>
					  <td><button type="submit" name="process" type="submit" class="btn btn-success" value=<?php echo '"'.$customBuild->getId().'"'; ?>>Process</button></td>
					  <td><button type="submit" name="dismiss" type="submit" class="btn btn-danger" value=<?php echo '"'.$customBuild->getId().'"'; ?>>Dismiss</button></td>
					  <td><button type="submit" name="select" type="submit" class="btn btn-info" value=<?php echo '"'.$customBuild->getId().'"'; ?>>View Parts</button></td>
					</tr>
				<?php }?>
				
				</tbody>
				</form>
				
			</table>
			
			
			<?php //paginator debut
			if(count($controlObj->getBuildsOrdered()) > 5)	{ 
			
				$count = count($controlObj->getBuildsOrdered());
			?>
			<div class="pagination">
			  <a href="?pagebuilds=1">&laquo;</a>
			  
			  
			  <?php 
			  if(isset($_GET['pagebuilds']))	{
				foreach($controlObj->getIndexCuts($_GET['pagebuilds'], 5, count($controlObj->getBuildsOrdered()), 5) as $number)	{ ?>
			  <a <?php if(isset($_GET['pagebuilds']))	{if($_GET['pagebuilds'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?pagebuilds='.$number.'"'; ?>><?php echo $number; ?></a>
			  
			  <?php 
				}
			  } 
			  
			  else	{
				  
				  foreach($controlObj->getIndexCuts(1, 5, count($controlObj->getBuildsOrdered()), 5) as $number)	{ ?>
				  
				  <a <?php if(isset($_GET['pagebuilds']))	{if($_GET['pagebuilds'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?pagebuilds='.$number.'"'; ?>><?php echo $number; ?></a>
				  
			
			<?php
				  }
			  }
			?>
			  
			  
			  <a href=<?php echo '"?pagebuilds='.ceil(count($controlObj->getBuildsOrdered()) / 5).'"'; ?>>&raquo;</a>
			</div>
			<?php 
			} //paginator end ?>
		
		</div>
		<div class="col-4">
		
			<table class="table" id="partList" style="width:100%;margin-left: auto;margin-right: auto;">

				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Component</th>
						<th scope="col">Name</th>
					</tr>
				</thead>
				<tbody>
				<?php
				
				if(isset($_POST['select']))	{
						
					foreach($controlObj->getPCPartsByCustomBuildId($_POST['select']) as $pcPart)	{
				
				?>
					<tr>
					  <th scope="row"><?php echo $pcPart->getId(); ?></th>
					  <td><?php echo strtoupper($controlObj->getPartTypes()[$pcPart->getPcPartType()]); ?></td>
					  <td><?php echo $pcPart->getPcPartName(); ?></td>
					</tr>
				<?php
					}
				}
				?>
				</tbody>
		
		</div>
	</div>
  </body>
</html>