<?php
    require_once (__DIR__ . './components/const.php');

    $title = "Paramètres | Personnal Manager";

    $h1 = "Paramètres";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>
    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Accueil"; ?></h1>
            <button id="logout-btn">Déconnexion</button>
    </div>
    
    <section>
        <div>
            <h2>Modifier :</h2>
            <!-- Faire des inputs nom prenom ... -->
        </div>
        <div>
            <h2>Style :</h2>
            <!-- Faire des inputs ? Pour modifier les couleurs du site ... -->
        </div>
    </section>



<?php 
    require_once (__DIR__ . './components/footer.php');
?>