<?php
require 'config.php';

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>List of Users</title>
</head>
<body>
<h2>List of Users</h2>
<a href="form.html">Add New User</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Rank</th>
        <th>Status</th>
        <th>Image</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo htmlspecialchars($row['ID']); ?></td>
        <td><?php echo htmlspecialchars($row['Name']); ?></td>
        <td><?php echo htmlspecialchars($row['Rank']); ?></td>
        <td><?php echo htmlspecialchars($row['Status']); ?></td>
        <td><img src="<?php echo htmlspecialchars($row['Image']); ?>" width="50" height="50"></td>
        <td><?php echo htmlspecialchars($row['Created_by']); ?></td>
        <td><?php echo htmlspecialchars($row['Updated_by']); ?></td>
        <td><?php echo htmlspecialchars($row['Created_at']); ?></td>
        <td><?php echo htmlspecialchars($row['Updated_at']); ?></td>
        <td>
            <a href="edit_user.php?id=<?php echo $row['ID']; ?>">Edit</a> |
            <a href="delete_user.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
