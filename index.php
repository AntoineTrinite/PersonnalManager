<?php
    require_once (__DIR__ . './config/database.php');
    require_once (__DIR__ . './components/const.php');

    $title = "Accueil | Personnal Manager";

    $h1 = "Accueil";
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
    <?php 
        $todos = $pdo->query("SELECT * FROM todos ORDER BY id DESC");
    
    ?>

    <?php if (isset($_SESSION['user_id'])) { ?>
        <div class="main-container">
        <div class="first-part">
            <div class="menu-card todo-card-part">
                <span class="card-title">Todo</span>
                <div class="todo-all-cards">
                <?php if($todos->rowCount() < 0){ ?>
                        <div class="empty-todo-card">
                            <span>Ajoutez ici une tâche</span>
                        </div>
                    <?php } ?>


                    <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) {?>
                        <div class="todo-card">
                            <div class="todo-title-part">

                                <?php if($todo['checked'] != '0') { ?>
                                    <input type="checkbox" class="check-box" checked>
                                    <span class="todo-name checked"><?php echo $todo['title'] ?></span>
                                <?php } else { ?>
                                    <input type="checkbox" class="check-box">
                                    <span class="todo-name"><?php echo $todo['title'] ?></span>
                                <?php } ?>
                            </div>
                            
                            <div class="todo-right-side">
                                <button id="<?php echo $todo['id'] ?>" class="todo-mod-btn"><i class="fa-solid fa-pen"></i></button>
                                <button class="todo-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                            </div>
                        </div>

                    <?php }?>
                </div>
            </div>




            <div class="menu-divider">
                <div class="menu-card add-file-card"><i class="fa-solid fa-cloud-arrow-up"></i>Ajouter un fichier</div>
                <div class="menu-card hello-card">
                <div class="user-div">
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <span class="user-presentation">Bonjour,</span>
                        <span class="user-presentation"><?php echo $_SESSION['user_prenom'] . ' ' . $_SESSION['user_nom']; ?></span>
                        <span class="user-presentation">Comment est votre journée ?</span>
                        
                    <?php } ?> 
                </div>    
                
                
                
                </div>
            </div>
        </div>


        <?php 
        $notes = $pdo->query("SELECT * FROM notes ORDER BY id DESC LIMIT 2");
        ?>
        <div class="second-part">
            <div class="menu-card notes-cards">
                <span class="card-title">Dernières notes</span>
                <div class="notes-divider">
                    <?php while($note = $notes->fetch(PDO::FETCH_ASSOC)) {?>
                            <div class="note-card-page note-card-overflow">
                                <div class="note-header">
                                    <div class="note-left-side">
                                        <span class="note-title"><?php echo $note['title'] ?></span>
                                        <span class="note-date">Le 23/09/2023</span>
                                    </div>
                                    <div class="note-right-side">
                                        <button id="<?php echo $todo['id'] ?>" class="note-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                                    </div>
                                </div>
                                <p class="note-text"><?php echo $note['text'] ?></p>
                            </div>
                    <?php }?>
                </div>
                
            </div>



            <div class="menu-card pomodoro-card">
                <span class="card-title">Pomodoro</span>
                <div>
                    <div class="time-mod-pomodoro">
                        <button class="time-mod-btn minus-btn">-</button>
                        <span class="time-mod-timer">25:00</span>
                        <button class="time-mod-btn plus-btn">+</button>
                    </div>
                    <button class="time-mod-start-btn start-btn">start</button>
                </div>
            </div>
        </div>
    </div>              
    <?php } else { ?>
        <div class="main-container">
        <div class="first-part">
            <div class="menu-card">
                <h2>Merci de vous connecter</h2>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <audio id="notificationSound" src="./public/pomotimerendsound.mp3" preload="auto"></audio>

<?php 
    require_once (__DIR__ . './components/footer.php');
?>