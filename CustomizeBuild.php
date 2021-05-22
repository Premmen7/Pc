<?php
    include 'Masterpage.php';
    $controlObj = new Controller();
    $account = $controlObj->accountAuthenticateAuto();
	
	if(isset($_GET['from']))	{
		
		$newBuildId = ($controlObj->startAndGetBuildFromTemplate($account, $_GET['from']))->getId();
		header("Location: buildMaker.php?edit=".$newBuildId);
	}
	
	if(isset($_GET['edit']))	{
		
		if($_GET['edit'] == -1)	{
			$newBuildId = ($controlObj->startAndGetBuild($account))->getId();
			header("Location: buildMaker.php?edit=".$newBuildId);
		}
		
		else	{
			header("Location: buildMaker.php?edit=".$_GET['edit']);
		}
	}
	
	if(isset($_POST['edit']))	{
		
		header("Location: buildMaker.php?edit=".$_POST['edit']);
	}
	
	if(isset($_POST['delete'])) {
		
		$controlObj->deleteCustomBuild($_POST['delete']);
	}
	
	$buildsFeatured = $controlObj->getBuildsFeatured();
	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>HomePage</title>
  </head>
  <body class="home" style="background-color: #bec5d1">

    <h1 class="text-left" style="margin-bottom:40px;margin-top:60px;margin-left:110px;"><strong>Customize your PC</strong></h1>

    <hr style="width:70%;text-align:left;">
	
	<h3 class="text-center" style="margin-bottom:40px;margin-top:40px;">Start from a featured build</h3>
	<div class="container">
    <div class="container-fluid" id="container-scroll">
        <div class="overflow-auto row flex-row flex-nowrap mt-4 pb-4 pt-2">
		
		<?php
		
			foreach($buildsFeatured as $customBuild)	{
		
		?>
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 20rem;">
                    <img alt="PC Image" src=<?php if(!is_null($controlObj->getPCPartFromBuildType($customBuild->getId(), 5))) {echo '"'.$controlObj->getPCPartFromBuildType($customBuild->getId(), 5)->getPcPartImageLink().'"';} ?>
                        class="img-fluid rounded">
                    <div class="card-body" style="text-align:center;">
                        <h5 class="card-title"><?php echo $customBuild->getBuildName(); ?></h5>
                        <div class="card-text">
                            
                            <div class="row mt-3">
                                <div>
                                    <p><?php echo $customBuild->getBuildComment(); ?></p>
                                </div>
                            </div>
							<form action=<?php echo '"'.'CustomizeBuild.php?from='.$customBuild->getId().'"' ?> method="post">
							<div style="text-align:center;">
								<button type="submit" class="btn btn-secondary" style="text-align:center; width:70%;">Choose</button>
							</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
		<?php
		
			}
		
		?>
			
            
        </div>
    </div>
	</div>
	
	

    <hr style="width:70%;text-align:left;">
	<h3 class="text-center" style="margin-bottom:40px;margin-top:40px;">Your builds</h3>
	
	
	<table class="table" id="menuOrderList" style="width:75%;margin-left: auto;margin-right: auto;">

        <thead>
            <tr>
                <th scope="col">Build #</th>
                <th scope="col">Name</th>
                <th scope="col">Comment</th>
                <th scope="col"></th>
				<th scope="col"></th>

            </tr>
        </thead>

        <tbody id="menuOrderListBody">
			<form action=<?php echo '"CustomizeBuild.php"'; ?> method="POST">
            <?php 
			
				//limit
			if(isset($_GET['pagebuilds']))	{
					
				$buildsDisplay = $controlObj->getBuildsAccountLimit(5, $_GET['pagebuilds'], $account->getId());
				$i = ($_GET['pagebuilds'] - 1)*5;
			}
					
			else	{
						
				$buildsDisplay = $controlObj->getBuildsAccountLimit(5, 1, $account->getId());
				$i = 0;
			}
			
			foreach($buildsDisplay as $customBuild)	{ 
				$i+=1;
			?>
            <tr>
                <th scope="row" name="buildId"><?php echo $i; ?></th>
                
                <td><?php echo $customBuild->getBuildName(); ?></td>
                <td><?php echo $customBuild->getBuildComment(); ?></td>
				
					<td>
						<button type="submit" class="btn btn-primary" name="edit" Style="background-color: black;" value=<?php echo '"'.$customBuild->getId().'"'; ?>>Edit</button>
					</td>
					<td>
						<button type="submit" class="btn btn-danger" name="delete" value=<?php echo '"'.$customBuild->getId().'"'; ?>>Delete</button>
					</td>
				
            </tr>
            <?php } ?>
			</form>
        </tbody>
		<?php //paginator debut
			if(count($controlObj->getBuildsAccount($account->getId())) > 5)	{ 
			
				$count = count($controlObj->getBuildsAccount($account->getId()));
			?>
			<div class="position-relative" style="margin-bottom: 75px;">
			<div class="pagination position-absolute top-0 start-50 translate-middle">
			  <a href="?pagebuilds=1">&laquo;</a>
			  
			  
			  <?php 
			  if(isset($_GET['pagebuilds']))	{
				foreach($controlObj->getIndexCuts($_GET['pagebuilds'], 5, count($controlObj->getBuildsAccount($account->getId())), 5) as $number)	{ ?>
			  <a <?php if(isset($_GET['pagebuilds']))	{if($_GET['pagebuilds'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?pagebuilds='.$number.'"'; ?>><?php echo $number; ?></a>
			  
			  <?php 
				}
			  } 
			  
			  else	{
				  
				  foreach($controlObj->getIndexCuts(1, 5, count($controlObj->getBuildsAccount($account->getId())), 5) as $number)	{ ?>
				  
				  <a <?php if(isset($_GET['pagebuilds']))	{if($_GET['pagebuilds'] == $number)	{echo 'class="active"';}}	else if($number == 1)	{echo 'class="active"';} ?> href=<?php echo '"?pagebuilds='.$number.'"'; ?>><?php echo $number; ?></a>
				  
			
			<?php
				  }
			  }
			?>
			  
			  
			  <a href=<?php echo '"?pagebuilds='.ceil(count($controlObj->getBuildsAccount($account->getId())) / 5).'"'; ?>>&raquo;</a>
			</div>
			</div>
			<?php 
			} //paginator end ?>
    </table>
	
	
	
	<form action="CustomizeBuild.php?edit=-1" method="POST">
	<div style="text-align:center; margin-bottom:50px;">
		<button type="submit" class="btn btn-primary" Style="background-color: green;" >New Build</button></td>
	</div>
    </form>
  </body>
</html>
