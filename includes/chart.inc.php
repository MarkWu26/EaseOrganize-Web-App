<?php

if(isset($_POST["chart"])){
session_start();


header("location: ../Chart.php");
exit();
}
else{
    header("location: ../Chart.php");
    exit();
}
