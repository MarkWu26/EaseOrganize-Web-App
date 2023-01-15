<?php
    header('Content-type: text/css; charset:UTF-8');
?>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

*{
    font-family:"poppins", sans-serif;
}

.calendarr{
    position:relative;
    left:110px;
    top:-23px;
}

.col-md-3{
    position:relative;
 
    left:280px;
    width:500px;
    top:0px;

}

.py-5{

    width:70%;
    border: 6px solid   #fff;
    box-sizing: border-box;
    

    position:relative;
    top:50px;
    left:0px;
  
}

body {
 
 margin:0;


}

.music-container{
    width:340px;
    height: 772px;
    padding: 25px 30px;
    overflow:hidden;
    
    background: linear-gradient(#9ce3ff 0%, #fd878d 90%);
    box-shadow: 0px 6px 15px rgba(0,0,0,0.342);
    color:black;
    position: fixed;
    top:-5px;
    left: 1196px;
   
}

.music-container i{
    cursor: pointer;
}

.top-bar, .progress-area .song-timer, 
.controls, .music-list .header, music-list ul li{
    display:flex;
    align-items: center;
    justify-content: space-between;
}

.top-bar i:first-child{
    margin-left: -7px;
    font-size: 22px;
}

.top-bar span{
    font-size: 18px;
    margin-left: -3px;
    color: #ffffff;
}

.img-area{
    width:100%;
    height:280px;
    overflow: hidden;
    margin-top: 25px;
    border-radius: 50%;
    box-shadow: 0 0 0 5px #ffffff,
    0 0 2px #fff, 
    13px 3px 20px #31313163,
    -10px -10px 20px #e6f6ff;
}

.img-area img{
    width:100%;
    height:100%;
    object-fit: cover;
}

.song-details{
    text-align: center;
    margin: 30px 0;
}

.song-details p{
    color: #ffffff;
}

song-details .name{
    font-size: 21px;
}

song.details. artist{
    font-size: 15px;
    opacity: 0.9;
    line-height: 35px;

}

.progress-area{
    height: 6px;
    width: 100%;
    border-radius: 50px;
    background: #f0f0f081;
    cursor:pointer;
}

.progress-area .progress-bar{
    height: inherit;
    width: 0%;
    position:relative;
    border-radius:inherit;
    background: #ffffff;
}

.progress-bar: :before{
    content: '';
    position: absolute;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    top: 50%;
    right:-5px;
    z-index: 2;
    opacity: 0;
    pointer-events: none;
    transform: translateY(-50%);
    background: inherit;
    transition: opacity 0.2 ease;
}

.progress-area:hover .progress-bar: :before{
    opacity:1;
    pointer-events:auto;
}

.progress-area .song-timer{
    margin-top:2px;
}

.song-timer span{
    font-size: 13px;
    color: #ffffff;
}

.controls{
    margin: 70px 0 5px 0;
}

.controls i{
    font-size: 28px;
    user-select: none;
    background :#ffffff;
    background-clip:text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    outline:none;

}

.controls i:nth-child(2),
.controls i:nth-child(4){
    font-size: 43px;
}

.controls #prev{
    margin-right: -13px;
    font-size: 38px;
}

.controls #next{
    margin-left: -13px;
    font-size: 38px;
}

.controls .play-pause{
    height: 54px;
    width: 54px;
    display: flex;
    cursor: pointer; 
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    box-shadow:
    0 0 2px #fff,
    8px 8px 8px #ff5e66,
    -3px -3px 15px #f0ecec;
}

.play-pause::before{
    position: absolute;
    content: "";
    height: 43px;
    width: 43px;
    background: transparent;
    border: 3px solid #ffffff;
    border-radius: inherit;
}

.prev , .next{
    box-shadow:
    0 0 2px #fff,
    8px 8px 8px #ff5e66,
    -3px -3px 15px #f0ecec;
    border-radius: 50%;
}

.music-list{
    position: absolute;
    width:100%;
    bottom:-55%;
    opacity: 0;
    pointer-events:none;
    left:0;
    box-shadow: 0px -5px 10px rgba(0,0,0,0.1);
    z-index: 5;
    padding: 15px 30px;
    border-radius: 15px;
    background:
    linear-gradient(rgba(255, 255, 255, 0.973), transparent),
    linear-gradient(to top left, rgb(255, 23, 23), transparent),
    linear-gradient(to top right, rgb(0, 183, 255), transparent);
    background-blend-mode:screen;
    transition: all 0.15s ease-in-out;
}

.music-list.show{
    bottom: 0;
    opacity: 1;
    pointer-events: auto;
}

.music-list ul{
    margin-top: 10px 0;
    max-height: 260px;
    overflow:auto;
}

.music-list ul li{
    list-style: none;
    display:flex;
    cursor:pointer;
    padding-bottom:10px;
    color: #000000;
    border-bottom: 1px solid #e5e5e5;
}

.music-list ul li:last-child{
    border-bottom: 0px;
}

.music-list ul li .row span{
    font-size: 17px;
}

.music-list ul li .row p{
    opacity: 0.6;
}

ul li .audio-duration{
    font-size: 16px;
}




.headerr .row{
    display: flex;
    align-items:center;
    font-size: 19px;
    color: #515c6f;
}

.headerr .row i{
    cursor:default;
}

.headerr .row span{
    margin-left:5px;
}

.headerr #close{
    font-size: 22px;
    color:#515c6f;
    position: relative;
    left:280px;
    top:-25px;
}

.music-list ul::-webkit-scrollbar{
    width:0;
}

.music-list ul li:hover{
    color: #0e9fff;
}
ul li.playing{
    pointer-events: none;
    color: #0e9fff;
}


.text-box{
    width:2000;
    height:1000px;
    background-color:#f7bfbe;
}


.login{
   text-align:center;
   padding: 70px 0;
}

#txtbox{
    height: 40px;
    font-size:14pt;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
}


#text{
    text-align:center;
    font-size: 23px;
}

#music-1.audio-duration{
    position:relative;
    left: 82px;
}

#music-2.audio-duration{
    position:relative;
    left: 50px;
}

#music-3.audio-duration{
    position:relative;
    left: 130px;
}

#music-4.audio-duration{
    position:relative;
    left: 147px;
}

#music-5.audio-duration{
    position:relative;
    left: 114px;
}

#music-6.audio-duration{
    position:relative;
    left: 124px;
}


.login{
   text-align:center;
   padding: 70px 0;
}

#txtbox{
    height: 40px;
    font-size:14pt;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 8px;
}

.text-box{
    width:2000;
    height:1000px;
    background-color:#f7bfbe;
}
#loginbtn{
    height: 50px;
    width: 200px;
    padding: 13px 30px;
    margin: 8px 0;
    box-sizing: border-box;
    text-align: center;
    transition-duration: 0.4s;
    color:black;
    border: 2px solid #008CBA;
    cursor:pointer;
    border-radius: 20px;
}

#loginbtn:hover{
    background-color: #008CBA;
    color:white;
}

#text{
    text-align:center;
    font-size: 23px;
}

.userPanel{
    box-sizing: border-box;

    height: 769px;
    width: 280px;
    background: linear-gradient(#9ce3ff 0%, #fd878d 90%);
    outline: none;
    border: none;
    position: fixed;
    top: 0px;
    box-shadow: 0px 6px 15px rgba(0,0,0,0.342);
}

.user{
    color:white;
    text-align: center;
    height: 200px;
    width: 50px;
}

#txt{
    color: #252629;
    font-size: 34px;
    position:relative;
    left:145px;
    top:42px;
}

#btnPanel{
    box-shadow: 0px 6px 15px rgba(0,0,0,0.342);
    color: #f8f9fa;
    width: 220px;
    height: 50px;
    border-radius: 15px;
    transition: 0.3s;
    cursor: pointer;
    font-size: 1rem;
    position:relative;
    margin: 45px 0;
    top: 69px;
    left: 32px;
    background-color: #252629;
    outline: none;
    border: none;
}


#btnPanel:hover{
    border-radius: 5px 15px;pb
}

#avatarPic{
    width:42%;
    border-radius: 50%;
    position:relative;
    top:-637px;
    left: 18px;
}

#header{
    position:relative;
    top:-2px;
    left: 10px;
    color:black;
    font-size: 28px;
}



#hello{
    color: #252629;
    font-size: 20px;
    position:relative;
    left:145px;
    top:60px;
}

#share{
    color: #f8f9fa;
    width: 120px;
    height: 30px;
    border-radius: 15px;
    transition: 0.3s;
    cursor: pointer;
   
    font-size: 1rem;
    position:relative;
    margin: 30px 0;
    top: -85px;
    left: 740px;
    background-color: #252629;

    outline: none;
    border: none;
}

#share:hover{
    box-shadow: 0px 6px 15px rgba(0,0,0,0.342);
    border-radius: 5px 15px;
}

.topBorder{
    width:915px;
    height:50px;
    position: relative;
    left:280px;
    top:0px;
    border: 6px solid   #252629;
    box-sizing: border-box;

}

.topBorder i{
    font-size:17px;
    position:relative;
    left:-10px;
    top:3px;
}


