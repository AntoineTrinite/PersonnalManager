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
    <div class="main-container">
        <div class="menu-card todo-card-part">
                <div class="todo-all-cards">
                    <div class="input-card">
                            <input type="text" id="todo-input" placeholder="Ajouter une tâche...">
                        
                        <button id="todo-input-btn">Ajouter</button>
                    </div>
                    <div class="todo-card">
                        <div class="todo-title-part">
                            <input type="checkbox" name="" id="">
                            <span class="todo-name">Manger la vaisselle</span>
                        </div>
                        
                        <span class="todo-date">Créé le : 28/09/2023</span>
                        <div class="todo-right-side">
                            <button class="todo-mod-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="todo-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                        </div>
                    </div>
                    <div class="todo-card">
                    <div class="todo-title-part">
                        <input type="checkbox" name="" id="">
                        <span class="todo-name">séparer le chat</span>
                    </div>
                        
                        <span class="todo-date">Créé le : 28/09/2023</span>
                        <div class="todo-right-side">
                            <button class="todo-mod-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="todo-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                        </div>
                    </div>
                    <div class="todo-card">
                    <div class="todo-title-part">
                        <input type="checkbox" name="" id="">
                        <span class="todo-name">Arroser le lit</span>
                    </div>
                        
                        <span class="todo-date">Créé le : 28/09/2023</span>
                        <div class="todo-right-side">
                            <button class="todo-mod-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="todo-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                        </div>
                    </div>
                    <div class="todo-card">
                    <div class="todo-title-part">
                        <input type="checkbox" name="" id="">
                        <span class="todo-name">Courrir sous la douche</span>
                    </div>
                        
                        <span class="todo-date">Créé le : 28/09/2023</span>
                        <div class="todo-right-side">
                            <button class="todo-mod-btn"><i class="fa-solid fa-pen"></i></button>
                            <button class="todo-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                        </div>
                    </div>
                </div>
        </div>
    </div>


<?php 
    require_once (__DIR__ . './components/footer.php');
?>