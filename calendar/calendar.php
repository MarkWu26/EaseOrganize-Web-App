<?php
ob_start();
session_start();
?>

<?php require_once('../connection.php') 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fullcalendar/lib/main.min.css">
    <link rel="stylesheet" href="../stylecalendar.php">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../fullcalendar/lib/main.min.js"></script>
  
    <style>
       :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
</head>

<body>

<div class = "topBorder">
                <p id="header">CALENDAR</p>

                <button type="submit" name="share" id="share"><i class="tiny material-icons">person_add</i>Share</button>
              
        </div>


<div class="main">

    <div class="container py-5" id="page-container">
        <div class="row">
          
            <div class="calendarr">
                <div class="col-md-9">
                    <div id="calendar"></div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">SCHEDULE YOUR TASKS!</h5>
                    </div>
                    <div class="card-body">
                        <?php echo'
                        <div class="container-fluid">
                            <form method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                             
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" name="save" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    include "schedule.php";
    include "../connection.php";
    
    ?>


    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                           
    
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <div class = "userPanel" style="height:1000px;">
            <?php
        
            echo 
            '<p id = "hello">Welcome</p>';
            echo '<p id ="txt">'.$_SESSION['useruid'].'</p>';
           
            ?>

           
            <form action="includes/calendar.inc.php">
            <button type="submit" name="educ" id="btnPanel"> Calendar </button>
            </form>
            <form action="todolist.php">
            <button type="submit" name="todolist" id="btnPanel"> To-Do List </button>
            </form>
            <form action="includes/texteditor.inc.php">
            <button type = "submit" name="texteditor" id="btnPanel"> Text Editor </button>
            </form>
            <form action="includes/logout.inc.php">
            <button type="submit" name="logout" id="btnPanel"> Logout </button>
            </form>
            
            <img src="../avatar2.png" alt="avatar" id="avatarPic">
    </div>

        
      



            <div class="music-container" style="height:1000px;">
                <div class="top-bar">
                 <i class="material-icons">favorite_border</i>
                    <span>Now Playing</span>
                    <i class="material-icons">add</i>
                </div>

                <div class="img-area">
                    <img src="../images/music-1.jpg" alt="">
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




    <!-- Event Details Modal -->



<?php 
$schedules = $conn->query(" SELECT * FROM `schedule_list` WHERE  usersId = '$_SESSION[id]' ");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>

<script src="js/script2.js"></script>

<script src="js/music-list.js"></script>
<script src="js/script.js"></script>


</html>