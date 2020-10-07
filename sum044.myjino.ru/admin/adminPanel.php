<?
session_start();
require_once '../DB/connection.php';
require_once '../DB/logik.php';
?>
<link rel="stylesheet" href="../includes/css/main.css" />
<link rel="stylesheet" href="styleAdmin.css" />
<header>
  <div class="header_wrapper">
    <div class="logo">
      <a href="index.php"><img src="../includes/images/logo.jpg" /></a>
    </div>

    <nav>
      <ul class="topmenu">
        <li><a href='#'>Все камеры</a></li>
        <li>
          <a href='#' class="submenu-link">Страны</a>
          <ul class="submenu">
            <li><a href="#">Россия</a></li>
            <li><a href="#">Италия</a></li>
            <li><a href="#">Италия</a></li>
          </ul>
        </li>
        <li>
          <a href='#' class="submenu-link">Города</a>
          <ul class="submenu">
            <li><a href="#">Венеция</a></li>
            <li><a href="#">Нижний Тагил</a></li>
            <li><a href="#">Мичиган</a></li>
            <li><a href="#">Бруклин</a></li>
            <li><a href="#">Вермонт</a></li>
          </ul>
        </li>
        <li><a href="#">Случайная камера</a></li>
      </ul>
    </nav>

    <div class="SingIn">
      <?php
      if (!isset($_SESSION['login'])) {
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
           <a href='../users/logout.php' class='logout'><li>Выйти</li></a>
           </ul>";
      }
      ?>
    </div>
  </div>
  <div class="header_bottom">
    <div class="header_form_wrapper">
      <h1>Панель администратора</h1>
      <style>
        h1 {
          color: #fff;
        }
      </style>
    </div>

    <div class="header_form2_wrapper"></div>
  </div>
</header>

<main>

  <div class='main_container'>
    <div class='left_side'>
      <div class='menu_block'>
        <ul class='list2a'>
          <h1>Управление модулем</h1>
          <form method='GET'>
            <a href='./adminPanel.php?newsAdds'>
              <li>Новости</li>
            </a>
            <a href='./adminPanel.php?offering'>
              <li>Предложения</li>
            </a>
            <a href='./adminPanel.php?Users'>
              <li>Пользователи</li>
            </a>
          </form>
        </ul>
      </div>
    </div>

    <div class='right_side'>
      <h1>База данных</h1>
      <?
      //Пользователи
      $sql = "SELECT * from `users`";
      $Data = $pdo->query($sql);
      $Line = $Data->fetchAll();
      if (isset($_GET['Users'])) {
        echo "<form method ='GET' class='tablePanel'>
        <table class='redTable'>
        <tr>
            <th>" . 'ID' . "</th>
            <th>" . 'Логин' . "</th>
            <th colspan='2'>" . 'Функции' . "</th>
         </tr>";
        foreach ($Line as $arr) {
          echo "
             <tr>
                <td>" . $arr['ID'] . "</td>
                <td>" . $arr['login'] . "</td>
                <td>" . '<a href="adminPanel.php?del=' . $arr['ID'] . '&login=' . $arr['login'] . '">Удалить</a>' . "</td>
                <td>" . '<a href="adminPanel.php?clear=' . $arr['login'] . '">Очистить</a>' . "</td>
             </tr>";
        }
        echo "
        </table>
      </form>
      ";
      }
      //предложения
      $sql = "SELECT * from `offering`";
      $Data = $pdo->query($sql);
      $Line = $Data->fetchAll();
      if (isset($_GET['offering'])) {
        echo "<form method ='GET' class='tablePanel'>
        <table class='redTable'>
        <tr>
            <th>" . 'ID' . "</th>
            <th>" . 'Имя' . "</th>
            <th>" . 'E-mail' . "</th>
            <th>" . 'Сообщение' . "</th>
            <th>" . 'Функция' . "</th>
         </tr>";
        foreach ($Line as $arr) {
          echo "
             <tr>
                <td>" . $arr['ID'] . "</td>
                <td>" . $arr['name'] . "</td>
                <td>" . $arr['email'] . "</td>
                <td>" . $arr['text'] . "</td>
                <td>" . '<a href="adminPanel.php?offeringDel=' . $arr['ID'] . '">Удалить</a>' . "</td>
             </tr>";
        }
        echo "
        </table>
      </form>
      ";
      }

      //Новости
      $sql = "SELECT * from `news_block`";
      $Data = $pdo->query($sql);
      $Line = $Data->fetchAll();
      if (isset($_GET['newsAdds'])) {
        echo "<form method ='GET' class='tablePanel'>
        <table class='redTable' id='redTableAdds'>
        <tr>
            <th>" . 'ID' . "</th>
            <th>" . 'Заголовок' . "</th>
            <th>" . 'Картинка' . "</th>
            <th>" . 'Источник' . "</th>
            <th>" . 'Функция' . "</th>
         </tr>";
        foreach ($Line as $arr) {
          echo "
             <tr>
                <td>" . $arr['ID_news'] . "</td>
                <td>" . $arr['headline_news'] . "</td>
                <td>" . $arr['link_image'] . "</td>
                <td>" . $arr['link_src'] . "</td>
                <td>" . '<a href="adminPanel.php?delNews=' . $arr['ID_news'] . '">Удалить</a>' . "</td>
             </tr>";
        }
        echo "
        </table>
        <div class='wrapper_adds_btn'>
          <form method='GET'>
            <a href='./adminPanel.php?newsAddsForm' class='btn7'>Добавить новость</a>
          </form>
        </div>
      </form>
      ";
      }


      //удаление предложения
      if (isset($_GET['offeringDel'])) {
        $sql = "DELETE FROM offering WHERE ID = ?";
        $delete = $pdo->prepare($sql);
        $delete->execute(array("$_GET[offeringDel]"));
        echo "<script>alert('Удаление прошло успешно')</script>";
        echo "<script type='text/javascript'>location.href = 'adminPanel.php'</script>";
      }
      //добавление новости
      if (isset($_GET['newsAddsForm'])) {
        echo "
          <form method='GET' class='newsAdds'>
            <span>Заголовок:</span><input type='text' name='Headline' > <br><br>
            <span>Картинка:</span><input type='text' name='ImageLink' placeholder='includes/images/*.*'> <br><br>
            <span>Источник:</span><input type='text' name='SourceLink'> <br><br>
            <input type='submit' name='addNewss'>
          </form>
        ";
      }
      if (isset($_GET['addNewss'])) {
        $sqlIns = "INSERT INTO news_block SET headline_news = ?, link_src = ?, link_image = ?";
        $insC = $pdo->prepare($sqlIns);
        $insC->execute(array("$_GET[Headline]", "$_GET[ImageLink]", "$_GET[SourceLink]"));
        echo "<script>alert('Новость успешно добавлена!')</script>";
        echo "<script type='text/javascript'>location.href = 'adminPanel.php'</script>";
      }



      //удаление новости
      if (isset($_GET['delNews'])) {
        $sql = "DELETE FROM news_block WHERE ID_news = ?";
        $delete = $pdo->prepare($sql);
        $delete->execute(array("$_GET[delNews]"));
        echo "<script>alert('Удаление прошло успешно')</script>";
        echo "<script type='text/javascript'>location.href = 'adminPanel.php'</script>";
      }

      //удаление пользователя и его сообщений
      if (isset($_GET['del'])) {
        $sql = "DELETE FROM users WHERE ID = ?";
        $delete = $pdo->prepare($sql);
        $delete->execute(array("$_GET[del]"));
        echo "<script>alert('Удаление прошло успешно')</script>";
        echo "<script type='text/javascript'>location.href = 'adminPanel.php'</script>";
      }
      if (isset($_GET['clear'])) {
        $sql2 = "DELETE FROM chat WHERE login_user = ?";
        $delete2 = $pdo->prepare($sql2);
        $delete2->execute(array("$_GET[clear]"));
        echo "<script>alert('Удаление прошло успешно')</script>";
        echo "<script type='text/javascript'>location.href = 'adminPanel.php'</script>";
      }
      ?>

    </div>
  </div>

</main>