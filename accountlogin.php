<?php
     require_once (__DIR__ . './config/database.php');
    require_once (__DIR__ . './components/const.php');

    if (isset($_POST['submit_register'])) {
        if($_POST) {
            $sql = "INSERT INTO USER (nom, prenom, mail, password) VALUES (?,?,?,?)";
            $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
            $rows = $pdo->prepare($sql)->execute([$_POST['nom'],$_POST['prenom'],$_POST['mail'], $password]);
            if($rows > 0) {
                echo "Compte créé, merci de vous connecter";
            } else {
                echo "Erreur";
            }}
    } elseif (isset($_POST['submit_connexion'])) {
        $stm = $pdo->query("SELECT id, nom, prenom, password FROM user WHERE mail='" . $_POST['mail'] . "'");
        $user = $stm->fetch(PDO::FETCH_ASSOC);

        if(password_verify($_POST['password'], $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nom'] = $user['nom'];
            $_SESSION['user_prenom'] = $user['prenom'];
            header("Location:./index.php");
            exit();
        }
    }

    $title = "Compte | Personnal Manager";

    $h1 = "Compte";
?>

<?php 
    require_once (__DIR__ . './components/header.php');
?>
    <div id="header">
            <h1><?php echo (isset($h1)) ? $h1 : "Accueil"; ?></h1>
            <button id="logout-btn">Déconnexion</button>
    </div>
    
    <div class="main-form-container">

        <div class="form-containers">
            <form class="forms" enctype="multipart/form-data" action="" method="post">
                <span class="form-title">Se connecter</span>
                <div class="form-group">
                    <label for="mail">Adresse mail</label>
                    <input class="input-log" type="text" name="mail" class="mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="input-log" type="password" name="password" class="password" required>
                </div>
                
                <div class="validate-btn-zone">
                    <button class="submit-btn" name="submit_connexion" type="submit">Valider</button>
                </div>
            </form>
        </div>

        <div class="form-containers">
            <form class="forms" enctype="multipart/form-data" action="" method="post">
                <span class="form-title">s'inscrire</span>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input class="input-log" type="text" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input class="input-log" type="text" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="mail">Adresse mail</label>
                    <input class="input-log" type="text" name="mail" class="mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="input-log" type="password" name="password" class="password" required>
                </div>
                
                <div class="validate-btn-zone">
                    <button class="submit-btn" name="submit_register" type="submit">Valider</button>
                </div>
            </form>
        </div>
    </div>

<?php 
    require_once (__DIR__ . './components/footer.php');
?>