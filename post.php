<?php
//model
function UploadImage($image)
{
    $path = 'uploads/' . uniqid() . "." . pathinfo($image['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], $path);
    return $path;
}
function addPosts($title, $content, $filename)
{
    $pdo = new PDO("mysql:host = localhost;dbname=mvc32","root","root");
    $sql = "INSERT INTO posts (title, content, image) VALUE (:title, :content, :image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image'=>$filename, 'title'=>$_POST['title'], 'content'=>$_POST['content']]);
}
function getPost()
{
    $pdo = new PDO("mysql:host = localhost;dbname=mvc32", "root", "root");
    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}

if($_POST){
    $filename = UploadImage($_FILES['image']);
    addPosts($_POST['title'], $_POST['content'], $filename);
}