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
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<script type="text/javascript" src="asset/js/jquery-3.4.1.min.js"></script>

	<title>Detector landing page</title>
</head>
<body>
	<header class="header pb-5">
		<div class="container">
			  <nav class="mb-3 navbar navbar-dark navbar-expand-md text-white p-0 pt-4">
			    <!-- Brand -->
			    <a class="navbar-brand logo font-weight-bold" href="#" style="color: #024fbb">
			    	<img src="asset/images/logo.png " class="img-fluid"> DETECTOR.<i class=" font-weight-light">app</i>
			    </a>
			    
			  </nav>

			  <div class="row mt-4 banner">
			    <div class="col-md-6 col-12 d-flex align-items-center banner-content">
			      <div class="row">
			        <div class="col-12 col-md-12 animate_left mb-4">
			          <h2 class="font-weight-lighter text-color ">GET NOTIFICATIONS WHEN YOU ARE BEING LIED TO</h2>
			        </div>
			        <div class="col-md-10 animate_bottom">
			          <p>This mobile application helps you filter lies from truths as it notifies you when someone you are having a conversation with is telling false statements.</p>
			        </div>
			        <div class="col-12 col-md-9 d-none d-md-block animate_bottom">
			          <div class="row">
			          	<!-- desktop view  for form-->
			          	<div class="col-md-12">
			          		<h6 class="mt-2">Never be lied to again! Get notified when we launch</h6>
			          		<div id="errorMsg"></div>
			          		<form class="form" class="mt-3" action="process.php" method="post">
			          			<div class="row">
			          				<div class="col-md-12 col-12 d-flex">
				          				<input id="input" type="email" name="email" id="input-js" class="custom-input" placeholder="Enter your email address...">
				          				<input type="hidden" name="submit">
				          				<input id="btn" type="submit" name="submit" href="#" class="custom-btn custom-btn__2 text-center">
			          				</div>
			          			</div>
			          		</form>
			          	</div>
			            
			          </div>
			        </div>
			      </div>
			    </div>
			    <div class="col-md-6 col-12  banner-img animate_right">
			      <img src="asset/images/banner1.png" class="img-fluid w-100">
			    </div>
			    <!-- mobile view for form-->
			    <div class="col-12 d-md-none d-block mobile-form">
        		<h6 class="px-4">Never be lied to again! Get notified when we launch</h6>
        		<?php echo errorMessage(); 
        		      echo successMessage(); 
        		?>
        		<form id="form" class="mt-3" action="process.php" method="post">
        			<div class="row">
        				<div class="col-md-12 col-12 d-flex">
          				<input type="email" name="email" id="input-js" class="custom-input" placeholder="Enter your email address...">
          				<button id="btn" type="submit" name="submit" href="#" class="custom-btn custom-btn__2 text-center">SUBSCRIBE NOW</button>
        				</div>
        			</div>
        		</form>
        	</div>
			  </div>
		</div>
	</header>



	<section class="features pb-5 pt-4">
		<div class="container">
			<div class="row">
				<div class="text-center col-10 offset-1 col-md-4 offset-md-4 mt-3 ">
					<h6 class="text-color-2">features</h6>
					<h3>Key Features <span style="color: #024fbb">Detector.<i class="font-weight-light">app</i></span> is offering</h3>
				</div>
				<div class="col-12 mb-5 mt-5">
					<div class="row">
						<div class="custom-container">
						  <div class="item">
						    <div class="sub-item">
						      <img class="img-fluid w-50" src="asset/images/lie.png">
						      <div>
							      <h5 class="text-color">Lie detection</h5>
							      <p>Detect lies from statement</p>
						      </div>
						    </div>
						  </div>
						  <div class="item">
						    <div class="sub-item">
						      <img class="img-fluid w-50 mt-3" src="asset/images/polygraph.png">
						      <div>
							      <h5 class="text-color">Polygraph video</h5>
							      <p>Detect lies from statement</p>
						      </div>
						    </div>
						  </div>
						  <div class="item">
						    <div class="sub-item">
						      <img class="img-fluid w-50" src="asset/images/network.png">
						      <div>
							      <h5 class="text-color">Gets stats & facts</h5>
							      <p>Verified Facts from google plus</p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="position-relative">
		<div class="container ">
			<div class="row how-heading">
				<div class="text-center col-10 offset-1 col-md-4 offset-md-4 mt-3 ">
					<h6 class="text-color-2">how it works</h6>
					<h3>How <span style="color: #024fbb">Detector.<i class="font-weight-light">app</i></span> works with your phone</h3>
				</div>
			</div>
			
			<div class="row how-container">
				<div class="col-md-6 col-12 text-md-left text-center mb-4 ">
					<img src="asset/images/phone1.png" class="img-fluid w-50 d-none d-md-inline animate_rotate">
					<img src="asset/images/phone1-m.png" class="img-fluid w-50 d-inline d-md-none">
				</div>
				<div class="col-md-6 col-12 d-flex align-items-center justify-content-end  mb-4">
					<div class="row">
						<div class="col-md-6 col-sm-7 offset-sm-5 offset-md-6">
							<div class="text-center">
								<img src="asset/images/microphone.png" class="mb-4">
								<h4 class="mb-4" >Voice control</h4>
								<p>Detector App uses Artificial Intelligence and filtered word searches activated by the user to listen to conversation and verify each statement</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flip-1 d-none d-md-block">
				<img src="asset/images/flip-right.png">
			</div>
			
			<div class="row how-container">
				<div class="col-md-6 col-12 d-flex align-items-center justify-content-end order-2 order-md-1 mb-4">
					<div class="row">
						<div class="col-md-6 col-sm-7">
							<div class="text-center">
								<img src="asset/images/polygraph.png" class="mb-4">
								<h4 class="mb-4" >Video Camera</h4>
								<p>Perform a polygraph test using your camera to record the facial expression of the person. Facial expression and hesitation is recorded</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 text-md-right text-center order-1 order-md-2 mb-4">
					<img src="asset/images/phone2.png" class="img-fluid w-50 d-none d-md-inline animate_rotate">
					<img src="asset/images/phone2-m.png" class="img-fluid w-50 d-inline d-md-none">
				</div>
			</div>
			<div class="flip-2 d-none d-md-block">
				<img src="asset/images/flip-left.png">
			</div>
			
			<div class="row how-container">
				<div class="col-md-6 col-12 text-md-left text-center mb-4">
					<img src="asset/images/phone3.png" class="img-fluid w-50 d-none d-md-inline animate_rotate">
					<img src="asset/images/phone3-m.png" class="img-fluid w-50 d-inline d-md-none">
				</div>
				<div class="col-md-6 col-12 d-flex align-items-center justify-content-end al mb-4">
					<div class="row">
						<div class="col-md-6 offset-md-6" class="mb-4">
							<div class="text-center">
								<img src="asset/images/setting.png" class="mb-4">
								<h4 class="mb-4" >Background Operation</h4>
								<p>Detector App runs in the backgroud so as not to iterfare with your conversations and send silent notificaitions to you when a negative statement has been picked up by the app</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flip-3 d-none d-md-block">
				<img src="asset/images/flip-right.png">
			</div>

			<div class="row how-container">
				<div class="col-md-6 col-12 d-flex align-items-center justify-content-end order-md-1 order-2 mb-4">
					<div class="row">
						<div class="col-md-6">
							<div class="text-center">
								<img src="asset/images/fingerprint.png" class="mb-4">
								<h4 class="mb-4" >Fingerprint scanner</h4>
								<p>Detector App also uses fingerprint
									scanner to verify statements
									through fingerprint
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 text-md-right text-center order-md-2 order-1 mb-4">
					<img src="asset/images/phone4.png" class="img-fluid w-50 d-none d-md-inline animate_rotate">
					<img src="asset/images/phone4-m.png" class="img-fluid w-50 d-inline d-md-none">
				</div>
			</div>

			<div class="row how-container">
				<div class="col-md-6 col-12 text-md-left text-center mb-4">
					<img src="asset/images/phone5.png" class="img-fluid w-50 d-none d-md-inline animate_rotate">
					<img src="asset/images/phone5-m.png" class="img-fluid w-50 d-inline d-md-none">
				</div>
				<div class="col-md-6 col-12 d-flex align-items-center justify-content-end al mb-4">
					<div class="row">
						<div class="col-md-6 offset-md-6">
							<div class="text-center">
								<img src="asset/images/web.png" class="mb-4">
								<h4 class="mb-4" >Search engine Optimization</h4>
								<p>Facts are cross checked on multiple search engines to ensure fact accuracy in results</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="flip-4 d-none d-md-block">
				<img src="asset/images/flip-left.png">
			</div>


			<div class="row how-container">
				<div class="col-md-6 col-12 d-flex align-items-center justify-content-end  order-md-1 order-2 mb-4">
					<div class="row">
						<div class="col-md-6">
							<div class="text-center">
								<img src="asset/images/bell.png" class="mb-4">
								<h4 class="mb-4" >False statement notification</h4>
								<p>Detector App uses Artificial Intelligence and filtered word searches activated by the user to listen to conversation and verify each statement</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 text-md-right text-center order-md-2 order-1 mb-4">
					<img src="asset/images/phone6.png" class="img-fluid w-50 d-none d-md-inline animate_rotate">
					<img src="asset/images/phone6-m.png" class="img-fluid w-50 d-inline d-md-none">
				</div>
			</div>

			<div class="flip-5 d-none d-md-block">
				<img src="asset/images/flip-right.png">
			</div>

		</div>
	</section>

	<section class="bg-color pt-5">
		<div class="container-fluid">
			<div class="row contact">
				<div class="col-md-4 offset-md-1 text-white d-flex align-items-center order-2 order-md-1">
					<div class="">
						<h5 class="text-color-3 font-weight-light">stay upto date</h5>
						<h2>Keep me updated on the latest <span class="text-color">Detector.<i class="font-weight-light">app</i></span> feature releases</h2>
						<a href="#" class="d-inline-block mt-5 custom-btn__3">
							<img src="asset/images/icon.png" class="img-fluid"> Notify me
						</a>
					</div>
				</div>
				<div class="col-md-6  order-1 order-md-2 mb-5">
					<img src="asset/images/contact1.png" class="img-fluid w-100">
				</div>
			</div>
		</div>
		<svg class="d-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,224L60,234.7C120,245,240,267,360,240C480,213,600,139,720,96C840,53,960,43,1080,53.3C1200,64,1320,96,1380,112L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
	</section>
	
	
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="row">
						<div class="col-md-12">
							<a class="navbar-brand font-weight-bold logo" href="#" style="color: #024fbb">
								<img src="asset/images/logo.png"> DETECTOR.<i class="font-weight-light">app</i>
							</a>
						</div>
						<div class="col-md-12 mt-4">
							<div class="row">
								<div class="col-md-2 mb-4">
									<h6>SOCIAL MEDIA</h6>
									<div class="row justify-content-start pl-3">
									  <div class="mr-3 p-0">
									    <i class="fab fa-twitter fa-2x"></i>
									  </div>
									  <div class="mr-3 p-0">
									    <i class="fab fa-facebook fa-2x"></i>
									  </div>
									  <div class="mr-2 p-0">
									    <i class="fab fa-pinterest fa-2x"></i>
									  </div>
									  
									</div>
								</div>
							  <div class="col-md-2 col-6 mb-3">
							    <h6 >ABOUT</h6>
							    <ul class="nav nav-pills flex-column link">
							      <li class="nav-item">
							        <a class="nav-link " href="#">Contact Us</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link " href="#">Notify Me</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link " href="#">Our Blog</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#">Affliliations</a>
							      </li> 
							      <li class="nav-item">
							        <a class="nav-link" href="#">Our License</a>
							      </li>
							    </ul>
							  </div>
							  <div class="col-md-2 col-6 mb-3">
							    <h6 >HELP</h6>
							    <ul class="nav nav-pills flex-column link">
							      <li class="nav-item">
							        <a class="nav-link " href="#">FAQs</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link " href="#">Support</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link " href="#">Settings</a>
							      </li>
							       
							    </ul>
							  </div>
							  <div class="col-md-4 offset-md-2 d-md-block d-none">
							  	<h6 class="mt-2">Subscribe to our mailing list and stay in touch</h6>
							  	<?php echo errorMessage(); 
							  	      echo successMessage(); 
							  	?>
  	          		<form id="form" class="mt-3" action="process.php" method="post">
  	          			<div class="row">
  	          				<div class="col-md-12 col-12 d-flex">
  		          				<input type="email" name="email" id="input-js" class="custom-input" placeholder="Enter your email address...">
  		          				<button id="btn" type="submit" name="submit" href="#" class="custom-btn custom-btn__2 text-center">SUBSCRIBE</button>
  	          				</div>
  	          			</div>
  	          		</form>
							  </div>
							  
							</div>
						</div>
						<div class="col-md-12 pl-0 mt-5 d-md-block d-none">
						  <ul class="nav nav-pills ">
						    <li class="nav-item">
						      <a class="nav-link text-dark" href="#">Terms & condition</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link text-dark" href="#">Privacy policy</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link text-dark" href="#">Cookies policy</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link  text-dark" href="#">Copyrights notification</a>
						    </li>
						  </ul>
						</div>
					</div>
					<hr class="mb-5 d-md-block d-none" style="background: #024fbb ">

				</div>
				
			</div>
			<!-- <div class="d-flex align-items-center">
				<a class="navbar-brand font-weight-bold" href="#" style="color: #024fbb">
					<img src="asset/images/logo.png"> DETECTOR.<i style="color: #b9dcff">app</i>
				</a>
				<div class="d-flex align-items-center">
					<p class="m-0 mr-4">Copyright &copy; 2020-2021</p>
					<p class="m-0">All rights reserved.</p>
				</div>
			</div> -->
		</div>
	</footer>
	
	
	<script type="text/javascript">
	  let error = document.getElementById("error");
	  let input = document.getElementById("input-js");

	  input.addEventListener("focus", function (e) {
	  	e.preventDefault();
	  	if (error.style.display = "block") {
	  		error.style.display = "none"
	  	}else{
	  		error.style.display = "block"
	  	}
	  } ,false)

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
	  			    
	  			    }else{
	  			      $("#errorMsg").html(`<div  id="error" class="alert alert-success ">${data}</div>`);
	  			      $(".form")[0].reset()
	  			    }
	  			  }
	  			})

	        $("#input").focus(function () {
	        	// console.log("its working");
	        	$("#error").hide();
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