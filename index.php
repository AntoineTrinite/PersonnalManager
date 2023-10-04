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
    

    <?php if (isset($_SESSION['user_id'])) { ?>
        <div class="main-container">
        <div class="first-part">
            <div class="menu-card todo-card-part">
                <span class="card-title">Todo</span>
                <div class="todo-all-cards">
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
        <div class="second-part">
            <div class="menu-card notes-cards">
                <span class="card-title">Dernières notes</span>

                <div class="card-displayer">
                    <div class="note-card">
                    <div class="note-header">
                        <div class="note-left-side">
                            <span class="note-title">Faire une liste de course</span>
                            <span class="note-date">Le 23/09/2023</span>
                        </div>
                        <div class="note-right-side">
                            <button class="note-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                        </div>
                    </div>
                    <p class="note-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, cum.</p>
                </div>


                <div class="note-card">
                    <div class="note-header">
                        <div class="note-left-side">
                            <span class="note-title">Penser aux chiens</span>
                            <span class="note-date">Le 21/09/2023</span>
                        </div>
                        <div class="note-right-side">
                            <button class="note-del-btn"><i class="fa-solid fa-delete-left"></i></button>
                        </div>
                    </div>
                    <p class="note-text">Lorem ipsum, dolor sit amet consectetur adipisicing Lorem ipsum, dolor sit amet consectetur adipisicingelit. Voluptatem, cum.</p>
                </div>
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