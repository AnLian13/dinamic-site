<?
require ('info.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="display: flex; font-size: 30px; font-family: Arial, sans-serif; flex-direction: column; align-items: center; justify-content: space-around; height: 100vh; margin: 0;">

<style>
    a {
        text-decoration: none;
        color: red;
    }
    a:hover {
        color: blue;
    }
</style>

<nav>
    <a href="index.php">Главная</a> |
    <a href="about.php">Обо мне</a> |
    <a href="works.php">Мои работы</a> |
    <a href="contacts.php">Контакты</a> |
    Телефон: <a href="tel: 123"><?= $tel?></a>
    <hr>
</nav>