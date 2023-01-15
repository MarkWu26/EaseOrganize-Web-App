<?php
session_start();
?>

<?php 
   require_once 'connection.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
        <link rel="stylesheet" type="text/css" href="styletodo.php">
        <link rel="stylesheet" type="text/css" href="todostyle.php">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
    </Head>

    <body>

    <div class = "container">

        <div class = "userPanel" style="height:1000px;">
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
            <button type="submit" name="todolist" id="btnPanel"> To-Do List</button>
            </form>
            <form action="includes/texteditor.inc.php">
            <button type = "submit" name="texteditor" id="btnPanel"> Text Editor </button>
            </form>
            <form action="includes/logout.inc.php">
            <button type="submit" name="logout" id="btnPanel"> Logout </button>
            </form>

            <img src="avatar2.png" alt="avatar" id="avatarPic">
         
            <div class = "topBorder">
                <p id="header">TO- DO LIST</p>

                <button type="submit" name="share" id="share"><i class="tiny material-icons">person_add</i>Share</button>
            </div>



            <div class="main">
             <div class="main-section">
            
                <div class="add-section">
                    <form method="POST" autocomplete="off">
                    <?php 
                    if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                    <input type="text" 
                     name="title" 
                     style="border-color: #ff6666"
                     placeholder="This field is required" />
                    <button type="submit">Add &nbsp; <span>&#43;</span></button>

                 <?php }
                 else{ ?>
                 <input type="text" 
                     name="title" 
                     placeholder="What do you need to do?" />
                   <?php 
                   echo'
                    <button type="submit" name="add">Add &nbsp; <span>&#43;</span></button>'; 
                    include "todolist_function.php"?>
                    
                    <?php } ?>
                    </form>
                </div>
             <?php 
            $todos = mysqli_query($conn, "SELECT * FROM todos WHERE usersId = '".$_SESSION['id']."';");
            
            $row = mysqli_fetch_array($todos);
            if($row == 0){
                echo'
                <div class="show-todo-section">
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/f.png" width="100%" />
                        <img src="img/Ellipsis.gif" width="80px">
                    </div>
                </div>'; }
                ?>

            <?php
              $todos = mysqli_query($conn, "SELECT * FROM todos WHERE usersId = '".$_SESSION['id']."';");
            
              while($row = mysqli_fetch_array($todos)){
                echo'  <div class="todo-item">
                <form method="POST">';

                if($row>0){
                    echo'
                  

                    <input type ="hidden" value="'.$row['id'].'" name="hidden"/>

                    <button type="submit" name="del" id="'.$row['id'].'" class="remove-to-do">x</button>';
                     if($row['checked'] == '1'){
                        echo'
                        <input type="checkbox" data-todo-id =" '.$row['id'].' " class="check-box" name="check"/>

                        <h2 class="checked">
                       '.$row['title'].'
                       </h2>
                       </div>';
                      
                     }
                     else{
                        echo'
                        <input type="checkbox" data-todo-id =" '.$row['id'].' " class="check-box" name="check"/>

                        <h2>
                       '.$row['title'].'
                       </h2>
                       <br>
                    
    
                       <small>created: '.$row['date_time'].' </small> 
        
                      
                     
                     
                    </form>
                    </div>
                    
                    
                    ';
                    include "todolist_function.php";
                  }


              }
            }
              
              ?>
            


          


    </div>

    <script src="js/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.remove-to-do').click(function(){
                const id = $(this).attr('id');
                
                $.post("todolist_function.php", 
                      {
                          id: id
                      },
                      (data)  => {
                         if(data){
                             $(this).parent().hide(600);
                         }
                      }
                );
            });

            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('app/check.php', 
                      {
                          id: id
                      },
                      (data) => {
                          if(data != 'error'){
                              const h2 = $(this).next();
                              if(data === '1'){
                                  h2.removeClass('checked');
                              }else {
                                  h2.addClass('checked');
                              }
                          }
                      }
                );
            });
        });
    </script>
                
                  
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
 

    </body>
</html>
