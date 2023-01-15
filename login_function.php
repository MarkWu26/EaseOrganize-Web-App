<?php
include "connection.php";

if(isset($_POST['login'])){


    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    $user = mysqli_query($conn, "SELECT * FROM users where usersUid = '$username' and usersPwd = '$password'");
    $numrow_user = mysqli_num_rows($user);

    if($numrow_user > 0){
        while($row = mysqli_fetch_array($user)){
            $_SESSION['useruid'] = $row['usersUid'];
            $_SESSION['id'] = $row['usersId'];
        }
        header ('Location: calendar.php');
        exit();
    }
    


}