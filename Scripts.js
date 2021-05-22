$(document).ready(function(e){
			$("#imageChange").on('submit', (function(e){
				e.preventDefault();
				$("#message").empty();
				$("#loading").show(); 
				console.log("sss")
				$.ajax({
					url:"operations.php?image=0",     // Url to which the request is 
					type: "POST", // Type of request to be sent, called as method
					data: new FormData(this), // Data sent to server, a set of key/value pairs
					contentType: false, // The content type used when sending data to the server
					cache: false, // To unable request pages to be cached
					processData: false, // To send DOMDocument or non processed data file
					success: function(data) // A function to be called if request succeeds
					{
						console.log(Response)
						$("#message").html(data);
						$("#loading").hide(); 
						
						
					}
				});
			}));
});

function changeImage(picture)	{
	
	document.getElementById("profileImgg").setAttribute("src", "Images/profilePics/" + picture);
}