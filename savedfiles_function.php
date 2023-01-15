<?php

include "connection.php";

if(isset($_POST['delete'])){

$hidden = $_POST['hidden'];

//echo $hidden;

$delete = mysqli_query($conn, "DELETE FROM file where file_id = '$hidden'" )
or die ('Error: '.mysqli_error($conn));
header("location: savedfiles.php");
exit();
}


?>