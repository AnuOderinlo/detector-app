<?php 
	require_once 'process.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/css/all.css">
	<script type="text/javascript" src="asset/js/jquery-3.4.1.min.js"></script>
	<title>Detector landing page</title>
</head>
<body>
	<h3 class="text-center mb-5">Detector App</h3>
	

	<section class="container mt-5" >
	  
	  <div class="row">
	    <div class="col-md-6 offset-md-3">
	    	<div id="errorMsg"></div>
	      <form class="form" action="process.php" method="post">
	        <div class="card mb-3">
	          <div class="card-header bg-secondary text-white">
	            <h5 class="text-white">Notify me!</h5>
	          </div>
	          <div class="card-body text-white bg-dark">
	            <div class="form-group">
	              <label>Email</label>
	              <div class="input-group">
	                <div class="input-group-prepend">
	                  <span class="bg-info text-white input-group-text"><i class="fas fa-envelope"></i></span>
	                </div>
	                <input class="form-control" type="email" name="email" id="input" value="">
	              </div>
	            </div>
	           
	            <div>
	            	<input type="hidden" name="submit"   id="btn">
	              <input type="submit" class="btn btn-info btn-block" value="Notify me" name="submit" id="btn">
	            </div>
	          </div>
	        </div>
	      </form>
	    </div>
	  </div>
	</section>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".form").on("submit",function(e) {
				e.preventDefault();
				// alert("The jquery is working!")
				$.ajax({
				  url:"process.php",
				  method:"POST",
				  data: new FormData(this),
				  contentType: false,
				  processData: false,
				  success:function(data){
				    if (data == "Email can't be empty" || data == "Invalid email" || data == "Email already exist, use another one" || data == "Couldn't send email, something went wrong") {
				      $("#errorMsg").html(`<div  id="error" class="alert alert-danger ">${data}</div>`);
				      $(".form")[0].reset()
				      $("#input").focus(function () {
					      if ($("#error").css("display", "block")) {
					      		$("#error").css("display", "none")
					      }
				      })
				      // $(".form")[0].reset()
				      // console.log(data);
				      // $("#errorMsg").show();
				    }else{
				      $("#errorMsg").html(`<div  id="error" class="alert alert-success ">${data}</div>`);
				      // console.log(data);
				      // $("#errorMsg").html(` ${data}`);
				      // console.log($("#error").text());
				      // $("#comment").append(data);
				      $(".form")[0].reset()
				      // $("#errorMsg").html(data);
				    }

				  }
				})

	      $("#input").focus(function () {
	      	console.log("its working");
	      	$("#error").hide();
		      // if ($("#error").css("display", "block")) {
		      // 		$("#error").css("display", "none")
		      // }
	      })
			})
		})
	</script>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script> -->
	<script type="text/javascript" src="asset/js/popper.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>