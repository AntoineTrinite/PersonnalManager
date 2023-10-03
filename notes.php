<?php
    require_once (__DIR__ . './config/database.php');
    require_once (__DIR__ . './components/const.php');

    $title = "Notes | Personnal Manager";

    $h1 = "Notes";
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
    <section>
        <div>
            <span>Title</span>
            <span>Créé le : </span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, necessitatibus!</p>
        </div>
        <div>
            <span>Title</span>
            <span>Créé le : </span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, necessitatibus!</p>
        </div>
        <div>
            <span>Title</span>
            <span>Créé le : </span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, necessitatibus!</p>
        </div>
        <div>
            <span>Title</span>
            <span>Créé le : </span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, necessitatibus!</p>
        </div>
        <div>
            <span>Title</span>
            <span>Créé le : </span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, necessitatibus!</p>
        </div>
        <div>
            <span>Title</span>
            <span>Créé le : </span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, necessitatibus!</p>
        </div>
        <div>
            <span>Title</span>
            <span>Créé le : </span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, necessitatibus!</p>
        </div>
    </section>




<?php 
    require_once (__DIR__ . './components/footer.php');
?>