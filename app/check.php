<?php
session_start();
?>
<?php

if(isset($_POST['id'])){
    require '../connection.php';

    $id = $_POST['id'];

    if(empty($id)){
       echo 'error';
    }else {
        $todos = mysqli_query($conn, "SELECT id, checked FROM todos WHERE id='$id'");
        $todo = mysqli_fetch_array($todos);

        $checked = $todo['checked'];

        $uChecked = $checked ? 0 : 1;

        $res = mysqli_query($conn, "UPDATE todos SET checked=$uChecked WHERE id=$id");

        if($res){
            echo $checked;
        }else {
            echo "error";
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../todolist.php?mess=error");
}