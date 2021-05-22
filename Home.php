<?php
  include 'Masterpage.php';
  
  $controller = new Controller();
  
  $assetsMainImages = $controller->getAssetsByType('homeMainImages');
  $assetsCards = $controller->getAssetsByType('homeCards');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
  </head>
  <body class="home" style="background-color: #bec5d1">
    

    <h1 class="text-center"><strong></strong></h1>

    <!--Slides with crossfade-->
    <div
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
      style="position: relative; text-align: center; margin-bottom: -50px;margin-top: -20px;"
    >
      <div class="carousel-inner text-center">
		
		<div class="carousel-item active" data-bs-interval="5000">
          <img src="Images/two.jpg" class="d-block mx-auto" style="width: 1000px;height:550px;opacity: 0.5;" />
        </div>
		
		<?php foreach($assetsMainImages as $assetImage)	{?>
        <div class="carousel-item" data-bs-interval="5000">
          <img src=<?php echo '"'.$assetImage->getImageLink().'"'; ?> class="d-block mx-auto" />
        </div>
		<?php }?>
		
      </div>
    </div>

    <!--More Details-->
    <div>
      <h1 class="text-center">&nbsp;</h1>
      <h1 class="text-center">Discover our Service</h1>
    </div>

    <!-- Card View -->
    <div
      class="card-group row row-cols-1 row-cols-md-3 g-4"
      style="margin-top: 10px; margin-left: 10px; margin-right: 10px; padding-bottom: 20px"
    >
	
	<?php foreach($assetsCards as $assetCard)	{ ?>
	
      <div class="col">
        <div class="card homeCard">
          <img class="card-img-top img-fluid" width="1000px" height="750px" src=<?php echo '"'.$assetCard->getImageLink().'"'; ?> />
          <div class="card-body" style="text-align: center;">
            <h5 class="card-title"><?php echo $assetCard->getTitle(); ?></h5>
            <p class="card-text"><?php echo $assetCard->getText1(); ?></p>
			<?php if($assetCard->getText2() != '')	{ ?><a href=<?php echo '"'.$assetCard->getText2().'"'; ?> class="btn btn-primary stretched-link">Visit</a><?php  }?>
          </div>
        </div>
      </div>
	<?php } ?>
	  
    </div>
  </body>
</html>
