<?php
    header('Content-type: text/css; charset:UTF-8');
?>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    font-family:"poppins", sans-serif;
    -webkit-box-sizing: border-box;
    -moz-box-sizing:border-box;
    user-select:none;
    overflow:hidden;
}

#login{
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    position:relative;
    bottom:475px;
}

#login #formLogin{
    margin:auto;
    width:400px;
    height:450px;
    background-color: #f8f9fa;
    border-radius:20px 100px;
    padding: 80px 50px;
    box-shadow: 10px 10px 21px -6px rgba(0,0,0,0.2);
}

#login #formLogin h1{
    margin-bottom: 30px;
    text-align: center;
}

#login #formLogin .inputContainer{
    position:relative;
    height:48px;
    margin-bottom: 30px;
}

#login #formLogin .inputContainer .inputLogin{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    font-size: 16px;
    border: 1px solid #adb5bd;
    border-radius:15px;
    outline:none;
    background: none;
    padding:16px;
    z-index: 1;
}

#login #formLogin .inputContainer .labelLogin{
    position: absolute;
    left: 16px;
    top: 10px;
    background-color: #f8f9fa;
    padding: 0px 5px;
    color: #adb5bd;
    font-size: 16px;
    transition: 0.3s;
}

#login #formLogin .submitButton{
    display: block;
    margin: auto;
    padding: 10px 30px;
    outline: none;
    border: none;
    background-color: #252629;
    color: #f8f9fa;
    font-size: 16px;
    border-radius: 15px;
    cursor: pointer;
    transition: 0.3s;
    position:relative;
    left:-75px;
}

#login #formLogin .submitButton:hover{
    border-radius: 5px 15px;

}

#login #formLogin .inputLogin:focus + .labelLogin{
    top: -10px;
    font-size: 13px;
    font-weight: bold;
    color: #252629;
    z-index: 2;
}

#login #formLogin .inputLogin:not(:placeholder-shown).inputLogin:not(:focus)+.labelLogin{
    top: -10px;
    font-size: 13px;
    z-index: 2;
}

#login #formLogin .inputLogin:focus{
    border: 1px solid #252629;
}


#login #formLogin .submitButton2{
    display: block;
    margin: auto;
    padding: 10px 30px;
    outline: none;
    border: none;
    background-color: #252629;
    color: #f8f9fa;
    font-size: 16px;
    border-radius: 15px;
    cursor: pointer;
    transition: 0.3s;
    position: relative;
    left: 80px;
    top: -45px;
}

#login #formLogin .submitButton2:hover{
    border-radius: 5px 15px;

}

.banner{
    width:100;
    height:100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),url(https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1c2luZXNzJTIwdGVhbXxlbnwwfHwwfHw%3D&w=1000&q=80);
    background-size:cover;
    background-position: center;
}

.content{
    width:100%;
    position:absolute;
    top:17%;
    transform: translateY(-50%);
    text-align:center;
    color:#fff;
}

.content h1{
    font-size: 70px;
    margin-top: 80px;
}

.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}

#txt-error{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
    text-align:center; 
    color:black;
    font-size: 16px;
    position: relative;
    top: -35px;
  
}