<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/css.css">
      <title>Регистрация</title>
    </head>
    <body>
      <header>
      <ol>
        <li>Главная</li>
        <li onclick="next('page/games.html')">игры</li>
        <li style="margin-left:68%;padding-left:1%;padding-right:1%;" onclick="show()">авторизация</li>
      </ol>
    </header>
      <section>
        <h2>Регистрация</h2>
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
      <footer>
        Подвал
      </footer>
    </body>
  </html>
