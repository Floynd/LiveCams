<?php
Session_start();
require_once('./DB/logik.php');
require_once('./DB/connection.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='includes/css/main.css'>
  <link rel='stylesheet' href='includes/css/category.css'>
  <title>Document</title>
</head>

<body>
  <?php
  include_once('./includes/header.php');

  ?>
  <main>
    <div class='main_wrapper'>
      <div class='category_wrapper'>


        <?php
        if (isset($_GET['Italia'])) {
          echo "
        <div>
          <form method='GET'>
            <a href='./index.php'>
              <h2>Венеция</h2>
              <img src='includes/images/Venis.png'>
            </a>
          </form>
        </div>
        ";
        }


        if (isset($_GET['Russia'])) {
          echo "
        <div>
          <form method='GET'>
            <a href='./selected_cities.php?Tagil'>
              <h2>Нижний Тагил</h2>
              <img src='includes/images/N_tagil.png'>
            </a>
          </form>
        </div>";
        };
        if (isset($_GET['USA'])) {
          echo "


        <div>
          <form method='GET'>
            <a href='./selected_cities.php?Michigan'>
              <h2>Мичиган</h2>
              <img src='includes/images/michigan.png'>
            </a>
          </form>
        </div>

        <div>
          <form method='GET'>
            <a href='./selected_cities.php?New-Yourk'>
              <h2>Нью-Йорк</h2>
              <img src='includes/images/brooklyn.jpg'>
            </a>
          </form>
        </div>

        <div>
          <form method='GET'>
            <a href='./selected_cities.php?Vermont'>
              <h2>Вермонт</h2>
              <img src='includes/images/Vermont.png'>
            </a>
          </form>
        </div>
          ";
        };
        ?>


      </div>
    </div>

  </main>

</body>

</html>