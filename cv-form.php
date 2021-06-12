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

  <div class="container" id="main-content">
    <form action="includes/update-cv-inc.php" method="post">
      <div class="form-group ">
          <label>High school</label>
          <br>
          <input type="text" name="highschool" class="form-control" placeholder="Where did u go to high school" required>
      </div>    

      <br>

      <div class="form-group">
          <label>University</label>
          <br>
          <input type="text" name="uni" class="form-control" placeholder="Where did u go to university" required>    
      </div>

      <br>

      <div class="form-group ">
        <label>Work experience</label>
        <br>
        <input type="text" name="exp" class="form-control" placeholder="What u did" required>

    </div> 
    
      <div class="form-group ">
        <label>Personal description</label>
        <br>
        <input type="text" name="desc" class="form-control" placeholder="How are you" required>

      </div> 

      <div class="form-group ">
        <label>Certifications and diplomas(devide items with ";")</label>
        <br>
        <input type="text" name="cert" class="form-control" placeholder="Certifications" required>

      </div> 

      <div class="form-group ">
        <label>Projects(devide items with ";")</label>
        <br>
        <input type="text" name="projects" class="form-control" placeholder="Projects" required>

      </div> 

      <div class="form-group ">
        <label>Skills(devide items with ";")</label>
        <br>
        <input type="text" name="skills" class="form-control" placeholder="Skills" required>

      </div> 

      <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
      </div>
    </form>

  </div>

  <?php include("includes/footer.php");?>
        
</body>
</html>