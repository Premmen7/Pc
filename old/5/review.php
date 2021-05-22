<?php
	include 'Masterpage.php';
	
	$controller = new Controller();
	
	$reviewsList = $controller->getReviews();
	
	$accountAuthenticated = $controller->accountAuthenticateAuto();
	
?>

<!DOCTYPE html>
<html lang="en">
	
	<body>
		

		
		<h3 class="reviewEl" style="margin-top: 70px;">Feedback</h3>
		<h5 class="reviewEl" style="margin-top: 0px;">Your comments will help us improve our service</h5>
		
		
		
		<form action="review.php" method="POST">
			<div class="form-floating reviewEl" style="margin-top: 50px;">
			
				<textarea class="form-control" name="comments" placeholder="Leave a comment here" id="commentTextarea" style="height: 100px"></textarea>

				<label for="commentTextarea">Your Comments</label>
			</div>
		
			<div class="rating reviewEl" style="margin-top: 50px;">
				<label>
					<input type="radio" name="stars" value="1" />
					<span class="icon">★</span>
				</label>
				<label>
					<input type="radio" name="stars" value="2" />
					<span class="icon">★</span>
					<span class="icon">★</span>
				</label>
				<label>
					<input type="radio" name="stars" value="3" />
					<span class="icon">★</span>
					<span class="icon">★</span>
					<span class="icon">★</span>   
				</label>
				<label>
					<input type="radio" name="stars" value="4" />
					<span class="icon">★</span>
					<span class="icon">★</span>
					<span class="icon">★</span>
					<span class="icon">★</span>
				</label>
				<label>
					<input type="radio" name="stars" value="5" />
					<span class="icon">★</span>
					<span class="icon">★</span>
					<span class="icon">★</span>
					<span class="icon">★</span>
					<span class="icon">★</span>
				</label>
			</div>
			<div style="text-align: center;">
				<button type="submit" name="submit" value="Submit" class="btn btn-dark reviewEl" style="margin-top: 50px;">Submit</button>
				
				
			</div>
		</form>
		
		<?php
			if(isset($_POST['submit']))	{
		
				$rating;
		
				if(isset($_POST['stars']))	{
			
					$rating = $_POST['stars'];
				}
		
				else	{
			
					$rating = null;
				}
		
				if(isset($_POST['comments']))	{
			
					$comment = $_POST['comments'];
				}
		
				else	{
			
					$comment = null;
				}
				
				if(is_null($accountAuthenticated))	{
					
					echo '<h5 style="text-align: center; margin-top: 30px;">To give us feedback, please log In</h5>';
				}
				
				else if(is_null($rating) || is_null($comment))	{
					
					echo '<h5 style="text-align: center; margin-top: 30px;">To give us feedback, please provide us a comment and a rating</h5>';
				}
				
				else	{
					
					$reviewObj = new Review(0, $accountAuthenticated->getId(), $comment, $rating);
					
					if($controller->insertReview($reviewObj))	{
						
						echo '<h5 style="text-align: center; margin-top: 30px;">Thank you for your feedback, we\'ll review carefully</h5>';
					}
					
					else	{
						
						echo '<h5 style="text-align: center; margin-top: 30px;">Your feedback could not be sent, please try again</h5>';
					}
				}
			}
			
			
		
		?>

		
		
		<h4 class="reviewEl" style="margin-top: 100px;">Past Comments</h4>
		<hr/>
		
		<?php
			if(!is_null($reviewsList))	{
		
				foreach($reviewsList as $review)	{
			
		?>
			
		<div class="container" style="margin-top: 50px;">
			<div class="row">
				<div class="col">
					<td><img align="center" style="width: 100px; height: 100px;" class="profileImg" src=<?php echo '"'.$controller->getAccount($review->getAccountId())->getImageLink().'"'; ?> /></td>
				</div>
				<div class="col">
					<?php echo $review->getReviewContent(); ?>
				</div>
				<div class="col">
					<span class=<?php if($review->getReviewScore() >= 1) {echo '"fa fa-star starChecked"';} else {echo '"fa fa-star"';}  ?>></span>
					<span class=<?php if($review->getReviewScore() >= 2) {echo '"fa fa-star starChecked"';} else {echo '"fa fa-star"';}  ?>></span>
					<span class=<?php if($review->getReviewScore() >= 3) {echo '"fa fa-star starChecked"';} else {echo '"fa fa-star"';}  ?>></span>
					<span class=<?php if($review->getReviewScore() >= 4) {echo '"fa fa-star starChecked"';} else {echo '"fa fa-star"';}  ?>></span>
					<span class=<?php if($review->getReviewScore() >= 5) {echo '"fa fa-star starChecked"';} else {echo '"fa fa-star"';}  ?>></span>
					<br/>
					
					
				</div>
			</div>
		</div>
		<hr/>
			
		<?php
				}
			}
		
			else	{
		
				echo '<h5 class="reviewEl" style="margin-top: 75px; text-align: center;">Could not load comments</h5>';
			}
		?>
		<!--div class="container" style="margin-top: 50px;">
			<div class="row">
				<div class="col">
					<td><img align="center" style="width: 100px; height: 100px;" class="profileImg" src="Images/testImg.jpg" /></td>
				</div>
				<div class="col">
					test0
				</div>
				<div class="col">
					<span class="fa fa-star starChecked"></span>
					<span class="fa fa-star starChecked"></span>
					<span class="fa fa-star starChecked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<br/>
					
					
				</div>
			</div>
		</div>
		<hr/-->
		
		

	</body>
</html>
