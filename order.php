<?php
  include 'Masterpage.php';

  $controlObj = new Controller();

  $account = $controlObj->accountAuthenticateAuto();

  $customBuildObj;
  $partsList = Array();
  
  if(isset($_GET['order']))	{
	  
	  $customBuildObj = $controlObj->getBuildFromId($_GET['order']);
	  
	  $partsList = $controlObj->getPCPartsByCustomBuildId($_GET['order']);
  }
  
  if(isset($_GET['bid']))	{
	  
	  $buildObj = $controlObj->getBuildFromId($_GET['bid']);
	  $buildObj->setBuildOrdered(1);
	  $controlObj->updateCustomBuild($buildObj);
	  header('Location: Home.php');
  }

  function completeOrder() {
	  
    $controlObj->orderBuild($customBuildObj);
  }
  
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <script type="text/javascript">
        function order(buildId) {
			
			
        }
		
		$(document).ready(function()	{
			
			$("#confirmButton").click(function()	{
				console.log('order ' + <?php echo 0 ?>)
				$.ajax({ 
				
					url: 'operations.php?bid=' + <?php echo 0 ?>,
					type: "GET",
					dataType: "html",
					
				});
			});
		});
    </script>
    <title>Order</title>
  </head>
  <body>
    

    <!--Confirm Order-->
    <div class="card text-center" style="padding: 15px; margin-left: 50px; margin-right: 50px; margin-top: 50px; background-color: #29251b; color: white;">
      <h4>Order Confirmation</h4>
    </div>
    <br /><br />
    
    
    
    <table class="table" style="margin-left: 50px; margin-right: 50px;">
		<thead>
			<tr>
			  <th scope="col"><h5>#</h5></th>
			  <th scope="col"><h5>Preview</h5></th>
			  <th scope="col"><h5>Part Name</h5></th>
			  <th scope="col"><h5>Price</h5></th>
			</tr>
		</thead>
		<tbody>
		<?php
		
			$i = 0;
			
			foreach($partsList as $part)	{
				$i += 1;
		?>
			<tr>
			  <th scope="row"><?php echo $i; ?></th>
			  <td><img src=<?php echo '"'.$part->getPcPartImageLink().'"'; ?> class="" style="width: 75px; height: 75px;" /></td>
			  <td><?php echo $part->getPcPartName(); ?></td>
			  <td><?php echo $part->getPcPartPrice().'$'; ?></td>
			</tr>
			
		<?php
		
			}
		?>
		
			<tr>
			  <th scope="row"></th>
			  <td></td>
			  <td></td>
			  <td><?php echo 'Total: '.$controlObj->getBuildPrice($_GET['order']).'$'; ?></td>
			</tr>
		</tbody>
    </table>
	<div style="margin-left: 50px; margin-right: 50px;">
		<div style="margin-bottom: 30px;">
			
			<input type="hidden" name="id" value="Confirm" />
			  
			  <form action="">
			  <a class="d-grid gap-2 col-6 mx-auto" >
			  <button
				id="confirmButton"
				type="submit"
				name="bid"
				class="btn btn-success"
				value=<?php echo '"' . $_GET['order'] . '"'; ?>><!--
				onclick=<?php //echo '"order(0)"';//.$customBuildObj->getId().')'; ?>-->Confirm
			  </button>
			  </a>
			</form>
			
		</div>
		<div style="margin-bottom: 60px;">
			<!--input class="btn btn-danger" name="cancel" type="submit" href=<?php //echo '"buildMaker.php?buildId=0"';//.$customBuildObj->getId().'"'; ?>"Confirm/-->
			<input type="hidden" name="id" value="cancel" />
			  <a class="d-grid gap-2 col-6 mx-auto" href=<?php echo '"buildMaker.php?edit='.$_GET['order'].'"';//.$customBuildObj->getId().'"'; //later ?>>
			  <input
				type="submit"
				name="cancel"
				class="btn btn-danger"
				value="Cancel"
				
			  />
			  </a>
		</div>
		<!--div>
			
		</div-->
	</div>
  </body>
</html>
