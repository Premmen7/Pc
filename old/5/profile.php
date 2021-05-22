<?php
  include 'Masterpage.php';

  $controlObj = new Controller();

  $account = $controlObj -> accountAuthenticateAuto();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Profile</title>
  </head>
  <body>
    

    <!--Information-->
    <div class="card text-center" style="padding: 15px; margin-left: 50px; margin-right: 50px; margin-top: 50px; background-color: #29251b; color: white;">
      <h4>Profile</h4>
    </div>
    <div class="extra" style="margin-top: 50px;">
      <h1>
        <label id="welcome"
          ><?php echo $account -> getUsername();?>
          <a href="profileEdit.php">
          <i
            class="far fa-edit"
            style="margin-left: 20px"
            onclick="editAccountScreen()"
          ></i
        ></a></label>
      </h1>
    </div>
    <br />
    <br />
	
	<div style="text-align: center;">
      <tr>
        <td>
			  <img
				style="margin-bottom: 20px;"
				class="profileImg"
				src="Images/testImg.jpg"
			  />
        </td>
      </tr>
	</div>
	
    <table class="extra1" style="background-color: gray;">
	
      <tr>
		<div style="margin-top: 20px;">
        <td><h3 align="left" style="margin-left: 100px;">First Name:</h3></td>
        <td style="text-align: right;"><label id="getFname" style="margin-right: 100px;"><h5><?php echo $account->getFirstname(); ?></h5></label></td>
		</div>
      </tr>
      <tr>
        <td><h3 align="left" style="margin-left: 100px">Last Name:</h3></td>
        <td style="text-align: right;"><label id="getLname" style="margin-right: 100px"><h5><?php echo $account->getLastname(); ?></h5></label></td>
      </tr>
      <tr>
        <td><h3 align="left" style="margin-left: 100px">Email:</h3></td>
        <td style="text-align: right;"><label id="getEmail" style="margin-right: 100px"><h5><?php echo $account->getEmail(); ?></h5></label></td>
      </tr>
      <tr>
        <td><h3 align="left" style="margin-left: 100px;">Postal Code:</h3></td>
        <td style="text-align: right;"><label id="getEmail" style="margin-right: 100px"><h5><?php echo $account->getPostalcode(); ?></h5></label></td>
      </tr>
    </table>
  </body>
</html>


