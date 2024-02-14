<?php
session_start();
include("connection.php");
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit();
// }
$sql = 'SELECT id, username, photo, email, program FROM tbl_users';
$res = mysqli_query($conn, $sql);
?>
<!-- this is file also for R from crud  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list || index || homepage </title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .tbl_users-box {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 80%;
        margin: auto;
        overflow-x: auto;
    }

    h1 {
        color: #3498db;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        word-break: break-all;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: auto;
    }

    .msg {
        color: #27ae60;
        font-weight: bold;
    }

    a {
        text-decoration: none;
        color: #3498db;
        margin-right: 10px;
    }

    a:hover {
        color: #2980b9;
    }
</style>

<body>
    <div class="tbl_users-box">
        <h1>All users of tbl users are :</h1>
        <?php echo (isset($_SESSION['msg'])) ? "<p class='msg'>" . $_SESSION['msg'] . "</p>" : ""; ?>
        <?php
        if ($res):
            ?>
            <table border="1" cellpadding="6" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Photo</th>
                        <th>Email</th>
                        <th>Program</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($res)):
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['username']; ?>
                            </td>
                            <td><img src="public/<?php echo $row['photo']; ?>" width="300" height="100" alt="Image here"></td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['program']; ?>
                            </td>
                            <td>
                                <a href="edit.php?uid=<?php echo $row['id']; ?>" title="Edit">Edit</a>
                                <a href="delete.php?uid=<?php echo $row['id']; ?>" title="Delete">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    endwhile;
                    ?>
                </tbody>
            </table>
            <?php
        else:
            ?>
            <p>User data not found !</p>
        <?php endif; ?>
    </div>
    <?php session_destroy(); ?>
</body>
</html>