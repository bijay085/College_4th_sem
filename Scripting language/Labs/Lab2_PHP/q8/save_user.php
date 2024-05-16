<?php
require 'config.php';

function validate_file($file) {
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $max_size = 2 * 1024 * 1024; // 2MB
    $file_type = mime_content_type($file['tmp_name']);
    $file_size = $file['size'];
    
    if (!in_array($file_type, $allowed_types)) {
        return "Invalid file type. Only JPEG, PNG, and GIF types are allowed.";
    }
    if ($file_size > $max_size) {
        return "File size must be less than or equal to 2MB.";
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID = $_POST['ID'];
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];
    $created_by = $_POST['created_by'];
    $updated_by = $created_by; // For simplicity, updated_by is set to created_by initially

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $file_validation_result = validate_file($_FILES['image']);
        if ($file_validation_result !== true) {
            die($file_validation_result);
        }
        $image_name = basename($_FILES['image']['name']);
        $image_path = "uploads/" . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    } else {
        $image_path = $_POST['existing_image'];
    }

    if (empty($ID)) {
        // Insert new record
        $stmt = $conn->prepare("INSERT INTO users (Name, Rank, Status, Image, Created_by, Updated_by) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $rank, $status, $image_path, $created_by, $updated_by);
    } else {
        // Update existing record
        $stmt = $conn->prepare("UPDATE users SET Name = ?, Rank = ?, Status = ?, Image = ?, Updated_by = ? WHERE ID = ?");
        $stmt->bind_param("sssssi", $name, $rank, $status, $image_path, $updated_by, $ID);
    }

    if ($stmt->execute()) {
        echo "Record saved successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
    header("Location: list_users.php");
    exit();
}
?>
