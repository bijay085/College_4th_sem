<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM users WHERE ID = $id");
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit User</title>
</head>
<body>
<h2>Edit User</h2>
<form action="save_user.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="ID" value="<?php echo $user['ID']; ?>">
    <input type="hidden" name="existing_image" value="<?php echo $user['Image']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $user['Name']; ?>" required><br><br>
    <label for="rank">Rank:</label>
    <input type="text" id="rank" name="rank" value="<?php echo $user['Rank']; ?>" required><br><br>
    <label for="status">Status:</label>
    <select id="status" name="status" required>
        <option value="active" <?php if ($user['Status'] == 'active') echo 'selected'; ?>>Active</option>
        <option value="inactive" <?php if ($user['Status'] == 'inactive') echo 'selected'; ?>>Inactive</option>
    </select><br><br>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*"><br><br>
    <label for="created_by">Created by:</label>
    <input type="text" id="created_by" name="created_by" value="<?php echo $user['Created_by']; ?>" required><br><br>
    <input type="submit" value="Save">
</form>
</body>
</html>
