<?php
include_once "header.php";
if(isset($_POST['btnConnect'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND  !empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

    }else{
        echo '<div class="alert alert-danger text-primary col-md-5 container mt-3">Veuillez Remplir tous les champs</div>';
    }
}
?>


<div class="card mt-5 container col-md-5">
    <div class="card-header bg-info text-white text-center">
        <h4>INSCRIPTION</h4>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div>
                <label for="" class="h6">Nom </label>
                <input type="text" name="nom" id="" class="form-control">
            </div>
            <div>
                <label for="" class="h6">Prenom </label>
                <input type="text" name="prenom" id="" class="form-control">
            </div>
            <div>
                <label for="" class="h6">Email </label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div>
                <label for="" class="h6">Pseudo </label>
                <input type="text" name="pseudo" id="" class="form-control">
            </div>
            <div>
                <label for="" class="h6">Mot de passe</label>
                <input type="password" name="mdp" id="" class="form-control">
            </div>
            <div>
                <label for="" class="h6">Confirmer votre mot de passe</label>
                <input type="password" name="mdp_confirme" id="" class="form-control">
            </div>

            
            <div class="float-left">
                <button class="btn btn-info mt-2 btn-lg" name="btnConnect">S'inscrire</button>
            </div>
        </form>
    </div>
</div>