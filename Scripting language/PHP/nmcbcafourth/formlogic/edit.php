<?php
session_start();
if (!isset($_GET['uid']))
    header("location: /formlogic/select.php");

include("connection.php");
$uid = $_GET['uid'];
// if(!$uid) = 
// $sql = "SELECT * FROM tbl_users";
$select_sql = "SELECT fullname, email, phone, address, photo, bio FROM tbl_users WHERE id=$uid";
$select_res = mysqli_query($conn, $select_sql); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <div class="form-box">
        <h1 class="form-box__title">Update User</h1>
        <?php echo isset($_SESSION['msg']) ? "<p class='message'>" . $_SESSION['msg'] . "</p>" : ""; ?>
        <?php while ($row = mysqli_fetch_assoc($select_res)):
            if (isset($_SESSION['remove_file']) && ($_SESSION['remove_file'] != '')) {
                unlink('public/' . $_SESSION['remove_file']);
                $_SESSION['remove_file'] = '';
            } ?>
            <form action="update.php" method="POST" name="update" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="uid" value="<?php echo $uid; ?>">
                <input type="hidden" name="photo_old" value="<?php echo $row['photo']; ?>">
                <div class="field-group">
                    <label for="fullname">Full Name<span class="mendatory">*</span></label>
                    <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="email">E-Mail<span class="mendatory">*</span></label>
                    <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>">
                    <span class="error"></span>
                </div>
                <div class="field-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>">
                </div>
                <div class="field-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" value="<?php echo $row['photo']; ?>">
                    <img src="public/<?php echo $row['photo']; ?>" alt="" width="90" height="90">
                </div>
                <div class="field-group">
                    <label for="bio">Bio<span class="mendatory">*</span></label>
                    <textarea name="bio" id="bio"><?php echo $row['bio']; ?></textarea>
                    <span class="error"></span>
                </div>
                <button type="submit" name="submit">Update Now</button>
            </form>
        <?php endwhile; ?>
    </div>

    <!-- <script src="script.js" type="text/javascript"></script> -->
    <?php session_destroy(); ?>
</body>

</html>