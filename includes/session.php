<?php

	session_start();
	
	function message() {
		if (isset($_SESSION["message"])) {
			$output = "<div class=\"message\">";
			$output .= htmlentities($_SESSION["message"]);
			$output .= "</div>";
			
			// clear message after use
			$_SESSION["message"] = null;
			
			return $output;
		}
	}

	function errors() {
		if (isset($_SESSION["errors"])) {
			$errors = $_SESSION["errors"];
<<<<<<< HEAD
			
			// clear message after use
			$_SESSION["errors"] = null;
			
=======

			// clear message after use
			$_SESSION["errors"] = null;

>>>>>>> 41116fae71f75e5772990722d10b5f1f89de6afa
			return $errors;
		}
	}
	
?>