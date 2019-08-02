<?php

$login = $_POST['login'];
$password = sha1($_POST['password']);

$stmt = $conn->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
$stmt->bindParam(":login", $login, PDO::PARAM_STR);
$stmt->bindParam(":password", $password, PDO::PARAM_STR);
$stmt->execute();

$users = $stmt->fetch(PDO::FETCH_OBJ);

if($users){
    $_SESSION["user"] = $users; 
    header("Location: " . URL_SITE . '/index.php?view=home');
}else{
    header("Location: " . URL_SITE . '/login.php');
}