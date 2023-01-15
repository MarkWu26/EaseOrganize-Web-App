<?php
session_start();
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <Head>
        <meta charset="utf-8">
        <title>Text-Editor</title>
        <link rel="stylesheet" type="text/css" href="textEditorStyle.php">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </Head>

    <body>

    <div class = "container">

        <div class = "userPanel" style="height:1000px;">
            <?php
           
            echo "<p id = 'hello'>Welcome</p>";
            echo "<p id ='txt'>" .$_SESSION['useruid']. "</p>";
            
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
         
            <div class = "topBorder">
                <p id="header">Text Editor</p>

                <button type="submit" name="share" id="share"><i class="tiny material-icons">person_add</i>Share</button>
              
            </div>

            <div class="main">
                <div class="text-container">
                    <form action="process.php" method="POST">

                    <div class="input-field">
                        <label for="title">Enter title</label>
                         <input type="text" name ="document_title" id="title">
                    </div>
                    <textarea name="document_content" id="document_editor"  > </textarea>

                     <input type="submit" name="submit_data" class="save-btn" value="Save" id="submitt">
                    </form>

                

                    <form action="savedfiles.php">
                        <input type ="submit" value="View All Saved Files" id="savedfiles" />
                    </form>
                    <?php
                        if(isset($_GET['error'])){
                        if($_GET['error']== "emptyinput"){
                            echo '<p id="txt-error"> Empty Input! </p>';
                        }


                        }
                    ?>
                <div>
                
            </div>




          
            <div class="music-container" style="height:1000px;">
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

          
        </div>
      

       



    </div>
 
  




    <script src="js/music-list.js"></script>
    <script src="js/script.js"></script>

    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('document_editor');
    </script>

    <?php
    include('script.php');
    ?>

   
   


</body>
</html>
