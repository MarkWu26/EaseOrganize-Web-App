<?php
include "../connection.php";

if(isset($_POST['save'])){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['start_datetime'];

    $query = mysqli_query($conn, "INSERT INTO schedule_list (title, description, start_datetime, usersId) VALUES ('$title', '$desc', '$date', '".$_SESSION['id']."') ") 
    or die ('Error:'.mysqli_error($conn));


}




?>
