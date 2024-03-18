<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pop it MVC</title>
</head>
<body>
<header>
    <style>
       .nav {
    background-color: black;
    overflow: hidden;
    height: 50px;
    display: flex;
}

.nav a {
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    
}

.nav a:hover {
    background-color: #ddd;
    color: black;
}

.nav a.active {
    background-color: #666;
}

.main-content {
    padding: 20px;
    font-size: 1.2em;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            background-color:#323232;
            align-items: center;
            height: 500px;
        }
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 500px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input {
            padding: 8px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        h2{
            text-align: center;
            color:white;
        }
        
    </style>
   <nav class="nav">
       <a href ="<?= app()->route->getUrl('/hello') ?>">Главная</a>
       <?php
       if (!app()->auth::check()):
           ?>
           <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
           <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
           
       <?php
       else:
           ?>
           <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
           <a href="<?= app()->route->getUrl('/employees') ?>">Создать сотрудника</a>
           <a href="<?= app()->route->getUrl('/subunit') ?>">Создать подразделение</a>
       <?php
       endif;
       ?>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
