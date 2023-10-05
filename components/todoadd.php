<?php 
    require '../config/database.php';
    if(isset($_POST['title'])){
        

        $title = $_POST['title'];

        if(empty($title)){
            header("Location: ../todo.php?mess=error");
        } else {
            $stmt = $pdo->prepare("INSERT INTO todos(title) VALUE(?)");
            $res = $stmt->execute([$title]);

            if($res){
                header("Location: ../todo.php?mess=success");
            } else {
                header("Location: ../todo.php");
            }
            $pdo = null;
            exit();
        }
    } else {
        header("Location: ../todo.php?mess=error");
    }
    