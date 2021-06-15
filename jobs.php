<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
	<link type="text/css" rel="stylesheet" href="./CSS/style.css">
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<?php
	include("includes/functions.php");
	include("includes/db_config.php");
	$userid = $_SESSION["userid"];

	$filePath = getPathForUser($conn, $userid);
	$filePath = "cv_data/" . $filePath;
  
    $json = file_get_contents($filePath);
  
    $data = json_decode($json, true);
	$skills = $data["Skills"];
	

	$result = getJobs($conn);
	$arr = []; 

	while($data = mysqli_fetch_object($result)){
    
		array_push($arr, $data);
	
	}
	
?>
<script src="scripts/scriptJobs.js"></script>
<script>
	var js_data = '<?php echo json_encode($arr); ?>';
	var jobs = JSON.parse(js_data );

	var js_data = '<?php echo json_encode($skills); ?>';
	var userData = JSON.parse(js_data);
	
	const sorted = startJobSearching(userData, jobs);

	console.log(jobs);
	//console.log(userData);

</script>

<div class="container" id="main-content">

<script>
	document.getElementById("main-content").innerHTML = showJobs(sorted);
</script>

</div>

<?php include("includes/footer.php");?>

</body>
</html>