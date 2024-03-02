<?php
include("connection.php");
$uid = $_GET['uid'];
$sql = "SELECT fullname, email, phone, address, photo, bio FROM tbl_users WHERE id=$uid";
$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<!-- after clicking on submit / update now we will redirect to update.php  -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-box">
        <div class="form-box__header">
            <h1 class="form-box__title">Update user</h1>
        </div>
        <?php while ($row = mysqli_fetch_assoc($res)): ?>
            <form action="update.php" method="POST" enctype="multipart/form-data" name="update" novalidate>
                <!-- after clicking submit the page will redirect to update.php -->
                <div class="field-group">
                    <label for="fullname">Full Name<span class="mendatory">*</span></label>
                    <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="email">E-mail<span class="mendatory">*</span></label>
                    <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo">
                    <img src="public/<?php echo $row['photo']; ?>" width="90" height="90">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="bio">Bio<span class="mendatory">*</span></label>
                    <textarea name="bio" id="bio"><?php echo $row['bio']; ?></textarea>
                    <span class="error"></span>
                </div>
                <!-- <div class="field-group"> -->
                <!-- only one content available so no wrap in div  -->
                <button type="submit" name="submit" value="submit">Update now</button>
            </form>
        <?php endwhile; ?>
        <!-- </div> -->
    <!-- <script src="script.js"></script> -->
    </div>
</body>
</html>