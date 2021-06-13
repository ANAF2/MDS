<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php");?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>        
  <?php include("includes/design-top.php");?>
  <?php include("includes/navigation.php");?>  
  
  <?php
    include("includes/functions.php");
    $userid = $_SESSION["userid"];

    $filePath = getPathForUser($conn, $userid);
    //$json = readJson($filePath);

    $json = file_get_contents("cv_data/" . $filePath);
  
    $json =  json_decode($json, true);
  
    $highSchool = '';
    $uni = '';
    $desc = '';
    $exp = '';
    $cert = '';
    $projects = '';
    $skills = '';
  
    if(array_key_exists("High School", $json)){
      $highSchool = $json["High School"];
      $uni = $json["University"];
      $desc = $json["Personal description"];
      $exp = arrayToString($json["Work experience"]);
      $cert = arrayToString($json["Certifications"]);
      $projects = arrayToString($json["Projects"]);
      $skills = arrayToString($json["Skills"]);
    }
  ?>

  <div class="container" id="main-content">
    <form action="includes/update-cv-inc.php" method="post">
      <div class="form-group ">
          <label>High school</label>
          <br>
          <input type="text" name="highschool" class="form-control" placeholder="Where did u go to high school" required value = '<?php echo $highSchool; ?>'>
      </div>    

      <br>

      <div class="form-group">
          <label>University</label>
          <br>
          <input type="text" name="uni" class="form-control" placeholder="Where did u go to university" required value = '<?php echo $uni; ?>'>    
      </div>

      <br>

      <div class="form-group ">
        <label>Personal description</label>
        <br>
        <input type="text" name="desc" class="form-control" placeholder="How are you" required value = '<?php echo $desc; ?>'>

      </div> 

      <div class="form-group ">
        <label>Work experience</label>
        <br>
        <input type="text" name="exp" class="form-control" placeholder="What u did" required value = '<?php echo $exp; ?>'>

      </div>

      <div class="form-group ">
        <label>Certifications and diplomas(devide items with ";")</label>
        <br>
        <input type="text" name="cert" class="form-control" placeholder="Certifications" required value = '<?php echo $cert; ?>'>

      </div> 

      <div class="form-group ">
        <label>Projects(devide items with ";")</label>
        <br>
        <input type="text" name="projects" class="form-control" placeholder="Projects" required value = '<?php echo $projects; ?>'>

      </div> 

      <div class="form-group ">
        <label>Skills(devide items with ";")</label>
        <br>
        <input type="text" name="skills" class="form-control" placeholder="Skills" required value = '<?php echo $skills; ?>'>

      </div> 

      <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
      </div>
    </form>

  </div>

  <?php include("includes/footer.php");?>
        
</body>
</html>