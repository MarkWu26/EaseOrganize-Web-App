<?php
    header('Content-type: text/css; charset:UTF-8');
?>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
  


  .main-section {
    background: transparent;
    max-width: 500px;
    width: 90%;
    height: 500px;
    margin: 30px auto;
    border-radius: 10px;
  }
  
  .add-section {
    width: 100%;
    background: #fff;
    margin: 0px auto;
    padding: 10px;
    border-radius: 5px;
  }
  
  .add-section input {
    display: block;
    width: 95%;
    height: 40px;
    margin: 10px auto;
    border: 2px solid #ccc;
    font-size: 16px;
    border-radius: 5px;
    padding: 0px 5px;
  }
  
  .add-section button {
    display: block;
    width: 95%;
    height: 40px;
    margin: 0px auto;
    border: none;
    outline: none;
    background: #0088FF;
    color: #fff;
    font-family: sans-serif;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .add-section button:hover {
    box-shadow: 0 2px 2px 0 #ccc, 0 2px 3px 0 #ccc;
    opacity: 0.7;
  }
  
  .add-section button span {
    border: 1px solid #fff;
    border-radius: 50%;
    display: inline-block;
    width: 18px;
    height: 18px;
  }
  
  #errorMes {
    display: block;
    background: #f2dede;
    width: 95%;
    margin: 0px auto;
    color: rgb(139, 19, 19);
    padding: 10px;
    height: 35px;
  }
  
  .show-todo-section {
    width: 100%;
    background: #fff;
    margin: 30px auto;
    padding: 10px;
    border-radius: 5px;
  }
  
  .todo-item {
    width: 95%;
    margin: 10px auto;
    padding: 20px 10px;
    box-shadow: 0 4px 8px 0 #ccc, 0 6px 20px 0 #ccc;
    border-radius: 5px;
  }
  
  .todo-item h2 {
    display: inline-block;
    padding: 5px 0px;
    font-size: 17px;
    font-family: sans-serif;
    color: #555;
  }
  
  .todo-item small {
    display: block;
    width: 100%;
    padding: 5px 0px;
    color: #888;
    padding-left: 30px;
    font-size: 14px;
    font-family: sans-serif;
  }
  
  .remove-to-do {
    display: block;
    float: right;
    width: 20px;
    height: 20px;
    font-family: sans-serif;
    color: rgb(139, 97, 93);
    text-decoration: none;
    text-align: right;
    padding: 0px 5px 8px 0px;
    border-radius: 50%;
    transition: background 1s;
    cursor: pointer;
  }
  
  .remove-to-do:hover {
    background: rgb(139, 97, 93);
    color: #fff;
  }
  
  .checked {
    color: #999 !important;
    text-decoration: line-through;
  }
  
  .todo-item input {
    margin: 0px 5px;
  }
  
  .empty {
    font-family: sans-serif;
    font-size: 16px;
    text-align: center;
    color: #cccc;
  }