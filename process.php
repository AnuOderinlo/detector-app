<?php 
	require_once 'include/session.php';
	require_once 'include/functions.php';
	require_once 'include/config.php';

	if (isset($_POST["submit"])) {
		// echo $_POST["email"];
		date_default_timezone_set("Africa/Lagos");
		$date = date("d/M/Y h:ia", time());
		$email =  sanitizeString($_POST["email"]); 

		if (empty($email)) {
		  $_SESSION["errorMessage"] = "Email can't be empty";
		  // Redirect("index.php");
		  echo errorMessage();
		}elseif (validator($email) == false) {
			$_SESSION["errorMessage"] = "Invalid email";
		  // Redirect("index.php");
		  echo errorMessage();
		}elseif (checkEmail($email)) {
      $_SESSION["errorMessage"] = "Email already exist, use another one";
      // Redirect("index.php");
      echo errorMessage();
    }
		else{
			$sql = "INSERT INTO email_notification (datetime, email) VALUES (?,?)";
      $connect = $db->prepare($sql);
      $connect->bind_param("ss", $date, $email);
      $connect = $connect->execute();

      if ($connect) {
        $_SESSION["successMessage"] = "Success! we will keep you updated";
	      echo successMessage();
        // Redirect("index.php");
      }else{
        $_SESSION["errorMessage"] = "Couldn't send email, something went wrong";
        // Redirect("index.php");
	      echo errorMessage();
      }
		}

	}



 ?>