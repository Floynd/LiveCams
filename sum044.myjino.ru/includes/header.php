<header>
  <div class="header_wrapper">
    <div class="logo">
      <a href="index.php"><img src="includes\images\logo.jpg" /></a>
    </div>

    <nav>
      <ul class="topmenu">
        <li><a href='../all_cams.php'>Все камеры</a></li>
        <li>
          <a href='./countries.php' class="submenu-link">Страны</a>
          <ul class="submenu">
            <li><a href="./citiesForCountries.php?Russia">Россия</a></li>
            <li><a href="./citiesForCountries.php?Italia">Италия</a></li>
            <li><a href="./citiesForCountries.php?USA">США</a></li>
          </ul>
        </li>
        <li>
          <a href='./cities.php' class="submenu-link">Города</a>
          <ul class="submenu">
            <li><a href="./index.php">Венеция</a></li>
            <li><a href="./selected_cities.php?Tagil">Нижний Тагил</a></li>
            <li><a href="./selected_cities.php?Michigan">Мичиган</a></li>
            <li><a href="./selected_cities.php?New-Yourk">Бруклин</a></li>
            <li><a href="./selected_cities.php?Vermont">Вермонт</a></li>
          </ul>
        </li>
        <li><a href="./random_cams.php?Random">Случайная камера</a></li>
      </ul>
    </nav>

    <div class="SingIn">
      <?php
      if (!isset($_SESSION['autorized'])) {
        echo "
        
        <ul>
          <a href='users/login.php'>
            <li>Авторизация</li>
          </a>
          <a href='users/registration.php'>
            <li><span>Регистрация</span></li>
          </a>
        </ul> ";
      } else {
        echo "<ul>
           <li><span>Привет, $_SESSION[login] !</span></li>
           <a href='users\logout.php'><li>Выйти</li></a>
           </ul>";
      }
      ?>
    </div>
  </div>
  <div class="header_bottom">
    <div class="header_form_wrapper">
      <form method='GET' action='./search_script.php'>
        <input type="search" placeholder="Искать здесь..(по стране)" name='text_search' />
        <button type="submit" value="Поиск" name='btn_search'></button>
      </form>
    </div>
    <div class="header_form2_wrapper"></div>
  </div>
</header>