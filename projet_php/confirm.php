<?php

$user_id = $_GET['id'];
$token = $_GET['token'];
require 'models/db.php';
$req = $bdd->prepare('SELECT * FROM users WHERE id = ?');
$req->execute([$user_id]);
$user = $req->fetch();

if($user && $user['confirmation_token'] == $token){
    session_start();
    $bdd->prepare('UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() where id = ? ')->execute([$user_id]);
    $_SESSION['flash']['success'] = "votre compte a bien ete valide ";
    $_SESSION['auth'] = $user;
    header('Location: account.php');
}else{
    $_SESSION['flash']['danger'] = "Ce token nexiste pas ";
    header('Location: login.php');
}
