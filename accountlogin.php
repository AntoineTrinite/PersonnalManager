<?php
     require_once (__DIR__ . './config/database.php');
    require_once (__DIR__ . './components/const.php');

    $title = "Compte | Personnal Manager";

    $h1 = "Compte";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>
    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Accueil"; ?></h1>
            <button id="logout-btn">Déconnexion</button>
    </div>
    
    <div class="main-form-container">

        <div class="form-containers">
            <form class="forms" enctype="multipart/form-data" action="" method="post">
                <span class="form-title">Se connecter</span>
                <div class="form-group">
                    <label for="mail">Adresse mail</label>
                    <input class="input-log" type="text" name="mail" class="mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="input-log" type="password" name="password" class="password" required>
                </div>
                
                <div class="validate-btn-zone">
                    <button class="submit-btn" type="submit">Valider</button>
                </div>
            </form>
        </div>

        <div class="form-containers">
            <form class="forms" enctype="multipart/form-data" action="" method="post">
                <span class="form-title">s'inscrire</span>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input class="input-log" type="text" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input class="input-log" type="text" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="mail">Adresse mail</label>
                    <input class="input-log" type="text" name="mail" class="mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="input-log" type="password" name="password" class="password" required>
                </div>
                
                <div class="validate-btn-zone">
                    <button class="submit-btn" type="submit">Valider</button>
                </div>
            </form>
        </div>
    </div>

<?php 
    require_once (__DIR__ . './components/footer.php');
?>