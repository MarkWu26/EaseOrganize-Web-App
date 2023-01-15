<?php
include "connection.php";


if(isset($_POST['view'])){

    $id = $_POST['hidden'];
    $_SESSION['fileid'] = $id;
    header("location: details.php");
    exit();



}

?>