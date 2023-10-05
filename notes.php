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


    <?php 
        $notes = $pdo->query("SELECT * FROM notes ORDER BY id DESC");
    
    ?>


    <div class="main-container">
        <div class="menu-card notes-cards-page">

            <div class="card-displayer-page">

                <div class="note-card-page-input">
                
                    <button class="add-note-btn">+</button>
                   
                </div>


                <?php while($note = $notes->fetch(PDO::FETCH_ASSOC)) {?>
                        <div class="note-card-page">
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
    </div>




<?php 
    require_once (__DIR__ . './components/footer.php');
?>