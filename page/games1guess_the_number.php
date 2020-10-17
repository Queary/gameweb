
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/css.css">
    <title id="pages_name">guess_the_number</title>
    <script src="../JS/core.js"></script>
  </head>
  <body>
        <?php include '../php/header.php';?>
    <div id="main">
      <section style="height:0.5%;">
        <center>цыфра может быть от 1 до 5</center>
        <center>осталось хп:<var id="viem_hp">0</var><br><br>
        цыфра?<input id="qwe" type="number" name="" value=""><br><br>
        подсказка:<var id="dop"></var><br><br>
        <input onclick="obr()" type="button" name="" value='принять'><br><br>
        <center>
        <p onclick="next('games.html')">выйти из игры</p>
      </section>
      <script type="text/javascript">
        let hp = 3
        let rand = Math.floor(1 + Math.random() * (5 + 1 - 1))
        console.log(rand)
        function obr(){
          hp-=1
          edit_txt("viem_hp",hp)
          var number = value("qwe")
          if(number < rand){edit_txt("dop","больше")}
          if(number > rand){edit_txt("dop","меньше")}
          if(number == rand){edit_txt("dop","угадал");alert("выйграл")}
          else if(hp == 0){edit_txt("dop","больше нет попыток");alert("проиграл")}
        }
      </script>
      <!-- <aside>
        Бокавая калонка
      </aside> -->
      <footer>
        Подвал
      </footer>
    </div>
  </body>
</html>
