<?php
    require_once (__DIR__ . './config/database.php');
    require_once (__DIR__ . './components/const.php');

    $title = "Gestionnaire de fichiers | Personnal Manager";

    $h1 = "Gestionnaire de fichiers";
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
        <div class="menu-card todo-card-part">
                <div>
                    <span class="card-title">Nombre de fichiers : 10</span>
                    <button>Ajouter un fichier</button>
                </div>
                
                
        </div>
    </div>


<?php 
    require_once (__DIR__ . './components/footer.php');
?>