<?php
Session_start();
require_once("./DB/logik.php");
require_once("./DB/connection.php");
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
        // echo "<form method='GET' action='./selected_cities.php'>";
        // foreach ($cities as $arr) {
        //   echo "
        // <div>
        //   <a href='./selected_cities.php?SelectedCities=" . $arr['id_live'] . "'>
        //     <h2>$arr[name_cities]</h2>
        //     <img src='" . $arr['link_cities'] . "'>
        //     <input type='hidden' name='id_live' value='" . $arr['id_live'] . "';
        //   </a>
        //   </form>
        // </div>";
        // };



        // foreach ($cities as $arr) {
        //   echo "
        // <div>
        //   <form method='GET' action='./selected_cities.php'>
        //     <a href='./selected_cities.php?SelectedCIties=" . $arr['id_live'] . "'>
        //       <h2>$arr[name_cities]</h2>
        //       <img src='" . $arr['link_cities'] . "'>
        //       <input type='hidden' name='count_live' value='" . $arr['id_live'] . "';
        //     </a>
        //   </form>
        // </div>";
        // };

        // $count_id = $arr['id_live'];
        // $_SESSION['id_live'] = $count_id;

        // $_SESSION['id_live'] = $arr['id_live'];

        ?>
        <!-- страны -->

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

        <!-- города -->


        <div>
          <form method='GET'>
            <a href='./index.php'>
              <h2>Венеция</h2>
              <img src='includes/images/Venis.png'>
            </a>
          </form>
        </div>

        <div>
          <form method='GET'>
            <a href='./selected_cities.php?Tagil'>
              <h2>Нижний Тагил</h2>
              <img src='includes/images/N_tagil.png'>
            </a>
          </form>
        </div>

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





      </div>
    </div>

  </main>

</body>

</html>