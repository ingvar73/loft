<?php
error_reporting(E_ALL);
//require_once "config/config.php";
require('classes/db.php');
require ('classes/validation.php');
session_start(); // старт сессии
$db = DataBase::getDB(); // подключение к базе данных
//
$fdata = $_POST;
// Получаем данные формы

if (isset($_POST['enter'])) {
//    $errors = array();

    $data = new Validation($_POST['login'], $_POST['name'], $_POST['age'], $_POST['about'], $_POST['password'], $_POST['password1']);
    var_dump($data->result);
if ($data->result == true){
    echo "Пишем в базу!";
        // регистрируем
        //$user = $db->query("INSERT INTO 'users'");
        echo '<div style="background-color: lightblue; color: green;">Вы успешно зарегистрированы!</div><hr />';
    } else {
        echo '<div style="background-color: lightcyan; color: red;">Ошибка!</div><hr />';
    }
}
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css" media="screen, projection, print">
</head>
<body>
    <div class="wrapper">

        <section id="header">
            <div class="container">
                <div class="page-header">
                    <h1>Система регистрации и авторизации</h1>
                </div>
            </div>
        </section>

        <section id="form_input">
            <div class="container">
                <div class="row">
                    <div class="col-md8 col-md-offset-1">
                        <form method=POST action="signup.php">
                            <div class="form-inline">
                                <input type="text" name="login" class="form-control" placeholder="Login" value="<?php echo @$fdata['login'];?>">
                            </div>
                            <div class="form-inline">
                                <input type="text" name="name" class="form-control" placeholder="Имя" value="<?php echo @$fdata['name'];?>">
                            </div>
                            <div class="form-inline">
                                <input type="text" name="age" class="form-control" placeholder="Ваш возраст" value="<?php echo @$fdata['age'];?>">
                            </div>
                            <div class="form-inline">
                                <textarea rows="10" name="about" cols="23" placeholder="О себе" value="<?php echo @$fdata['about'];?>"></textarea>
                            </div>
                            <div class="form-inline">
                                <input type="password" name="password" class="form-control" placeholder="Пароль">
                            </div>
                            <div class="form-inline">
                                <input type="password" name="password1" class="form-control" placeholder="Повторите пароль">
                            </div>
<!--                            <div class="form-inline">-->
<!--                                <label for="exampleInputFile">Загрузить изображение</label>-->
<!--                                <input type="file" id="avatar">-->
<!--                            </div>-->
                            <button type="submit" name="enter" class="btn btn-default" value="Регистрация">Регистрация</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">

        </div>
    </div>
    <div class="empty"></div>
    <div class="footer">
footer
    </div>

    <script src="http://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>