<?php 
	require_once 'config.php';
	function Redirect($location)
	{
		header("Location:".$location);
		exit;
	}

// serialize input
	function sanitizeString($var){
		global $db;
		$var = strip_tags($var);
		$var = htmlentities($var);
		$var = stripslashes($var);
		$var = filter_var($var, FILTER_SANITIZE_STRING);
		return $db->real_escape_string(trim($var));
	}


	// Check if email exist
	function checkEmail($email)
	{
		global $db;
		$sql = "SELECT email FROM email_notification WHERE email='$email'";
		$connect = $db->query($sql);

		$totalRow = mysqli_num_rows($connect);
		if ($totalRow == 1) {
			return true;
		}else{
			return false;
		}
	}

	// Validate user input
	function validator($data)
	{
		// validate EMAIL
		if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
			if (preg_match("/[a-zA-Z0-9_.]{3,}@[a-zA-Z]{4,}[.]{1}[a-zA-Z0-9.]{2,}/", $data)) {
				return $data;
			}
		}
		// validate PHONE NUMBER
		if (filter_var($data, FILTER_SANITIZE_NUMBER_INT)) {
			return $data;
		}
		// validate URL
		if (filter_var($data, FILTER_VALIDATE_URL)) {
			if (preg_match("/(https:|ftp:)\/\/+[a-zA-Z.0-9\?&\%\$\-\#]+\.[a-zA-Z.0-9\?&\%\$\-\#\/\_]*/", $data)) {
				return $data;
			}
		}
	}










?>