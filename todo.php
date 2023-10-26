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


    <?php 
        $todos = $pdo->query("SELECT * FROM todos ORDER BY id DESC");
    
    ?>


    <div class="main-container">
        <div class="menu-card todo-card-part todo-page-part">
                <div class="todo-all-cards">

                    <!-- todo input -->
                    <form class="input-card" action="./components/todoadd.php" method="POST" autocomplete="off">
                        <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
                            <input type="text" name="title" id="todo-input" class="error-message" placeholder="Ajoutez une tâche avant de valider">
                            <button type="submit" id="todo-input-btn" class="error-message">Ajouter</button>
                        <?php } else { ?>
                            <input type="text" name="title" id="todo-input" placeholder="Ajouter une tâche...">
                            <button type="submit" id="todo-input-btn">Ajouter</button>
                        <?php } ?>
                    </form>
                        


                    <!-- todo list -->
                    <?php if($todos->rowCount() < 0){ ?>
                        <div class="empty-todo-card">
                            <span>Ajoutez ici une tâche</span>
                        </div>
                    <?php } ?>


                    <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) {?>
                        <div class="todo-card">
                            <div class="todo-title-part">

                                <?php if($todo['checked'] != '0') { ?>
                                    <input type="checkbox" data-todo-id="<?php echo $todo['id'] ?>" class="check-box" checked>
                                    <span class="todo-name checked"><?php echo $todo['title'] ?></span>
                                <?php } else { ?>
                                    <input type="checkbox" data-todo-id="<?php echo $todo['id'] ?>" class="check-box">
                                    <span class="todo-name"><?php echo $todo['title'] ?></span>
                                <?php } ?>
                            </div>
                            
                            <div class="todo-right-side">
                                <span id="<?php echo $todo['id'] ?>"></span>
                                <button class="todo-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                            </div>
                        </div>

                    <?php }?>
                </div>
        </div>
    </div>


<?php 
    require_once (__DIR__ . './components/footer.php');
?>