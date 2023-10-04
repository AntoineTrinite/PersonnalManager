<?php
    require_once (__DIR__ . './config/database.php');
    require_once (__DIR__ . './components/const.php');

    $title = "Paramètres | Personnal Manager";

    $h1 = "Paramètres";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>
    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Accueil"; ?></h1>
            <?php if (isset($_SESSION['user_id'])) { ?>
                <button id="logout-btn"><a class="logout-btn-href" href="./components/logout.php">Déconnexion</a></button>
            <?php } ?>
    </div>
    
    <div class="main-container">
        <div class="menu-card">
                <span class="setting-card-title">Modifier ses paramètres :</span>
                <div class="account-settings">
                    <form action="">
                        <div class="input-div">
                            <label for="">Nom</label>
                            <input class="setting-input" type="text" placeholder="">
                            <label for="">Prénom</label>
                            <input class="setting-input" type="text" placeholder="">
                        </div>
                        <div class="input-div">
                            <label for="">Mail</label>
                            <input class="setting-input-mail" type="mail" placeholder="">
                        </div>
                        
                        <div class="input-div">
                            <label for="">Mot de passe</label>
                            <input class="setting-input" type="text" placeholder="">
                            <label for="">Confirmer le mot de passe</label>
                            <input class="setting-input" type="text" placeholder="">
                        </div>
                        <div class="setting-form-btn-part">
                            <button class="setting-form-btn">Valider</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>



<?php 
    require_once (__DIR__ . './components/footer.php');
?>