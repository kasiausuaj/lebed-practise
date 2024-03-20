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
        body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
}
header {
    background-color: black;
    color: white;
    padding: 10px;
    height: 30px;
    display: flex;
    justify-content: center;
}

header a{
    text-decoration:none;
    color:white;
    margin:20px;
}

h2 {
    color: #333;
    text-align: center;
}
form {
    margin: 20px auto;
    padding: 30px;
    max-width: 500px; 
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
}


.age{
    height: 30px;
}
input[type="text"],
input[type="password"],
input[type="date"],
input[type="age"]
select {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
}
button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.d-flex {
    display: flex;
    justify-content: center;
}

.center {
    text-align: center;
}

.border {
    border: 2px solid #333;
    padding: 15px;
    border-radius: 8px;
}
.assign{
    display: flex;
    flex-direction:column;
    gap:20px;
}
.calculate{
    display: flex;
    flex-direction:column;
    gap:5px;
}
.rounded-3 {
    border-radius: 3px;
}
    </style>
   <nav class="nav">
       <a href ="<?= app()->route->getUrl('/hello') ?>">Главная</a>
       
       <?php if (app()->auth::check()): ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->login ?>)</a>
            <?php if (app()->auth::role() == "admin"): ?>
                <a href="<?= app()->route->getUrl('/employees') ?>">Создать сотрудника отдела</a>
            <?php elseif (app()->auth::role() == "hr"): ?>
                <a href="<?= app()->route->getUrl('/emp') ?>">Создать сотрудника</a>
                <a href="<?= app()->route->getUrl('/subunit') ?>">Создать подразделение</a>
                <a href="<?= app()->route->getUrl('/assign_an_employee') ?>">Прикрепить сотрудника</a>
                <a href="<?= app()->route->getUrl('/calculate') ?>">Подсчет среднего возраста</a>
                <a href="<?= app()->route->getUrl('/subunit_sel') ?>">Выбор по подразделениям</a>
            <?php endif; ?>
       <?php else: ?>
            <a href ="<?= app()->route->getUrl('/login') ?>">Войти</a>
       <?php endif; ?>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
