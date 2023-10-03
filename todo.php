<?php
    require_once (__DIR__ . './config/database.php');
    require_once (__DIR__ . './components/const.php');

    $title = "Todo | Personnal Manager";

    $h1 = "Todo list";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>

    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Todo list"; ?></h1>
            <?php if (isset($_SESSION['user_id'])) { ?>
                <button id="logout-btn"><a class="logout-btn-href" href="./components/logout.php">Déconnexion</a></button>
            <?php } ?>
    </div>
    <section>
        <article>
            <input type="text" placeholder="Nouvelle tâche"/>
            <button>Ajouter</button>
        </article>

        <article>
            <div>
                <div>
                    <span>Titre de la tâche</span>
                    <span>Créé le : </span>
                </div>
                <div>
                    <button><i class="fa-solid fa-pen"></i></button>
                    <button><i class="fa-solid fa-delete-left"></i></button>
                </div>
            </div>

            <div>
                <div>
                    <span>Titre de la tâche</span>
                    <span>Créé le : </span>
                </div>
                <div>
                    <button><i class="fa-solid fa-pen"></i></button>
                    <button><i class="fa-solid fa-delete-left"></i></button>
                </div>
            </div>

            <div>
                <div>
                    <span>Titre de la tâche</span>
                    <span>Créé le : </span>
                </div>
                <div>
                    <button><i class="fa-solid fa-pen"></i></button>
                    <button><i class="fa-solid fa-delete-left"></i></button>
                </div>
            </div>
        </article>
    </section>


<?php 
    require_once (__DIR__ . './components/footer.php');
?>