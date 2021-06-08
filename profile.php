    <?php include("includes/a_config.php");?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php include("includes/head-tag-contents.php");?>
    </head>
    <body>
        
        <?php include("includes/design-top.php");?>
        <?php include("includes/navigation.php");?>

        <div class="container" id="main-content">

        <?php
            require_once("includes/functions.php");
            require_once("includes/db_config.php");
            
            $userid = $_SESSION["userid"];
            $row = profileShow($conn, $userid);
        ?>

        <form action="includes/save-profile-inc.php" method="POST">
        <div class="form-group ">
            <label>Last Name</label>
            <input type="text" name="lastName" class="form-control" placeholder="Doe" required value = <?php echo $row["lastname"]; ?>>
        </div>

        <div class="form-group ">
            <label>First Name</label>
            <input type="text" name="firstName" class="form-control" placeholder="John" required value = <?php echo $row["firstname"]; ?>>
        </div>

        <div class="form-group ">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value = <?php echo $row["email"]; ?>>
        </div>

        <div class="form-group ">
            <label>Phone number</label>
            <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="0123456789" required value = <?php echo $row["phone_number"]; ?>>
        </div>

        <div class="form-group ">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required value = <?php echo $row["username"]; ?>>
        </div>

        <div class="form-group">
            <input type="submit" name="save" class="btn btn-success" value="Save changes">
        </div>

        <div class="form-group">
            <input type="submit" name="reset-password" class="btn btn-secondary" value="Reset your password" formaction ="reset-form.php" formmethod ="POST">
        </div>

        </div>

        <?php include("includes/footer.php");?>

    </body>
    </html>