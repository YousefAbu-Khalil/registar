<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["name"]); ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
logout.php:
<?php
session_start();
$_SESSION = array();
session_destroy();
header("location: login.php");
exit;
?>