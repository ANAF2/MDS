<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="wrapper">
    <h2>Sign up</h2>
    <p>Please fill in your information.</p>

    <?php
            if(isset($_GET["error"])){
                switch($_GET["error"]){
                    case "wrongsignup":
                        echo'<i style="color:red">Passwords do not match</i>';
                        break;
                    case "userexists":
                        echo'<i style="color:red">Username already taken</i>';
                        break;
                    default:
                        break;
                }
            }
        ?>

    <form action="includes/signup-inc.php" method="post">
        <div class="form-group ">
            <label>Last Name</label>
            <input type="text" name="lastName" class="form-control" placeholder="Doe" required>
        </div>

        <div class="form-group ">
            <label>First Name</label>
            <input type="text" name="firstName" class="form-control" placeholder="John" required>
        </div>

        <div class="form-group ">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group ">
            <label>Phone number</label>
            <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="0123456789" required>
        </div>

        <div class="form-group ">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group ">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group ">
            <label>Reapeat your password</label>
            <input type="password" name="repeatPassword" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Sign up">
        </div>

</div>

<?php include("includes/footer.php");?>

</body>
</html>