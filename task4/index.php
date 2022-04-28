<!DOCTYPE html>
<html>
<head>
    <title><?php $userTitle='Ну что то поменяли'; echo $userTitle ?></title>
    <meta charset="UTF-8">
</head>
<body>
<h1><?php $photo = rand(1,3); $createHyper='Hello hyper text'; echo $createHyper; ?></h1>
Краткая биография обо мне
Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
На данный момент работаю ведущим инженером в крупной авиакомпании.
Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
фотографиями на эту тему
<img src=<?="$photo.jpg"?> alt="logo">;
<br><br>
Тут можете поместить картинку
<br><br>
<br><br>
<b>Просто пример жирного текста</b>
<br><br>
<?php $year = 2022; echo $year ?>
</body>
</html>