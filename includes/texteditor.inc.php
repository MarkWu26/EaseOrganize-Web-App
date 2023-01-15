<?php

if(isset($_POST["texteditor"])){
session_start();


header("location: ../texteditor.php");
exit();
}
else{
    header("location: ../texteditor.php");
    exit();
}
