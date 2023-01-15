<?php
include "connection.php";
if(isset($_POST['signup'])){

    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    $ct = mysqli_query($conn, "SELECT * FROM users where usersUid = '$username' ");
    $su = mysqli_fetch_array($ct);

    if($su == 0){
        $query = mysqli_query($conn, "INSERT INTO users (usersUid, usersPwd) VALUES ('$username', '$password') ") or die('Error: '.mysqli_error($conn) );

        header("location: index.php?error=none");
        exit();
    }
    else{
        header("location: index.php?error=usernametaken");
        exit();
    }
  


}


?>