
<?php 
if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['password'])){

   
    require_once 'models/db.php';
    require_once 'functions.php';
    $req = $bdd->prepare('SELECT * FROM users WHERE (pseudo = :pseudo OR email = :pseudo) AND confirmed_at IS NOT NULL');
    $req->execute(['pseudo' => $_POST['pseudo']]);
    $user = $req->fetch();
    if(password_verify($_POST['password'], $user['password'])){
        $_user['auth'] = $user;
        $_user['flash']['success'] = 'vous etes maintenant connecter au site';
        header('Location: account.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
  
}
?>





<?php require 'header.php'; ?>
<h1>Se connecter</h1>

<form action="" method="POST">
            
                <label for="" class="h6">Pseudo ou email</label>
                <input type="text" name="pseudo" id="" class="form-control">
            </div>
            <div>
                <label for="" class="h6">Mot de passe</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            
            
            <div class="float-left">
                <button class="btn btn-info mt-2 btn-lg" name="btn">Se connecter</button>
            </div>
        </form>