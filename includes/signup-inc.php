<?php
require_once 'db_config.php';
require_once 'functions.php';

if(isset($_POST["submit"])){

    $lastName = $_POST["lastName"];
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeatPassword"];

    userCreate($conn, $firstName, $lastName, $email, $phone, $username, $password, $repeatPassword);
}
else {
    header("location: ../signup.php");
    exit();
}