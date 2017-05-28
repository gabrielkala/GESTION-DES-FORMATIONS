<?php
session_start();
require('config/database.php');

if (isset($_POST['login'])) {
  extract($_POST);
  if (not_empty($nom, $mdp)) {

    $q = $db->prepare("SELECT nom, mdp FROM employe Where nom = :nom AND mdp = :password");
     $q->execute([
       ':nom' => $nom,
       ':password' => $mdp
     ]);
  }
}
$user = $q->fetch(PDO::FETCH_OBJ);

            if($user && password_verify($password, $user->hashed_password)){

                $_SESSION['user_id'] =$user->id;
                $_SESSION['pseudo'] =$user->pseudo;

//Si l'utilisateur a choisi de garder sa session active
                if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on'){
                  setcookie('pseudo', $user->pseudo, time()*3600*24*365, null, null, false, true);
                  setcookie('user_id', $user->id, time()*3600*24*365, null, null, false, true);
                }


 
