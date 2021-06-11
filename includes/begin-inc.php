<?php
include 'db_config.php';
include 'functions.php';

session_start();

if(isset($_SESSION["userid"])){

    $userid = $_SESSION["userid"];

    $filePath = generatePath($conn, $userid);

    if($filePath === true){
        header("location: ../index.php");
        exit();
    }

    $profile = profileShow($conn, $userid);
    //$filePath = $profile["path"];

    $obj = array(
    'firstname' => $profile["firstname"],
    'lastname' => $profile["lastname"],
    'email' => $profile["email"],
    'phone' => $profile["phone_number"]
    );

    createJson($filePath, $obj);

    header("location: ../index.php");
    exit();
}
else{
    header("location: ../index.php?rez=NOJSON");
    exit();
}