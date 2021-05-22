<?php
  //pattern="[|%]+"
  include 'Masterpage.php';
  
  

  if(isset($_POST['submit'])) {
	$controlObj = new Controller();
	
    $accountObj = new Account(0, $_POST['fname'], $_POST['lname'], process($_POST['email']), process($_POST['pw']), $_POST['pcode'], 0, $_POST['user'], 0, 'Images/testImg.jpg');
    $controlObj->accountSignUp($accountObj);
  }

  if(isset($_POST['validate'])) {
	  
	  $controlObj = new Controller();

			$email = process($_POST['loginEmail']);
			$pw = process($_POST['loginPw']);

			if($controlObj->accountSignInCheck($email, $pw))	{
				header('Location: Home.php');
			}
	  
  }

  function process($data) {
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>SignUp</title>
  </head>
  <body>
	
	<!-- Form -->
	
	<div class="row justify-content-around" style="margin-top: 50px;">
        <div class="col-4">
            <p id="signInTitle" style="color: darkorange; text-align: center; font-family: 'Times New Roman', Times, serif; margin-bottom: 70px; font-size: 30px;">
                Sign In
            </p>

            <form action="Signup.php" method="post">
                <div class="mb-3" style="margin-left: 20px;">
                    <label for="emailInputSignIn" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="loginEmail" id="emailInputSignIn" aria-describedby="emailHelp">
                </div>
                <div class="mb-3" style="margin-left: 20px;">
                    <label for="passwordInputSignIn" class="form-label">Password</label>
                    <input type="password" name="loginPw" class="form-control" id="passwordInputSignIn">
                </div>
                <input type="submit" style="margin-left: 20px;" name="validate" class="btn btn-primary" value="Login"></input>
				<?php

		if(isset($_POST['validate'])) {
			$controlObj = new Controller();

			$email = process($_POST['loginEmail']);
			$pw = process($_POST['loginPw']);

			if(!$controlObj->accountSignInCheck($email, $pw))	{
				
				echo '<br/><p style="margin-left: 20px;">Email or password is incorrect';
				
			}
		}

?>
            </form>

        </div>
        <div class="col-4">
            <p id="orLabel" style="color: mediumvioletred; text-align: center; font-family: 'Times New Roman', Times, serif; margin-bottom: 70px; font-size: 30px;">
                OR
            </p>
        </div>
        <div class="col-4">
            <p id="signUpTitle" style="color: mediumseagreen; text-align: center; font-family: 'Times New Roman', Times, serif; margin-bottom: 70px; font-size: 30px;">
                Sign Up
            </p>

            <form action="Signup.php" method="post">
                <div class="mb-3" style="margin-right: 20px;">
                    <label for="usernameInputSignUp" class="form-label">Username</label>
                    <input type="text" class="form-control" name="user" id="usernameInputSignUp" required>
                </div>
                <div class="mb-3" style="margin-right: 20px;">
                    <label for="emailInputSignUp" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="emailInputSignUp" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3" style="margin-right: 20px;">
                    <label for="passwordInputSignUp" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pw" id="passwordInputSignUp" required>
                </div>
				<div class="mb-3" style="margin-right: 20px;">
                    <label for="fnameInputSignUp" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fnameInputSignUp" required>
                </div>
				<div class="mb-3" style="margin-right: 20px;">
                    <label for="lnameInputSignUp" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lnameInputSignUp" required>
                </div>
				<div class="mb-3" style="margin-right: 20px;">
                    <label for="postalCodeInputSignUp" class="form-label">Postal Code</label>
                    <input type="text" class="form-control" name="pcode" id="postalCodeInputSignUp" required>
                </div>
                <input type="submit" style="margin-right: 20px;" value="Signup" name="submit" type="submit" class="btn btn-primary"></input>
                <a href="recover.html">Forgot Password?</a>
            </form>

        </div>
    </div>

    <p id="messageSign" style="text-align: center; margin-top: 20px;"></p>
  </body>
</html>


