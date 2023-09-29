<?php
    require_once (__DIR__ . './components/const.php');

    $title = "Accueil | Personnal Manager";

    $h1 = "Accueil";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>
    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Accueil"; ?></h1>
            <button id="logout-btn">Déconnexion</button>
    </div>
    
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
                <div class="menu-card calendar-card">
                    <span class="card-title">Calendrier</span>
                
                
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

<?php 
    require_once (__DIR__ . './components/footer.php');
?>