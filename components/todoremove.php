<?php 
    require '../config/database.php';
    if(isset($_POST['id'])){
        

        $id = $_POST['id'];

        if(empty($id)){
            echo 0;
        } else {
            $stmt = $pdo->prepare("DELETE FROM todos WHERE id=?");
            $res = $stmt->execute([$id]);

            if($res){
                echo 1;
            } else {
                echo 0;
            }
            $pdo = null;
            exit();
        }
    } else {
        header("Location: ../todo.php?mess=error");
    }
    