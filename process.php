<?php
session_start();
?>

<?php
if(isset($_POST['submit_data'])){
    include "connection.php";
    $title = $_POST['document_title'];
    $content =  $_POST['document_content'];

    if(!empty($title) || !empty($content)){
        
   //     $sql = "INSERT INTO file(file_title, file_content, usersId) VALUES('$title', '$content', '$_SESSION[userid]');";
      //  $execute = mysqli_query($conn, $sql);
      $query = mysqli_query($conn, "INSERT INTO file (file_title, file_content, usersId) VALUES ('$title', '$content', '".$_SESSION['id']."') ");
            header('refresh:2; url=textEditor.php');
            echo "Saved successfully";
            exit();
    }
    else{
        header("Location: texteditor.php?error=emptyinput");
        exit();
    }


}
else{
    header('Location: textEditor.php?invalidRequest');
    exit();

}






?>