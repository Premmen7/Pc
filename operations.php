<?php
	
	include('Models.php');

	if(isset($_REQUEST['confirm']))	{
	  
	  echo 'frwfwfw';
	  //completeOrder();
	  header('Location: buildMaker.php');
	}
	
	if(isset($_GET['save']))	{
		echo 'wdwd';
	}
	
	if(isset($_GET['image']))	{
		if(isset($_FILES['file']['type']))
		{
			$controllerObj = new Controller();
			$accountObj = $controllerObj->accountAuthenticateAuto();
			
			// Check whether the file exists
			if(file_exists("Images/profilePics/".$_FILES['file']['name']))
			{
				echo $_FILES['file']['name']."<span id='invalid'><b> Already exists.</b></span>";

			}        
			else{ // Upload the file
				$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "Images/profilePics/".$_FILES['file']['name']; // Target path where file has to be stored
				move_uploaded_file($sourcePath, $targetPath); // Moving upload file to target folder

				$accountObj->setImageLink($targetPath);
				$controllerObj->updateAccount($accountObj);
				echo '<span id="success"> Image Uploaded Successfully: '. $_FILES["file"]["name"] .' </span><br/>';
				echo '<script type="text/javascript">changeImage("'. $_FILES["file"]["name"] .'")</script>';
			}
		} 
		
		else
		{
			echo "<span id='invalid'><b> No file selected or size not allowed. </b></span>";
		}
	}
	
	if(isset($_GET['imagePart']))	{
		if(isset($_FILES['image']['type']))
		{
			$controllerObj = new Controller();
			$targetPath = "Images/PartsPics/".$_FILES['image']['name'];;
			// Check whether the file exists
			if(!file_exists("Images/PartsPics/".$_FILES['image']['name']))
			{
				$sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
				move_uploaded_file($sourcePath, $targetPath); // Moving upload file to target folder

			}
			
			if(!($targetPath == "Images/PartsPics/"))	{
				
				$PCPartObj = new PCPart($_POST['id'], $_POST['name'], $targetPath, $_POST['desc'], $_POST['price'], $_POST['inventory'], $_POST['type'], $_POST['wattage'], $_POST['compatibility'], 0);
			}
			
			else	{
				
				$PCPartObj = new PCPart($_POST['id'], $_POST['name'], $_POST['lastImage'], $_POST['desc'], $_POST['price'], $_POST['inventory'], $_POST['type'], $_POST['wattage'], $_POST['compatibility'], 0);
			}
			
			$controlObj = new Controller();
			
			if(isset($_POST['insert']))	{
				if($controlObj->AdminInsertPcPart($PCPartObj))	{
			  
					echo 'success';
					header("Refresh: admin.php");
				}
				else	{
					echo 'failure';
				}
			}
			
			else if(isset($_POST['update']))	{
				if($controlObj->updatePcPart($PCPartObj))	{
			  
					echo 'success';
					header("Refresh: admin.php");
				}
				else	{
					echo 'failure';
				}
			}
			
			
			
		} 
		
		else
		{
			echo "<span id='invalid'><b> No file selected or size not allowed. </b></span>";
		}
		
		
	}
	
	
?>

