<?php
    require_once (__DIR__ . './components/const.php');

    $title = "Gestionnaire de fichiers | Personnal Manager";

    $h1 = "Gestionnaire de fichiers";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>

    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Accueil"; ?></h1>
            <button id="logout-btn">Déconnexion</button>
    </div>



<?php 
    require_once (__DIR__ . './components/footer.php');
?>