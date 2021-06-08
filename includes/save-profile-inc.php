<?php
require_once "db_config.php";
session_start();

$userName = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$userid = $_SESSION["userid"];

//echo "<script>console.log(\"" . $name . "\")</script>";

$sql = "UPDATE user SET username = ?, firstname = ?, lastname = ?, email = ?, phone_number = ? WHERE userId = ?;";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../index.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt, "sssssi", $userName, $firstName, $lastName, $email, $phone, $userid);
mysqli_stmt_execute($stmt); 

mysqli_stmt_close($stmt);

header("location: ../profile.php");
exit();