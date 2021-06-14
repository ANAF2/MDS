<?php 
include 'db_config.php';

//-- Signup functions --

function userExists($conn, $username, $email){
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function userCreate($conn, $firstName, $lastName, $email, $phone, $username, $password, $repeatPassword){

   /* if(!preg_match('/^[a-zA-Z0-9]*$/'), $username){
        header("location: ../signup.php?error=invaliduser");
        exit();
    }*/

    $username = mysqli_real_escape_string($conn, $username);
    $name = mysqli_real_escape_string($conn, $name);

    if(userExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=userexists");
        exit();
    }

    if($password !== $repeatPassword){
        header("location: ../signup.php?error=wrongsignup");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, password, firstname, lastname, email, phone_number) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
   
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssi", $username, $hashedPwd, $firstName, $lastName, $email, $phone);
    mysqli_stmt_execute($stmt); 

    mysqli_stmt_close($stmt);
    
    header("location: ../login.php");
    exit();

}

//-- Login functions --

function emptyInputLogin($username, $password){
    $result;

    if(empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function loginUser($conn, $username, $password){
    $userExists = userExists($conn, $username, $username);

    if($userExists === false){
        header("location: ../login.php?error=wronglogin_1");
        exit();
    }

    $pwdHashed = $userExists["password"];
    
    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();

        $_SESSION["userid"] = $userExists["userId"];
        $_SESSION["userRole"] = $userExists["userRole"];
        $_SESSION["name"] = $userExists["name"];

        header("location: ../index.php");
        exit();
    }
}

function profileShow($conn, $userid){
    if(!isset($_SESSION["userid"])){
        header("location: ../index.php");
        exit();
    }
    else if($_SESSION["userid"] === $userid){
        $sql = "SELECT * FROM user WHERE userId = ?;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    
        mysqli_stmt_bind_param($stmt, "i", $userid);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($resultData);

        return $row;

        mysqli_stmt_close($stmt);
    }
}


 function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function readUser($conn, $userid){
    $sql = "SELECT name, email, phone_number FROM user WHERE userId = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $userid);
    mysqli_stmt_execute($stmt);

    return $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
}

function generatePath($conn, $userid){
    $data = profileShow($conn, $userid);
    $filePath = $data["path"];
    
    //echo $filePath;
    if(is_null($filePath) === true){
        $rand = generateRandomString(5);

        $filePath = $userid . "_" . $data["lastname"] . "_" . $data["firstname"] . "_" . $rand . ".json";

        $sql = "UPDATE user SET path = ? WHERE userid = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "si", $filePath, $userid);
        mysqli_stmt_execute($stmt); 

        mysqli_stmt_close($stmt);

        //header("location: ../index.php?rez=REUSIT");
        return $filePath;
    } 
    else{ 
        //header("location: ../index.php?rez=FAIL");

        return true;
    }
}

// Creating and writing the json file
function createJson($filePath, $obj){
  
    $filePath ="../cv_data/" . $filePath;
    $file = fopen($filePath, "w");;
    
    $json = json_encode($obj);
    file_put_contents($filePath, $json);
  
    fclose($file);
}

// Updating data in json file
function updateJson($json, $userid, $filePath, $highSchool, $uni, $desc, $exp, $cert, $projects, $skills){
    $json["High School"] = $highSchool;
  
    $json["University"] = $uni;
  
    $json["Personal description"] = $desc;
  
    $json["Work experience"] = $exp;
  
    $json["Certifications"] = $cert;
  
    $json["Projects"] = $projects;
  
    $json["Skills"] = $skills;
  
    createJson($filePath, $json);
}

// Reading the json file
function readJson($filePath){

    $filePath = "../cv_data/" . $filePath;
  
    $json = file_get_contents($filePath);
  
    return json_decode($json, true);
}

function getPathForUser($conn, $userid){
    if(!isset($_SESSION["userid"])){
      header("location: ../index.php");
      exit();
  }
  else if($_SESSION["userid"] === $userid){
      $sql = "SELECT path FROM user WHERE userId = ?;";
      $stmt = mysqli_stmt_init($conn);
      
      if(!mysqli_stmt_prepare($stmt, $sql)){
          header("location: ../index.php?error=stmtfailed");
          exit();
      }
  
      mysqli_stmt_bind_param($stmt, "i", $userid);
      mysqli_stmt_execute($stmt);
  
      $resultData = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($resultData);
  
      return $row["path"];
  
      mysqli_stmt_close($stmt);
    }
}

// Conversion for the CV form
function arrayToString($arr){
    $str = "";
  
    foreach($arr as $i){
      $str = $str . $i . "; ";
    }
  
    if($str[-1] == ' ')
        $str = substr($str, 0, -1);

    return $str;
  }

function removeLast($arr){
    $nr = count($arr) - 1;

    if($arr[$nr][-1] == ';'){
        $arr[$nr] = substr($arr[$nr], 0, -1);
    }

    return $arr;
}

function getJobs($conn){
    
      $sql = "SELECT * FROM jobs;";
      $stmt = mysqli_stmt_init($conn);
      
      if(!mysqli_stmt_prepare($stmt, $sql)){
          header("location: ../index.php?error=stmtfailed");
          exit();
      }
  
      //mysqli_stmt_bind_param($stmt, "i", $userid);
      mysqli_stmt_execute($stmt);
  
      $resultData = mysqli_stmt_get_result($stmt);
      
  
      return $resultData;
  
      mysqli_stmt_close($stmt);
    
}

function readSkills($conn, $userid){

    $filePath = getPathForUser($conn, $userid);

    $data = readJson($filePath);

    return $data["Skills"];
}