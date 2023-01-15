<?php
session_start();
?>

<!DOCTYPE html>
    <head>
        <title>Ease Organize</title>
        <link rel="stylesheet" type="text/css" href="newstyle.php">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="banner">
    </div>

    <div class="content">
        <h1>WELCOME TO EASEORGANIZE</h1>
        <p>
        We make it easy for everyone to organize their tasks and projects
        </p>
    </div>

    <div id="login">
        <div id="formLogin">

            <h1>Welcome<h1>
            <form method="post">
                <?php echo'
               
            <div class="inputContainer">
                

                <input type="text" class="inputLogin" placeholder=" " name="uid">
                <label class="labelLogin">Username</label>
        
            </div>

            <div class="inputContainer">
                <input type="password" class="inputLogin" placeholder=" " name="pwd">
                <label class="labelLogin">Password</label>
             </div>

             <input type="submit" class="submitButton" value="SIGN UP" name ="signup">
      
        

           
      
             <input type="submit" class="submitButton2" value="LOGIN" name ="login">
             </form>
             '
             ;
             include "login_function.php";
             include "signup.php"
             ?>
             
          
            
             
        


                <?php
                if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p id='txt-error'> Fill in all fields! </p>";
                 }
                else if ($_GET["error"] == "usernametaken"){
                    echo "<p id='txt-error'> Username already taken! </p>";
                    }
                else if ($_GET["error"] == "none"){
                    echo "<p id='txt-error'> You have Signed Up! </p>";
                    }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p id='txt-error'> Incorrect login information! </p>";
                    }
                }
                ?>

        </div>
    </div>

</body>
</html>