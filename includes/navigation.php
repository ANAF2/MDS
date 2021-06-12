<?php 
	session_start();
?>

<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
	  </li>
	  <?php
		if(isset($_SESSION["userid"])){ ?>
		<li class="nav-item">
	    	<a class="nav-link <?php if ($CURRENT_PAGE == "CV") {?>active<?php }?>" href="cv-form.php">CV</a>
		</li>
	  	<li class="nav-item">
	    	<a class="nav-link <?php if ($CURRENT_PAGE == "Profile") {?>active<?php }?>" href="profile.php">Profile</a>
	  	</li>
	  	<li class="nav-item">
	   		<a class="nav-link <?php if ($CURRENT_PAGE == "Logout") {?>active<?php }?>" href="includes/logout-inc.php">Logout</a>
	  	</li>

<?php	}
	  ?>
	</ul>
</div>