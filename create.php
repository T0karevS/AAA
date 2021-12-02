<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Создайте свой пост!</legend>
    <form  method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Введите заголовок"><br>
        <input class="imginput" type="file" name="image"><br>
        <textarea name="content" placeholder="Введите текст поста"></textarea><br>
        <button type="submit" onclick="CreatePost()">Отправить</button>
    </form>
</fieldset>


    <?php
    require 'post.php';
    $posts = getPost();
    include "view/indexshow.php";
    ?>
</body>
</html>
