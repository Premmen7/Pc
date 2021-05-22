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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Edit.css" rel="stylesheet" />
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
    ></script>
    <title>SignUp</title>
  </head>
  <body>
    <!--navbar-->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
          <span class="navbar-toggler-icon"></span>
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
              <a class="nav-link" href="Signup.php">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
	
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


