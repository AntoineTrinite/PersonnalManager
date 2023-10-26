<?php
// Assurez-vous d'avoir inclus votre configuration de base de données
require_once(__DIR__ . '/config/database.php');

// Vérifiez si l'ID de la tâche et l'état "checked" ont été transmis via POST
if (isset($_POST['id']) && isset($_POST['checked'])) {
    $todoId = $_POST['id'];
    $isChecked = $_POST['checked'] ? 1 : 0;

    // Préparez une requête SQL pour mettre à jour l'état "checked" de la tâche
    $stmt = $pdo->prepare("UPDATE todos SET checked = :checked WHERE id = :id");
    $stmt->execute(['checked' => $isChecked, 'id' => $todoId]);

    if ($stmt->execute(['checked' => $isChecked, 'id' => $todoId])) {
        echo "Mise à jour réussie";
    } else {
        echo "Erreur de mise à jour : " . $stmt->errorInfo();
    }
    


    if ($stmt->rowCount() > 0) {
        // La mise à jour a réussi
        echo json_encode(['success' => true]);
    } else {
        // La mise à jour a échoué
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
