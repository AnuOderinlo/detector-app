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
	<title>Detector landing page</title>
</head>
<body>
	<h3 class="text-center mb-5">Detector App</h3>
	

	<section class="container mt-5" >
	  
	  <div class="row">
	    <div class="col-md-6 offset-md-3">
	      <?php echo errorMessage(); 
	            echo successMessage(); 
	      ?>
	      <form class="" action="process.php" method="post">
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
	                <input class="form-control" type="email" name="email"  value="">
	              </div>
	            </div>
	           
	            <div>
	              <button type="submit" class="btn btn-info btn-block" name="submit">Notify me</button>
	            </div>
	          </div>
	        </div>
	      </form>
	    </div>
	  </div>
	</section>







	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="asset/js/popper.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>