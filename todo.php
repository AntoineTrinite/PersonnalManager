<?php
    require_once (__DIR__ . './components/const.php');

    $title = "Todo | Personnal Manager";

    $h1 = "Todo list";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>

    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Accueil"; ?></h1>
            <button id="logout-btn">Déconnexion</button>
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