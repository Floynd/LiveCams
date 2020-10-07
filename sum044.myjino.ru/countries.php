<?php
Session_start();
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
  include_once('./includes/header.php')
  ?>
  <main>
    <div class='main_wrapper'>
      <div class='category_wrapper'>

        <div>
          <form method='GET'>
            <a href='./citiesForCountries.php?Italia'>
              <h2>Италия</h2>
              <img src='includes/images/Italia.png'>
            </a>
          </form>
        </div>

        <div>
          <form method='GET'>
            <a href='./citiesForCountries.php?Russia'>
              <h2>Россия</h2>
              <img src='includes/images/russia.jpg'>
            </a>
          </form>
        </div>

        <div>
          <form method='GET'>
            <a href='./citiesForCountries.php?USA'>
              <h2>США</h2>
              <img src='includes/images/USA.svg'>
            </a>
          </form>
        </div>


      </div>
    </div>

  </main>

</body>

</html>