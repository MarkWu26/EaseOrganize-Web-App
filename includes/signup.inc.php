<?php

if(isset($_POST["signup"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($username, $pwd)!==false){
        header("location: ../index.php?error=emptyinput");
        exit();
    }

    if(invalidUid($username)!==false){
        header("location: ../index.php?error=invaliduid");
        exit();
    }

    if(invalidPwd($pwd)!==false){
        header("location: ../index.php?error=passwordinvalid");
        exit();
    }

    if(uidExists($conn, $username)!==false){
        header("location: ../index.php?error=usernametaken");
        exit();
    }


    createUser($conn, $username, $pwd);
}


else{
    header("location: ../index.php");
    exit();
}