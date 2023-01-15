<?php

if(isset($_POST["basic"])){
session_start();


header("location: ../basic.php");
exit();
}
else{
    header("location: ../basic.php");
    exit();
}
