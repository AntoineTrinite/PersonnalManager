<?php 
require '../config/database.php';

if(isset($_POST['title']) && isset($_POST['text'])){
    $title = $_POST['title'];
    $text = $_POST['text'];

    if(empty($title) || empty($text)){
        header("Location: ../notes.php?mess=error");
    } else {
        $stmt = $pdo->prepare("INSERT INTO notes (title, text) VALUES (?, ?)");
        $res = $stmt->execute([$title, $text]);

        if($res){
            header("Location: ../notes.php?mess=success");
        } else {
            header("Location: ../notes.php?mess=error");
        }
        $pdo = null;
        exit();
    }
} else {
    header("Location: ../notes.php?mess=error");
}
?>
