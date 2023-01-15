<?php

if(isset($_POST["todolist"])){
session_start();


header("location: ../todolist.php");
exit();
}
else{
    header("location: ../todolist.php");
    exit();
}
