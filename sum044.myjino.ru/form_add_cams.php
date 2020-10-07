<?
session_start();
require_once('./DB/logik.php');
require_once('./DB/connection.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="includes/css/main.css" />
  <link rel="stylesheet" href="includes/css/forms_adds.css" />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" />

  <title>LiveCams</title>
</head>

<body>

  <div class='form_container'>
    <div class='form_wrapper'>
      <form method='POST'>
        <h3>Написать письмо</h3>
        <input type='text' placeholder='Имя' name='name_post'>
        <input type='text' placeholder='E-mail' name='email_post'>
        <textarea placeholder='Содержание письма/ссылка на камеру' name='text_post'></textarea><br>
        <span>*Все поля обязательны для заполнения</span>
        <input type='submit' value='Отправить' name='btn_post'>
      </form>
      <a href='./index.php'>'На главную'</a>
    </div>
    <?php
    if (isset($_POST['btn_post'])) {
      $sqlIns = "INSERT INTO `offering` SET `name` = ?,`email` = ?, `text` = ?";
      $ins = $pdo->prepare($sqlIns);
      $ins->execute(array("$_POST[name_post]", "$_POST[email_post]", "$_POST[text_post]"));
      echo "<script>alert('Заявка подана на рассмотрение')</script>";
      echo "<script type = 'text/javascript'>location.href='index.php'</script>";
      
    }
    ?>
  </div>

</body>

</html>