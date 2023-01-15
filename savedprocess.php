<?php
session_start();


require_once('includes/dbh.inc.php');
$mysqli = new mysqli('localhost', 'root', '', 'phpproject01') or die (mysqli_error($mysqli));
$document_title = '';
$document_content = '';


if(isset($_GET['delete'])){
    require_once('includes/dbh.inc.php');
    $mysqli = new mysqli('localhost', 'root', '', 'phpproject01') or die (mysqli_error($mysqli));
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM file WHERE file_id = $id") or die($mysqli->error());
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: savedfiles.php");
    
}


