<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
	<link type="text/css" rel="stylesheet" href="CSS/style.css">
	<style>
		<?php include 'CSS/style.css'; ?>
    </style>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">

<?php
	if(!isset($_SESSION["userid"])){ 
?>
	<h2 style="text-align:center">Sign up for and start your resume:</h2>

	<div class="d-flex justify-content-center ">
		<a class="btn btn-primary" href="login.php">Login</a>
		<div class="divider"></div>
		<a class="btn btn-primary" href="signup.php">Sign Up</a>
	</div>
<?php
	}
	else{
?>

	<h2 style="text-align:center">Let's start your resume</h2>

	<div class="d-flex justify-content-center ">
		<a class="btn btn-primary" href="includes/begin-inc.php">Begin</a>
	</div>
    
	<br>

	<h3>Choose a template for your resume</h3>

	<div class="d-flex justify-content-center ">
		<img  class='image-thumbnail' src='images/template1.png' onclick="window.location='templates/template1.php';">
       
       
	   	<img  class='image-thumbnail' src='images/template2.png' onclick="window.location='templates/template2.php';">
 
  
	   	<img  class='image-thumbnail' src='images/template3.png' onclick="window.location='templates/template3.php';">       
 
	</div>

<?php
	} 
?>

	<br>

	<h4>Parerile clientiilor nostri</h4>

	<br>

	<i>
		"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
	</i>
	<br>
	<p style="text-align:right; font-weight:bold">-John Doe.</p>

	<br>

	<i>
		"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
	</i>
	<br>
	<p style="text-align:right; font-weight:bold">-Jane Doe.</p>

</div>

<?php include("includes/footer.php");?>

</body>
</html>