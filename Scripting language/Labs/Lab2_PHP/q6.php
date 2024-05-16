<?php
session_start();

// Dummy data for validation
$valid_username = 'user1';
$valid_password = 'Password123!';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set session
        $_SESSION['username'] = $username;

        // Set cookie if "Remember Me" is checked
        if ($remember) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 days
        }

        // Redirect to welcome page
        header("Location: " . $_SERVER['PHP_SELF'] . "?page=welcome");
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}

// Handle logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    setcookie('username', '', time() - 3600, "/"); // Unset cookie

    header("Location: " . $_SERVER['PHP_SELF'] . "?page=login");
    exit();
}

// Determine which page to show
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

// Check if user is logged in for welcome page
if ($page === 'welcome' && !isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: " . $_SERVER['PHP_SELF'] . "?page=login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login System</title>
</head>
<body>

<?php if ($page === 'login'): ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <label for="username">Username *</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password *</label>
        <input type="password" id="password" name="password" required><br>
        
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember Me</label><br>
        
        <input type="submit" value="Login">
    </form>
<?php elseif ($page === 'welcome'): ?>
    <?php $username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username']; ?>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=logout">Logout</a>
<?php endif; ?>

</body>
</html>
