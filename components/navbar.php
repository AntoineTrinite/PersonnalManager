    <?php if (isset($_SESSION['user_id'])) { ?>
        <nav id="navbar">
            <ul id="navul">
                <li class="navli"><a class="navlink" href="index.php"><img id="logo" src="./public/logo.svg" alt="Personnal Manager Logo"></a></li>
                <li class="navli"><a class="navlink" href="todo.php"><i class="fa-solid fa-list"></i>Todo</a></li>
                <li class="navli"><a class="navlink" href="notes.php"><i class="fa-solid fa-note-sticky"></i>Notes</a></li>
                <li class="navli"><a class="navlink" href="files.php"><i class="fa-solid fa-file"></i>Fichiers</a></li>
                <li class="navli"><a class="navlink" href="settings.php"><i class="fa-solid fa-gears"></i>Paramètres</a></li>
            </ul>
        </nav>               
    <?php } else { ?>
        <nav id="navbar">
            <ul id="navul">
                <li class="navli"><a class="navlink" href="index.php"><img id="logo" src="./public/logo.svg" alt="Personnal Manager Logo"></a></li>
                <li class="navli"><a class="navlink" href="accountlogin.php"><i class="fa-sharp fa-solid fa-right-to-bracket"></i>Inscription<br/>connexion</a></li>
            </ul>
        </nav> 
    <?php } ?>