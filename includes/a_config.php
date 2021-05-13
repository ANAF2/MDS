<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/MDS/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/MDS/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		case "/MDS/login.php":
			$CURRENT_PAGE = "Login"; 
			$PAGE_TITLE = "Login";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Main page";
	}
?>