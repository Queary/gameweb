<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/css.css">
      <title id="pages_name">регистрация</title>
      <script src="JS/core.js"></script>
    </head>
    <body>
      <header>
      <ol>
        <li onclick="next('index.html')">Главная</li>
        <li onclick="next('page/games.html')">игры</li>
        <li style="margin-left:68%;padding-left:1%;padding-right:1%;" onclick="showwindow()">авторизация</li>
      </ol>
    </header>
      <section id="reg">
        <h2>Регистрация></h2>
          <p>
              <label>Ваш логин:<br></label>
              <input name="login" type="text" size="15" maxlength="15">
          </p>
          <p>
              <label>Ваш пароль:<br></label>
              <input name="password" type="password" size="15" maxlength="15">
          </p>
          <p>
              <label>Повторите ваш пароль:<br></label>
              <input name="password" type="password" size="15" maxlength="15">
          </p>
          <p>
              <label>Ваш псевдоним:<br></label>
              <input name="nickname" type="nickname" size="15" maxlength="15">
          </p>
          <p>
              <label>Ваш еmail:<br></label>
              <input name="еmail" type="еmail" size="15" maxlength="15">
          </p>
          <p>
              <input type="submit" name="submit" value="Зарегистрироваться">
          </p>
      </section>
      <div style="display:none;" id="window">
        <center><p>окно для входа на сайт</p></center>
        <br>
        <p>логин:<input></p><br>
        <p>пароль:<input></p><br>
        <br><br><br><br>
        вход<span onclick="next('registration.html')" style="margin-left:15%;">зарегистрироваться</span><span onclick="hiddenwindow()" style="margin-left:25px;">закрыть</span>
      </div>
      <footer>
        Подвал
      </footer>
    </body>
  </html>
