<?php
require 'config.php';

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    
    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT ID FROM phone WHERE Phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo json_encode(['unique' => false]);
    } else {
        echo json_encode(['unique' => true]);
    }

    $stmt->close();
    $conn->close();
}
?>
