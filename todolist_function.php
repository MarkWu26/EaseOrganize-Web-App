<?php

include "connection.php";

if(isset($_POST['add'])){
    $title = $_POST['title'];

    $ct = mysqli_query($conn, "SELECT * FROM todos where usersId = '".$_SESSION['id']."' and title = '$title' ");
    $su = mysqli_num_rows($ct);
    if($su == 0){
        $query = mysqli_query($conn, "INSERT INTO todos (title, usersId) VALUES ('$title', '".$_SESSION['id']."') ") 
        or die ('Error:'.mysqli_error($conn));
    }
 

}

if(isset($_POST['id'])){
     $id = $_POST['id'];

    $delete_query = mysqli_query($conn, "DELETE FROM todos where usersId =? ");
  
}

if(isset($_POST['del'])){
    $hidden = $_POST['hidden'];
    $delete_query = mysqli_query($conn, "DELETE FROM todos where usersId = '".$_SESSION['id']."' and id = '$hidden' " )
    or die ('Error:'.mysqli_error($conn));
}




?>