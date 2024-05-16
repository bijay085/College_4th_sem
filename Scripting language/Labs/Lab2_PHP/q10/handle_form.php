<?php
echo "<h2>Form Data via \$_GET</h2>";
if (!empty($_GET)) {
    echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
}

echo "<h2>Form Data via \$_POST</h2>";
if (!empty($_POST)) {
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
}

echo "<h2>Form Data via \$_REQUEST</h2>";
if (!empty($_REQUEST)) {
    if (isset($_REQUEST['name'])) {
        echo "Name (from \$_REQUEST): " . htmlspecialchars($_REQUEST['name']) . "<br>";
    }
    if (isset($_REQUEST['email'])) {
        echo "Email (from \$_REQUEST): " . htmlspecialchars($_REQUEST['email']) . "<br>";
    }
}
