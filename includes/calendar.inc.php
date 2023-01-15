<?php

if(isset($_POST["educ"])){
session_start();


header("location: ../calendar.php");
exit();
}
else{
    header("location: ../calendar.php");
    exit();
}
