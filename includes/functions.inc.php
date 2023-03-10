<?php

function emptyInputSignup($username, $pwd){
    $result;
    if(empty($username)|| empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidPwd($pwd){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn, $username){
   $sql = "SELECT * FROM users WHERE usersUid =?;";
   $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
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

function createUser($conn, $username, $pwd){
    $sql = "INSERT INTO users (usersUid, usersPwd) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt, $sql)){
         header("location: ../index.php?error=stmt failed");
         exit();
     }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

     mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
     header("location: ../index.php?error=none");
     exit();
 }

 function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username)|| empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username);

    if($uidExists === false){
        header("location: ../index.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false ){
        header("location: ../index.php?error=wronglogin");
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../calendar.php");
        exit();
    }
}