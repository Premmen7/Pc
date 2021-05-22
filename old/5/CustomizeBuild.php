<?php
    include 'Masterpage.php';
    $controlObj = new Controller();
    $account = $controlObj->accountAuthenticateAuto();

    if(isset($_POST['newBuild'])) {
        header('Location: buildMaker.php');
    }
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
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 20rem;">
                    <img src="Images/testImg.jpg"
                        class="img-fluid rounded">
                    <div class="card-body">
                        <h5 class="card-title">test0</h5>
                        <div class="card-text">
                            
                            <div class="row mt-3">
                                <div>
                                    <p>test1</p>
                                </div>
                            </div>
							
							<div style="text-align:center;">
								<button type="button" onclick="addBuildFrom(0)" class="btn btn-secondary" style="text-align:center; width:70%;">Choose</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 20rem;">
                    <img src="Images/testImg.jpg"
                        class="img-fluid rounded">
                    <div class="card-body">
                        <h5 class="card-title">test0</h5>
                        <div class="card-text">
                            
                            <div class="row mt-3">
                                <div>
                                    <p>test1</p>
                                </div>
                            </div>
							
							<div style="text-align:center;">
								<button type="button" onclick="addBuildFrom(0)" class="btn btn-secondary" style="text-align:center; width:70%;">Choose</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 20rem;">
                    <img src="Images/testImg.jpg"
                        class="img-fluid rounded">
                    <div class="card-body">
                        <h5 class="card-title">test0</h5>
                        <div class="card-text">
                            
                            <div class="row mt-3">
                                <div>
                                    <p>test1</p>
                                </div>
                            </div>
                        </div>
						
						<div style="text-align:center;">
								<button type="button" onclick="addBuildFrom(0)" class="btn btn-secondary" style="text-align:center; width:70%;">Choose</button>
							</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 20rem;">
                    <img src="Images/testImg.jpg"
                        class="img-fluid rounded">
                    <div class="card-body">
                        <h5 class="card-title">test0</h5>
                        <div class="card-text">
                            
                            <div class="row mt-3" style="text-align:center;">
                                <div>
                                    <p>test1</p>
                                </div>
								
                            </div>
							<div style="text-align:center;">
								<button type="button" onclick="addBuildFrom(0)" class="btn btn-secondary" style="text-align:center; width:70%;">Choose</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
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

            </tr>
        </thead>

        <tbody id="menuOrderListBody">

            
            <tr>
                <th scope="row">0</th>
                
                <td>test2</td>
                <td>test3</td>
                <td>
                    <button class="btn btn-primary" onclick="editBuild(0)" Style="background-color: black;" >Edit</button>
                </td>
            </tr>

        </tbody>

    </table>
	
	<form action="customizeBuild.php" method="POST">
	<div style="text-align:center; margin-bottom:50px;">
		<button class="btn btn-primary" name="newBuild" onclick="addBuild(0)" Style="background-color: green;" >New Build</button></td>
	</div>
    </form>
  </body>
</html>
