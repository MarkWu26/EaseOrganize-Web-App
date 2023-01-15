<?php
session_start();
?>

<?php
include "connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="savedfilesStyle.php">
    <title>Saved Documents</title>
   
</head>
<body>

    <div class = "userPanel">
            <?php
             if(isset($_SESSION["useruid"])){
            echo "<p id = 'hello'>Welcome</p>";
            echo "<p id ='txt'>" .$_SESSION["useruid"]. "</p>";
            }
            ?>

            <form action="includes/calendar.inc.php">
            <button type="submit" name="educ" id="btnPanel"> Calendar </button>
            </form>
            <form action="includes/todolist.inc.php">
            <button type="submit" name="todolist" id="btnPanel"> To-Do List </button>
            </form>
            <form action="includes/texteditor.inc.php">
            <button type = "submit" name="texteditor" id="btnPanel"> Text Editor </button>
            </form>
            <form action="includes/logout.inc.php">
            <button type="submit" name="logout" id="btnPanel"> Logout </button>
            </form>
            
            <img src="avatar2.png" alt="avatar" id="avatarPic">
    </div>

    <div class = "topBorder">
                <p id="header">SAVED FILES</p>

                <button type="submit" name="share" id="share"><i class="tiny material-icons">person_add</i>Share</button>
              
    </div>



    <div class="data-container">
        <?php
        
        $query = mysqli_query($conn, "SELECT * FROM file where usersId = '".$_SESSION['id']."' ");
        $count= mysqli_num_rows($query);

        if($count>0){
            while($row = mysqli_fetch_array($query)){ 
            $timestamp = $row['date_published'];
            $date = date('dS M Y', strtotime($timestamp));
            $time = date('h:i A', strtotime($timestamp));
            $id = $row['file_id'];
        
            ?>
        
         <h1><a href="details.php?file_id=
       
         <?php
          echo $row['file_id']; ?>">
            <?php echo "<p id ='title'>" .$row['file_title'].  "</p>"; ?>
      
            </a>
         </h1>
     
            <span id="publish"> Published on: <?php echo $date; ?> At: <?php echo $time; ?> </span>
            <?php
              echo'
            <form method="POST">
           <input type="hidden" name="hidden" value="'.$row['file_id'].'" />
            <button type="submit" style="margin-left:650px; margin-top:-70px;" class="btn btn-danger" name="delete"> Delete</button>

            <button type="submit" style="margin-top:-70px;" class="btn btn-primary" name="view"> View</button><hr>
            </form>';
             include "savedfiles_function.php";
             include "redirect.php";
            ?>
            
         <?php

         
            }
         }


        ?>

       
    </div>


    <div class="music-container">
                <div class="top-bar">
                 <i class="material-icons">favorite_border</i>
                    <span>Now Playing</span>
                    <i class="material-icons">add</i>
                </div>

                <div class="img-area">
                    <img src="images/music-1.jpg" alt="">
                </div>

                <div class="song-details">
                    <p class="name">Sky Full Of Stars</p>
                    <p class="artist">Coldplay</p>
                </div>

                <div class="progress-area">

                    <div class="progress-bar">
                        <audio id="main-audio" src=""></audio>
                    </div>
                    <div class="song-timer">
                        <span class="current-time">0:00</span>
                        <span class="max-duration">0:00</span>
                    </div>
                    <audio id="main-audio" src =""></audio>
                </div>


                <div class="controls">
                 <i id="repeat-plist" class="material-icons" title="playlist looped">repeat</i>
                 <i id="prev" class="material-icons prev">fast_rewind</i>

                    <div class="play-pause">
                        <i class="material-icons play">play_arrow</i>
                    </div>

                    <i id="next" class="material-icons next">fast_forward</i>
                    <i id="more-music" class="material-icons">queue_music</i>
                </div>

                <div class="music-list">
                 <div class="headerr">
                    <div class="row">
                        <i class="list material-icons">queue_music</i>
                        <span>Music List</span>
                    </div>
                    <i id="close" class="material-icons">close</i>
                 </div>
                    <ul>
                       
                    </ul>
                </div>
            </div>

            <form action="textEditor.php">
                        <input type ="submit" value="Back" id="back" />
            </form>


    


<script src="js/music-list.js"></script>
<script src="js/script.js"></script>
</body>
</html>