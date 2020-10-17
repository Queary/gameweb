<?php

$coutn_url = substr_count($_SERVER['REQUEST_URI'],'/');


if($coutn_url == 1){
  echo"<header>
        <ol>
          <li onclick=";echo 'next("index.php")';echo ">Главная</li>
          <li onclick=";echo "next('page/games.php')".">игры</li>
          <li style='margin-left:68%;padding-left:1%;padding-right:1%;' onclick='showwindow()'>авторизация</li>
        </ol>
      </header>";
    echo"<div id='main'><div style='display:none;' id='window'>
        <center><p>окно для входа на сайт</p></center>
        <br>
        <p>логин:<input></p><br>
        <p>пароль:<input></p><br>
        <br><br><br><br>
        вход<span onclick='";echo 'next("registration.html")';echo"' style='margin-left:15%;'>зарегистрироваться</span><span onclick='hiddenwindow()' style='margin-left:25px;'>закрыть</span>
      </div>";
}
if($coutn_url == 2){
  echo"<header>
        <ol>
          <li onclick=";echo 'next("../index.php")';echo ">Главная</li>
          <li onclick=";echo "next('../page/games.php')".">игры</li>
          <li style='margin-left:68%;padding-left:1%;padding-right:1%;' onclick='showwindow()'>авторизация</li>
        </ol>
      </header>";
      echo"<div id='main'><div style='display:none;' id='window'>
          <center><p>окно для входа на сайт</p></center>
          <br>
          <p>логин:<input></p><br>
          <p>пароль:<input></p><br>
          <br><br><br><br>
          вход<span onclick='";echo 'next("../registration.html")';echo"' style='margin-left:15%;'>зарегистрироваться</span><span onclick='hiddenwindow()' style='margin-left:25px;'>закрыть</span>
        </div>";
}
?>
