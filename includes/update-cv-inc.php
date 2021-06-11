<?php

include 'db_config.php';
include 'functions.php';

session_start();

if(isset($_POST["submit"])){

    $userid = $_SESSION["userid"];
    
    $filePath = getPathForUser($conn, $userid);

    $data =  readJson($filePath);

    $rem = array('\r', '\n');

    $highSchool = $_POST["highschool"];
    $uni = $_POST["uni"];
    $desc = $_POST["desc"];
    $exp = explode("; ", str_replace($rem , '', $_POST["exp"]));
    $cert = explode("; ", str_replace($rem , '', $_POST["cert"]));
    $projects = explode("; ", str_replace($rem , '', $_POST["projects"]));
    $skills = explode("; ", str_replace($rem , '', $_POST["skills"]));

    updateJson($data, $userid, $filePath, $highSchool, $uni, $desc, $exp, $cert, $projects, $skills);

    header("location: ../index.php");
    exit();
}
else{
    header("location: ../index.php?rez=NOUPDATE");
    exit();
}