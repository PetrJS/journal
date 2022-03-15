<?php
session_start();
require_once 'vendor/autoload.php';
require 'dat.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magazine</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<div class="window">
    <div class="row">
        <div class="col">
            <?php if (!empty($_SESSION['errors'])): ?>
                <div>
                    <?php echo $_SESSION['errors']; unset($_SESSION['errors']);?>
                </div>
            <?php endif;?>

            <?php if (!empty($_SESSION['success'])): ?>
                <div>
                    <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
                </div>
            <?php endif;?>
        </div>
</div>
<form method="post">
    <div class="form">
        <h1 class="form_title">Введите данные ученика!</h1>
        <div class="input_form">
            <input name="id" class="form_input">
            <label class="form_label">Введите ID</label>
        </div>
        <div class="input_form">
            <input  name="name" class="form_input" type="text">
            <label class="form_label">Введите имя</label>
        </div>
        <div class="input_form">
            <input name="surname" class="form_input" type="text">
            <label class="form_label">Введите фамилию</label>
        </div>
        <div class="input_form">
            <input name="patronymic" class="form_input" type="text">
            <label class="form_label">Введите отчество</label>
        </div>
        <div class="input_form">
            <select name="floor" class="select_form" >
                <option>Мужской</option>
                <option>Женский</option>
            </select>
            <label class="form_label">Выберите пол</label>
        </div>
        <div class="input_form">
            <input name="date" class="form_date" type="date">
            <label class="form_label">Выберите дату рождения</label>
        </div>
        <div class="input_form">
            <input class="input_button" type="submit" value="Сохранить данные">
        </div>
        <div >
            <a class="table_button" href="table.php" target="_blank">Перейти к журналу</a>
        </div>
    </div>
</form>
</body>
</html>






















