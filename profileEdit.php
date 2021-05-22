<?php
  include 'Masterpage.php';

  $controlObj = new Controller();

  $accountObj = $controlObj -> accountAuthenticateAuto();

  /*if(isset($_GET['editProfile']) && !empty($_GET['editProfile'])) {
    $edit = $_GET['editProfile'];
    $account = $accountObj -> getAccount($edit);
  }*/

  if(isset($_POST['update'])) {
	  
	$accountObj->setUsername($_POST['username']);
	$accountObj->setPostalcode($_POST['pcode']);
	  
    if($controlObj->updateAccount($accountObj))	{
		header("Location: profile.php");
	}
	
	else	{
		//Later
	}
	
  }

  if(isset($_POST['cancel'])) {
    header("Location: profile.php");
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
	<script type="text/javascript" src="Scripts.js">
        
    </script>
    <title>Profile Edit</title>
  </head>
  <body>
    <div class="card text-center" style="padding: 15px; margin-left: 50px; margin-right: 50px; margin-top: 50px; background-color: #29251b; color: white;">
      <h4>Edit Your Profile</h4>
    </div>

    
    <table class="extra1">
	
	<form id="imageChange" action="" method="post" enctype="multipart/form-data">
	  <tr>
		<td>
	      <div id="selectImage">
            <label style="margin-bottom: 15px;"><h5>Change Your Profile Image</h5></label><br/>
            <input type="file" name="file" id="file"/>
            <input type="submit" value="Change" class="submit"/>
          </div>
		  <h4 id='loading'></h4>
          <div id="message"></div>
		</td>
	  </tr>
      <tr>
        <td>
          <!--Img would change later to be clickable-->
          <img
            align="center"
            style="margin-bottom: 20px;  margin-top: 20px"
            class="profileImg"
            src=<?php echo '"'.$accountObj->getImageLink().'"'; ?>
			id="profileImgg"
          />
        </td>
      </tr>
	</form>
	<form action="profileEdit.php" method="POST" enctype="multipart/form-data" id="fieldChange">
      <tr>
        <td>
          <label for="username">Username:</label>
          <input
            type="text"
            class="form-control"
            name="username"
            value=<?php echo '"'.$accountObj->getUsername().'"'; ?>
            required=""
          />
        </td>
      </tr>
      <tr>
        <td>
          <label for="pcode" style="margin-top: 25px;">Postal Code:</label>
          <input
            type="text"
            class="form-control"
            name="pcode"
            value=<?php echo '"'.$accountObj->getPostalcode().'"'; ?>
            required=""
          />
        </td>
      </tr>
      <tr>
        <td>
          <input type="hidden" name="id" />
          <input
            type="submit"
            name="update"
            class="btn btn-primary"
            value="Update"
			      style="margin-top: 25px;"
          />
        </td>
      </tr>
      <tr>
      <td>
          <input type="hidden" name="id" />
          <input
            type="submit"
            name="cancel"
            class="btn btn-primary"
            value="Cancel"
			      style="margin-top: 25px;"
          />
        </td>
        </tr>
    </table>
	<div style="margin-bottom: 150px;"></div>
    </form>
	
  </body>
</html>


