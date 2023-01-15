<?php
session_start();
?>

<?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="detailsStyle.php">
    <title>Document</title>
</head>
<body>
    

    <div class="result">
        <?php

    
          
           // $auth_id = mysqli_real_escape_string($conn, $_GET['file_id']);//
            $query = mysqli_query($conn, "SELECT * FROM file WHERE file_id = '".$_SESSION['fileid']."' ");
        
            $row = mysqli_fetch_array($query);

        

        ?>

        <h1>
            <?php echo "<p id ='title'>" .$row['file_title']. "</p>"; ?>
        </h1>

        <div class="content">
            <?php echo "<p id ='content'>" .$row['file_content']. "</p>"; ?>
        </div>
       
        
    </div>
        
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
        <p id="header">File Viewing</p>

        <button type="submit" name="share" id="share"><i class="tiny material-icons">person_add</i>Share</button>
              
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

        <form action="savedfiles.php">
        <input type ="submit" value="View All Files" id="viewBtn" />
        </form>



</body>

<script src="js/music-list.js"></script>
<script src="js/script.js"></script>

</html>